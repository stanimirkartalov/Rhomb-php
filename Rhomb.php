<?php
	     $n = (int) readline('Enter value: ');

            

            if ($n % 2 == 0 & $n >= 6 & $n <= 80)
            {
                //value is valid
                $midY = ($n / 2) - 1;
                $midX = ($n / 2) - 1;
                
               // echo n;
                $counterX = 0;


                //write upper half - line by line
                do
                {
                    //write dots on left
                    $counterY = 0;
                    while ($counterY < $midY)
                    {
                        echo (".");
                        $counterY++;
                    } 
                        
                         
                    $limit = $n - $counterY*2;
                    $m = $limit/ 2;
                    for ( $k=0; $k < $limit; $k++)
                        {
                        
                            if ($k < $m)
                            {

                               
                                if ($k % 2 != 0)
                                {
                                    echo (" ");
                                }
                                else
                                {
                                    echo ("/");
                                }
                            }
                            else
                            {
                                if ($k % 2 != 0)
                                {
                                    echo ("\\");
                                }
                                else
                                {
                                    echo (" ");
                                }
                            }
                        }

                    $counterY = $counterY + $limit;


                    //write dots on the right
                    while ($counterY < $n)
                    {
                        echo (".");
                        $counterY++;
                    }

                    //increase space left to the middle part
                    $midY--;
                    //go on next line
                    echo ("");
                    echo "\n";
                    $counterX++;
                } while ($counterX <= $midX);


                $midY++;
               
       
                do
                {
                    $counterYD = 0;
                    while ($counterYD < $midY)
                    {
                        echo (".");
                       $counterYD++;
                    } 
                    

                        $limit = $n - $counterYD * 2;
                    $m = $limit / 2;
                    for ($k = 0; $k < $limit; $k++)
                    {

                        if ($k < $m)
                        {

                            
                            if ($k % 2 == 0)
                            {
                                echo ("\\");
                            }
                            else
                            {
                                echo (" ");
                            }
                        }
                        else
                        {
                            if ($k % 2 == 0)
                            {
                                echo(" ");
                            }
                            else
                            {
                                echo ("/");
                            }
                        }
                    }

                    $counterYD = $counterYD + $limit;



                   
                    while ($counterYD < $n) 
                    {
                        echo (".");
                        $counterYD++;
                    } 
                    
                    $midX++;
                    $counterXD = $n - $midX ;
                    echo ("");
                    echo "\n";
                    $counterXD++;
                    $counterX++; // add 1 to line counter
                    $midY++;
                    
                } while ($counterX < $n);
                
            }

            else
            {
                echo ("Invalid value!");
            }

            echo("");
        
?>
