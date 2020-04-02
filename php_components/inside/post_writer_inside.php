<div class="w-2/3  md:px-12 lg:24 h-full m-10 antialiased">
<form id="post-writer" method="POST" >
    <div class="card bg-white w-full shadow-lg rounded-lg p-5">
      <textarea name="post-text" id="post-text" class="bg-white w-full rounded-lg border p-2" rows="5" placeholder="Oszd meg godolataidat <?php echo $_SESSION['uLN']?>!"></textarea>
      <div class="w-full flex flex-row flex-wrap mt-3">
        <div class="w-3/3">
          <button type="submit" class="rounded shadow-md w-full items-center shadow bg-blue-500 px-4 py-2 text-white hover:bg-blue-light">Küldés</button>
        </div>
      </div>
    </div>
    </form>
</div>
    