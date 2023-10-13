<?php 
$feedbacks = json_decode(file_get_contents("feedbacks.json"), true);
// $aFeedBack = array();
// $aFeedBack['show'] = true;
// $aFeedBack['name'] = "Jibon";
// $aFeedBack['phone'] = "0160000000";
// $aFeedBack['stars'] = 5;
// $aFeedBack['details'] = "no bla bla";
// $aFeedBack['pic'] = "Jibon";
// $aFeedBack['time'] = "Jibon";
// $feedbacks[] = $aFeedBack;
// $encodedFeedbacks = json_encode($feedbacks);
// file_put_contents("feedbacks.json", $encodedFeedbacks);

//<i class="fa-solid fa-star"></i>
// <i class="fa-regular fa-star"></i>
$reviewErrnos = "";
if(isset($_POST['submit-feedback'])){
    if(isset($_POST['reviwer-name'], $_FILES['reviewer-img'], $_POST['review-stars'], $_POST['review-desc']) && !empty($_POST['reviwer-name']) && !empty($_POST['review-stars']) && !empty($_POST['reviewer-phone']) && !empty($_POST['review-desc']) && $reviwerImgPath = upload($_FILES['reviewer-img']['tmp_name'])){
        $aFeedBack = array();
        $aFeedBack['show'] = true;
        $aFeedBack['name'] = addslashes(strip_tags($_POST['reviwer-name']));
        $aFeedBack['phone'] = addslashes(strip_tags($_POST['reviewer-phone']));
        $aFeedBack['stars'] = addslashes(strip_tags($_POST['review-stars']));
        $aFeedBack['details'] = addslashes(strip_tags($_POST['review-desc']));
        $aFeedBack['pic'] = $reviwerImgPath;
        $aFeedBack['time'] = time();
        $feedbacks[] = $aFeedBack;
        $encodedFeedbacks = json_encode($feedbacks);
        file_put_contents("feedbacks.json", $encodedFeedbacks);
        $reviewErrnos .= "<script>window.location.href='./#feedbacks'</script>";
    }else{
        $reviewErrnos .= "Please fill all fields\n";
        print_r($_POST);
    }
}
?>
<h1 id="feedbacks" class="content-title">Feedbacks</h1>
<div class="content-desc feedbacks">
    <div>
        <b>Students Review</b>
    </div>
    <?php foreach ($feedbacks as $key) { ?>
    <div class="review">
        <div class="img-reviewer">
            <img src="<?php echo $key['pic'] ?>" alt="User-Image">
        </div>
        <div class="details-review">
            <div>
                <b><?php echo $key['details'] ?></b>
            </div>
            <div class="stars-name">
                <span class="stars">
                <?php 
                    for($i = 0; $i < round($key['stars']) && $i < 5; $i++){
                        echo '<i class="fa-solid fa-star"></i>';
                    }
                    for($i = 0; $i < 5-round($key['stars']) && $i < 5; $i++){
                        echo '<i class="fa-regular fa-star"></i>';
                    }
                ?>
                </span>
                <span>By <?php echo $key['name'] ?></span>
            </div>
            <div class="review-time">
                <small>
                    <span><?php echo date("M d, Y H:i:A", $key['time']); ?></span> 
                </small>
            </div>
        </div>
    </div>
    <?php } ?>
    <br>
    <div>
        <b>Your Review</b>
    </div>
    <form action="#" class="review add-review" method="POST" enctype="multipart/form-data">
        <label>
            <div>Enter your full name:</div>
            <input required placeholder="Full Name" name="reviwer-name" type="text">
        </label>
        <label>
            <div>Select your image:</div>
            <input required type="file" name="reviewer-img" accept="image/*">
        </label>
        <label>
            <div>Enter phone number:</div>
            <input required type="text" placeholder="Ex: +92 XXX XXX XXX" name="reviewer-phone">
        </label>
        <label>
            <div>Enter number of stars:</div>
            <input required placeholder="starts" name="review-stars" value="5.0" min="0" max="5" step="0.1" type="number">
        </label>
        <label>
            <div>Write down your review about our services:</div>
            <textarea required placeholder="Start typing..." name="review-desc" type="text"></textarea>
        </label>
        <div style="color: red;">
            <pre><?php echo $reviewErrnos; ?></pre>
        </div>
        <label>
            <input value="Submit Review" name="submit-feedback" type="submit">
        </label>
    </form>

</div>
<div>

</div>