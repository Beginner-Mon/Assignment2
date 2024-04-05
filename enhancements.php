<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.inc"; ?>

    <title>Document</title>
</head>

<body>
    <style>
        .enhances_container {
            height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
            width: 90%;
            margin: auto;

        }



        .enhances_container_hyperlink {
            text-decoration: none;
            font-size: 3rem;
            padding: 20px;
            color: #003459;

        }

        @media (max-width: 578px) {
            .enhances_container_hyperlink {
                font-size: 1.4rem;
            }
        }
    </style>
    <?php require_once ("header.php"); ?>
    <div class="enhances_container">
        <p class="enhances_container_content"><a class="enhances_container_hyperlink" href="enhancements1.php">
                Enhancements&nbsp;1 </a></p>

        <p class="enhances_container_content"><a class="enhances_container_hyperlink" href="enhancements2.html">
                Enhancements&nbsp;2 </a></p>

    </div>



    <?php require_once ("footer.inc"); ?>
</body>

</html>