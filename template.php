<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="author" content="Jonathan Ibarra">
    <meta name="description" content="CS 312: FuelPHP Project">
    <?php echo Asset::css($css) ?>
</head>



<body>
    <?php echo Asset::img('cyberlock.jpeg', array('class' => 'image', 'width' => '200px')); ?>
    <h1><!--fictitious company name--></h1>
    <nav>
        <ul>
            <li><a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/index">Home</a></li>
            <li><a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/about">About</a></li>
            <li><a href="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/color">Color Coordinate</a></li>
            
        </ul>
    </nav>
    <?php echo $content ?>
    <footer>
        <p>For the CSU class CS 312</p>
    </footer>
</body>
