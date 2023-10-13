<?php 
$errnos = "";
if(isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['country'], $_POST['message'])){
    $message = "";
    $message .= "Name: $_POST[name]\n\nEmail: $_POST[email]\n\nPhone: $_POST[number]\n\nCountry: $_POST[country]\n\nMessage: \n$_POST[message]\n\n";
    if(@mail("uniqueislamicinstitute@gmail.com", "New Contact", $message)){
        $errnos = "<font color='green'>Message sent successfully!</font>";
    }else{
        $errnos = "<font color='red'>Server Unavailable!</font>";
    }
}


if(!isset($index)){
    header("HTTP/1.0 403 nope");
    exit();
}


?>
<div class="contact-form" id="contact-us">
    <h1>Contact Us</h1>
    <form method="POST">
        <div>
            <span><?php echo $errnos; ?></span>
        </div>
        <br>
        <label>
            <div>Name <font color="red">*</font></div>
            <input required type="text" name="name">
        </label>
        <label>
            <div>Email <font color="red">*</font></div>
            <input required type="email" name="email">
        </label>
        <label>
            <div>Phone <font color="red">*</font></div>
            <input required type="text" name="number">
        </label>
        <label>
            <div>Country <font color="red">*</font></div>
            <input required type="text" name="country">
        </label>
        <label>
            <div>Message <font color="red">*</font></div>
            <textarea required style="resize:vertical; min-height: 150px;" name="message"></textarea>
        </label>
        <button type="submit">Submit</button>
    </form>
</div>