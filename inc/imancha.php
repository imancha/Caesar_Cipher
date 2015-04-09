<?php
if(isset($_REQUEST['2'])){
	$keys = [
						'Cipher' 	=> ['!','@','$','`','6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','?',],
						'Plain' 	=> ['A','B','D','T','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','n','y',' ',],
					];
	$cipher = "\$dn6i6?6fp?76c6bd6?n6fndf6i?jh76f?t6ib?70mfdg6p\n@6b6d?86ct6?k0mh6o6?96i?70o6k6?o6ff6i?fpgpk6\n`p7pcfp?o0m7p6e?9do0mk6?6ibds?9dk6i06d?t6ib?di96c\n!fp?6f6s?696?n0g6gp";
	for($i=0;$i<strlen($cipher);$i++){
		for($j=0;$j<count($keys['Cipher']);$j++){
			if($cipher[$i] == $keys['Cipher'][$j]){
				$plain .= $keys['Plain'][$j];
				break;
			}
		}
		if($i==47 || $i==91 || $i==141) $plain .= "\n";
	}
}elseif(isset($_REQUEST['3'])){
	$keys = [
						'Cipher' 	=> ['6','7','8','9','0','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','V','X','?',],
						'Plain' 	=> ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','n','y',',','.',' ',],
					];
	$cipher = 'n086m6?phph?bm6adf?fjhkpo0m?696g6c?b6h76m?t6ib?9dc6ndgf6i?jg0c?fjhkpo0mV?t6ib?c6ndgit6?np96c?n0mdib?fdo6?gdc6o?n0k0mod?9dh6e6g6c?96i?o0g0qdndX?9dndid?9d76c6n?76cr6?od6k?f6m6fo0m?t6ib?9dc6ndgf6i?9d6h7dg?96md?';
	for($i=0;$i<strlen($cipher);$i++){
		for($j=0;$j<count($keys['Cipher']);$j++){
			if($cipher[$i] == $keys['Cipher'][$j]){
				$plain .= $keys['Plain'][$j];
				break;
			}
		}
	}
}elseif(isset($_REQUEST['4'])){
	$keys = [
						'Cipher' 	=> ['%s*','s2d','%#','o=','*-','u7','y1','&g','t9','r#$','e@','km#','a9','$t','$9$','@h','p!)','*fy','&9','g&l','!g','e^&','&^','++g','**<','^&','+_',')(',],
						'Plain' 	=> ['a','b','c','d','e','g','h','i','j','k','l','m','n','o','p','r','s','t','u','x','y','(',')',',','.',':','/',' ',],
					];
	$cipher = 's2d*-@ho=%s*p!)%s*@hr#$%s*a9)(%#%s*@h%s*)(km#*-km#$9$@h$tp!)*-p!))(*fy*-r#$p!))(e^&$9$e@%s*&ga9*fy*-g&l*fy&^++g)(%#&g$9$y1*-@h)(o=%s*$9$%s**fy)(o=&gr#$%s**fy*-u7$t@h&gr#$%s*a9)(km#*-a9t9%s*o=&g)(o=&9%s*)(t9*-a9&gp!)^&)(s2de@$t%#r#$)(%#&g$9$y1*-@h)(%s*a9o=)(p!)*fy@h*-%s*km#)(%#&g$9$y1*-@h**<)(s2de@$t%#r#$)(%#&g$9$y1*-@h)(s2d*-r#$*-@ht9%s*)(o=*-a9u7%s*a9)(km#*-km#$9$@h$tp!)*-p!))(o=%s**fy%s*)(p!)*-%#%s*@h%s*)(s2de@$tr#$++g)(o=&gkm#%s*a9%s*)(s2d*-s2d*-@h%s*$9$%s*)(r#$%s*@h%s*r#$*fy*-@h)(+_)(o=%s**fy%s*)(o=&gu7%s*s2d&9a9u7r#$%s*a9)(km#*-a9t9%s*o=&g)(p!)%s**fy&9)(s2de@$tr#$**<)(p!)*-*fy&g%s*$9$)($9$@h$tp!)*-p!))(p!)%s**fy&9)(s2de@$tr#$)(km#*-a9u7y1%s*p!)&ge@r#$%s*a9)(r#$*-e@&9%s*@h%s*a9)(p!)%s**fy&9)(s2de@$tr#$)(t9&9u7%s***<)(p!)*-km#*-a9*fy%s*@h%s*)(&g*fy&9)(p!)*fy@h*-%s*km#)(%#&g$9$y1*-@h)(s2d*-r#$*-@ht9%s*)(km#*-km#$9$@h$tp!)*-p!))(km#%s*p!)&9r#$%s*a9)(e^&r#$%s*@h%s*r#$*fy*-@h)(%s**fy%s*&9)(o=%s**fy%s*&^)(p!)*-%#%s*@h%s*)(*fy*-@h&9p!))(km#*-a9*-@h&9p!))(o=%s*a9)(km#*-a9u7y1%s*p!)&ge@r#$%s*a9)(o=%s**fy%s*)($9$%s*o=%s*)(p!)%s*%s**fy)(!g%s*a9u7)(s2d*-@hp!)%s*km#%s*%s*a9**<';
	$chiper = 's2d *- @h o= %s* p!) %s* @h r#$ %s* a9 )( %# %s* @h %s* )( km# *- km# $9$ @h $t p!) *- p!) )( *fy *- r#$ p!) )( e^& $9$ e@ %s* &g a9 *fy *- g&l *fy &^ ++g )( %# &g $9$ y1 *- @h )( o= %s* $9$ %s* *fy )( o= &g r#$ %s* *fy *- u7 $t @h &g r#$ %s* a9 )( km# *- a9 t9 %s* o= &g )( o= &9 %s* )( t9 *- a9 &g p!) ^& )( s2d e@ $t %# r#$ )( %# &g $9$ y1 *- @h )( %s* a9 o= )( p!) *fy @h *- %s* km# )( %# &g $9$ y1 *- @h **< )( s2d e@ $t %# r#$ )( %# &g $9$ y1 *- @h )( s2d *- r#$ *- @h t9 %s* )( o= *- a9 u7 %s* a9 )( km# *- km# $9$ @h $t p!) *- p!) )( o= %s* *fy %s* )( p!) *- %# %s* @h %s* )( s2d e@ $t r#$ ++g )( o= &g km# %s* a9 %s* )( s2d *- s2d *- @h %s* $9$ %s* )( r#$ %s* @h %s* r#$ *fy *- @h )( +_ )( o= %s* *fy %s* )( o= &g u7 %s* s2d &9 a9 u7 r#$ %s* a9 )( km# *- a9 t9 %s* o= &g )( p!) %s* *fy &9 )( s2d e@ $t r#$ **< )( p!) *- *fy &g %s* $9$ )( $9$ @h $t p!) *- p!) )( p!) %s* *fy &9 )( s2d e@ $t r#$ )( km# *- a9 u7 y1 %s* p!) &g e@ r#$ %s* a9 )( r#$ *- e@ &9 %s* @h %s* a9 )( p!) %s* *fy &9 )( s2d e@ $t r#$ )( t9 &9 u7 %s* **< )( p!) *- km# *- a9 *fy %s* @h %s* )( &g *fy &9 )( p!) *fy @h *- %s* km# )( %# &g $9$ y1 *- @h )( s2d *- r#$ *- @h t9 %s* )( km# *- km# $9$ @h $t p!) *- p!) )( km# %s* p!) &9 r#$ %s* a9 )( e^& r#$ %s* @h %s* r#$ *fy *- @h )( %s* *fy %s* &9 )( o= %s* *fy %s* &^ )( p!) *- %# %s* @h %s* )( *fy *- @h &9 p!) )( km# *- a9 *- @h &9 p!) )( o= %s* a9 )( km# *- a9 u7 y1 %s* p!) &g e@ r#$ %s* a9 )( o= %s* *fy %s* )( $9$ %s* o= %s* )( p!) %s* %s* *fy )( !g %s* a9 u7 )( s2d *- @h p!) %s* km# %s* %s* a9 **<';
	foreach(explode(' ',$chiper) as $value){
		for($i=0;$i<count($keys['Cipher']);$i++){
			if($keys['Cipher'][$i] == $value){
				$plain .= $keys['Plain'][$i];
				break;
			}
		}
	}
}elseif(isset($_REQUEST['6'])){
	$keys = [
						'Cipher'	=>	['N','Q','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',',','.',' ',],
						'Plain'		=>	['P','S','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','a','b',',','.',' ',],
					];
	$cipher = 'Ncpickzyleyl gjks nclecryfsyl byl rcilmjmeg qyleyr ncqyr, ynyjyeg gldmpkyqg qciypyle qyleyr acncr kclwczyp ic nclhsps bslgy. Qchyjyl bcleyl fyj rcpqczsr .';
	for($i=0;$i<strlen($cipher);$i++){
		for($j=0;$j<count($keys['Cipher']);$j++){
			if($cipher[$i] == $keys['Cipher'][$j]){
				$plain .= $keys['Plain'][$j];
				break;
			}
		}
	}
}elseif(isset($_REQUEST['8'])){
	$keys = [
						'Cipher' 	=> ['Ij','ih','hij','ij','jkl','kl','mn','nop','op','pqr','qr','rst','st','tuv','uv','vwx','xyz','yz','zab','ab','bcd','cd','def','ef','(',')',',','.',':','/','gh',],
						'Plain' 	=> ['K','a','b','c','d','e','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','w','x','y','(',')',',','.',':','/',' ',],
					];
	$cipher = 'Ijihxyztuvopbcduvxyzihghihjklihrstihnopghyzabihzababghmnuvrstuvtuvmnihtuvghnopklcdihtuvghvwxklstihqrihtuvghjklihmnoptuvmnghefihtuvmnghstklxyzabvwxihqrihtuvghyzabihzababghuvxyzjkluvghihzabihabghhijihtuvmnyzihghstihststihrstopihghstklxyzabvwxihqrihtuvghhijihmnopihtuvghjklihxyzopghqruvstvwxuvtuvkltuvghqruvtuvyzabstkltuvghklqruvyzopyzzabklstghefihtuvmnghstklstoprstopqropghmnopmnopghzabihxyzoptuvmnghihzabihabghijihtuvoptuvopghefihtuvmnghqrabihzabghjklopmnabtuvihqrihtuvghabtuvzababqrghstkltuvmnuvefihqrghjklihmnoptuvmnghihzabihabghopqrihtuvghstkltuvijihqrabvwxghmnuvrstuvtuvmnihtuvghihtuvpqroptuvmnghqrabijoptuvmnghnopihxyzopstihab';
	$chiper = 'Ij ih xyz tuv op bcd uv xyz ih gh ih jkl ih rst ih nop gh yz ab ih zab ab gh mn uv rst uv tuv mn ih tuv gh nop kl cd ih tuv gh vwx kl st ih qr ih tuv gh jkl ih mn op tuv mn gh ef ih tuv mn gh st kl xyz ab vwx ih qr ih tuv gh yz ab ih zab ab gh uv xyz jkl uv gh ih zab ih ab gh hij ih tuv mn yz ih gh st ih st st ih rst op ih gh st kl xyz ab vwx ih qr ih tuv gh hij ih mn op ih tuv gh jkl ih xyz op gh qr uv st vwx uv tuv kl tuv gh qr uv tuv yz ab st kl tuv gh kl qr uv yz op yz zab kl st gh ef ih tuv mn gh st kl st op rst op qr op gh mn op mn op gh zab ih xyz op tuv mn gh ih zab ih ab gh ij ih tuv op tuv op gh ef ih tuv mn gh qr ab ih zab gh jkl op mn ab tuv ih qr ih tuv gh ab tuv zab ab qr gh st kl tuv mn uv ef ih qr gh jkl ih mn op tuv mn gh ih zab ih ab gh op qr ih tuv gh st kl tuv ij ih qr ab vwx gh mn uv rst uv tuv mn ih tuv gh ih tuv pqr op tuv mn gh qr ab ij op tuv mn gh nop ih xyz op st ih ab';
	foreach(explode(' ',$chiper) as $value){
		for($i=0;$i<count($keys['Cipher']);$i++){
			if($keys['Cipher'][$i] == $value){
				$plain .= $keys['Plain'][$i];
				break;
			}
		}
	}
}elseif(isset($_REQUEST['9'])){
	$keys = [
						'Cipher'	=>	['I','P','Y','T','G','L','i','p','y','q','o','z','r','x','u','s','t','v','g','f','a','b','q','w','l','j','e','v','w','x','m',',','.','(',')','"','-',' ',],
						'Plain'		=>	['A','B','C','K','M','S','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y',',','.','(',')','"','-',' ',],
					];
	$cipher = 'z.z)zozwzezyzozlz(z zfzizgziz zbzizjzozjz zwzizrziz zozrzizlzlzozgz-zozrzizlzlzozgz zizrzizszfzozgz zuzfzozlz zfzizqz zfzizezxzizjzozrzfzozbz zezgzvzuz zxzizvzizqziz zuzzzizwzrzazjzbzuzwztz z,z"zmzxzbzizwzrzazjzbzmzwzYz zqzozuzvzbzbzIz"z zizmzfzeztzezpz zgzizvzizqz zwzozfzuzozxzyzLz zozyzezwzPz zjzezwzezfzozGz z.zizrzuzjzoztz ztzizxzuzbz zuzwzizqz zfzizezrzrzfzizrz zuzgzizvzizrzfzozgz zizbzfzizjz zizgzuzwzozfzozbz zoztz zgzuzwzuzrzfzozbz zuzwzizqz z,zfziztzgzuzwzuztzuzqz zjzizizlz zfzizgziz zbzizjzozjz zfzizlzozbz zezizjziz zizjzizqz zwzizrziz zizrzizszfzozgz zizwzizyz zizfzizgzuzizrzizpz zuzwzizszizvzozbzgzozgz zrzfzizmz zezgzvzuz zezjzizezlz zxzizvzizqziz zuzzzizwzrzazjzbzuzwzT';
	for($i=strlen($cipher)-1;$i>=0;$i--){
		if($i%2==1){
			for($j=0;$j<count($keys['Cipher']);$j++){
				if($cipher[$i] == $keys['Cipher'][$j]){
					$plain .= $keys['Plain'][$j];
					break;
				}
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Algorithm to Encrypt/Decrypt Text">
		<meta name="author" content="Mohammad Abdul Iman Syah">
		<link rel="icon" href="favicon.ico">

		<title>Decrypt</title>

		<!-- Custom styles for this template -->
		<link href="../css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">
									<span class="glyphicon glyphicon-copy" aria-hidden="true"></span>&nbsp; Cipher Text
								</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" id="plain" placeholder="Enter Cipher Text . . ." rows="5" autocomplete="off" value=""><?php print $cipher; ?></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">
									<span class="glyphicon glyphicon-paste" aria-hidden="true"></span>&nbsp; Plain Text
								</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" id="chiper" placeholder="Enter Plain Text . . ." rows="5" autocomplete="off" value=""><?php print $plain; ?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">
									<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp; Algorithm
								</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" id="chiper" placeholder="" rows="100" autocomplete="off" value=""><?php print_r($keys); ?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
