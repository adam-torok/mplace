
<div class="w-full relative max-w-lg mx-auto px-6 pt-16 pb-40 md:pb-24">
  <form id="login-form" method="POST" action="../../php_logic/out/login_user.php" class="bg-white shadow-md rounded max-w-lg px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="user-email">
        E-mail cím
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-2 focus:outline-none focus:shadow-outline" id="user-email" type="text" name="user_email" placeholder="Ide írja az e-mail címét">
      <p style="display:none" id="email-error" class="text-red-500 text-xs pl-2 italic">Adja meg a bejelentkezéshez szükséges e-mail címet!</p>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Jelszó
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="user-password" type="password" name="user_password" placeholder="Ide írja jelszavát">
      <p style="display:none" id="password-error" class="text-red-500 text-xs pl-2 italic">Adja meg a bejelentkezéshez szükséges jelszavát!</p>
    </div>
    <div class="flex items-center justify-between">
      <button onClick='submitLoginForm()' type="button" id="sub-butt" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  >
        Bejelentkezés
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Elfelejtett jelszó?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 ThoughtCluoud.
  </p>
</div>
