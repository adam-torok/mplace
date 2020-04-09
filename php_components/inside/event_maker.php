<div style="margin-left:20%" class="w-2/3  h-full m-10 antialiased">
<form novalidate enctype="multipart/form-data" id="event-writer" method="POST">
    <div class="card bg-white w-full shadow-lg rounded-lg p-5">
    <input name="event_name" class="bg-white w-full rounded-lg border p-2 mb-2" type="text" placeholder="Esemény neve" required>
      <textarea name="event_desc" id="post-text" class="bg-white w-full rounded-lg border p-2" rows="5"  placeholder="Miről szól ez az esemény?"></textarea>
        <input class="bg-white w-full rounded-lg border p-2 mb-2" type="date" id="time" name="event_date" required>
        <label class="flex justify-start items-start">
        <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
        <input value="1" name="event_type" type="checkbox" class="opacity-0 absolute" required>
        <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
        </div>
        <div class="select-none">Nyilvános</div>
        </label>
          <input class="hidden-file-input hidden" id="event-img" accept="image/x-png,image/gif,image/jpeg" type="file" name="event_pic" id="event-img">
          <label for="event-img" class="material-icon">
            <i class=" fas fas  float right fa-upload p-3 m-3 bg-gray-200 rounded-full"></i>   <div>Töltsön fel képet!</div>
          </label>  
      <div class="w-full flex flex-row flex-wrap mt-3">
        <div class="w-3/3">
          <button id="post-an-event" type="submit" class="rounded shadow-md w-full items-center shadow bg-blue-500 px-4 py-2 text-white hover:bg-blue-light">Létrehozás</button>
        </div>
      </div>
    </div>
    </form>
</div>
    