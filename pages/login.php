<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Home · BTC de Pettelaer</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/login.css">
    <script src="../scripts/script.js" defer></script>
</head>
<body>
    <?php
    session_start();

    if (isset($_POST["logout"])) {
        session_destroy();
        unset($_SESSION["loggedin"]);
        echo "destroyed";
    } elseif ($_SESSION["loggedin"] == true) {
        header('Location: overzicht.php');
    }
    ?>
    <header>
        <nav>
            <ul>
                <li>
                    <img src="../images/logo@2x.png" alt="Pettelaer Logo">
                </li>
                <li class="inlog--link__container">
                    <a class="inlog--link" href="login.php">
                        <span>
                            <svg viewBox="0 0 448 512">
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                            </svg>
                        </span> 
                        <span>Inloggen</span>
                    </a>
                    <form class="search--container">
                        <svg viewBox="0 0 512 512">
                            <path d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z">
                            </path>
                        </svg>
                        <input type="search"> 
                    </form>                 
                </li>
            </ul>
        </nav>
    </header>
    <main>
    <div class="login--container open">
            <a href="../index.php" class="exit-btn">
                <svg viewBox="0 0 320 512">
                    <path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"></path>
                </svg>
            </a>
            <div class="content--wrapper">
                <article>
                    <svg viewBox="0 0 1104.51 798.9">
                        <defs>
                            <linearGradient id="d64dd008-0b7c-476d-9152-2ee1019c24ab" x1="778.88" y1="597.01" x2="778.88" y2="287.01" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="gray" stop-opacity="0.25" />
                                <stop offset="0.54" stop-color="gray" stop-opacity="0.12" />
                                <stop offset="1" stop-color="gray" stop-opacity="0.1" />
                            </linearGradient>
                            <linearGradient id="b18575fc-07c4-4a11-b143-4649daeb988c" x1="514.35" y1="472.3" x2="514.35" y2="454.49" xlink:href="#d64dd008-0b7c-476d-9152-2ee1019c24ab" />
                        </defs>
                        <path d="M835.69,342.07a13.67,13.67,0,0,0,9.86,5.19,31.65,31.65,0,0,1-10.11,6.32c-10.82,4.25-23.92,3-33.24-4.08-2.19-1.67-4.29-3.66-7-4.31-2.32-.57-4.76,0-7.16-.13a14.21,14.21,0,0,1-12.92-10.62c-.69-2.93-.41-6-.91-9a14,14,0,0,0-.33-1.51c-1.4-5-7.94-10.38-13.45-8.92-5.2,1.37-7.87,9.55-7.76,14.23.11,5.15,2.6,10.07,2.44,15.22-.18,5.77-3.85,11.13-8.84,14a24.1,24.1,0,0,1-16.77,2.34c4.44-1.75,7.27-6.34,8.08-11s-.11-9.52-1.29-14.14a15.72,15.72,0,0,1-.74-4.7c.09-1.69.75-3.29,1-5,.73-5.45-3.2-10.69-2.66-16.16a12.79,12.79,0,0,1,5.56-8.85,25.32,25.32,0,0,1,10-3.86c2.82-.54,6-1,7.82-3.19,1.09-1.28,1.58-3,2.83-4.15,1.82-1.63,4.59-1.42,7-1.1,13.73,1.82,28.59,4.73,37.58,15.27,1.88,2.2,3.47,4.72,5.81,6.42,3.24,2.37,7.45,2.84,11.23,4.2a24.79,24.79,0,0,1,13.35,11.57c1,2,2,4.24,4,5.18a8.47,8.47,0,0,0,3.13.58l10.54.6A18.83,18.83,0,0,1,835.69,342.07Z" transform="translate(-47.74 -50.55)" fill="#f55f44" />
                        <path d="M782.54,342.2s5.1.53,15.29-1.93,20.39,5.27,20.39,5.27l21.44,1.76,43.58-10.19s11.25-23.55,16.52-17.22-4.92,21.09-8.08,22.85L847,361.7s-33.74,4.57-36.9,2.11l-.7,9.49-16.87-8.08L785.18,348Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M753.19,357.13l-14.41,9.14a48.71,48.71,0,0,0-16.52,23.9l-10.9,17.22s-7,6.68-10.9,7.73l-32.69,28.82s-19.68,10.9-7,18.28,15.82-11.6,15.82-11.6l38-25.31s31.28-28.82,31.28-35.15l11.25,4.92Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M745.81,389.47c0,6.33-31.28,35.15-31.28,35.15l-38,25.31s-3.16,19-15.82,11.6c-2.9-1.69-4.1-3.57-4.23-5.45-.14,2.12,1,4.25,4.23,6.16,12.65,7.38,15.82-11.6,15.82-11.6l38-25.31s31.28-28.82,31.28-35.15l11.25,4.92-.07-.74Z" transform="translate(-47.74 -50.55)" opacity="0.05" />
                        <path d="M795.2,462.83s-11,34.87-10.73,39.43,4.18,12.8,12.09,19.54l22.19,35.75,6.83,14.26,13.43-3.7s-5-8.89-6.94-16.94c0,0-5.39-25.09-21.89-44.08,0,0-3.25-2.73,1.77-11.76,0,0,24.72-29.76,25.55-41.85Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M795.2,462.83s-11,34.87-10.73,39.43,4.18,12.8,12.09,19.54l22.19,35.75,6.83,14.26,13.43-3.7s-5-8.89-6.94-16.94c0,0-5.39-25.09-21.89-44.08,0,0-3.25-2.73,1.77-11.76,0,0,24.72-29.76,25.55-41.85Z" transform="translate(-47.74 -50.55)" opacity="0.05" />
                        <path d="M793.61,454.14s-25,26.71-26.71,30.93-1.76,13.36,2.46,22.85l4.57,41.83v15.82L787.64,568s-.7-10.19,1.05-18.28c0,0,6-25-.7-49.21,0,0-1.76-3.87,6.68-9.84,0,0,35.15-16.17,41.12-26.71Z" transform="translate(-47.74 -50.55)" opacity="0.1" />
                        <path d="M793.26,454.14s-25,26.71-26.71,30.93-1.76,13.36,2.46,22.85l4.57,41.83v15.82L787.29,568s-.7-10.19,1.05-18.28c0,0,6-25-.7-49.21,0,0-1.76-3.87,6.68-9.84,0,0,35.15-16.17,41.12-26.71Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M755,339.91s4.92,7.73,0,17.93l4.92,25.31,20.39-2.81,9.84-11.25L782.37,342s-6.33,2.46-7-14.76Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M750.73,356.78s1.41,18.63,3.16,22.85l-1.41,14.76s-.35,14.76,17.93,18.63c0,0,17.57,17.93,17.22,22.85s5.27,15.46,5.27,15.46l-7,6,.35,4.92,4.92-4.92s42.53,31.28,65,10.19l-3.51-22.14s1.58-20.91-24.08-37.78c0,0-13.88-17.4-18.8-39.54,0,0-14.06-1.41-17.57-6.68l-7-21.09-5.8,1.23,5.45,23.37s-6.33,21.09-23.9,12l-4-25Z" transform="translate(-47.74 -50.55)" fill="#252a62" />                        
                        <path d="M589.64,482.18a33,33,0,0,1-9.26-1.27c-7.46-2.17-13.09-6.61-16.28-12.85a27.37,27.37,0,0,1-2-18.7c2.82-12,13.69-23.55,30.9-20.46l.58.11a42.88,42.88,0,0,1,16.71,7.14c28.56,20.1,35,17.41,35,17.38l1.06-.61v4.46l-.77-.08c-9.38-1-24,9.74-31.94,16.2a37.69,37.69,0,0,1-20.86,8.55Q591.18,482.18,589.64,482.18Zm-2.15-52.38c-13.28,0-21.68,9.76-24.05,19.88-2.62,11.19,1.68,25.32,17.33,29.87a32.92,32.92,0,0,0,11.88,1.09,36.3,36.3,0,0,0,20.08-8.24c7.86-6.43,22.33-17,32.2-16.56V455c-2.77.32-11.56-.9-35.48-17.74a41.48,41.48,0,0,0-16.17-6.91l-.57-.11A29.62,29.62,0,0,0,587.49,429.81Z" transform="translate(-47.74 -50.55)" fill="#535461" />
                        <path d="M595.79,401.13H626a3.51,3.51,0,0,1,3.51,3.51v0a3.51,3.51,0,0,1-3.51,3.51H595.79a0,0,0,0,1,0,0v-7A0,0,0,0,1,595.79,401.13Z" fill="#535461" />
                        <rect x="595.79" y="401.13" width="4.22" height="7.03" fill="#f0e4e4" />
                        <path d="M616,471.58l-.82-1.14c6-4.31,9-9,9-14,0-8.53-8.92-15.16-9-15.22l.83-1.14c.39.29,9.61,7.1,9.59,16.36C625.6,461.91,622.38,467,616,471.58Z" transform="translate(-47.74 -50.55)" fill="#535461" />
                        <circle cx="714.94" cy="275.3" r="19.68" fill="#fdb797" />
                        <path d="M761.75,321c2,.8,3.33,2.68,5.23,3.65,2.73,1.39,6,.67,9.06,1.24,3.43.65,6.57,3,10,2.68,4.12-.36,7.13-4.68,7-8.81s-2.85-7.83-6.21-10.23-7.36-3.72-11.29-5c-5-1.65-10.4-3.31-15.57-2.12-4.82,1.11-17.8,7.49-17.13,13.53C743.93,325.65,756.73,319,761.75,321Z" transform="translate(-47.74 -50.55)" opacity="0.1" />
                        <path d="M761.75,320.31c2,.8,3.33,2.68,5.23,3.65,2.73,1.39,6,.67,9.06,1.24,3.43.65,6.57,3,10,2.68,4.12-.36,7.13-4.68,7-8.81s-2.85-7.83-6.21-10.23-7.36-3.72-11.29-5c-5-1.65-10.4-3.31-15.57-2.12-4.82,1.11-17.8,7.49-17.13,13.53C743.93,324.95,756.73,318.29,761.75,320.31Z" transform="translate(-47.74 -50.55)" fill="#f55f44" />
                        <g opacity="0.05">
                            <path d="M758.82,377.87c6.15,3.2,10.92,2.69,14.53.69-3.24,1-7.22.78-12.07-1.74l-4-25-2.33,1.89Z" transform="translate(-47.74 -50.55)" />
                            <path d="M783.07,341.32l7,21.09c3.51,5.27,17.57,6.68,17.57,6.68,4.92,22.14,18.8,39.54,18.8,39.54,25.66,16.87,24.08,37.78,24.08,37.78l3.51,22.14a26,26,0,0,1-6.37,4.4,25.92,25.92,0,0,0,8.83-5.46L853,445.35s1.58-20.91-24.08-37.78c0,0-13.88-17.4-18.8-39.54,0,0-14.06-1.41-17.57-6.68l-7-21.09-5.8,1.23.12.51Z" transform="translate(-47.74 -50.55)" />
                            <path d="M789,458.36l-2.55,2.55.09,1.31,3.28-3.28Z" transform="translate(-47.74 -50.55)" />
                        </g>
                        <path d="M803.63,447.29s14.76-10.19,26.71-10.19" transform="translate(-47.74 -50.55)" opacity="0.1" />
                        <path d="M773.4,410.38s8.44-5.27,10.9-9.49" transform="translate(-47.74 -50.55)" opacity="0.1" />
                        <path d="M666.55,448s-4.22,5.27-2.11,7,7.38-6,7.38-6Z" transform="translate(-47.74 -50.55)" fill="#fdb797" />
                        <path d="M514.35,454.49a8.91,8.91,0,0,0-8.91,8.91,8,8,0,0,0,0,.88q0,.24.06.48l0,.13v0a8.83,8.83,0,0,0,3,5.27l.29.24a8.91,8.91,0,1,0,5.48-15.92Z" transform="translate(-47.74 -50.55)" fill="url(#b18575fc-07c4-4a11-b143-4649daeb988c)" />
                        <path d="M509.24,469.94a8.31,8.31,0,1,0-3.2-6.54,7.42,7.42,0,0,0,0,.82q0,.22.05.45l0,.12v0a8.25,8.25,0,0,0,2.81,4.92Z" transform="translate(-47.74 -50.55)" fill="#3ad29f" />
                        <path d="M509.24,469.94l.29,0c.11-1.16,3.34-3,6-4.49,2.79-1.59,4.52-2.61,4.8-3.47.37-1.1-.73-2.39-1.91-3.11-1.4-.87-3.4-1.28-4.82.14a43.68,43.68,0,0,1-7.47,5.18l.05.45,0,.12v0l0,0c.22-.12,5.41-3,7.79-5.4,1.18-1.17,2.89-.8,4.09,0s1.87,1.77,1.66,2.42-2.52,2-4.54,3.14c-2.87,1.65-5.84,3.33-6.21,4.76Z" transform="translate(-47.74 -50.55)" fill="#f0e4e4" />
                        <path d="M833,553.26s-9,8.44-14.35,11.6l4.86,4.57L839,567.31v-8.44Z" transform="translate(-47.74 -50.55)" fill="#f0e4e4" />
                        <polygon points="726.89 511.85 723.73 510.44 723.73 519.58 741.3 522.39 741.3 514.31 726.89 511.85" fill="#f0e4e4" />
                        <path d="M769,561s.7,11.6-16.52,18.28c0,0-17.93,1.76-5.62,10.54s49.56-2.46,49.56-2.46-.7-11.25-4.92-20.39C791.5,567,771.12,565.61,769,561Z" transform="translate(-47.74 -50.55)" opacity="0.05" />
                        <path d="M769,562s.7,11.6-16.52,18.28c0,0-17.93,1.76-5.62,10.54s49.56-2.46,49.56-2.46-.7-11.25-4.92-20.39C791.5,568,771.12,566.61,769,562Z" transform="translate(-47.74 -50.55)" fill="#f0e4e4" />
                        <path d="M820.32,568.42s.35,12.65-10.9,15.11,4.57,9.84,10.9,8.08S852.66,567,852.66,567,843.52,553,837.55,553C837.55,553,826.65,571.24,820.32,568.42Z" transform="translate(-47.74 -50.55)" opacity="0.05" />
                        <path d="M820.32,569.42s.35,12.65-10.9,15.11,4.57,9.84,10.9,8.08S852.66,568,852.66,568,843.52,554,837.55,554C837.55,554,826.65,572.24,820.32,569.42Z" transform="translate(-47.74 -50.55)" fill="#f0e4e4" />
                        <polygon points="256.11 453.46 306.09 554.97 356.08 656.47 256.11 656.47 156.14 656.47 206.12 554.97 256.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="98.11 453.46 148.09 554.97 198.08 656.47 98.11 656.47 98.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="187.11 453.46 237.09 554.97 287.08 656.47 187.11 656.47 107.11 649.47 112.63 604.71 137.12 554.97 187.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="304.11 453.46 354.09 554.97 404.08 656.47 304.11 656.47 204.14 656.47 254.12 554.97 304.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="397.11 453.46 447.09 554.97 497.08 656.47 397.11 656.47 297.14 656.47 347.12 554.97 397.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="497.11 453.46 547.09 554.97 597.08 656.47 497.11 656.47 397.14 656.47 447.12 554.97 497.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="597.11 453.46 647.09 554.97 697.08 656.47 597.11 656.47 497.14 656.47 547.12 554.97 597.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="699.11 453.46 749.09 554.97 799.08 656.47 699.11 656.47 599.14 656.47 649.12 554.97 699.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="800.11 453.46 850.09 554.97 900.08 656.47 800.11 656.47 700.14 656.47 750.12 554.97 800.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="894.11 453.46 944.09 554.97 994.08 656.47 894.11 656.47 794.14 656.47 844.12 554.97 894.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="1034.78 656.47 979.14 656.47 1029.12 554.97 1031.11 550.94 1034.78 656.47" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="954.11 453.46 1004.09 554.97 1054.08 656.47 954.11 656.47 854.14 656.47 904.12 554.97 954.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="983.11 453.46 1033.09 554.97 1044.11 577.33 1044.11 656.47 983.11 656.47 883.14 656.47 933.12 554.97 983.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="1016.11 453.46 1016.11 656.47 916.14 656.47 966.12 554.97 1016.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="453.11 453.46 503.09 554.97 553.08 656.47 453.11 656.47 353.14 656.47 403.12 554.97 453.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="650.11 453.46 700.09 554.97 750.08 656.47 650.11 656.47 550.14 656.47 600.12 554.97 650.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="847.11 453.46 897.09 554.97 947.08 656.47 847.11 656.47 747.14 656.47 797.12 554.97 847.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="1044.11 453.46 1048.54 462.47 1042.11 555.47 1044.11 656.47 1044.11 656.47 944.14 656.47 994.12 554.97 1044.11 453.46" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="854.11 657.47 804.12 555.97 754.14 454.46 854.11 454.46 954.08 454.46 904.09 555.97 854.11 657.47" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="649.11 657.47 599.12 555.97 549.14 454.46 649.11 454.46 749.08 454.46 699.09 555.97 649.11 657.47" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="444.11 657.47 394.12 555.97 344.14 454.46 444.11 454.46 544.08 454.46 494.09 555.97 444.11 657.47" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <polygon points="239.11 657.47 189.12 555.97 139.14 454.46 239.11 454.46 339.08 454.46 289.09 555.97 239.11 657.47" fill="none" stroke="#f0e4e4" stroke-miterlimit="10" />
                        <rect x="125.11" y="444.47" width="910" height="18" fill="#f0e4e4" />
                        <rect x="125.11" y="649.47" width="910" height="18" fill="#f0e4e4" />
                        <rect x="96.11" y="429.47" width="36" height="253" fill="#535461" />
                        <rect x="1017.11" y="429.47" width="36" height="253" fill="#535461" />
                    </svg>
                </article>
                <article class="form--container">
                    <form action="overzicht.php" method="POST">
                        <h2>Inloggen</h2>
                        <div class="input--container">
                            <div class="svg--container">
                                <svg viewBox="0 0 448 512">
                                    <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                                </svg>
                            </div>

                            <input name="username" type="text" placeholder="Username" required />
                        </div>
                        <div class="input--container">
                            <div class="svg--container">
                                <svg viewBox="0 0 448 512">
                                    <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
                                </svg>
                            </div>
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Login" class="btn" />
                    </form>
                </article>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <p>2021 &copy; BTC de Pettelaer · Powered by <a href="https://markiesch.github.io/portfolio/" target="_blank">Mark Schuurmans</a></p>
            <a class="top" href="">Terug naar boven</a>
        </div>
    </footer>
</body>
</html>