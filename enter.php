<!DOCTYPE html>
<html>
	<head>
		<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />
	</head>
	<body>
		<div class="container" style="margin-bottom: 20px;">
			<div class="row">
				<div class="col-xs-6">
					<form
					 class="form-horizontal"
					 id="frm"
					 method="post"
					 action="makePages.php">
						<h1>Upload information&trade;</h1>
						<div class="files">
							<p>Click on the "Choose photos" button to upload a file:</p>
							<input type="file" id="myFile" name="photos" class="form-control" accept="image/jpeg,image/png,image/jpg">
						</div>
						<div>
							<input type="text" name="location" placeholder="where is the place">
						</div>
						<div>
							<label for="what">Choose Satilik/Kiralik</label>
							<select name="what" id="what">
								<option value="SatLand">Satilik Land</option>
								<option value="KiraLand">Kiralik Land</option>
								<option value="SatApart">Satilik Apartments</option>
								<option value="KiraApart">Kiralik Apartments</option>
								<option value="SatVilla">Satilik Villas</option>
								<option value="KiraVilla">Kiralik Villas</option>
							</select>
						</div>
						<div>
							<input type="text" name="price" placeholder="enter the price">
						</div>
						<div>
							<input type="text" name="size" placeholder="2+1 or">
						</div>
						<div>
							<input type="text" name="area" placeholder="what the area">
						</div>
						<div>
							<input type="text" name="fromSea" placeholder="how far from sea">
						</div>
						<div>
							<textarea name="discription" placeholder="discription"></textarea>
						</div>

						<button
						 type="submit"
						 class="btn btn-success">
							Done
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</html>















