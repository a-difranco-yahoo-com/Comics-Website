<?php

class Comic_Oracle
{
   protected $Connection;

   public function __construct()
   {
      $this->Connect();
   }

   public function Connect()
   {
     $this->Connection = oci_pconnect('Comics', 'piCK6mFTyW2iviB0ZI50', 'ADF1');

     if (! $this->Connection) {
           echo("ERROR : Connecting to oracle \n");
          exit(1);
      }
   }


   public function Run_Match($Level) {
      $PLSQL = " BEGIN"
             . "    COMICS.Find_Matches($Level);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Get_Match_Pull_List() {
      $SQL = " SELECT   Match_Id, New_Title, New_Issue, Pull_Title, Pull_Issue"
             . " FROM     V_MATCH_PULL_LIST"
             . " ORDER BY New_Title";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }
 
   public function Commit_Match_To_Pull_List($Id) {
      $PLSQL = " BEGIN"
             . "    COMICS.Update_Matched_Pull_List($Id);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Log_Post_Details($type, $array) {
      $SQL = " DELETE FROM POST_DETAILS WHERE Post_Date < SysDate - 1";
      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);

      $SQL = " INSERT INTO POST_DETAILS (Post_Type, Post_Date, Post_Key, Post_Value) "
           . " VALUES (:type, sysdate, :key, :value)";
      $stmt = oci_parse($this->Connection, $SQL);

      foreach($array as $key => $value) {
         oci_bind_by_name($stmt, ":type",   $type);
         oci_bind_by_name($stmt, ":key",    $key);
         oci_bind_by_name($stmt, ":value",  $value);
         oci_execute($stmt);
      }
   }
 
   public function Get_Match_Wish_List() {
      $SQL = " SELECT   Match_Id, "
           . "          New_Title,  New_Volume,  New_Issue, "
           . "          Wish_Title, Wish_Volume, Wish_Issue "
           . " FROM     V_MATCH_WISH_LIST"
           . " ORDER BY New_Title,  New_Volume,  New_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
       oci_execute($stmt);
       oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
       return $rows;
   }

   public function Commit_Match_To_Wish_List($MatchId) {
      $PLSQL = " BEGIN"
             . "    COMICS.Update_Matched_Wish_List($MatchId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Get_Match_Existing() {
      $SQL = " SELECT   ComicId, Title,  Volume,  Issue "
           . " FROM     V_EXISTING_NEW_DIGITAL_COMIC"
           . " ORDER BY Title,  Volume,  Issue";

      $stmt = oci_parse($this->Connection, $SQL);
       oci_execute($stmt);
       oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
       return $rows;
   }

   public function Remove_Existing_Comic($ComicId) {
      $PLSQL = " BEGIN"
             . "    COMICS.Remove_New_Digital_Comic($ComicId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Get_New_Comics() {
      $SQL = " SELECT   ComicId, Title,  Volume,  Year, Issue, SubIssue, Series_Run"
           . " FROM     NEW_DIGITAL_COMIC"
           . " ORDER BY Title,  Volume, Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Clear_New_Digital_Comic($ComicId) {
      $PLSQL = " BEGIN"
             . "    COMICS.Process_New_Digital_Comic($ComicId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Clear_Pull_List($ComicId) {
      $PLSQL = " BEGIN"
             . "    COMICS.Process_Pull_List($ComicId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Delete_Title($TitleId) {
      $PLSQL = " BEGIN"
             . "    COMICS.Delete_Title($TitleId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_execute($stmt);
   }

   public function Get_Pull_List() {
      $SQL = " SELECT   ComicId, Title,  Volume,  Issue, Full_Name, "
           . "          to_char(Release_Date, 'YYYY-MM-DD') Release_Date"
           . " FROM     PULL_LIST"
           . " ORDER BY Release_Date Desc, Title,  Volume, Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Wish_List() {
      $SQL = " SELECT   Title,  Volume,  Start_Issue, End_Issue, SubIssue, Series_Run"
           . " FROM     V_ALL_COMIC_RUN"
           . " WHERE    Comic_Type = 'WISHLIST'"
           . " ORDER BY Title,  Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Run_Gaps() {
      $SQL = " SELECT   Title_Id, Title,  Volume,  Start_Issue, End_Issue, SubIssue, Series_Run"
           . " FROM     V_ALL_COMIC_MULTI_RUN"
           . " ORDER BY Title,  Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Run_Splits() {
      $SQL = " SELECT   Title_Id, Title,  Volume,  Start_Issue, End_Issue, Series_Run"
           . " FROM     V_SPLIT_SERIES_RUN"
           . " ORDER BY Title,  Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Run_Diffs() {
      $SQL = " SELECT   ComicDB_Title_Id, Digital_Title_Id, Title,  Volume, "
           . " ComicDB_Run, ComicDB_Series_Run, Digital_Run, Digital_Series_Run"
           . " FROM     V_DIFF_SERIES_RUN"
           . " ORDER BY Title,  Volume, ComicDB_Run, Digital_Run";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Add_Wish_List($TitleId) {
      $PLSQL = " BEGIN"
             . "  COMICS.Add_Wish_List(:TitleId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":TitleId",  $TitleId);
      oci_execute($stmt);
   }

   public function Add_Series_Run($ComicDBTitleId, $DigitalTitleId) {
      $PLSQL = " BEGIN"
             . "  COMICS.Add_ComicDB_Series_Run(:ComicDBTitleId, :DigitalTitleId);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":ComicDBTitleId",  $ComicDBTitleId);
      oci_bind_by_name($stmt, ":DigitalTitleId",  $DigitalTitleId);
      oci_execute($stmt);
   }

   public function Add_Complete_Run($TitleId, $StartIssue, $EndIssue) {
      $PLSQL = " BEGIN"
             . "  COMICS.Add_Complete_Run(:TitleId, :StartIssue, :EndIssue);"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":TitleId",     $TitleId);
      oci_bind_by_name($stmt, ":StartIssue",  $StartIssue);
      oci_bind_by_name($stmt, ":EndIssue",    $EndIssue);
      oci_execute($stmt);
   }

   public function Get_Run_Details($Search) {
      $SQL = " SELECT   Title,  Volume,  Start_Issue, End_Issue, SubIssue, Series_Run"
           . " FROM     V_ALL_COMIC_RUN"
           . " WHERE    upper(Title) Like upper('%$Search%')"
           . " AND      Comic_Type = 'DIGITAL'"
           . " ORDER BY Title,  Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Wish_Details($Search) {
      $SQL = " SELECT   Title,  Volume,  Start_Issue, End_Issue, SubIssue, Series_Run"
           . " FROM     V_ALL_COMIC_RUN"
           . " WHERE    upper(Title) Like upper('%$Search%')"
           . " AND      Comic_Type = 'WISHLIST'"
           . " ORDER BY Title,  Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Archive_Difference_Summary() {
      $SQL = " SELECT   Title, count(*) Issues "
           . " FROM     V_DIFFERING_ARCHIVE_COMIC_SUMMARY"
           . " GROUP BY Title"
           . " ORDER BY Count(*) Desc, Title";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_Archive_Detail($Title, $StartYear, $EndYear) {
      $SQL = " SELECT   Title_Id, Comic_Type, Title,  Volume,  Start_Issue, End_Issue, Series_Run"
           . " FROM     V_ALL_COMIC_RUN"
           . " WHERE    upper(Title) Like '%' || upper(:Title) || '%'"
           . " AND      Volume BETWEEN :StartYear AND :EndYear"
           . " AND      Comic_Type IN ('ARCHIVE', 'DIGITAL')"
           . " ORDER BY Title, Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_bind_by_name($stmt, ":Title",      $Title);
      oci_bind_by_name($stmt, ":StartYear",  $StartYear);
      oci_bind_by_name($stmt, ":EndYear",    $EndYear);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_ComicDB_Summary() {
      $SQL = " SELECT   Title, Volume, count(*) Issues "
           . " FROM     V_MISSING_FROM_COMICDB"
           . " GROUP BY Title, Volume"
           . " ORDER BY Count(*) Desc, Title, Volume";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_ComicDB_Compare($Search) {
      $SQL = " SELECT   Title_Id, Comic_Type, Title, Volume, Start_Issue, End_Issue"
           . " FROM     V_ALL_COMIC_RUN "
           . " WHERE    Comic_Type IN ('COMICDB', 'DIGITAL')"
           . " AND      upper(Title) Like '%' || upper(:Title) || '%'"
           . " AND      Volume BETWEEN :StartYear AND :EndYear"
           . " ORDER BY Title, Volume, Start_Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_bind_by_name($stmt, ":Title",      $Search["Title"]);
      oci_bind_by_name($stmt, ":StartYear",  $Search["StartYear"]);
      oci_bind_by_name($stmt, ":EndYear",    $Search["EndYear"]);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Get_ComicDB_Trades($TitleId) {
      $SQL = " SELECT   RowIdToChar(CC.RowId) RowId_CB, CT.Title_Id, CC.Title, CC.Volume, CC.Issue"
           . " FROM     COMIC_TITLE   CT "
           . "   JOIN   COMICDB_COMIC CC ON CC.Title               = CT.Title"
           . "                          AND CC.Volume              = CT.Volume"
           . "                          AND nvl(CC.Series_Run, -1) = nvl(CT.Series_Run, -1)"
           . " WHERE    CT.Title_Id = :TitleId"
           . " ORDER BY Title, Volume, Issue";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_bind_by_name($stmt, ":TitleId",      $TitleId);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
   }

   public function Match_ComicDB($Search) {
      $PLSQL = " BEGIN"
             . "   COMICS.Find_ComicDB_Matches(:TitleId, :StartYear, :EndYear);"
             . "   COMMIT;"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":TitleId",   $Search["Title"]);
      oci_bind_by_name($stmt, ":StartYear", $Search["StartYear"]);
      oci_bind_by_name($stmt, ":EndYear",   $Search["EndYear"]);
      oci_execute($stmt);
   }

   public function Match_To_ComicDB($MatchId) {
      $PLSQL = " BEGIN"
             . "   COMICS.Add_ComicDB_Links(:MatchId);"
             . "   COMMIT;"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":MatchId",   $MatchId);
      oci_execute($stmt);
   }

   public function Get_Match_ComicDB() {
      $SQL = " SELECT   Match_Id, ComicDB_Title,  ComicDB_Volume,  Digital_Title, Digital_Volume, "
           . "          Sim, ComicDB_Comics, Digital_Comics, Matches, SubMatches, Matched"
           . " FROM     V_MATCH_COMICDB"
           . " ORDER BY ComicDB_Title,  ComicDB_Volume,  Digital_Title, Digital_Volume";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
    }

   public function SplitTrade($RowId, $StartIssue, $EndIssue) {
      $PLSQL = " BEGIN"
             . "   COMICS.Split_Trade(:RowId, :StartIssue, :EndIssue);"
             . "   COMMIT;"
             . " END;";

      $stmt = oci_parse($this->Connection, $PLSQL);
      oci_bind_by_name($stmt, ":RowId",      $RowId);
      oci_bind_by_name($stmt, ":StartIssue", $StartIssue);
      oci_bind_by_name($stmt, ":EndIssue",   $EndIssue);
      oci_execute($stmt);
   }

   public function Get_List_Hierarchy() {
      $SQL = " SELECT First_List, Second_List, Level"
           . " FROM   LIST_HIERARCHY"
           . " CONNECT BY PRIOR Second_List = First_List AND Second_List != First_List"
           . " START WITH First_List = Second_List"
           . " ORDER BY Level";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
    }

   public function Get_List_Summary() {
      $SQL = " SELECT List, Count(*) Comics, count(Distinct Title) Titles"
           . " FROM   MERGED_READING_ORDER"
           . " GROUP BY List"
           . " ORDER BY Count(*)";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
    }

   public function Get_List_Title_Summary() {
      $SQL = " SELECT List, Title, min(Issue) Min_Issue, max(Issue) Max_Issue"
           . " FROM   MERGED_READING_ORDER"
           . " GROUP BY List, Title"
           . " ORDER BY List, Title";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
    }

   public function Get_List_Detail() {
      $SQL = " SELECT List, Sequence_Number, Title, Issue"
           . " FROM   MERGED_READING_ORDER"
           . " ORDER BY List, Sequence_Number";

      $stmt = oci_parse($this->Connection, $SQL);
      oci_execute($stmt);
      oci_fetch_all($stmt, $rows, 0, 500, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS + OCI_ASSOC);
      return $rows;
    }

}
?>