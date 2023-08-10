<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="show.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f41803369e.js" crossorigin="anonymous"></script>
    <title>Document</title>
  
</head>
<body>
<div class="table"  >
		<table  >
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
                <th>PhoneNumber</th>
				<th> Action</th>
			</thead>
			<tbody>
				<?php
			
					include('conn.php');
					 $query=mysqli_query($conn,"select *from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
                            
							<td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['phoneNumber']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>"><i class="fa-solid fa-delete-left "></i></i></a>
							</td>
						</tr>
						<?php
					} 
                    
				?>
            </tbody>
</body>
</html>