
<!Doctype html>

<html>

<head>

	<title> BD Jobs -- Accounting/Finance</title>
	<style>
		.headings{
		
		border: 2px solid red;
		text-align: Center;
		background-color: #F0260A;
		Width: 80%;
		margin: auto;
		
		
		}
		.body{
		border: 2px solid blue;
		text-align: left;
		background-color: #FFC300;
		Width: 80%;
		height: auto;
		
		margin: auto;
		
		
		}
		
	
	</style>

</head>


<body>

<div class="headings">

<h1>BD JOBS</h1>

</div>

<div class="body">


<h2>BD Jobs -- Accounting/Finance</h2>


<?php
 function getData($url)
 { 	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTB6 (.NET CLR 3.0.4506.2152)");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_URL, $url);	
	$content = curl_exec($ch);
	curl_close($ch);
 
 	return $content;
 }
	$url="http://jobs.bdjobs.com/jobsearch.asp?fcatId=1&icatId=";
	
	$content=getData($url);
	
	$exploded_content = explode('<div class="col-sm-9 col-sm-pull-9">', $content);
	
	for($i=1; $i<count($exploded_content); $i++)  {
		
	
	$title = explode('<div class="job-title-text">',$exploded_content[$i]);
	
	$title=explode("</div>", $title[1]);
	$title= strip_tags($title[0]);
	
	echo "Post_Name=".$title."<br/>";
	
	$company_name= explode('<div class="comp-name-text">', $exploded_content[$i]);
	$company_name= explode ("</div>", $company_name[1]);
	$company_name= $company_name[0];
	
	echo "Company_Name=".$company_name."<br/>";
	
	$location= explode('<div class="locon-text-d">', $exploded_content[$i]);
	$location=explode(" </div>", $location[1]);
	$location=strip_tags($location[0]);
	
	echo "Location=".$location."<br/>";
	
	$education=explode('<div class="edu-text-d">', $exploded_content[$i]);
	$education=explode("</div>", $education[1]);
	$education=strip_tags( $education[0]);
	
	echo "Education=".$education."<br/>";
	
	$deadline = explode('<div class="dead-text-d">', $exploded_content[$i]);
	$deadline= explode("</div>", $deadline[1]);
	$deadline= $deadline[0];
	echo "Deadline=".$deadline."<br/>"."</br>"."</br>";
	
	
	}
?>

</div>







</body>












</html>

