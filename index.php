<h1>Chu de 6</h1>
<Form name="myform" action="index.php" method="GET">
<input type="hidden" name="my_tag" value="I'm Tag"/>
Ho ten: <input type="text" name="name" value=""/>
Email: <input type="email" name="email" value=""/>
<input type="submit" value="Submit"/>
</Form>

<?php
echo $_POST['my_tag'];
#echo "<br></br>";
#echo "Chao ban " . $_GET['name'] . ", email cua ban la " . $_GET['email'];
print_r($_GET['name']);
?>
