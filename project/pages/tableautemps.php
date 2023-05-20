<?php 

include("../services/date/date.php");
if(isset($_GET["nb"])){
  $s=$_GET["nb"];
  $x=getalldays(deff(getdt(),$s*7));
  
}
else{
  $s=0;
  $x=getalldays(getdt());
}

?>
<button class="px-3 py-2 text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded w-50 absolute left-0">
  <a href="?nb=<?php echo $s-1;?>">Back</a>
</button>

<button class="px-3 py-2 text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded w-50 absolute right-0">
<a href="?nb=<?php echo $s+1;?>">Next</a>
</button>

<div class="w-full mt-10">
  <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
    <thead>
      <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
        <th class="py-3 px-4 text-left"></th>
        <th class="py-3 px-4 text-left">8:00 -> 9:00</th>
        <th class="py-3 px-4 text-left">9:00 -> 10:00</th>
        <th class="py-3 px-4 text-left">10:00 -> 11:00</th>
        <th class="py-3 px-4 text-left">11:00 -> 12:00</th>
        <th class="py-3 px-4 text-left">12:00 -> 13:00</th>
        <th class="py-3 px-4 text-left">13:00 -> 14:00</th>
        <th class="py-3 px-4 text-left">14:00 -> 15:00</th>
        <th class="py-3 px-4 text-left">15:00 -> 16:00</th>
        <th class="py-3 px-4 text-left">16:00 -> 17:00</th>
        <th class="py-3 px-4 text-left">17:00 -> 18:00</th>
        <th class="py-3 px-4 text-left"></th>
      </tr>
    </thead>
   <tbody class="text-gray-600 text-sm font-light">
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Lundi <br><?php echo $x[0]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Mardi<br><?php echo $x[1]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Mercredi<br><?php echo $x[2]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Jeudi<br><?php echo $x[3]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Vendredi<br><?php echo $x[4]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-4 font-bold">Samdi<br><?php echo $x[5]; ?></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
        <td class="py-3 px-4"></td>
      </tr>
    </tbody>
  </table>
</div>
