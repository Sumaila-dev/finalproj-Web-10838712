<?php    
    
include "dbconnect.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from public where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from public";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Region</td>    
                <td>Town</td>    
                <td>GPSCODE</td>    
                <td>Date</td>    
                <td>Phone Number</td>    
                <td>Complain</td>    
                <td>Related Doc</td>     
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    