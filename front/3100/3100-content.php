<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3100">
    <div class='container'>
        <div class="row">
            <div class="col-md-6">
                <form action="" class="form-report">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">
                                <input type="text" class="input-name" placeholder="Name">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <input type="text" placeholder="Email">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">
                                <input type="text" placeholder="Phone Number">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="">
                                <input type="text" placeholder="Subject">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea id="w3review" name="w3review" rows="5" cols="30"
                                placeholder="Please enter your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="btn-send">
                </form>
            </div>
            <div class="col-md-6">
                <form action="" class="form-report2">
                    <div>
                        <h3>Customer Support</h3>
                        <h5>Need some help? Get in touch with us.</h5>
                        <div class="address">
                            <i class="phone"><i class="fa-solid fa-phone-volume"></i></i>
                            <a href="">+123 456 778</a> <br>
                            <i class="email"><i class="fa-regular fa-envelope"></i></i>
                            <a href="">info@repa.com</a> <br>
                            <i class=""><i class="fa-solid fa-location-dot"></i></i>
                            <a href="">Coral Way, Miami, Florida, 33169</a>
                        </div>

                    </div>

                    <div>
                        <h3>Working Hours</h3>

                        <div class="time-open">
                            <span>Mon-Sat</span>
                            <span>9:00AM - 9:00PM</span>
                        </div>
                        <div class="time-close">
                            <span>Sun</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>