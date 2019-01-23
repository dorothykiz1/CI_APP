<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI Insert Form</title>

</head>
<body>

<div id="container">
    <form action="<?php echo base_url();?>index.php/users/insert_user_db">
        <table width ="400" cellpadding ="5">
            <tr>
                <th width="213" scope="row" >Enter your Username:</th>
                <td width="161"><input type="text" name="name" size="20" /></td>
            </tr>
            <tr>
                <th scope="row" >Enter your Email:</th>
                <td width="161"><input type="text" name="email" size="20" /></td>
            </tr>
            <tr>
                <th scope="row" >Enter your Address:</th>
                <td><textarea name="address" rows="5" cols="20"></textarea></td>           
            </tr>
            <tr>
                <th scope="row" >&nbsp;</th>
                <td><input type="submit" name="submit" value="send"></td>       

            </tr>


        </table>

    </form>

	
	<p class="footer">powered by dorothy</p>
</div>

</body>
</html>