<div id="sidebar" class="h-full pr-4 pt-8 w-64 fixed mt-8 w-0 md:w-1/4 lg:w-1/5 h-0 overflow-y-hidden bg-white">
      <div id="sidebar2" class="w-full h-full pr-4 px-2 text-gray-900 bg-white shadow-lg text-left capitalize font-medium">
        <span class="sidebar-item cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
          <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">
          </i>
          <a href="../../php_main/inside/news.php" class="mx-2">Hírek</a>        </span>
        <span class="sidebar-item cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
          <i class="w-8 fas fa-search p-2 bg-gray-200 rounded-full">
          </i>
          <a href="../../php_main/inside/search.php" class="mx-2">Keresés</a>
        </span>
        <span class="sidebar-item cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
            <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">
            </i>
              <a  class="hover:text-gray-900 mx-2" href="../../php_main/inside/people.php" >Emberek</a>
        </span>
        <span class="sidebar-item cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
        <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full"> <span class="absolute  -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full"><?php getBlogCount($dbc);?></span></i>
          <a href="../../php_main/inside/blog.php" class="mx-2">Blog</a>
        </span>
      </div>
    </div>