<form method="get" action="createStarWarsRecord.php">
	<fieldset>
		<legend>Add a new Star Wars episode</legend>
		<ul>
			<li class="one-half">
				<label for="episode">Episode</label>
				<input type="number" name="episode" id="episode" placeholder="Episode">
			</li>
			<li class="one-half last">
				<label for="year-released">Year Released</label>
				<input type="number" name="year-released" id="year-released" placeholder="Year Released">
			</li>
			<li class="one-half">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" placeholder="Title">
			</li>
			<li class="one-half last">
				<label for="director">Director</label>
				<input type="text" name="director" id="director" placeholder="Director">
			</li>
		</ul>
	</fieldset>
	<div class="form-footer">
		<input type="reset" class="button one-half" value="Reset">
		<input type="submit" class="button one-half last" value="Submit">
	</div>
</form>