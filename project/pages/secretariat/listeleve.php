
<?php
include("../../services/db/db.php");
include("../first.php");
include("navbar.php");
include("../../services/classes/classes.php");
/*
include("../../services/auth/auth.php");
permesion("../home.php",1);
*/
function geteleve($class,$niveau){
    $db=new db();
    $req="select id_etudiant,nom_etudiant,prenom_etudiant from etudiant where id_classe= (SELECT idclasse FROM `classe` WHERE nom_classe='$class' and niveau='$niveau')";
    $db->connectdb();
    $res=$db->excute($req);
    $s=[];
    while ($t=mysqli_fetch_array($res)){
        array_push($s,$t);
    }
    include("tableaudepresence.php");
    affiche($s);

}
?>
<body>
<script>
    function setniveau(l){
        x=document.getElementById("niveau");
        for(var i=0;i<l.length;i++){
            var n=new Option();
            n.innerHTML=l[i];
            n.value=l[i];
            x.appendChild(n);
        }
    }
    function setclass(e){
        x=document.getElementById("class");
        while (x.firstChild) {
        x.removeChild(x.lastChild);
            }
        l=new Option()
        l.value="";
        l.innerHTML="-----";
        x.appendChild(l);    
        if(e.value!=""){
            c=ni[1][Number(e.value)-1]
            for(i=0;i<c.length;i++){
                l=new Option()
                l.value=c[i];
                l.innerHTML=c[i];
                x.appendChild(l);
            }
        }        
    }
    
</script>
<center>
    <form action="" type="GET" onsubmit="sub()" >
<table>
    <th><label for="countries" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Niveau</label>
<div class="w-36">
<select id="niveau" name="niveau" onchange="setclass(this)"  class="w-36 bg-indigo-600 border border-indigo-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-indigo-600 dark:border-indigo-600 dark:placeholder-indigo-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected value="">-----</option>
  
</select>
</div>
</th>
<th>
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">class</label>
<div class="w-36">
<select id="class"  name="class"class="w-36 bg-indigo-600 border border-indigo-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-indigo-600 dark:border-indigo-600 dark:placeholder-indigo-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected value="">-----</option>
  
</select>
</div>
</th>
<th>

</th>
</table>

<button type="submit"class=" text-white w-36 h-9 bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50       absolute ">
 Search
</button></form>

<?php
if(isset($_GET["niveau"])){
   
    if($_GET["class"]!="" and $_GET["niveau"]!=""){
    geteleve($_GET["class"],$_GET["niveau"]);}
}
else{
    
}
?>



<script> 
    function sub(){
        
        if(document.getElementById("niveau").value=="" || document.getElementById("class").value==""){
            return false;
        }
    }
    var ni=[<?php niveau(new db);?>];setniveau(ni[0]);
</script>



<?php

?>


</center>
</body>
</html>