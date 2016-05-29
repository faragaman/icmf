<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>دیناپارت</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/tests.css" />

</head>
<body dir="rtl">

	<h1>قطعات</h1>
	<h2>زانتیا</h2>
	<div id="filters" class=" button-group ">
		<button class="button btn1 is-checked" data-filter="*">نمایش همه</button>
		<button class="button" data-filter=".motor">موتور</button>
		<button class="button" data-filter=".taligh">تعلیق</button>
		<button class="button" data-filter=".bargh">برق</button>
		<button class="button" data-filter=".badane">بدنه</button>
	</div>
	<!-- 
<h2>Sort</h2>
<div id="sorts" class="button-group"> <button class="button is-checked" data-sort-by="original-order">original order</button>
  <button class="button" data-sort-by="name">name</button>
  <button class="button" data-sort-by="symbol">symbol</button>
  <button class="button" data-sort-by="number">number</button>
  <button class="button" data-sort-by="weight">weight</button>
  <button class="button" data-sort-by="category">category</button>
</div>
 -->
 
 <?php
 



echo "<div class='isotope'>";
    $handle = opendir('images/زانتیا/موتور/') ;
	while (false !== ($entry = readdir($handle)))
	    if ($entry !== ".." AND $entry !== "." )
	    	echo "
	    	<div class=' element-item transition motor ' data-category='transition'>
	    
	    	<img class='isotope-img' src='images/زانتیا/موتور/$entry'>
	    	<p class='number'>" . substr($entry, 0, -4) . "</p>
	    	</div>";
    

closedir($handle);



$handle = opendir('images/زانتیا/تعلیق/') ;
while (false !== ($entry = readdir($handle)))
	if ($entry !== ".." AND $entry !== "." )
		echo "
		<div class=' element-item transition taligh' data-category='transition'>

		<img class='isotope-img' src='images/زانتیا/تعلیق/$entry'>
		<p class='number'>" . substr($entry, 0, -4) . "</p>
			</div>";
closedir($handle);

$handle = opendir('images/زانتیا/برق/') ;
	while (false !== ($entry = readdir($handle)))
		if ($entry !== ".." AND $entry !== "." )
			echo "
			<div class=' element-item transition bargh ' data-category='transition'>

			<img class='isotope-img' src='images/زانتیا/برق/$entry'>
			<p class='number'>" . substr($entry, 0, -4) . "</p>
			</div>";
closedir($handle);

	$handle = opendir('images/زانتیا/بدنه/') ;
	while (false !== ($entry = readdir($handle)))
		if ($entry !== ".." AND $entry !== "." )
			echo "
			<div class=' element-item transition badane ' data-category='transition'>

			<img class='isotope-img' src='images/زانتیا/بدنه/$entry'>
			<p class='number'>" . substr($entry, 0, -4) . "</p>
			</div>";


closedir($handle);


echo "</div>";
 ?>
 
 
 




<script src="js/jquery.js"></script>
<script src="js/.isotope.min.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/test.js"></script>
</body>
</html>