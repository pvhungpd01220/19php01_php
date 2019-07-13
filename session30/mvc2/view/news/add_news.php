<h1>Add news page</h1>
<form action="index.php?action=add_news" method="post">
	<p>title
		<input type="text" name="title">
	</p>
	<p>Description
		<textarea name="description" rows="8"></textarea>
	</p>
	<p>created
		<input type="date" name="created">
	</p>
	<p>Avatar
		<input type="file" name="avatar">
	</p>
	<p><input type="submit" name="add_news_form" value="Add news"></p>
</form>