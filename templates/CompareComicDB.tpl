<html>
 <head>
  <link rel="stylesheet" type="text/css" href="css/comics.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  
 </head>
 <body>
  {include file="TopMenu.tpl"}
  <div id="main" align="center">
   <form name="data" action="MatchComicDB.php" method="post">
   {include file="ComicDBMenu.tpl"}

   <label for="SearchTitle">Search Title Text:</label>
   <input class="Search" type="text" id="SearchTitle" name="SearchTitle"     value="{$title}">
   <label for="SearchTitle">Start Year</label>
   <input class="Search" type="number" id="SearchTitle" name="SearchStartYear" value={$startYear}>
   <label for="SearchTitle">End Year</label>
   <input class="Search" type="number" id="SearchTitle" name="SearchEndYear"   value={$endYear}>
   <p>

   <table class="form" border-width="1" border="1" cellspacing="1" cellpadding="2">
   <tr bgcolor="#e6eef1">
      <th>SOURCE</th>
      <th>TITLE</th>
      <th>VOLUME</th>
      <th>START_ISSUE</th>
      <th>END_ISSUE</th>
      <th>ACTION</th>
    </tr>
	
    {foreach $runs as $r}
    <tr bgcolor="{cycle values="#c9dae2,#e6eef1"}">
    <td>{$r.COMIC_TYPE}</td>
    <td>{$r.TITLE}</td>
    <td>{$r.VOLUME}</td>
    <td>{$r.START_ISSUE}</td>
    <td>{$r.END_ISSUE}</td>
    <td><button value='{$r.TITLE_ID}'  name='SplitTrade'
       {if {$r.COMIC_TYPE == "DIGITAL"}} DISABLED {/if}  type="submit">Split Trade</button></td>
       {/foreach}
   </table>
   <p>
   <table class="form" border-width="1" border="1" cellspacing="1" cellpadding="2">
   <tr bgcolor="#e6eef1">
      <th>COMICDB_TITLE</th>
      <th>COMICDB_VOLUME</th>
      <th>DIGITAL_TITLE</th>
      <th>DIGITAL_VOLUME</th>
      <th>SIM</th>
      <th>COMICDB_COMICS</th>
      <th>DIGITAL_COMICS</th>
      <th>MATCHES</th>
      <th>SUBMATCHES</th>
      <th>MATCHED</th>
      <th>ACTION</th>
    </tr>
	
    {foreach $match as $m}
    <tr bgcolor="{cycle values="#c9dae2,#e6eef1"}">
    <td>{$m.COMICDB_TITLE}</td>
    <td>{$m.COMICDB_VOLUME}</td>
    <td>{$m.DIGITAL_TITLE}</td>
    <td>{$m.DIGITAL_VOLUME}</td>
    <td>{$m.SIM}</td>
    <td>{$m.COMICDB_COMICS}</td>
    <td>{$m.DIGITAL_COMICS}</td>
    <td>{$m.MATCHES}</td>
    <td>{$m.SUBMATCHES}</td>
    <td>{$m.MATCHED}</td>
    <td><button value='{$m.MATCH_ID}'  name='MatchComicDB'
       {if {$m.MATCHED == "Y"}} DISABLED {/if}  type="submit">Match Comics</button></td>
    </tr>
    {foreachelse}
      <tr><td COLSPAN=11 STYLE='TEXT-ALIGN:CENTER;'>No Rows</td></tr>
    {/foreach}
   </table>
   </form>
  </div>
  <script src='js/CompareComicDB.js'></script>
 </body>
</html>