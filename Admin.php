<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: sans-serif;
  background-color: black;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 30px;
}

.sidenav a {
  padding: 16px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#">Profile</a>
  <a href="Users.php">Users</a>
  <a href="Categories.php">Categories</a>
  <a href="#">Add products</a>
  <a href="#">Update products</a>
  <a href="#">Add products</a>

</div>

<div class="main">
  <h2>Sidenav Example</h2>
  <p>This sidenav is always shown.</p>
</div>
   
</body>
</html> 