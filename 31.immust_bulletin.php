<html>
    <head>
        <title>明新科技大學資訊管理系</title>
        <!-- 設定網頁字元編碼為UTF-8 -->
        <meta charset="utf-8">
        <!-- 引入FlexSlider CSS庫（圖片輪播效果） -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 引入jQuery庫 -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 引入FlexSlider的JS檔案 -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
        <script>
            // 當頁面載入時，初始化FlexSlider
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide", // 設定為滑動動畫效果
                    rtl: true // 設定從右到左顯示
                });
            });
        </script>
        <style>
            /* 全域樣式設置 */
            * {
                margin: 0;
                color: gray;  /* 設置文字顏色為灰色 */
                text-align: center; /* 設置文字置中 */
            }
            
            /* 頂部區塊（top） */
            .top {
                background-color: white; /* 背景為白色 */
            }
            .top .container {
                display: flex; /* 使用Flexbox布局 */
                align-items: center; /* 垂直置中 */
                justify-content: space-between; /* 水平分散對齊 */
                padding: 10px; /* 設定內邊距 */
            }
            .top .logo {
                font-size: 35px; /* 設定文字大小 */
                font-weight: bold; /* 設定字型加粗 */
            }
            .top .logo img {
                width: 100px; /* 設定圖片寬度 */
                vertical-align: middle; /* 垂直置中圖片 */
            }
            .top .top-nav {
                font-size: 25px;
                font-weight: bold;
            }
            .top .top-nav a {
                text-decoration: none; /* 去除文字下劃線 */
            }
            
            /* 導航列區塊 (nav) */
            .nav {
                background-color: #333; /* 設定背景為深灰色 */
                display: flex; /* 使用Flexbox布局 */
                justify-content: center; /* 水平置中 */
            }
            .nav ul {
                list-style-type: none; /* 移除無序清單的預設樣式 */
                margin: 0; 
                padding: 0; 
                overflow: hidden; /* 防止內容溢出 */
                background-color: #333; 
            }
            .nav li {
                float: left; /* 讓列表項目水平排列 */
            }
            .nav li a {    
                display: block;  
                color: white;  
                text-align: center;  
                padding: 14px 16px;  /* 設定內邊距 */
                text-decoration: none;  /* 移除連結下劃線 */
            }
            .nav li a:hover {
                background-color: #111; /* 當滑鼠懸停時背景顏色變深 */
            }
            
            /* 下拉式選單 */
            .dropdown:hover .dropdown-content {
                display: block; /* 當滑鼠懸停在dropdown上時，顯示下拉選單 */
            }
            li.dropdown:hover {
                background-color: #333; /* 設定下拉選單背景顏色 */
            }
            .dropdown-content {
                display: none; /* 預設隱藏下拉選單 */
                position: absolute;
                background-color: #333;
                min-width: 160px;
                z-index: 1; /* 確保下拉選單顯示在最上層 */
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            
            /* 圖片輪播區塊 (slider) */
            .slider {
                background-color: black; /* 設定背景為黑色 */
            }
            
            /* Banner區塊 */
            .banner {
                background-image: linear-gradient(#ABDCFF, #0396FF); /* 設定漸變背景 */
                padding: 30px;
            }
            .banner h1 {
                padding: 20px;
            }
            
            /* 師資介紹區塊 (faculty) */
            .faculty {
                display: block;
                justify-content: center;
                background-color: white; /* 背景顏色為白色 */
                padding: 40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50, 51, 52);
                padding-bottom: 40px;
            }
            .faculty .container {
                display: flex;
                justify-content: space-around; /* 水平分散排列 */
                align-items: center;
            }
            .faculty .teacher {
                display: block;
                text-decoration: none; /* 移除文字下劃線 */
            }
            .faculty .teacher img {
                height: 200px;
                width: 200px; /* 設定圖片大小 */
            }
            .faculty .teacher h3 {
                color: white;
                background-color: rgba(39, 40, 34, .5);
                text-align: center; /* 文字置中 */
            }
            
            /* 相關資訊區塊 (contact) */
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;
            }
            .contact h2 {
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            .contact .infos {
                display: flex;
                margin-top: 30px;
                justify-content: center;
            }
            .contact .infos .left {
                display: block;
                text-align: left;
                margin-right: 30px;
            }
            .contact .infos .left b {
                display: block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: gray;
                font-size: 18px;
                line-height: 18px;
            }
            .contact .infos .left span {
                display: block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39, 40, 34, 0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            .contact .infos .right {
                height: 200px;
            }
            .contact .infos .right iframe {
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39, 40, 34, 0.5);
            }
            
            /* 頁尾區塊 (footer) */
            .footer {
                display: flex;
                justify-content: center;
                background-color: rgb(25, 26, 30);
                padding: 30px 0;
            }
            
            /* 登入畫面樣式 */
            .modal {
                display: none; /* 隱藏登入視窗 */
                position: fixed; /* 固定在頁面 */
                z-index: 1; /* 顯示在最上層 */
                right: 50;
                top: 50;
                width: 20%; /* 設定寬度 */
                height: 20%; /* 設定高度 */
                overflow: auto; /* 開啟滾動條 */
                background-color: rgba(255, 255, 255, 0.9); /* 背景透明 */
                padding-top: 50px;
            }
            
            /* 佈告欄區塊 */
            .bulletin {
                display: block;
                justify-content: center;
                background-color: rgb(255, 204, 153);
                padding: 30px 0;
            }
            .bulletin h1 {
                padding: 10px;
            }
            .bulletin table {
                border-collapse: collapse;
                font-family: 微軟正黑體;
                font-size: 16px;
                border: 1px solid #000;
            }
            .bulletin table th {
                background-color: #abdcff;
                color: #ffffff;
            }
            .bulletin table td {
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    </head>
    <body>
        <!-- 頂部區塊 -->
        <div class="top">
            <div class="container">
                <div class="logo">
                    <!-- 明新科技大學標誌圖片 -->
                    <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                    明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                    <!-- 導航連結 -->
                    <a href="">明新科大</a>
                    <a href="">明新管理學院</a>
                    <!-- 登入按鈕 -->
                    <label onclick="document.getElementById('login').style.display='block'">登入</label>
                    <!-- 跳出登入畫面 -->
                    <div id="login" class="modal">
                        <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                        <form method="post" action="10.login.php">
                            帳號：<input type="text" name="id"><br />
                            密碼：<input type="password" name="pwd"><p></p>
                            <input type="submit" value="登入"> <input type="reset" value="清除">
                        </form>
                    </div>  
                </div>
            </div>
        </div>

        <!-- 主導航 -->
        <div class="nav">
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>

        <!-- 圖片輪播區 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>

        <!-- 佈告欄 -->
        <div class="bulletin">
            <h1>最新公告</h1>
            <?php
                // 連接資料庫
                $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                // 查詢佈告資料
                $result = mysqli_query($conn, "SELECT * FROM bulletin");
                // 顯示表格
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                // 循環顯示每條佈告資料
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    // 顯示佈告類別
                    if ($row["type"] == 1) echo "系上公告";
                    if ($row["type"] == 2) echo "獲獎資訊";
                    if ($row["type"] == 3) echo "徵才資訊";
                    echo "</td><td>";
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"];
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>

        <!-- 系所簡介區 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>

        <!-- 師資介紹區 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>

        <!-- 相關資訊區 -->
        <div class="contact" id="about">
            <h2>相關資訊</h2>
            <div class="infos">
                <div class="left">
                    <b>明新科技大學管理學院大樓二樓</b>
                    <span>304新竹縣新豐鄉新興路1號</span>
                    <b> 電話:03-5593142</b>
                    <span>分機:3431、3432、3433</span>
                    <b> 傳真:03-5593142</b>
                    <span>分機:3440</span>
                </div>
                <div class="right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- 頁尾區 -->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
    </body>
</html>
