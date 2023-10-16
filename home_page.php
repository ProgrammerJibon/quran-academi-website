<?php
// header("Refresh: 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Unique Islamic Institute Online</title>
    <link rel="stylesheet" href="https://api.jibon.pro/css/freelancer-com-project-quran-academi-4.php?t=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/6d7a1b523d.js" crossorigin="anonymous"></script>
    <script src="https://api.jibon.pro/js/freelancer-com-project-quran-academi-4.php?t=<?php echo time(); ?>"></script>
    <script src="https://api.jibon.pro/js/image-slider.js?t=<?php echo time(); ?>"></script>
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
</head>
<body>


<?php require_once "./view-top-bar-1.php"; ?>
<?php require_once "./view-navbar.php"; ?>
<?php require_once "./view-home-banner.php"; ?>
<?php require_once "./view-courses-title-names-only.php"; ?>
<?php require_once "./view-our-courses.php"; ?>
<?php require_once "./view-about-us.php"; ?>
<?php require_once "./view-about-teacher.php"; ?>
<?php require_once "./view-content-trial.php"; ?>
<?php require_once "./view-content-global-teachers.php"; ?>
<?php require_once "./view-content-eroll-from.php"; ?>
<?php require_once "./view-content-why-we.php"; ?>
<?php require_once "./view-content-duas.php"; ?>
<?php require_once "./view-schedule-fees.php"; ?>
<?php require_once "./view-ads-and-contact-form.php"; ?>
<?php require_once "./view-feedback-option.php"; ?>
<?php require_once "./view-footer.php"; ?>
    
</body>
</html>
<style>
img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
/* pic-slides */
.pics-flex-row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0 128px;
    justify-content: space-evenly;
    align-items: flex-start;
    user-select: none;
}
.pics-flex-row-item {
    width: 220px;
    height: 150px;
    overflow: hidden;
    cursor: zoom-in;
    margin: 8px;
}
.pics-flex-row-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
    transition: all 0.3s ease-in-out;
}
.pics-flex-row-item:hover img{
    transform: scale(1.2);
}
.pics-flex-row-item.prev-full-screen {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    cursor: zoom-out;
    background: #ffffffa3;
    backdrop-filter: blur(3px);
    z-index: 1;
    margin: 0;
}
.pics-flex-row-item.prev-full-screen img{
    object-fit: contain;
}
.pics-flex-row-item.prev-full-screen:hover img{
    transform: scale(1);
    object-fit: contain;
}



/* reviews */
.content-desc.feedbacks {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    justify-content: center;
    align-items: stretch;
    margin-bottom: 64px;
    font-size: 14px;
    line-height: 25px;
}
.content-desc.feedbacks .review {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: flex-start;
    align-items: center;
    background: #fafafa9e;
    margin: 8px 0;
    border-radius: 6px;
    padding: 8px;
    box-shadow: 10px 10px 15px -15px black;
    border: 1px solid #d8d8d8;
}
.content-desc.feedbacks .review .img-reviewer {
    width: 64px;
    height: 64px;
    margin: 8px;
    overflow: hidden;
    border-radius: 50%;
}
.content-desc.feedbacks .review .stars-name span.stars {
    color: goldenrod;
}
.content-desc.feedbacks .review.add-review{
    flex-direction: column;
    padding-bottom: 32px;
}
.content-desc.feedbacks .review label {
    padding: 16px 16px 0;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    justify-content: center;
    align-items: stretch;
    width: 100%;
    font-size: 14px;
    cursor: pointer;
}
.content-desc.feedbacks .review input,
.content-desc.feedbacks .review textarea {
    width: 100%;
    border: 1px solid darkgrey;
    border-radius: 3px;
    margin-top: 4px;
    outline: none;
    padding: 16px 8px;
}
.content-desc.feedbacks .review textarea {
    resize: vertical;
    min-height: 100px;
    height: 120px;
}
.content-desc.feedbacks .review input[type="submit"] {
    background-color: #00779b;
    color: white;
    cursor: pointer;
    border: none;
    font-weight: bold;
    font-size: 16px ;
}
.content-desc.feedbacks .review input[type="submit"]:hover{
    background-color: #003849;
}


.content-desc table{
    border-collapse: collapse;
    width: 100%;
}
.content-desc table th,
.content-desc table td {
  text-align: center;
  padding: 8px;
}
.content-desc table tr:nth-child(even){
    background-color: #f2f2f2
}
.content-desc table tr:hover td{
    cursor: pointer;
    background: #00a9722b;
}
.content-desc table th {
  background-color: #04AA6D;
  color: white;
}
</style>
<script>
const images = document.querySelectorAll(".pics-flex-row .pics-flex-row-item");
images.forEach(item=>{
    item.onclick=e=>{
        item.classList.toggle("prev-full-screen");
    }
})
</script>