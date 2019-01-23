<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--  for actions when the links are pressed -->
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
	<script type="text/javascript">


		function show_confirm(act,gotoid)
		{
			if(act=="edit")
			{
				var r = confirm("Would you want to edit?");
				if (r==true)
				{
					window.location = 'index.php/Users/'+act+'/'+gotoid;
				}
			}
			else
			{
				var r = confirm("Would you want to delete?");
			}
			
		}
	
    </script>


</head>
<body>

<div id="container">
<h2>my first CRUD application: </h2>
<table width="600" cellpadding="5">
<tr>
<th scope = "col">Id</th>
<th scope = "col">User Name</th>
<th scope = "col">Email</th>
<th scope = "col">Mobile</th>
<th scope = "col">Address</th>
<th scope = "col" colspan="2">Action</th>


</tr>
<?php foreach ($user_list as $u_key){ ?>

<tr>
<td><?php echo $u_key->id;?></td>
<td><?php echo $u_key->name;?></td>
<td><?php echo $u_key->email;?></td>
<td><?php echo $u_key->mbile;?></td>
<td><?php echo $u_key->address;?></td>
<td width="40"><a href="#" OnClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete</a></td>
<td width="40"><a href="#" OnClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>



</tr>
<?php  } ?>
<tr>
<td colspan="7"> <a href="<?php echo base_url();?>index.php/User/add_form">Insert New User</a></td>

</tr>

</table>
	
	<p class="footer">powered by dorothy</p>
</div>

</body>
</html>