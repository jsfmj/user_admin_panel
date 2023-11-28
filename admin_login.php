<!DOCTYPE html>  
<html>
<head>
<title>login form</title>
<style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
        }


        form {
            width: 60%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 20%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        body{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
            
}
#navbar{
  background-color: #4caf50;
    height: 55px;
    box-shadow: 5px 3px 8px 3px #bebaba;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#navbar a{    
text-decoration: none;
color: whitesmoke;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
padding: 14px 20px;
transition: 0.4s ease;
}
#navbar #leftnav{
    margin-left: 150px;
}
#navbar #rightnav{
    margin-right: 150px;
}
#navbar a:hover{
  background-color: #45a049;
}
    </style>
</head>
<body>
<header>
        <div id="navbar">
            <div id="leftnav">
            <a href="#">Admin Panel</a>
            </div>
            <div id="rightnav">
            <a href="<?= base_url() ?>index.php/admin">Home</a>
            </div>
        </div>
    </header>
  <div class="container">
	<form method="post" action="<?= base_url() ?>index.php/admin/data">
  <h2 style=color:#4caf50;>Admin login</h2>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">First Name </td>
    <td width="329"><input type="text" name="first_name"/></td>
  </tr>
  <tr>
    <td>Password </td>
    <td><input type="password" name="password"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="login"/></td>
  </tr>
</table> 
	</form>
</body>
</div>
</html>