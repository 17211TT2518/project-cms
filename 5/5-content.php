<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
	<div class="container picture">
		<div class="row">
			<div class="col-md-6">
				<h1>signup for</h1>
				<h1> newslettre</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit alias accusamu.</p>
				<form action="#">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email (required)">
					<div class="btn-center">
					<button type="submit" class="btn btn-warning">Sign up</button>
					</div>
				</form>
			</div>
			<div class="col-md-6">
			</div>
		</div>
	</div>
</div>