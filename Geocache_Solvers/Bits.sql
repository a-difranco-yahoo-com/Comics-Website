CREATE TABLE ASCII_CODES AS (SELECT * FROM ADF.ASCII_CODES);

CREATE TABLE BITS_INFO (
SOURCE       VARCHAR2(4), 
SKIP_CODE    VARCHAR2(8), 
BIN_CODE     VARCHAR2(8), 
SEQ_NO       NUMBER, 
DESCRIPTION  VARCHAR2(30)
)
/

DECLARE
   loc_Clue1   Varchar2(200) := '00000100001100010000101000111000000011100101011100000110001000000001001000110000';
   loc_Clue2   Varchar2(200) := '00000010001000000001010100110000000001011011000000010100001000000000100100101110';
   loc_Clue3   Varchar2(200) := '00011010001101010001011100101110000010000011001000011001001101000001011000110110';
   loc_Clue4   Varchar2(200) := '00001011001101000000001100110101000100111011000000001101001000000000011100110011';
   loc_Clue5   Varchar2(200) := '00011000001100100001000100110000000000010100111000001100001110010000111100100000';
   loc_Clue6   Varchar2(200) := '0001000000110000';
--
   loc_Hint1   Varchar2(200) := '01000110001000000011101101101110001000000010000000110010011101000000110001100101';
   loc_Hint2   Varchar2(200) := '00101000011011100011101001101001001110010110110000100011011001010010101100100000';
   loc_Hint3   Varchar2(200) := '00101100011101110100011100111001010010011011101001001010001011100100000001100101';
   loc_Hint4   Varchar2(200) := '00010100011001010100010101110100000100110110100000010111011101100010101001110010';
   loc_Hint5   Varchar2(200) := '00011010011010010011111101101101001111000110011100011011011011100010110101101000';
   loc_Hint6   Varchar2(200) := '00010001001000000010011101110010000011110110100100000001010011000011010100100000';
   loc_Hint7   Varchar2(200) := '00011110011001000011100001101001000001010110010000101110011001010011010001100101';
   loc_Hint8   Varchar2(200) := '00110110011100100010000101110100000001100110111100100110011011110010111101110010';
   loc_Hint9   Varchar2(200) := '00011101011010010011111000100000000001110111011101001000001100000000111000100000';
   loc_Hint10  Varchar2(200) := '01000100011000010001110001110011001100110110100001000010011101000011110101110011';
   loc_Hint11  Varchar2(200) := '00010010011101000011000100100000001000100110100000011111011001010010100101100101';
   loc_Hint12  Varchar2(200) := '00100100001000000001011001101001010000110010000000000011011101110001100001111001';
   loc_Hint13  Varchar2(200) := '00000010011011110011011101100001000011010111000000001011011001010000010000100000';
   loc_Hint14  Varchar2(200) := '00010101001000000010010101100011000010010010000000001010011001000011000001100101';
   loc_Hint15  Varchar2(200) := '0100000101100101000110010010000000001000011011100001000001101110';
--
   loc_Clue   Varchar2(6000) := loc_Clue1  || loc_Clue2  || loc_Clue3  || loc_Clue4  || loc_Clue5 || loc_Clue6;
   loc_Hint   Varchar2(6000) := loc_Hint1  || loc_Hint2  || loc_Hint3  || loc_Hint4  || loc_Hint5
                             || loc_Hint6  || loc_Hint7  || loc_Hint8  || loc_Hint9  || loc_Hint10
                             || loc_Hint11 || loc_Hint12 || loc_Hint13 || loc_Hint14 || loc_Hint15;
   Loc_Size    Number := 8;
   Loc_Seq_No  NUMBER;
BEGIN
   DELETE FROM BITS_INFO;

   Loc_Seq_No := 0;
   While Loc_Clue IS NOT NULL
   LOOP
      Loc_Seq_No := Loc_Seq_No + 1;
      INSERT INTO bits_info (Source, Skip_Code, Bin_Code, Seq_No)
      VALUES ('CLUE', substr(loc_Clue,   1, Loc_Size), 
             substr(loc_Clue, Loc_Size + 1, Loc_Size), Loc_Seq_No); 
      
      Loc_Clue := substr(loc_Clue, (2 * Loc_Size) + 1);
   END LOOP;

   Loc_Seq_No := 0;
   While Loc_Hint IS NOT NULL
   LOOP
      Loc_Seq_No := Loc_Seq_No + 1;
      INSERT INTO bits_info (Source, Skip_Code, Bin_Code, Seq_No)
      VALUES ('HINT', substr(loc_Hint,   1, Loc_Size), 
             substr(loc_Hint, Loc_Size + 1, Loc_Size), Loc_Seq_No); 
      
      loc_Hint := substr(loc_Hint, (2 * Loc_Size) + 1);
   END LOOP;
END;
/


SELECT C.*, I.*, replace(replace(C.Description, 'Uppercase ', ''), 'Lowercase ', '') Dscp
FROM   BITS_INFO   I
  JOIN ASCII_CODES C ON C.Bin_Code = I.Bin_Code
--WHERE  C.Description Like 'Mas%' 
ORDER BY I.Source, I.Skip_Code
/