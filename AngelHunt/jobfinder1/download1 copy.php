<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'starter');

$sql = "SELECT * FROM cv";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
$msg=$_GET['msg'];
$value=false;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): 
    if ($file['company']==$msg){
      $value=True?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['cvf']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><a href="download.php?file_id=<?php echo $file['id']?>">Download</a></td>
    </tr>
  <?php }endforeach;
  if($value==false){
    echo "NO Recieved Cvs Yet";
  }?>

</tbody>
</table>

</body>
</html>