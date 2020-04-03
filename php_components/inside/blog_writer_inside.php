<form enctype="multipart/form-data" id="blog-writer" method="POST">
    <div class="card m-5 bg-white w-full shadow-lg rounded-lg p-5">
    <input required id="blog-header" name="blogHeader" class="bg-white mb-5 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" placeholder="Blog címe">
      <textarea required name="blogText" id="blog-text" class="bg-white w-full rounded-lg border p-2" rows="5" placeholder="Írj személyes blogbelyegyzést <?php echo $_SESSION['uLN']?>!"></textarea>
      <select id="blog-category" name="blogCat" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option value="Minden">Válasz ki a blog kategóriáját!</option>
        <option value="Szabadidő">Szabadidő</option>
        <option value="Sport">Sport</option>
        <option value="Programozás">Programozás</option>
     </select>
      <div class="w-full flex flex-row flex-wrap mt-3">
        <div class="w-3/3 flex">
          <button type="submit" class="mr-5 rounded shadow-md items-center shadow bg-blue-500 px-4  text-white hover:bg-blue-light">Küldés</button>
          <input class="hidden-file-input hidden" id="blog-file" accept="image/x-png,image/gif,image/jpeg" type="file" name="blogImg" id="blog-img">
          <label for="blog-file" class="material-icon">
            <i class=" fas fas  float right fa-upload p-3 m-3 bg-gray-200 rounded-full"></i>
          </label>
          
        </div>
      </div>
    </div>
    </form>
    