<?php 
//include("first.php");
/*
include("../../services/auth/auth.php");
permesion("../home.php",1);*/
function affiche($l){
  echo '
  <div class="w-full mt-10">
  <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
    <thead>
      <tr class="bg-gray-200 text-gray-600 uppercase text-s leading-normal">
        <th class="py-3 px-4 text-left">Nom</th>
        <th class="py-3 px-4 text-left"></th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-s font-light">
  
  
  ';
  for($i=0;$i<count($l);$i++){
    $x=$l[$i][1];
    $x2=$l[$i][0];
    echo "<tr class='border-b border-gray-200 hover:bg-gray-100'>

    <td class='py-3 px-4'>$x</td>
    <td class='py-3 px-4'><button class='pr-4 pl-3 py-2 bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-blue-50 transition flex gap-1 items-center w-50 ' value=''>
    <a href='eleve.php?ideleve=$x2'>infnormation</a></button></td>
    </tr>";
  }
  echo "
  </tbody>
</table>
</div>
  ";
}

?>
