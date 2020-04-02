<div class="w-full relative max-w-lg mx-auto px-6 pt-16 pb-40 md:pb-24">
<form id="#reg-form" action="../../php_logic/out/registrate_user.php" method="post" class="bg-white shadow-md rounded max-w-lg px-8 pt-6 pb-8 mb-4">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Vezetéknév
      </label>
      <input id="u-fname" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="user_first_name" id="user" type="text" required placeholder="">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Keresztnév
      </label>
      <input id="u-lname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_last_name" required name="user_last_name" type="text"   placeholder="">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Jelszó
      </label>
      <input id="u-pass" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_password" name="user_password" required type="password" placeholder="******************">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Email-cím
      </label>
      <input id="u-email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_email" required name="user_email" type="email" placeholder="Email címed">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Város
      </label>
      <input id="u-city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_city" required id="user_city" type="text" placeholder="">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Megye
      </label>
      <div class="relative">
        <input id="u-county" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="user_county" required id="user_county" type="text" placeholder="">
      </div>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Irányítószám
      </label>
      <input id="u-zip" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="user_zip" name="user_zip" required type="text" placeholder="6600">
    </div>
  </div>
  <div class="flex items-center justify-center">
    <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-8 px-4 rounded focus:outline-none focus:shadow-outline" id="submit" type="submit">
      Regisztráció
    </button>
  </div>
</form>
</div>
