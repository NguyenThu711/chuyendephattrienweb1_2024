<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3215">
    <div class="header">
        <div class="header-top">
            <div class="logo">
                <img src="./image/logo.png" alt="" srcset="">
            </div>

            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Shop</a>
                </li>
            </ul>

            <div class="user">
                <span><i class="fa-solid fa-user"></i></span>
                <a href="">Login</a><br>
            </div>
            <div class="menu-short">
                <i class="fa-solid fa-equals"></i>
            </div>
        </div>
        <div class="haha">
            <h5>01 Explore our studies</h5>
            <span>Find your course</span>
        </div>

        <div class="luachon">

            <select name="lang" id="lang-select">
                <option value="">Category</option>
                <option value="cate">Category</option>
                <option value="A&C">Arts & Crafts</option>
                <option value="Bus">Business</option>
                <option value="comm">Communication</option>
                <option value="Course">Course list</option>
                <option value="cw">Craftwork</option>
                <option value="curriculum">Curriculum</option>
                <option value="cyber">Cyber</option>
                <option value="economics">Economics</option>
                <option value="Economy">Economy</option>
                <option value="fi">Finance</option>
                <option value="Han">Handmade</option>
                <option value="In">Investment</option>
                <option value="Lan">Languages</option>
                <option value="Li">Literature</option>
                <option value="Mar">Marketing</option>
                <option value="mo">Modules</option>
                <option value="Music">Music</option>
                <option value="pr">Presentation</option>
                <option value="program">Program</option>
                <option value="psy">Psychology</option>
                <option value="so">Society</option>
                <option value="tech">Technology</option>
                <option value="the">Therapy</option>
            </select>
            <select name="lang" id="lang-select2">
                <option value="">Intructor</option>
                <option value="bh">Brenda Harris</option>
                <option value="BC">Britney Cooper</option>
                <option value="CC">Claudia Cole</option>
                <option value="EB">Edward Baker</option>
                <option value="FG">Felipe Grace</option>
                <option value="LS">Lauren Stamps</option>
                <option value="LCh">Leah Chatman</option>
                <option value="LS">Loreta Smith</option>
                <option value="NR">Norman Rein</option>
                <option value="VR">Vanesssa Rein</option>
                <option value="WH">William Hill</option>

            </select>
            <select name="lang" id="lang-select3">
                <option value="">Price</option>
                <option value="Free">Free</option>
                <option value="Paid">Paid</option>
            </select>
            <button type="button">
                <div class="search">Search <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span> </div>

            </button>

        </div>


    </div>
</div>