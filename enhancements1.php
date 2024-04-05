<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <title>Enhancements</title>
</head>

<body>
    <?php

    require_once "header.php";
    ?>
    <main class="e-container">
        <header class="e-container__header">
            <h1 class="e-container__header-title">Enhancements</h1>
            <h3 class="e-explaination">while doing this assignment, we have added many enhancements that we haven't
                learnt during the class. Here are 2 notable enhancements.</h3>
        </header>
        <section>
            <div class="enhance enhance-1">
                <h1 class="enhance-1__title">Enhancement 1</h1>
                <p class="enhance-2__content">This enhancement introduces an upgraded user interface, taking cues from
                    well crafted websites. By integrating elements like dynamic hover effects and striking imagery, the
                    interface delivers a visually captivating experience. Users can expect visually engaging
                    interactions, making every interaction both intuitive and enjoyable.</p>
                <div class="container-4__boxs">
                    <div class="container-4__box box-1">

                        <img src="images/container-4--img.png" alt="" class="container-4__box__img img1">
                        <div class="container-4__box__news">
                            <h2 class="box__title">Enhancement 1</h2>
                            <p class="box__content">This enhancement introduces an upgraded user interface, taking cues
                                from well crafted websites. By integrating elements like dynamic hover effects and
                                striking imagery, the interface delivers a visually captivating experience. Users can
                                expect visually engaging interactions, making every interaction both intuitive and
                                enjoyable.</p>
                        </div>
                    </div>
                </div>


                <div class="enhance-2__link">
                    <a href="index.html" class="enhance-hyperlink">Enhancement Link</a>

                </div>
                <p class="enhance-2__content enhance-2__content-2"> This enhancement does have a responsive design
                    to a
                    device
                    with a minimum width of 280px (galaxy fold). <br>
                    To implement this feature, the core of it is to apply the
                    <code class="code-content"> display:none</code> property for the content of the container combined
                    with the <code class="code-content">display:flex</code> for the whole content when hovering on it.
                    Additionally, we add more key animation to make the transition runs more smoothly.
                </p>
                <pre>
                    <code>
    .container-4__box__img {
        width: 46%;
        height: auto;
        margin: auto;
        border-radius: 7%;
        animation: img-sliding-left 0.3s;
        min-width: 12rem;
    
    }
    
    .container-4__box__news {
        padding: 0 25px;
        align-items: center;
        margin: auto;
        display: none;
        transition: 0.3s all ease;
    }
    
                    </code>
                </pre>
                <p class="enhance-2__content">then we add animation and hover effect</p>
                <pre>
                    <code>
    .container-4__box:hover {
        background-color: whitesmoke;
        display: flex;
        gap: 10px;
    
        transition: 0.3s all ease;
    }
    
    .container-4__box:hover .container-4__box__news {
        display: block;
        flex: 1;
        animation: pop-up 0.3s;
    
    }
    
    .container-4__box:hover .container-4__box__img {
        flex: 1;
        animation: img-sliding-right 0.3s;
    }
    @keyframes img-sliding-right {
        from {
            transform: translateX(50%);
        }
    
        to {
            transform: translateX(0);
        }
    }
    
    @keyframes img-sliding-left {
        from {
            transform: translateX(-35%);
        }
    
        to {
            transform: translateX(0);
        }
    }
                    </code>
                </pre>

            </div>
            <div class="enhance enhance-2">
                <h1 class="enhance-2__title">Enhancement 2</h1>
                <p class="enhance-2__content"> This enhancements provides an interactive interface, drawing
                    inspiration from well designed website. By incorporating elements such as hover effect and
                    vibrant images, the interface offers a visually compelling and easy to use experience. </p>
                <div class="container--card">
                    <div class="card" style="--clr:#009688;">
                        <div class="imgBx">
                            <img src="images/mission.png" alt="enhance picture">
                        </div>
                        <div class="content--card">
                            <h2>Enhance</h2>
                            <p>To empower statement individuals with innovative technology solutions, fostering a
                                connected and inclusive global community.</p>
                        </div>
                    </div>
                </div>
                <div class="enhance-2__link">
                    <a href="about.html" class="enhance-hyperlink">Enhancement Link</a>
                    <a href="https://www.youtube.com/watch?v=2ipVafDw2ss" class="enhance-reference">Reference</a>
                </div>
                <p class="enhance-2__content enhance-2__content-2"> This enhancement does have a responsive design
                    to a
                    device
                    with a minimum width of 280px (galaxy fold). <br>
                    To implement this feature, the core of it is to apply the
                    <code class="code-content">position</code> property combined with the <code
                        class="code-content">transition</code> property
                </p>
                <pre>
        <code>
    .container--card{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 100px 50px;
        padding: 100px 50px;
    }
    .container--card .card{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 350px;
        height: 300px;
        background: black;
        border-radius: 20px;
        box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
        transition: 0.5s;
    }
    .container--card .card .imgBx{
        position: absolute;
        top: 20px;
        width: 85%;
        height: 60%;
        background: #333;
        border-radius: 12px;
        transition: 0.5s;
        overflow: hidden;
    }
    </code>
    </pre>
                <p class="enhance-2__content">Then we use the hover property to change the design of the current
                    card
                    when hovering on it</p>
                <pre>
        <code>
    .container--card .card:hover{
        height: 400px;
    }
    .container--card .card:hover .imgBx{
        top: -100px;
        scale: 0.75;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
    }
    .container--card .card:hover .imgBx img{
        position: absolute;
        object-fit: cover;
    }
    .container--card .card:hover .content--card{
        top: 120px;
        height: 200px;
    }
        </code>
    </pre>
            </div>

        </section>
        <div class="enhance--video">
            <h1>Demonstration</h1>
            <a href="https://www.youtube.com/watch?v=aXM12EsEh8Y">Video</a>
        </div>
    </main>

    <?php
    require_once "footer.inc"
        ?>
</body>

</html>