<?php

    class zodiac{
        
        private $horoscope;
        private $valid = true;

        function __construct($date){
            
            
            
            $this->date = $date;

            if($date >= '1222' && $date <= '1231' || $date >= '0101' && $date <= '0120'){

                $this->horoscope = "<h2>Capricorn</h2>".'<br>'.'<img src="./img/capricorn.gif"/>';

            }

            elseif($date >= '0121' && $date <= '0131' || $date >= '0201' && $date <= '0218'){  

                $this->horoscope = "<h2>Aquarius</h2>".'<br>'.'<img src="./img/aquarius.png"/>';

            }

            elseif($date >= '0219' && $date <= '0228' || $date >= '0301' && $date <= '0320'){  

                $this->horoscope = "<h2>Pisces</h2>".'<br>'.'<img src="./img/pisces.png"/>';

            }
             
            elseif($date >= '0321' && $date <= '0331' || $date >= '0401' && $date <= '0420'){  

                $this->horoscope = "<h2>Aries</h2>".'<br>'.'<img src="./img/aries.png"/>';

            }
             
            elseif($date >= '0421' && $date <= '0430' || $date >= '0501' && $date <= '0521'){  

                $this->horoscope = "<h2>Taurus</h2>".'<br>'.'<img src="./img/taurus.png"/>';

            }

            elseif($date >= '0522' && $date <= '0531' || $date >= '0601' && $date <= '0621'){  

                $this->horoscope = "<h2>Gemini</h2>".'<br>'.'<img src="./img/gemini.png"/>';

            }

            elseif($date >= '0622' && $date <= '0630' || $date >= '0701' && $date <= '0722'){  

                $this->horoscope = "<h2>Cancer</h2>".'<br>'.'<img src="./img/cancer.png"/>';

            }
             
            elseif($date >= '0723' && $date <= '0731' || $date >= '0801' && $date <= '0823'){  

                $this->horoscope = "<h2>Leo</h2>".'<br>'.'<img src="./img/leo.png"/>';
                

            }

            elseif($date >= '0824' && $date <= '0831' || $date >= '0901' && $date <= '0922'){  

                $this->horoscope = "<h2>Virgo</h2>".'<br>'.'<img src="./img/virgo.png"/>';

            }

            elseif($date >= '0923' && $date <= '0930' || $date >= '1001' && $date <= '1023'){  

                $this->horoscope = "<h2>Libra</h2>".'<br>'.'<img src="./img/libra.png"/>';

            }
             
            elseif($date >= '1024' && $date <= '1031' || $date >= '1101' && $date <= '1122'){  

                $this->horoscope = "<h2>Scorpio</h2>".'<br>'.'<img src="./img/scorpio.png"/>';

            }

            elseif($date >= '1123' && $date <= '1130' || $date >= '1201' && $date <= '1221'){  

                $this->horoscope = "<h2>Saggitarius</h2>".'<br>'.'<img src="./img/sagittarius.png"/>';

            }
            else{

                $this->horoscope = null;
                $this->valid = false;
            }
        }
        
        
        public function printSign(){

            return $this->horoscope;
            
        }

        public function isValid(){
            return $this->valid;
          }

    
    }

    $date = substr($_POST["socialnumber"], -4, 4);
    $horoscope = new zodiac($date);
   
   
?>
