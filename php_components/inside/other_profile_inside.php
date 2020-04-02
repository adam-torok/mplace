
  <?php 
    $current_user_id = intval($_GET['id']);
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $dbc -> stmt_init();
    $stmt = $dbc-> prepare($sql);
    $stmt -> bind_param("i",$current_user_id);
    $stmt -> execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    ?>

    <main style="margin-left: 20%;width: 77%;" class="profile-page">
      <section class="relative block" style="height: 500px;">
        <div id="background-holder"
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("../../storage/img/users/'<?php echo $row['user_bg_pic'];?>
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px);"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </section>
      <section id="profsec" class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
          <div id="profesc2"
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
          >
            <div class="px-6">
              <div class="flex flex-wrap justify-center">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                >
                  <div class="relative">
                    <img 
                        id="profipic"
                      alt="..."
                      src="../../storage/img/users/<?php echo $row['user_profile_puc'];?>"
                      class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 "
                      style="max-width: 150px;min-width:150px;height:150px;object-fit:cover;"
                    />
                  </div>
       
                </div>
                
                <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
        
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="counter text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >0</span
                      ><span class="text-sm text-gray-500">Ismerősök</span>
                    </div>
                    <div class="mr-4 p-3 text-center">
                      <span
                        class="counter text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >0</span
                      ><span class="text-sm text-gray-500">Képek</span>
                    </div>
                    <div class="lg:mr-4 p-3 text-center">
                      <span
                        class="counter text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >0</span
                      ><span class="text-sm text-gray-500">Kommentek</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-12">
                <h3 id="name"
                  class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >
                    <?php echo $row['user_first_name']. " " .$row['user_second_name'];?>
                </h3>
                <div id="profdesc"
                  class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                >
                  <i
                    class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                  ></i>
                    <?php echo $row['user_city'] . ", " . $row['user_county'];?>
                </div>
                <div  class="mb-2 text-gray-700 mt-10">
                  <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>
                  Munkahely: <div id="user-workplace" style="display:inline-block" contenteditable="false"><?php echo  $row["user_work_place"];?></div>
                </div>
                <div class="mb-2 text-gray-700">
                  <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                  >Tanulmányok:  <div id="user-study" style="display:inline-block" contenteditable="false"><?php echo  $row["user_school"];?></div>
                </div>
              </div>
              <div class="mt-10 py-10 border-t border-gray-300 text-center">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-9/12 px-4">
                    <p class="mb-4 text-lg leading-relaxed text-gray-800">

                    <div id="user-bio" contenteditable="false"><?php echo $row['user_bio'];?></div>
                    </p>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
