<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="author" content="Jonathan Ibarra, Charli Dolan, Nathan Rogers">
    <meta name="description" content="CS 312: FuelPHP Project">
    <?php echo Asset::css($css) ?>
</head>



<body>
    <img>
    <h1><!--fictitious company name--></h1>
    <nav>
        <ul>
            <a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/index">Home</a>
            <a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/about">About</a>
            <a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/color">Color Coordinate</a>
            
        </ul>
    </nav>
    <div class="content">
        <?php echo $content ?>
    </div>
    <footer>
        <p>For the CSU class CS 312</p>
    </footer>
</body>
