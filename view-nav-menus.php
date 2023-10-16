<?php
if (!isset($index)) {
    header("HTTP/1.0 403");
} ?>

<ul>
    <li>
        <a href="#top-banner-1">Home</a>
    </li>
    <li>
        <div class="dropdown">
            <button class="dropbtn">About</button>
            <div class="dropdown-content">
                <a href="#about-us">About Us</a>
                <a href="#about-teacher">About Teachers</a>
            </div>
        </div>
    </li>
    <li>
        <a href="#our-courses">Our Courses</a>
    </li>
    <li>
        <a href="#schedule-fees">Schedule & Fees</a>
    </li>
    <li>
        <a href="#contact-us">Contact</a>
    </li>
    <li>
        <a href="#feedbacks">Feedbacks</a>
    </li>
</ul>