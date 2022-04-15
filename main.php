<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">

                    <?php  echo '<img src="/img/php.jpg" width="300" height="300">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    Годиков </p>
                    <p> Чему мы научились, Палмер? </p>
                    <p> Не знаю, Сэр. </p>
                    <p> Я тоже не знаю. </p>
                    <p> Научились больше этого не делать. </p>
                    <p> Да, Сэр. </p>
                    <p> И еще бы знать ЧТО мы сделали. </p>
                    <p> Да, Сэр... Это сложно сказать </p>
                    <p> Я нихрена не понимаю... </p>
                      <a href="https://www.youtube.com/watch?v=IYHLBL5Sd8I">Неповторимый оригинал смотреть онлайн без регистрации</a>
                      
                </div>
            </div>
            <audio controls>
    
    <source src="audio/leash.mp3" type="audio/mpeg">
    <a href="audio/leash.mp3">Скачайте музыку</a>.
            
<audio controls>
    
    <source src="audio/RFDM.mp3" type="audio/mpeg">
    Тег audio не поддерживается вашим браузером. 
    <a href="audio/RFDM.mp3">Скачайте музыку</a>.
            </div>
            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 5;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 
        </div>
        
        <div class="article">
                <p class="text">
                Credo in Deum, Patrem omnipotentem, Creatorem caeli et terrae. Et in Iesum Christum, Filium eius unicum, Dominum nostrum: qui conceptus de Spiritu Sancto, natus ex Maria Virgine, passus sub Pontio Pilato, crucifixus, mortuus et sepultus: descendit ad inferos; tertia die resurrexit a mortuis: ascendit ad caelos; sedet ad dexteram Dei Patris omnipotentis: inde venturus est iudicare vivos et mortuos. Credo in Spiritum Sanctum, sanctam Ecclesiam catholicam, Sanctorum communionem, remissionem peccatorum, carnis resurrectionem, vitam aeternam. Amen. 
                </p>
            </div>
            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>