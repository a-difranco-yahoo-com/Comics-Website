

SELECT Player_H FROM DARTS_PL
UNION
SELECT Player_A FROM DARTS_PL
/

SELECT * FROM V_PL_PLAYER_RECORD           ORDER BY Played Desc;
SELECT * FROM V_PL_TABLE WHERE Year = 2018 ORDER BY Pts Desc, F - A Desc;
SELECT * FROM   DARTS_PL WHERE  ROUND = 'F' ORDER BY Year;