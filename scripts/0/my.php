<?PHP
 include "class.myrssparser.php";

 // where is the feed located?
 $url = "http://revision3.com/lifehacker/itunes/mp4-hd30";
 // create object to hold data and display output
 $rss_parser = new myRSSParser($url);

 $output = $rss_parser->getOutput(); // returns string containing HTML
 echo $output;

?>

