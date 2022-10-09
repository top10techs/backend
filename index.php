CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `developers` (`id`, `name`, `skills`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Smith', 'Java', 'Newyork', 'Male', 'Software Engineer', 34),
(2, 'David', 'PHP', 'London', 'Male', 'Web Developer', 28),
(3, 'Rhodes', 'jQuery', 'New Jersy', 'Male', 'Web Developer', 30),
(4, 'Jay', 'PHP', 'Delhi, India', 'Male', 'Web Developer', 30);

<?php
include_once("inc/db_connect.php");
$sqlQuery = "SELECT id, name, gender, age FROM developers LIMIT 5";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
?>
<table id="editableTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>													
		</tr>
	</thead>
	<tbody>
		<?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
		   <tr id="<?php echo $developer ['id']; ?>">
		   <td><?php echo $developer ['id']; ?></td>
		   <td><?php echo $developer ['name']; ?></td>
		   <td><?php echo $developer ['gender']; ?></td>
		   <td><?php echo $developer ['age']; ?></td>  				   				   				  
		   </tr>
		<?php } ?>
	</tbody>
</table>
