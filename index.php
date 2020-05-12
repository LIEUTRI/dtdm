<h1>Chu de 6</h1>
<Form name="myform" action="index.php" method="POST">
<input name="my_tag" value="PILLS HERE"/>
Ho ten: <input type="text" name="name" value=""/>
Email: <input type="email" name="email" value=""/>
<input type="submit" value="Submit" onClick="show()"/>
</Form>

<?php
echo $_POST['my_tag'];
echo "<br></br>";
print_r($_POST);
?>
