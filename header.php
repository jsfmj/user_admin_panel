<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
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
            <a href="#">User Panel</a>
            </div>
            <div id="rightnav">
            <a href="<?= base_url() ?>index.php/Welcome">Home</a>
            <a href="<?= base_url() ?>index.php/Welcome/logout">Logout</a>   
            </div>
        </div>
    </header>
</body>
</html>