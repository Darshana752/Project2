$connection = mysqli_connect('localhost','root','','project2');

if(mysqli_connect_error()){
  die('database connection fail'.mysqli_connect_error())
}else{
  echo "success connection";
}