<h1>Add news page</h1>
<form action="index.php?action=edit_news&id=<?php echo $id?>"  method="post">
	<p>title
		<input type="text" name="title" value="<?php echo $editNews['title'];?>">
	</p>
	<p>Description
		<textarea name="description" rows="8" value="<?php echo $editNews['description'];?>"></textarea>
	</p>
	<p>created
		<input type="date" name="created" value="<?php echo ['created'];?>">
	</p>
	<p><input type="submit" name="edit_news_form" value="edit news"></p>
</form>