<?php
    echo "<h2>Count Function</h2>";
    $arr = array('php','c','c++','java','Android'); 
    echo count($arr);

    echo "<h2>Count Values Function</h2>";
    $arr = array("C","php","c","android","php","java");
    $newarr = array_count_values($arr);
    foreach ($newarr as $key => $value) {
        echo "<br/>$key - <strong>$value</strong> ";
    }

    echo "<h2>Sum Function</h2>";
    $myarray = array(1,2,3,4,5); 
    echo array_sum($myarray);

    echo "<h2>Product Function</h2>";
    $myarray = array(1,2,3,4,5); 
    echo array_product($myarray);

    echo "<h2>Reverse Function</h2>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $revarr = array_reverse($arr);
    print_r($revarr);

    echo "<h2>In Array Function</h2>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $temp = in_array('php',$arr); 
    echo $temp;

    echo "<h2>Random Function</h2>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $indexofarray = array_rand($arr);    //Returns Array Index 
    echo $arr[$indexofarray];

    echo "<h2>Multiple Keys at Random Function</h2>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $indexofarray = array_rand($arr,2);//Returns Array Index
    foreach ($indexofarray as $key => $value)
    {
        echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
    }

    echo "<h2>Unique Function</h2>";
    $arr = array('c', 'c++','android', 'java', 'android', 'php'); 
    print_r(array_unique($arr));

    echo "<h2>Merge Function</h2>";
    $arr1 = array('c','c++','android','java','php');
    $arr2 = array(10,20,30,40,50);
    $NewArr = array_merge($arr1,$arr2); 
    print_r($NewArr);

    echo "<h2>Search Function</h2>";
    $myarr = array('c', 'c++','android', 'java', 'php');
    $check = array_search('android', $myarr); 
    echo $check; // Return Index

    echo "<h2>Range Function</h2>";
    $arr = range("11", "20"); 
    foreach($arr as $key => $value)
    {
        echo "<br /> $key - $value ";
    }

    echo "<h2>Sort Function</h2>";
    $arr = array(80,60,50,40,8,74); 
    sort($arr);
    print_r($arr);

    echo "<h2>RSort Function</h2>";
    $arr = array(80,60,50,40,8,74); 
    rsort($arr);
    print_r($arr);

    echo "<h2>ASort Function</h2>";
    $arr = array(80,60,50,40,8,74); 
    asort($arr);
    print_r($arr);

    echo "<h2>KSort Function</h2>";
    $arr = array(
        "Banana" => "Yellow", "Apple" => "Red",
        "Mango" => "Green"
    );
    ksort($arr);
    foreach ($arr as $key => $value) 
    { 
        echo "<br />$key - $value ";
    }        

    echo "<h2>KSort Reverse Function</h2>";
    $arr = array( 
        "Banana" => "Yellow", "Apple" => "Red",
        "Mango" => "Green"
    ); 
    krsort($arr);
    foreach ($arr as $key => $value) { 
        echo "<br />$key - $value ";
    }

    echo "<h2>Shuffle Function</h2>";
    $myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing"); 
    shuffle($myArray);	// Shuffle the array 
    foreach ($myArray as $key => $value) {
        echo "<br /> $value ";
    }

    echo "<h2>Key Exists Function</h2>";
    $arr = array("a" => "apple", "b" => "banana"); 
    echo array_key_exists('a',$arr);    

    echo "<h2>Change Key Case Function</h2>";
    $arr = array(
        "Banana" => "Yellow",
        "Apple" => "Red",
        "Mango" => "Green"
    );
    $uppercase = array_change_key_case($arr,CASE_UPPER); 
    print_r($uppercase);

    echo "<h2>Combine Function</h2>";
    $arr1 = array("Banana" , "Apple" , "Mango");
    $arr2 = array("Yellow","Red", "Green");
    $NewVar = array_combine($arr1, $arr2); 
    print_r($NewVar);

    echo "<h2>End Function</h2>";
    $myarr = array('c', 'c++','android', 'java', 'php'); 
    echo end($myarr);

    echo "<h2>Compact Function</h2>";
    $name = "Ayush";
    $subject = "php";
    $arr = compact("name", "subject"); 
    print_r($arr);

    echo "<h2>Flip Function</h2>";
    $arr = array("a" => "ayush", "b" => "banana", "c" => "computer");
    $fliparray = array_flip($arr);
    print_r($fliparray);

    echo "<h2>Difference Function</h2>";
    $a=array("Ayush","c","c++","java","php","android");
    $b=array("Ayush","c","java","php");
    $diff = array_diff($a, $b); print_r($diff);

    echo "<h2>Intersect Function</h2>";
    $arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
    $arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
    print_r(array_intersect($arr1,$arr2));

    echo "<h2>Values Function</h2>";
    $arr = array("i"=>"c","want"=>"c++","learn"=>"php");
    $myarr = array_values($arr); 
    foreach($myarr as $key => $value) { 
        echo " <br />$key - $value";
    }

    echo "<h2>Push Function</h2>";
    $a=array("c","c++");
    array_push($a,"java","php"); 
    print_r($a);

    echo "<h2>Pop Function</h2>";
    $a = array("c", "c++", "Java", "PHP", "ASP");
    array_pop($a); //Remove 
    print_r($a); 
    array_pop($a); //Remove 
    print_r($a);

    echo "<h2>Explode Function</h2>";
    $mystring = "I Love PHP Language";
    $arr = explode(" ",$mystring); 
    print_r($arr);

    echo "<h2>Implode Function</h2>";
    $arr = array("i","love","php","language");
    $mystring = implode(" ", $arr); 
    echo $mystring;
?>
