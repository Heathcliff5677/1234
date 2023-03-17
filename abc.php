<?php
//连接数据库  用mysqli_connect()
$conn=mysqli_connect("localhost","root","LEE312312");
if($conn){
	 echo"数据库连接成功<br>";
	$select = mysqli_select_db($conn,'mydb1');
	if($select){
		 echo "数据库选择成功<br>";
		$sql = "SELECT * FROM `qimo`";//查询信息
		
		$ok = mysqli_query($conn,$sql);
		
		while($arr=mysqli_fetch_array($ok)){
				echo "".$arr['id']."";
				echo "".$arr['name']."";
				echo "".$arr['code']."";
				echo "".$arr['image']."";
				echo "".$arr['price']."";
                echo "".$arr['average_rating']."";
	
		}
		
	}	
 }
?>