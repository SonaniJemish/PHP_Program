<html>
    <head>
        <title>Practical 19</title>
    </head>
    <body>      
        <?php 
        
        session_start();
            
        if(isset($_SESSION['views']))
            $_SESSION['views'] = $_SESSION['views']+1;
        else
            $_SESSION['views']=1;
                
        echo"Visitor load this site : ".$_SESSION['views']." times";       
        ?>
    </body>
</html>