<?php
//echo "hello <br/>";   //you can put html inline of php
//$myName = "Sam";
//echo $myName;



/* Find our how many days left between now and the last day of final */


date_default_timezone_set('UTC');
$todaysDate = strtotime(date("2015-04-02"));
$finalDate  = strtotime(date("2015-05-08"));

    
function DaysLeft($todaysDate, $finalDate)
{
   return $daysLeft  = $finalDate - $todaysDate;
}

echo "days left: ".idate('z' , DaysLeft($todaysDate, $finalDate));
//printf("Remaining Days Left: %s" . idate('z', DaysLeft($todaysDate, $finalDate));

                        
/*
$bonus = 7000;
$mySalary = 90000;
$mnTax = .25
$iaTax = .35;
$wiTax = .40;

$myState = "Wisconsin";
$yourState = "Minnesota";
MyIncome($mySalary, $bonus);


if (myState = "Minnesota")
{
	echo "Minesota Income After Tax: " . 
        IncomeAfterTax($mySalary, $mnTax);	
}
else if myState = "Wisconsin")
{
	echo nl2br ( "/r/nWisconsin Income After Tax: ".
        IncomeAfterTax($mySalary, $wiTax));	
}

IncomeAfterTax($mySalary, $mnTax);

/* Function below */
/* This function calculates total income using salary and the bonus*/
    
/*
function MyIncome($mySalary, $bonus)
{
	$total = $mySalary + $bonus;
	echo $total     
	return $total;
	
}

*/
/* calculate the income after tax using salary and tax variable */
    
/*
function IncomeAfterTax ($Salary, $tax)
{
	$netIncome = $salary * (1-$tax);
	echo $netIncome;
	return $netIncome;
}
*/

    
 
    

?>