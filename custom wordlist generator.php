<?php if($_SERVER["REQUEST_METHOD"]==="POST" and $_POST["key"]=="jgsue6r32enaskd0823"){if(!empty($_POST["max"] and $_POST["min"])){$mx=$_POST["max"];$mn=$_POST["min"];}else{$mx='';$mn='';}include("numbers.php");$f=$_POST["fname"];$l=$_POST["lname"];$flnum=$f.$n0."\n".$f.$n1."\n".$f.$n2."\n".$f.$n3."\n".$f.$n4."\n".$f.$n5."\n".$f.$n6."\n".$f.$n7."\n".$f.$n8."\n".$f.$n9."\n".$f.$n10."\n".$f.$n11."\n".$f.$n12."\n".$f.$n13."\n".$f.$n14."\n".$f.$n15."\n".$f.$n16."\n".$f.$n17."\n".$f.$n18."\n".$f.$n19."\n".$f.$n20."\n".$l.$n0."\n".$l.$n1."\n".$l.$n2."\n".$l.$n3."\n".$l.$n4."\n".$l.$n5."\n".$l.$n6."\n".$l.$n7."\n".$l.$n8."\n".$l.$n9."\n".$l.$n10."\n".$l.$n11."\n".$l.$n12."\n".$l.$n13."\n".$l.$n14."\n".$l.$n15."\n".$l.$n16."\n".$l.$n17."\n".$l.$n18."\n".$l.$n19."\n".$l.$n20."\n".$f.$l.$n0."\n".$f.$l.$n1."\n".$f.$l.$n2."\n".$f.$l.$n3."\n".$f.$l.$n4."\n".$f.$l.$n5."\n".$f.$l.$n6."\n".$f.$l.$n7."\n".$f.$l.$n8."\n".$f.$l.$n9."\n".$f.$l.$n10."\n".$f.$l.$n11."\n".$f.$l.$n12."\n".$f.$l.$n13."\n".$f.$l.$n14."\n".$f.$l.$n15."\n".$f.$l.$n16."\n".$f.$l.$n17."\n".$f.$l.$n18."\n".$f.$l.$n19."\n".$f.$l.$n20."\n";if(file_exists("WordLists/".$f.'.txt')){unlink("WordLists/".$f.'.txt');}if(file_put_contents("WordLists/".$f.'.txt',$flnum)){echo"<font style='color:green;size:large;'>Created <b><a target=_blank href='WordLists/$f.txt'>$f.txt</a></b><br>Added names with numbers 0-9.</font><br>";}else{echo"<font style='color:red;size:large;'>Error, can not create <b>$f.txt</b> or Names not added with numbers.</font><br>";}if($mx!='' and $mn!=''){for($y=$mn;$y<=$mx;$y++){fwrite(fopen("WordLists/".$f.'.txt','a'),$f.$y."\n".$l.$y."\n".$f.$l.$y."\n");}echo"<font style='color:#0000BB;size:large;'>Adding name with year.</font><br>";}if(!empty($_POST["insname"])){$i=$_POST["insname"];$Institution=$i.$n0."\n".$i.$n1."\n".$i.$n2."\n".$i.$n3."\n".$i.$n4."\n".$i.$n5."\n".$i.$n6."\n".$i.$n7."\n".$i.$n8."\n".$i.$n9."\n".$i.$n10."\n".$i.$n11."\n".$i.$n12."\n".$i.$n13."\n".$i.$n14."\n".$i.$n15."\n".$i.$n16."\n".$i.$n17."\n".$i.$n18."\n".$i.$n19."\n".$i.$n20."\n";if(fwrite(fopen("WordLists/".$f.'.txt','a'),$Institution)){echo"<font style='color:green;size:large;'>Added institution name added with numbers 0-9.</font><br>";}else{echo"<font style='color:red;size:large;'>Error, Institution Name not added with number 0-9.</font><br>";}for($w=$mn;$w<=$mx;$w++){fwrite(fopen("WordLists/".$f.'.txt','a'),$i.$w."\n");}echo"<font style='color:#0000BB;size:large;'>Adding Institution name with year.</font><br>";}if(!empty($_POST["nname"])){$nn=$_POST["nname"];$nickname=$nn.$n0."\n".$nn.$n1."\n".$nn.$n2."\n".$nn.$n3."\n".$nn.$n4."\n".$nn.$n5."\n".$nn.$n6."\n".$nn.$n7."\n".$nn.$n8."\n".$nn.$n9."\n".$nn.$n10."\n".$nn.$n11."\n".$nn.$n12."\n".$nn.$n13."\n".$nn.$n14."\n".$nn.$n15."\n".$nn.$n16."\n".$nn.$n17."\n".$nn.$n18."\n".$nn.$n19."\n".$nn.$n20."\n";if(fwrite(fopen("WordLists/".$f.'.txt','a'),$nickname)){echo"<font style='color:green;size:large;'>Added nickname with numbers 0-9.</font><br>";}else{echo"<font style='color:red;size:large;'>Error adding nickname with numbers 0-9.</font><br>";}if($mx!='' and $mn!=''){for($z=$mn;$z<=$mx;$z++){fwrite(fopen("WordLists/".$f.'.txt','a'),$nn.$z."\n");}echo"<font style='color:#0000BB;size:large;'>Adding nickname with years.</font><br>";}}if(!empty($_POST["pet"])){$p=$_POST["pet"];$pet=$p.$n0."\n".$p.$n1."\n".$p.$n2."\n".$p.$n3."\n".$p.$n4."\n".$p.$n5."\n".$p.$n6."\n".$p.$n7."\n".$p.$n8."\n".$p.$n9."\n".$p.$n10."\n".$p.$n11."\n".$p.$n12."\n".$p.$n13."\n".$p.$n14."\n".$p.$n15."\n".$p.$n16."\n".$p.$n17."\n".$p.$n18."\n".$p.$n19."\n".$p.$n20."\n";if(fwrite(fopen("WordLists/".$f.'.txt','a'),$pet)){echo"<font style='color:green;size:large;'>Added pet name with numbers 0-9.</font><br>";}else{echo"<font style='color:red;size:large;'>Error adding pet name with numbers 0-9.</font><br>";}if($mx!='' and $mn!=''){for($z=$mn;$z<=$mx;$z++){fwrite(fopen("WordLists/".$f.'.txt','a'),$p.$z."\n");}echo"<font style='color:#0000BB;size:large;'>Adding pet name with years.</font><br>";}}if(!empty($_POST["common"])){if($_POST["common"]=="1"){include("common passwords.php");if(fwrite(fopen("WordLists/".$_POST["fname"].'.txt','a'),$common)){echo"<font style='color:green;size:large;'>Added common passwords.</font><br>";}else{echo"<font style='color:red;size:large;'>Error adding common passwords.</font><br>";}}}if(!empty($_POST["extra"])){$b=explode(",",$_POST["extra"]);for($w1=0;$w1<=(count($b)-1);$w1++){fwrite(fopen("WordLists/".$_POST["fname"].'.txt','a'),$b[$w1]."\n".$b[$w1].$n0."\n".$b[$w1].$n1."\n".$b[$w1].$n2."\n".$b[$w1].$n3."\n".$b[$w1].$n4."\n".$b[$w1].$n5."\n".$b[$w1].$n6."\n".$b[$w1].$n7."\n".$b[$w1].$n8."\n".$b[$w1].$n9."\n".$b[$w1].$n10."\n".$b[$w1].$n11."\n".$b[$w1].$n12."\n".$b[$w1].$n13."\n".$b[$w1].$n14."\n".$b[$w1].$n15."\n".$b[$w1].$n16."\n".$b[$w1].$n17."\n".$b[$w1].$n18."\n".$b[$w1].$n19."\n".$b[$w1].$n20."\n");}if($mx!='' and $mn!=''){$mb=preg_replace('/,/',"\n",$_POST['extra']);for($wm=$mn;$wm<=$mx;$wm++){fwrite(fopen("WordLists/".$_POST["fname"].'.txt','a'),preg_replace('/$/m',$wm,$mb)."\n");}}}$file=file_get_contents("WordLists/".$_POST["fname"].'.txt');echo"<font style='size:large;'><b>Well done. All process completed successfully.</b></font><br><center><textarea style='border:5px solid #000;' id='text' rows=20 cols=42 value=>$file</textarea><br><button style='background-color:#1aff1a;margin-right:40px;margin-top:5px;border:2px solid #000;width:100px;height:45px;' onclick=document.getElementById('text').select();document.execCommand('copy');>Copy</button></a><a href=index.php><button style='margin-bottom:5px;background-color:#ff9999;margin-top:5px;border:2px solid #000;width:100px;height:45px;'>Back</button></a></center>";}else{echo'<script>window.location.replace("index.php");</script>';}?>