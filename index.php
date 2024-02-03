<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
<title>ბმულები</title>
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;
       font-size: 14px;
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=url] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    } 
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style> 
</head>
<body>
<div style="background-color: #eeeeee; margin:30px; text-align:center; width: auto; height: auto;"> 
<h1><font color='#888888'>bmulebi.com ბმულის გაზიარება</font></h1>
</div>
 <center><h2><font color='#555555'>ბმული</font> <a href='<?php
echo file_get_contents('data.txt');
?>'><?php
echo file_get_contents('data.txt');
?></a></h2>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php
echo file_get_contents('data.txt');
?>" target="_blank">
<font color='#5555ff'>ბმულის გაზიარება Facebook-ზე</font> <font color='#aaaaaa'>|</font> <a href="https://connect.ok.ru/offer?url=<?php
echo file_get_contents('data.txt');
?>" target="_blank">
<font color='#5555ff'>ბმულის გაზიარება Одноклассники-ზე</font>
</a><br>
</center><br>
<form action='add.php' method='POST'>
<div class="container"> 
<input type='url' value='http://' placeholder="ბმული" name='text' required><button type="submit">გაზიარება</button> 
</form>
<div style="background-color: #fafafa; color: #0000ff; text-align: center; font-size: 14px; border: 2px solid #fafafa; padding: 0px; margin: 5px; text-align: center; text-decoration: underline; display: block; position: fixed; bottom: 0; left: 0;">
                <!-- TOP.GE ASYNC COUNTER CODE -->
                <div id="top-ge-counter-container" data-site-id="116726"></div>
                <script async src="//counter.top.ge/counter.js"></script>
                <!-- / END OF TOP.GE COUNTER CODE -->
</div>
</body>
</html>

