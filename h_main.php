<?php
	include ('db.php');
	$stmt = $conn->prepare("SELECT sport FROM user WHERE id = ?");
	$stmt->bind_param('i', $_GET['id']);
	$stmt->execute();
	$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	if($row['sport'] != 3){
		echo "<script>alert('Nem ezt a sportot valasztottad!'); window.location = '/web/index.html';</script>";		
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Go Pro In 30</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css">
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-sor" style='z-index:1'>
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html">Go Pro In 30</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="container container_hatter">
			
			<center><h1>Kézilabda</h1></center>
			<br><h3>Üdvözöllek!</h3>

			A választásod által eggyike a legnehezebb sportoknak veted alá magad, amely az iskola kereteink belül támogatott. A kézilabda egy fizikailag nagyon megterhelő sport, mivelhogy a 40-50 percnyi szaladáson kívül, minden labdadobásba az egész testünk bele kell segítsen. Amennyiben tudjuk magunkról, hogy a fizikai kondíciónk nincs csúcsformában, ajánlatos az itt leírt edzésprogramokon kívül dolgozni az álóképességünkön. Ezt napi + 30 perc szaladással orvosolhatjuk.<br><br>

			A kézilabda nagyon magas szintű koordinációt igényel a felső- és alsótestünk között, és minden hibánk egy esélyt adhat az ellenfeleinknek a pontszerzésre. Ezért minél lelkiismeretesebben kell végeznünk a gyakorlatainkat edzéseink során annak érdekébe, hogy amikor a pályára kerülünk igazi ellenfelek ellen, magabiztosak legyünk, hogy fel vagyunk készülve technikailag, és taktikailag, hogy ne hibázzunk amikor hozzánk kerül a labda. <br><br>

			<div class="row">
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but1" data-href = "h_1.html">1. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but2" data-href = "h_2.html">2. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but3" data-href = "h_3.html">3. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but4" data-href = "h_4.html">4. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but5" data-href = "h_5.html">5. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but6" data-href = "h_6.html">6. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but7" data-href = "h_7.html">7. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but8" data-href = "h_8.html">8. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but9" data-href = "h_9.html">9. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but10" data-href = "h_10.html">10. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but11" data-href = "h_11.html">11. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but12" data-href = "h_12.html">12. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but13" data-href = "h_13.html">13. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but14" data-href = "h_14.html">14. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but15" data-href = "h_15.html">15. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but16" data-href = "h_16.html">16. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but17" data-href = "h_17.html">17. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but18" data-href = "h_18.html">18. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but19" data-href = "h_19.html">19. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but20" data-href = "h_20.html">20. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but21" data-href = "h_21.html">21. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but22" data-href = "h_22.html">22. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but23" data-href = "h_23.html">23. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but24" data-href = "h_24.html">24. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but25" data-href = "h_25.html">25. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but26" data-href = "h_26.html">26. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but27" data-href = "h_27.html">27. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin h_but" id = "h_but28" data-href = "h_28.html">28. Nap</button></div>
				<div class="col-sm-3"></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin h_but" id = "h_but29" data-href = "h_29.html">29. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin h_but" id = "h_but30" data-href = "h_30.html">30. Nap</button></div>
			</div>
			<br>A fenti feladatok/gyakorlatok naponta fognak megnyílni számunkra, de amellyiben úgy érezzük, hogy a túlzott erőfeszítés a munkánk róvására megy, ajánlatos 1 nap szünetet tartani. Ez nem azt jelenti, hogy minden nap után szünetelünk, hetente 1 vagy 2 nap szünetet tarthatunk, és ezek nem szabad, hogy egymás utáni napok legyenek!<br><br>

			Amint egy gyakorlatot elsajátítottunk nem szabad azt a háttérbe szorítanunk az edzéseink során, ugyanis a tanultak közül bármelyik taktika/technika nagy segítségünkre lehet a meccseink során. Ezen okból kifolyólag a legjobb megoldás, hogy célunknak tűzzük ki, hogy edzéseink során minden mozdulatot legalább 3 alkalommal alkalmazzunk hatásosan. Ez nem csak a technikákra való emlékezést segíti elő, hanem a technikák tökéletesítését is.<br><br>

			Amennyiben a programnak úgy szeretnénk alávetni megunkat, hogy nem mindig lessz gyakorló partnerünk, nem kell pánikba esnünk, ugyanis a gyakorlatok ugyanolyan hatékonysággal elvégezhetőek egy fal/kapu segítségével. Az eggyetlen nélkülözhetetlen eszköz a gyakorlásra egy (igazi) kézilabda, amellyel a gyakorlatainkat végezzük.<br><br>

			<h3>Sok sikert kívánok az elkövetkező hetek folyamára, és ha netán a program abbahagyását fontolgatnánk, jusson eszünkbe a cél, amelyet magunknak kitűztünk!</h3><br><br><br><br>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script> 
			var id = <?php echo $_GET['id']?>;
			daysPassed = 0; // oh :/ thanks then... Np...
			$.ajax({
				url : 'getDaysPassed.php',
				type : 'GET',
				data:{
					id : id
				},
				success: function(s){
					daysPassed = parseInt(s) + 1;
					$(".h_but").each(function(a){
						$(this).prop('disabled', true)
						$(this).addClass('btn-warning');
					})
					for(var i = 1; i <= daysPassed; i++){
						console.log("#h_but" + String(i));
						$("#h_but" + String(i)).removeAttr('disabled');
						$("#h_but" + String(i)).removeClass('btn-warning');
						$("#h_but" + String(i)).addClass('btn-success');
					}
				},
				error : function(e){
					alert("Szerver hiba.");
					console.log("Error: " + String(e));
				}
			});
			$(".h_but").click(function(){
				if($(this).hasClass('btn-success')){
					window.location = "/web/" + $(this).data('href');
				}else{
					alert("Meg nem jutottal el eddig a napig!");
				}
			})
		</script>
	</body>
</html>