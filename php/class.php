<?php

    class zodiac{
        
        private $horoscope;
        

        function __construct($date){
            
            
            
            $this->date = $date;

            if($date >= '1222' && $date >= '0120'){

                $this->horoscope = "<h2>Capricorn</h2>".'<br>'.'<img src="./img/capricorn.gif"/>';

            }

            elseif($date >= '0121' && $date <= '0218'){  

                $this->horoscope = "<h2>Aquarius</h2>".'<br>'.'<img src="./img/aquarius.png"/>';

            }

            elseif($date >= '0219' && $date <= '0320'){  

                $this->horoscope = "<h2>Pisces</h2>".'<br>'.'<img src="./img/pisces.png"/>';

            }
             
            elseif($date >= '0321' && $date <= '0420'){  

                $this->horoscope = "<h2>Aries</h2>".'<br>'.'<img src="./img/aries.png"/>';

            }
             
            elseif($date >= '0421' && $date <= '0521'){  

                $this->horoscope = "<h2>Taurus</h2>".'<br>'.'<img src="./img/taurus.png"/>';

            }

            elseif($date >= '0522' && $date <= '0621'){  

                $this->horoscope = "<h2>Gemini</h2>".'<br>'.'<img src="./img/gemini.png"/>';

            }

            elseif($date >= '0622' && $date <= '0722'){  

                $this->horoscope = "<h2>Cancer</h2>".'<br>'.'<img src="./img/cancer.png"/>';

            }
             
            elseif($date >= '0723' && $date <= '0823'){  

                $this->horoscope = "<h2>Leo</h2>".'<br>'.'<img src="./img/leo.png"/>';
                

            }

            elseif($date >= '0824' && $date <= '0922'){  

                $this->horoscope = "<h2>Virgo</h2>".'<br>'.'<img src="./img/virgo.png"/>';

            }

            elseif($date >= '0923' && $date <= '1023'){  

                $this->horoscope = "<h2>Libra</h2>".'<br>'.'<img src="./img/libra.png"/>';

            }
             
            elseif($date >= '1024' && $date <= '1122'){  

                $this->horoscope = "<h2>Scorpio</h2>".'<br>'.'<img src="./img/scorpio.png"/>';

            }

            elseif($date >= '1123' && $date <= '1221'){  

                $this->horoscope = "<h2>Saggitarius</h2>".'<br>'.'<img src="./img/sagittarius.png"/>';

            }
            else{

                $this->horoscope = "Plz enter a valid socialnumber";
            }
        }
        
        
        public function printSign(){

            return $this->horoscope;

        }


    
    }

    $date = substr($_POST["socialnumber"], -4, 4);
    $horoscope = new zodiac($date);
   
   
?>
