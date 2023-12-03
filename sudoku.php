<?php 
   
   session_start();
   

?>

<html>
<head>
    <title>
        Sudoku Project
    </title>
    <link rel="stylesheet" href="sudoku.css">
    <script defer src="sudoku.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <button class="home" ><a  href="home.php"> HOME</a> </button>
    
    <h1>SUDOKU PUZZLE</h1>
    <div id="level"><br>
    <h3 style="font-size:20px;color:rgba(17, 14, 14, 0.863);font-style:italic">
    WELCOME <br><?php echo $_SESSION['username']; ?> </h3>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button class="exit"><a href="logout.php"> Exit</a> </button>
    
    </div>

    <div id="Board">
    <span></span>
    <span id="vertical2"></span>
    <div id="first"></div>
    <div id="second"></div>
    </div>

    
    <div id="digits">
    
    <button  class="restart" id="clearall" name="clearAll">RESTART</button><br>
    
    <button id="num" value="1" onclick="action(this)">1</button><button value="2"  id="num" onclick="action(this)">2</button><button  id="num" value="3" onclick="action(this)">3</button><br>
    <button id="num" value="4" onclick="action(this)">4</button><button value="5"  id="num" onclick="action(this)">5</button><button  id="num"  value="6" onclick="action(this)">6</button><br>
    <button id="num" value="7" onclick="action(this)">7</button><button value="8"  id="num" onclick="action(this)">8</button><button  id="num" value="9" onclick="action(this)">9</button><br>
    
    <button class="big" id="hint" name="givehint"><i class="fa-regular fa-lightbulb"></i>  Hint</button>
    <button class="big" id="help" name="deletenum"><i class="fa-solid fa-eraser"></i> Delete</button>
    
    <br><button  class="restart" id="submit" name="complete">SUBMIT</button>

    
    </div>
    
</body>
</html>