<html>
{include file="Header.tpl"}
 <body>
  {include file="TopMenu.tpl"}
  <div id="main" align="center">
   <form name="data" action="NewComic.php" method="post">
   {include file="NewComic_Menu.tpl"}

   <table class="data">
   <tr>
      <th>TITLE</th>
      <th>VOLUME</th>
      <th>YEAR</th>
      <th>ISSUE</th>
      <th>SUBISSUE</th>
      <th>SERIES_RUN</th>
      <th>ACTION</th>
    </tr>
	
    {foreach $new as $n}
    <tr>
    <td>{$n.TITLE}</td>
    <td>{$n.VOLUME}</td>
    <td>{$n.YEAR}</td>
    <td>{$n.ISSUE}</td>
    <td>{$n.SUBISSUE}</td>
    <td>{$n.SERIES_RUN}</td>
    <td>
    <button value='{$n.COMICID}'  name='NotOnPullList' type="submit">Not On Pull List</button>
    </td>
    </tr>
    {foreachelse}
    <tr><td COLSPAN=7 Style="TEXT-ALIGN:CENTER;">No Rows</td></tr>
    {/foreach}
   </table>
   <p>
   </form>
  </div>
 </body>
</html>