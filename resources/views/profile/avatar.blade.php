@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="content">
			<h2> &raquo; Upload Avatar</h2>
			<hr>
			<p>Upload Avatar untuk mahasiswa dengan id <b><?php echo $_GET['id']; ?></b></p>
			<?php
			$id = $_GET['id'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: profile.blade.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_FILES['fileToUpload'])){
				$target_dir = "avatar/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

				if(isset($_POST["upload"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						$uploadOk = 1;
					} else {
						echo "File is not an image.";
						$uploadOk = 0;
					}
				}

				if ($_FILES["fileToUpload"]["size"] > 500000) {
					echo '<div class="alert alert-danger">File size terlalu besar.</div>';
					$uploadOk = 0;
				}

				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo '<div class="alert alert-danger">Hanya JPG, JPEG, PNG & GIF yang di izinkan.</div>';
					$uploadOk = 0;
				}

				if ($uploadOk == 0) {
					echo '<div class="alert alert-danger">File gagal di upload.</div>';
				} else {
					$file = $target_dir.''.$id.'.'.$imageFileType;
					$new_id = $id.'.'.$imageFileType;
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
						$up = mysqli_query($koneksi, "UPDATE users SET foto='$new_id' WHERE id='$id'");
						if($up){
							header("Location: avatar.blade.php?id=".$id."&sukses=ya");
						}
					} else {
						echo '<div class="alert alert-danger">File gagal di upload.</div>';
					}
				}
			}
			
			if(isset($_GET['sukses']) == 'ya'){
				echo '<div class="alert alert-success">File berhasil di upload.</div>';
			}
			?>
			<div class="col-md-6 col-md-offset-3 text-center">
				<img class="img-responsive center-block" src="avatar/<?php echo $row['foto']; ?>" width="150"><br />
				<form class="form-inline" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-sm-10">
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										Browse&hellip; <input type="file" name="fileToUpload">
									</span>
								</span>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="col-sm-2">
							<input type="submit" name="upload" class="btn btn-primary" value="Upload">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <!-- avatar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src=" {{url('js/bootstrap.min.js')}} "></script>
    <!-- and avatar -->
	<script>
	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});
	
	$(document).ready( function() {
		$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;
			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
		});
	});
	</script>
@endsection