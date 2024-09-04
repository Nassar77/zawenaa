<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Company Information Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    direction: rtl;
}
/* 
header {
    background-color: #333;
    color: #fff;
    padding: 20px;
} */

/* .logo {
    width: 200px;
    height: 100px;
} */

.about-us{
    text-align: center;
}
.products{
    text-align: center;
    line-height: 2rem;
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.about-us, .products {
    padding: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
/* .image-container {
    display:flex;
    justify-content: space-between;
}
.image-container img {
    width: 30%; 
    height: auto;
} */



.container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    width: auto ;
    height: 100%;
}
.place {
    text-align: center;
    width: auto;
    height: fit-content;
    padding: 7px;
}
.place img {
    width: 200px; 
    height: 200px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <!-- <header>
        <img src="../About/لوجو.png" class="logo">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header> -->

   <div>
        <section class="about-us">
            <h2>من نحن !</h2>
            <P>"نحن موقع متخصص في توفير خدمات التدريب والتوظيف للأفراد ذوي الهمم، ونسعى إلى دعم الشركات في استقطاب الموارد البشرية المؤهلة من هذه الفئة. تتمثل رسالتنا في تعزيز الشمولية والتنوع في سوق العمل من خلال توفير فرص متساوية للجميع."</P>
        </section>

        <section class="products">
            <h2>محتوانا...</h2>
            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolores vel voluptas explicabo sit quod voluptate fugit ex reiciendis dicta nostrum, expedita consequuntur aliquid, officia, id ipsa facilis earum et?</P>
        </section>

        <section class="products">
            <h2>محتوانا...</h2>
            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio dolores vel voluptas explicabo sit quod voluptate fugit ex reiciendis dicta nostrum, expedita consequuntur aliquid, officia, id ipsa facilis earum et?</P>
        </section>


   </div>

    <div class="container">
        <div class="place">
            <img src="../استكمال البيانات/صور/images.jpg" alt=" ">
            <p>وصف للصورة 1</p>
            <button>المزيد</button>
        </div>
        <div class="place">
            <img src="../استكمال البيانات/صور/download.jpg" alt="">
            <p>وصف للصورة 2</p>
            <button>المزيد</button>
        </div>
        <div class="place">
            <img src="../استكمال البيانات/صور/FB_IMG_1613244078885.jpg" alt="">
            <p>وصف للصورة 3</p>
            <button>المزيد</button>
        </div>
    </div>
    


    <!-- <footer>
        <p>&copy; 2024 zwena. All rights reserved.</p>
    </footer> -->
</body>
</html>
