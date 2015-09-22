<div id='switchContent'>
    <h3>Switch Statement</h3>
    
    <?php
    
    //To display the form:
        function displayForm($error){
            $currentYr = getdate();
            $form = "<p class='formErr'>{$error}</p>
            <form class='form-inline' role='form' id='ifElseForm' action='index.php?page=switchStatement' method='POST'>
            <div class='form-group'>
            <label for='submitIfElseYr'>Enter your birth year:</label>
            <input type='number' class='form-control' name='submitIfElseYr' min='1912' max='{$currentYr['year']}' placeholder='{$currentYr['year']}' autofocus /><br/>
            <input type='submit' class='btn btn-default' value='Get Zodiac Animal'/>
            </div>
            </form>";
            
            echo $form;
        }
        
        function displaySign($year, $animal, $message){
            $linkToGallery = "<a href='index.php?page=home_page&AMP;section=zodiac'>the gallery</a>";
            echo "<img src='./img/animals/{$animal}.jpg' class='img-circle center-block' alt='{$animal}' width='304' height='236'/><p class='lead'>You entered: {$year}<br/>The year of the <span class='text-capitalize'>{$animal}</span></p><p>{$message}</p>";
            echo "<p>Please visit {$linkToGallery} to view all of the Chinese Zodiac Animals!</p>";
        }
        
        if(!isset($_POST['submitIfElseYr'])){
            displayForm("&nbsp;");
        }
        else{
            $yr = $_POST['submitIfElseYr'];
            
            //If user didn't enter a value:
            if(empty($yr)){
                displayForm("Please enter a value below.");
            }
            else{
                $animalYr = $yr % 12;
                $animal = array('rat', 'ox', 'tiger', 'rabbit', 'dragon', 'snake', 'horse', 'sheep', 'monkey', 'rooster', 'dog', 'pig');
                
                switch ($animalYr){
                    case 0:
                        $message = "Monkeys are known to be clever. They are lively, flexible, quick-witted, and versatile. They also tend to be problem solvers and sociable. Although they possess weaknesses like jealousy, suspicion, 
                        cunning, selfish, and arrogant at times. They can also be impatient and big-mouthed.";
                         displaySign($yr, $animal[8], $message);
                         break;
                    case 1:
                        $message = "Characteristics of the rooster include deep thinking, honest, bright, and communicative. They are also ambitious, have strong self-respect, and prefer to dress up. Their weaknesses include being a little 
                        eccentric and have a difficult time relating with others. They tend to think that they are always right and their emotions swing from very high to very low. They are positive but selfish and outspoken.";
                        displaySign($yr, $animal[9], $message);
                        break;
                    case 2:
                        $message = "Many people born under the year of the dog are known to be faithful and loyal. They also have strengths like courageous, smart, warm-hearted, and trusting. They can become great leaders and inspire confidence 
                        in others. Although they have weaknesses such as the lack of stability, emotionally cold, and possess a sharp tongue. They are sometimes bothered by anxiety.";
                        displaySign($yr, $animal[10], $message);
                        break;
                    case 3:
                        $message = "Those born in the year of the pig tend to be honest and chivalrous. They keep a calm appearance and a strong heart. They are also quick tempered but hate arguing and drama. Unfortunately they possess weaknesses 
                        like being too naive. They are also hot-tempered, impulsive, and are not good at communicating with others.";
                        displaySign($yr, $animal[11], $message);
                        break;
                    case 4:
                        $message = "The characteristics of a rat is one with spirit, wit, alertness, deilcacy, flexibility, and vitality. T
                        hose born in the year of the rat are usually smart, wealthy, and will work for success. 
                        They are very adaptable, clean, clever, personable, materialistic, and are thoughtful and curious by nature. Although they have weaknesses 
                        that include the lack of concentration and stability. 
                        They are often unable to lead and are 
                        likely to speculate and profess their greed as a virtue.";
                        displaySign($yr, $animal[0], $message);
                        break;
                    case 5:
                        $message = "The characteristics of an ox are persistent, simple, honest, straightforward, and are said to 
                        have an oxen temper. Those that are born in the year of the ox have strengths that include 
                        being a talented leader with strong will, faith, devotion to work, and staying in power.
                        They are also kind-hearted and honest in nature. Although their weaknesses include poor communication 
                        silent, and persistent in their old ways.";
                        displaySign($yr, $animal[1], $message);
                        break;
                    case 6:
                        $message = "Those born in the year of the tiger are known to be tolerant, loyal, and respected. Their strengths include intelligent,faithful, virtuous, and 
                        good at expressing themselves. They have weaknesses that include short-tempered and make hasty decisions that may result in poor consequences. They 
                        can also be over confident and traitorous as a result of poor communication and cooperation with others.";
                        displaySign($yr, $animal[2], $message);
                        break;
                    case 7:
                        $message = "Those born under the year of the rabbit tend to be sensitive, compassionate, modest, and merciful. They also like to communicate with others and
                        have strong memory. Weaknesses include stubbornness and are amorous and not determined. They tend to lack reflective abilities and poor money into ideas that may 
                        cause failures in their career.";
                        displaySign($yr, $animal[3], $message);
                        break;
                    case 8:
                        $message = "Dragons have very honorable, successful, and lucky characteristics. People born in the year of the dragon are lively, intellectual, energeticm and excitable. They
                        make good leaders and strive for perfection. They cannot stand hypocrisy, gossip, and slander. Their weaknesses include being a impatient, over-confident, and unable to control 
                        their moods.They might feel the need to criticize others for the lack of work.";
                        displaySign($yr, $animal[4], $message);
                        break;
                    case 9:
                        $message = "A person born in the year of the snake tend to be good tempered and have good communication skills. They have great morality, financial wisdom, and sympathy for others.
                        Although they possess weaknesses such as jealousy and suspicion. They tend to overdo things and rely on themselves with doubts of others.";
                        displaySign($yr, $animal[5], $message);
                        break;
                    case 10:
                        $message = "Horses are energetic, warm-hearted, and intelligent. Their strengths include being clever, kind to others, and are cheerful. They can be earthy but stubborn. Unfortunately, they 
                        can be impatient, hot headed, and independent, unable to listen to advice given to by others. They are also not good with financial matters due to the lack of efficiency in budget keeping.";
                        displaySign($yr, $animal[6], $message);
                        break;
                    case 11:
                       $message = "Many sheep are known to be gentle and calm. Their characteristics include tender, polite, clever, and kind-hearted. They are more willing to take good care of others. Their weaknesses include 
                        pessimistic, shy, moody, indecisive, over-sensitive, and weak-willed. They are also deeply religious and timid in nature.";
                        displaySign($yr, $animal[7], $message); 
                        break;
                }
            }
        }
        
    ?>
    
</div>