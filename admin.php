<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select All</title>
</head>

<body>

<!-- SELECT ALL ONLY -->

<table border="1" cellpadding="10" cellspacing="10">
		<tr>
			<th>Id</th>
        	<th>User Name</th>
            <th>Password</th>
            
        </tr>
		
			<?php
                
                include_once("DataConnection.php");
                
                $strSelectAll = "select * from userinfo";
                    
                $result = mysqli_query($con,$strSelectAll);
                
                if($result==true and mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
              ?>
            <tr>  
              		<td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>

            </tr>
              <?php          
                    }
                }
//important to close connection for preventing data from overflow
mysqli_close($con);
              
?>
	


</table>


</body>
</html>

