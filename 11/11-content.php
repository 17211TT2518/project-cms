<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11">
	<div class="container">
		<div class="img">
			<div class="row text-center">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="content">
						<h1>OUR BLOG</h1>
						<p>Change This header to anything by using the UX Builder. You can also remove it. It's only visible on the blog homepage.</p>
					</div>
					<div class="all-icon">
						<a href="#" data-tooltip="tooltip" data-placement="top" title="facebook"><i id="icon" class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i id="icon" class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i id="icon" class="fa fa-envelope-o" aria-hidden="true"></i></a>
						<a href="#"><i id="icon" class="fa fa-pinterest-p" aria-hidden="true"></i></a>
						<a href="#"><i id="icon" class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>