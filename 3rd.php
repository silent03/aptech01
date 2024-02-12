<?php
if

$a = 18;
if($a==5)
{
     echo "Condition is True";
}

ifelse
if($a==5)
{
     echo "Condition is True";
}else{
     echo "Condition is False";
}

 Elseif
if($a>=18)
{
         echo "You Can Vote"; 
}elseif($a>=15)
{
         echo "You Can Vote after three year";
}elseif($a>=10)
{
         echo "You Can Vote after Eight Year";
}
    
// Switch Case
$lang = "php";

     switch($lang){
        case "C#":
             echo "Favourite language is C#";
             break;
             case "java":
                 echo "Favourite language is java";
                 break;
                 case "laarvel":
                     echo "Favourite language is Laravel";
                     break;
                     case "php":
                         echo "Favourite language is php";
                         break;
                         default :
                         echo "data not found";

}


// // Nested If

     $age = 26;
     if($age>=18)
{
        if($age<=25)
}
            echo "Yes You can Vote";
         
         else{
             echo "You cannot vote more";
}

 else{
     echo "You cannot Vote";
 }



// Index Array

$color = array("white","brown","blue");
print_r($color);


$color = array("red","green","blue");
 echo "<pre>";
 print_r($color);
 echo "</pre>";


 $color = array("red","green","blue");
 $color [3]="White";
 $color [4]="Yellow";


 echo "<pre>";
 print_r($color);
 echo "</pre>";



 $age = array(
     'Faraz'=>24,
     'Fahad'=>21,
     'Yousuf'=>20,
);
echo "<pre>";
print_r ($age['Aslam']);
echo "</pre>";


$age = array(
    'Faraz'=>21,
    'Fahad'=>26,
    'Yousuf'=>27,
);

print_r($age);

echo "<br>";

 $person = array(
     'id'=>001,
     'name'=>'Faraz',
    'age'=>28,
     'address'=>array('Karachi','isb')
);

print_r($person['address'][2]=['Multan']);
print_r($person);




// Numerical Array


$num  = array(21,22,23,24,25,26,27,28,29,30);

foreach($num as $value)
{
     echo "value is $value <br/>";
}


 $num[0]="Faraz";
$num[1]="Fahad";
$num[2]=23;

 foreach($num as $value)
{
     echo "value is $value <br/>";
}


// Associative Array

 $age = array(
     "Faraz"=>21,
     "Ali" => 19,
    "Fahad"=>28
);

 echo "Age of Faraz is ".$age['Faraz']."<br/>";
 echo "Age of Fahad is ".$age['Fahad']."<br/>";
echo "Age of Ali is ".$age['Ali']."<br/>";

 $age ['Faraz']="Adult";
 $age ['Fahad']="Child";
 $age ['Ali']="Baby";

 echo "Faraz is ".$age['Faraz']."<br/>";
 echo "Fahad is ".$age['Fahad']."<br/>";
 echo "Ali is ".$age['Ali']."<br/>";


// Multi Dimentional Array

$contact = array(

     array(
         "Name"=>"Sajid",
        "Email"=>"Sajid@gmail.com",
       "Number"=>1233415
),

//     array(
         "Name"=>"Majid",
         "Email"=>"Majid@gmail.com",
         "Number"=>335237165
),
//     array(
         "Name"=>"Ajmal",
         "Email"=>"Ajmal@gmail.com",
         "Number"=>1265165
)

);


 echo "Email Id is Sajid :";
 echo $contact[1]['Email']."<br/>";
 echo "Contact Number is Sajid :";
 echo $contact[0]['Number']."<br/>";

 echo " Name is Majid :";
 echo $contact[2]['Name']."<br/>";
 echo "Contact Number is Majid :";
echo $contact[2]['Number']."<br/>";





$student = array("Sajid","Majid","Faraz","Fahad");
echo "Names of the Student are :".$student[0].",".$student[1].",".$student[2].",".$student[3].".";


    ?>

    
</body>
</html>