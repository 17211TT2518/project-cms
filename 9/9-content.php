<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<meta name="viewport" content="width=device-width, initial-scale = 1">
<!-- Footer -->
<footer class="type-9" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam explicabo nesciunt
                    minus ratione, sapiente saepe magni.</p>
				<ul class="social-pet mt-4">
                    <li><a href="#" title="facebook"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">LATEST NEWS</h5>
                <ul class="recent-post">
                    <li>
                        <label class="mr-3">28 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                    <li>
                        <label class="mr-3">29 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                    <li>
                        <label class="mr-3">30 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
					</li>
					<li>
                        <label class="mr-3">30 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">TAGS</h5>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">SIGNUP FOR NEWSLETTER</h5>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-check"></i></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->