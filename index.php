<head>
<meta http-equiv="Content-Language" content="pt-br">
<script language="JavaScript">
<!--
function FP_changeProp() {//v1.0
 var args=arguments,d=document,i,j,id=args[0],o=FP_getObjectByID(id),s,ao,v,x;
 d.$cpe=new Array(); if(o) for(i=2; i<args.length; i+=2) { v=args[i+1]; s="o"; 
 ao=args[i].split("."); for(j=0; j<ao.length; j++) { s+="."+ao[j]; if(null==eval(s)) { 
  s=null; break; } } x=new Object; x.o=o; x.n=new Array(); x.v=new Array();
 x.n[x.n.length]=s; eval("x.v[x.v.length]="+s); d.$cpe[d.$cpe.length]=x;
 if(s) eval(s+"=v"); }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}

function FP_changePropRestore() {//v1.0
 var d=document,x; if(d.$cpe) { for(i=0; i<d.$cpe.length; i++) { x=d.$cpe[i];
 if(x.v=="") x.v=""; eval("x."+x.n+"=x.v"); } d.$cpe=null; }
}
// -->
</script>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0"  bottommargin="0"  marginwidth="0" marginheight="0">

    <?php
    {
        echo ossn_view('components/games/ads/banner');
    } ?>
	
<table border="0" width="100%" height="482">
	<tr>
		<td>
		<div align="center">
			<table border="1" width="76%">
				<tr>
					<td height="40" bgcolor="#C7DDEB" style="vertical-align: middle; border: 6px solid #D9D9D9; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" bordercolorlight="#D9D9D9" bordercolordark="#D9D9D9" id="id1" onmouseout="FP_changePropRestore()" onmouseover="FP_changeProp(/*id*/'id1',1,'style.backgroundColor','#D9D9D9')">
					<p align="center">
					<font face="Arial" size="5" color="#D9D9D9"><b>
					<a target="palco" href="<?php echo ossn_site_url (); ?>components/games/page/menu1.php">
					MMORG</a></b></font></td>
					<td height="40" bgcolor="#C7DDEB" style="vertical-align: middle; border: 6px solid #D9D9D9; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" bordercolorlight="#D9D9D9" bordercolordark="#D9D9D9" id="id2" onmouseout="FP_changePropRestore()" onmouseover="FP_changeProp(/*id*/'id2',1,'style.backgroundColor','#D9D9D9')">
					<p align="center">
					<font face="Arial" size="5" color="#D9D9D9"><b>
					<a target="palco" href="<?php echo ossn_site_url (); ?>components/games/page/menu2.php">
					Flash</a></b></font></td>
					<td height="40" bgcolor="#C7DDEB" style="vertical-align: middle; border: 6px solid #D9D9D9; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" bordercolorlight="#D9D9D9" bordercolordark="#D9D9D9" id="id3" onmouseout="FP_changePropRestore()" onmouseover="FP_changeProp(/*id*/'id3',1,'style.backgroundColor','#D9D9D9')">
					<p align="center">
					<font face="Arial" size="5" color="#D9D9D9"><b>
					<a target="palco" href="<?php echo ossn_site_url (); ?>components/games/page/menu3.php">
					Social games</a></b></font></td>
					<td height="40" bgcolor="#C7DDEB" style="vertical-align: middle; border: 6px solid #D9D9D9; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" bordercolorlight="#D9D9D9" bordercolordark="#D9D9D9" id="id4" onmouseout="FP_changePropRestore()" onmouseover="FP_changeProp(/*id*/'id4',1,'style.backgroundColor','#D9D9D9')">
					<p align="center">
					<font face="Arial" size="5" color="#D9D9D9"><b>
					<a target="palco" href="<?php echo ossn_site_url (); ?>components/games/page/menu4.php">
					Classic</a></b></font></td>
				</tr>
			</table>
		</div>
		<p align="center">
		
		
		
		
		
<IFRAME name=palco src="<?php echo ossn_site_url (); ?>components/games/page/menu1.php" frameBorder=0 width=100% height=1500px align="center" scrolling="no"></IFRAME></td>
	</tr>
	</table>