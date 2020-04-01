
      <div style="z-index:9999" class="p-2  fixed w-full text-gray-900 bg-white shadow-lg font-medium capitalize">
        <span class="px-2 mr-2 border-r border-gray-800">
          <img  src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">
        </span>
        <a  href="../../php_main/inside/homepage.php" class="px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">
          </i>
          <a href="../../php_main/inside/homepage.php" class="mx-1">Főoldal</a>
        </a>
   
        <span class="px-1 cursor-pointer hover:text-gray-700">
          <i class="fas fa-search p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <span class="px-1 cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fa-bell p-2 bg-gray-200 rounded-full">
          </i>
        </span>
        <a href="../../php_main/inside/profile.php" class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
        <img style="display:inline;object-fit:cover" class="h-8 w-8 rounded-full" src="../../storage/img/users/<?php echo $_SESSION['uPp']?>" alt="" />
        </a>
          <a href="../../php_logic/inside/logout.php" class=" relative float-right mr-3 cursor-pointer hover:text-gray-700">
          <i class="w-8 fas fas fa-sign-out-alt p-2 bg-gray-200 rounded-full">
          </i>
          </a>
      </div>
    </div>
  </div>
 