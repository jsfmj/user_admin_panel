<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
<style>
   #container{
          height: 100vh;
          width:100vw;
          display: flex;
          align-items: center;
          justify-content: center;
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
        input[type="password"],
        input[type="radio"] {
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
<header>
        <div id="navbar">
            <div id="leftnav">
            <a href="#">User Panel</a>
            </div>
            <div id="rightnav">  
            </div>
        </div>
    </header>
<body>
  <div id="container">
	<form method="post" action="<?= base_url() ?>index.php/welcome/savedata">
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">First Name </td>
    <td width="329"><input type="text" name="first_name"/><span style=color:red><?php echo form_error('first_name'); ?></span></td>
  </tr>
  <tr>
    <td>Last Name </td>
    <td><input type="text" name="last_name"/><span style=color:red><?php echo form_error('last_name'); ?></span></td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td><input type="email" name="email"/><span style=color:red><?php echo form_error('email'); ?></span></td>
  </tr>
  <tr>
    <td>Password </td>
    <td><input type="password" name="password"/><span style=color:red><?php echo form_error('password'); ?></span></td>
  </tr>
  <tr>
    <td>gender </td>
    <td><input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>female<span style=color:red><?php echo form_error('gender'); ?></span></td>
  </tr>
  <tr>
    <td>age</td>
    <td><input type="text" name="age"/><span style=color:red><?php echo form_error('age'); ?></span></td>
  </tr>
  <tr>
    <td>state</td>
    <td><select name="state" id="cars">
  <option value="kerala">Kerala</option>
  <option value="tamil nadu">Tamil nadu</option>
  <option value="karnataka">Karnataka</option>
  <option value="andhra pradesh">Andhra pradesh</option>
</select><span style=color:red><?php echo form_error('state'); ?></span></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
	</form>
  </div>
  <?php include 'footer.php'; ?>
</body>
</html>
