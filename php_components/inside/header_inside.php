
      <div id="topmenu" style="z-index:9999" class="p-2  fixed w-full text-gray-900 bg-white shadow-lg font-medium capitalize">
        <span class="px-2 mr-2 border-r border-gray-800">
        <i class="home fas fa-home fa-1x"></i>
        </span>
        <a id="home" href="../../php_main/inside/homepage.php" class="home px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">Főoldal</a>
   
        <span class="px-1 cursor-pointer hover:text-gray-700">
          <i class="fas fa-search p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <span class="px-1 cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <span id="nightmode" class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fa-moon p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <span id="lightmode" class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fa-sun p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <a href="../../php_main/inside/profile.php" class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
        <img style="display:inline;object-fit:cover" class="h-8 w-8 rounded-full" src="../../storage/img/users/<?php echo $_SESSION['uPp']?>" alt="" />
        </a>
        <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
           <a  target="_blank" href="https://www.idokep.hu/elorejelzes/Szeged"><i class="w-8 fas fa-sun p-2 bg-gray-200 rounded-full">   </i></a>
       
        </span>
        <div id="weather" style="display:inline">
        <p style="display:inline" id="country">
        </p>
        <p style="display:inline" id="city">
        </p>
        <p style="display:inline" id="temp">
        </p>
        <p style="display:inline" id="desc">
        </p>
        </div>
        
          <a href="../../php_logic/inside/logout.php" class=" relative float-right mr-3 cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fas fa-sign-out-alt p-2 bg-gray-200 rounded-full">
          </i>
          </a>
      </div>
    </div>
  </div>
 