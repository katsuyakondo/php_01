<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マッチングアプリ
    </title>
    <link rel="stylesheet" href="./style.css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<div class="card">
    <form action="sample_confirm.php" method="POST" class="form">
        <img src="./img/kao.jpg" alt="" class="profile-image">
        <input type="hidden" name="image_path" value="./img/kao.jpg">

        <p class="text">山田花子</p>
       <input type="hidden" name="name" class="name_value">

        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>

<div class="card">
    <form action="sample_confirm.php" method="POST" class="form">
        <img src="./img/kao3.jpg" alt="" class="profile-image">
        <input type="hidden" name="image_path" value="./img/kao3.jpg">

        <p class="text">田中一子</p>
       <input type="hidden" name="name" class="name_value">

        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>

<div class="card">
    <form action="sample_confirm.php" method="POST" class="form">
        <img src="./img/kao2.jpg" alt="" class="profile-image">
        <input type="hidden" name="image_path" value="./img/kao2.jpg">

        <p class="text">山本太郎</p>
       <input type="hidden" name="name" class="name_value">

        <button class="unmatch" name="unmatch">
            <i class="fa-solid fa-circle-xmark fa-xl"></i>
        </button>
        <button class="matching" name="match">
            <i class="fa-solid fa-heart fa-xl"></i>
        </button>
    </form>
</div>

</body>
<script src="https://kit.fontawesome.com/9ebd72d89c.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(".fa-circle-xmark").on("click",function() {
        $(".card").animate({
           "marginRight":"758px"
        },2000,function(){
            $(this).fadeOut();
        });
    });

    $(".fa-heart.fa-xl").on("click", function () {
        $(".card").animate({
            "marginLeft": "758px"
          }, 2000, function () {
             $(this).fadeOut();
         });
     });

 $(document).ready(function() {
        // pタグの内容を隠しフィールドに設定
        $('.form').each(function() {
        let name = $(this).find('.text').text(); // 名前を取得
        $(this).find('.name_value').val(name); // 隠しフィールドに設定
    });
    });



</script>
</html>