<!-- Modal Start -->

  <!-- get_password_modal -->
  <div id="get_password" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content white_box2">
        <div class="container pt-1 px-1 pb-1">
          <h2 class="title text-center box2_heading">Password Generator</h2>
          <div class="result_box">
            <div class="result_box_info right">click to copy</div>
            <div class="result_box_info left">copied</div>
            <div class="result__viewbox" id="result_box">CLICK GENERATE</div>
            <form>
              <button id="copy-btn"><i class="far fa-copy"
                  onclick="return  confirm('Do You want to Save Your Password in your Storage')"></i>
              </button>
            </form>
          </div>
          <div class="length range__slider" data-min="8" data-max="40">
            <div class="length__title result_box_title" data-length='0'>LENGTH:</div><br>
            <input id="slider" type="range" min="8" max="40" value="18" />
          </div>
          <div class="settings">
            <span class="settings__title result_box_title">SETTINGS</span><br>
            <div class="setting">
              <input type="checkbox" id="uppercase" checked />
              <label for="uppercase">Include Uppercase</label>
            </div>
            <div class="setting">
              <input type="checkbox" id="lowercase" checked />
              <label for="lowercase">Include Lowercase</label>
            </div>
            <div class="setting">
              <input type="checkbox" id="number" checked />
              <label for="number">Include Numbers</label>
            </div>
            <div class="setting">
              <input type="checkbox" id="symbol" checked />
              <label for="symbol">Include Symbols</label>
            </div>
          </div>
          <button class="btn generate" id="generate">Generate Password</button>
        </div>
      </div>
    </div>
  </div>
  <!-- get_password_modal -->

  <!-- Add Card Modal -->

  <div id="vault_add_note" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container pt-3 px-4 pb-3 add_card_shadow">
          <form action="addcard.php" method="POST" class="form_design" autocomplete="off">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Heading</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Heading" name="card_heading" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter Category</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Category" maxlength="6" name="card_category" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Account Name/Email/Username</label>
              <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here" name="card_username" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password/PIN/Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here" name="card_password" autocomplete="off">
            </div>
            <input type="submit" class="btn btn-primary add_note_btn" name="add_card" value="Add Card" />
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Add Card Modal-->

  <!-- Todo list -->

  <div id="vault_todo" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="to-do-list">
          <div class="list-title mt-2 mb-0"><i class="far fa-calendar-check"></i> My Todo List</div>
          <hr class="mt-2 hr_line">
          <div class="list-body"></div>
          <div class="list-footer">
            <hr>
            <input class="item-input" type="text" placeholder="Add Tasks Here" maxlength="25" />
            <span class="add-item" title="Add Item">
              <button type="submit" class="btn btn-primary add_task_todo_btn mx-3">Add Task</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Todo list -->

  <!-- profile -->
  <div id="vault_profile" class="modal" tabindex="-1">
    <div class="modal-dialog profile_link_clicks">
      <div class="profile_modal">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="200" height="200" viewBox="0 0 172 172"
          style=" fill:#000000;">
          <defs>
            <linearGradient x1="74.4115" y1="107.52867" x2="89.7625" y2="160.33983" gradientUnits="userSpaceOnUse"
              id="color-1_106PofAoe3p7_gr1">
              <stop offset="0" stop-color="#ff2b42"></stop>
              <stop offset="1" stop-color="#ff2b42"></stop>
            </linearGradient>
            <linearGradient x1="117.95258" y1="71.66667" x2="122.73275" y2="71.66667" gradientUnits="userSpaceOnUse"
              id="color-2_106PofAoe3p7_gr2">
              <stop offset="0" stop-color="#fddec8"></stop>
              <stop offset="0.251" stop-color="#fddec8"></stop>
              <stop offset="0.619" stop-color="#fddec8"></stop>
              <stop offset="1" stop-color="#fddec8"></stop>
            </linearGradient>
            <linearGradient x1="54.04742" y1="71.66667" x2="49.26725" y2="71.66667" gradientUnits="userSpaceOnUse"
              id="color-3_106PofAoe3p7_gr3">
              <stop offset="0" stop-color="#fddec8"></stop>
              <stop offset="0.251" stop-color="#fddec8"></stop>
              <stop offset="0.619" stop-color="#fddec8"></stop>
              <stop offset="1" stop-color="#fddec8"></stop>
            </linearGradient>
            <radialGradient cx="85.99427" cy="67.00765" r="38.61643" gradientUnits="userSpaceOnUse"
              id="color-4_106PofAoe3p7_gr4">
              <stop offset="0" stop-color="#fddec8"></stop>
              <stop offset="0.261" stop-color="#fddec8"></stop>
              <stop offset="0.639" stop-color="#fddec8"></stop>
              <stop offset="1" stop-color="#fddec8"></stop>
            </radialGradient>
            <radialGradient cx="55.34184" cy="23.87691" r="91.34441" gradientUnits="userSpaceOnUse"
              id="color-5_106PofAoe3p7_gr5">
              <stop offset="0" stop-color="#333333"></stop>
              <stop offset="0.508" stop-color="#000000"></stop>
              <stop offset="1" stop-color="#000000"></stop>
            </radialGradient>
            <radialGradient cx="80.85822" cy="29.99287" r="100.89898" gradientUnits="userSpaceOnUse"
              id="color-6_106PofAoe3p7_gr6">
              <stop offset="0" stop-color="#333333"></stop>
              <stop offset="0.508" stop-color="#000000"></stop>
              <stop offset="1" stop-color="#000000"></stop>
            </radialGradient>
          </defs>
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
            font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g>
              <path
                d="M86,109.54608c-31.66592,0 -57.33333,17.63358 -57.33333,36.85817v4.09575c0,3.95958 3.20708,7.16667 7.16667,7.16667h100.33333c3.95958,0 7.16667,-3.20708 7.16667,-7.16667v-4.09575c0,-19.22458 -25.66742,-36.85817 -57.33333,-36.85817z"
                fill="url(#color-1_106PofAoe3p7_gr1)"></path>
              <path
                d="M103.91667,114.66667c0,6.79758 -7.16667,14.33333 -17.91667,14.33333c-10.75,0 -17.91667,-7.53575 -17.91667,-14.33333c0,-9.44925 0,-25.20875 0,-25.20875h35.83333c0,0 0,15.7595 0,25.20875z"
                fill="#e8cdba"></path>
              <path
                d="M117.949,64.5h-1.88842v14.33333h2.51908c1.84542,0 3.4185,-1.118 3.73025,-2.65167l1.23267,-6.10242c0.59125,-2.91683 -2.07833,-5.57925 -5.59358,-5.57925z"
                fill="url(#color-2_106PofAoe3p7_gr2)"></path>
              <path
                d="M54.051,64.5h1.88842v14.33333h-2.51908c-1.84542,0 -3.4185,-1.118 -3.73025,-2.65167l-1.23267,-6.10242c-0.59125,-2.91683 2.07833,-5.57925 5.59358,-5.57925z"
                fill="url(#color-3_106PofAoe3p7_gr3)"></path>
              <path
                d="M86,22.93333c-15.91358,0 -32.25,2.41875 -32.25,36.81875c0,2.752 0,21.05925 0,24.00117c0,12.28008 19.35,27.33008 32.25,27.33008c12.9,0 32.25,-15.05 32.25,-27.33008c0,-2.94192 0,-21.24558 0,-24.00117c0,-34.4 -16.33642,-36.81875 -32.25,-36.81875z"
                fill="url(#color-4_106PofAoe3p7_gr4)"></path>
              <path
                d="M86,19.86958c-15.60183,0 -17.91667,5.86233 -17.91667,5.86233c-6.3425,0.93525 -17.91667,10.22683 -17.91667,20.84783c0,5.92683 0.94958,10.30567 3.58333,25.08333c1.95292,-23.45292 8.05892,-32.25 14.33333,-32.25c4.54008,0 8.14492,3.58333 17.91667,3.58333c8.25242,0 10.30208,-3.58333 17.91667,-3.58333c10.75,0 14.33333,28.552 14.33333,32.25c2.15358,-10.78583 3.58333,-19.90542 3.58333,-25.08333c0,-12.28725 -13.58442,-26.71017 -35.83333,-26.71017z"
                fill="url(#color-5_106PofAoe3p7_gr5)"></path>
              <path
                d="M86.78475,17.91667c-14.921,0 -18.69067,7.81883 -18.69067,7.81883c-0.1505,4.15308 1.8705,7.81883 1.8705,7.81883c0,0 2.72333,5.86233 18.275,5.86233c9.38833,0 22.84375,-5.85875 22.84375,-21.5c0,0 -3.02075,0 -24.29858,0z"
                fill="url(#color-6_106PofAoe3p7_gr6)"></path>
            </g>
          </g>
        </svg>
        <?php
        $sql = "SELECT * FROM `signup_table` WHERE `id`= $_SESSION[user_id]";
        $datas = mysqli_query($connection, $sql);
        $profile_data = mysqli_fetch_assoc($datas);
        ?>
        <h3 class="profile_name"><?php echo $profile_data['first_name'] ?></h3>
        <p class="profile_email mt-3"><b>Email: </b><?php echo $profile_data['email_id'] ?></p>
        <p class="profile_email"><b>Password:</b> _SHA_pass_encyption_ </p>
        <p class="profile_email"><b>Change Password: </b> <a href="" class="clickhere_color">Click here</a></p>
        <form action="addcard.php" method="POST" class="form_design">
        <input type="submit" class="delete_profile mt-1" name="delete-account" value="Delete Account">
        </form>
      </div>
    </div>
  </div>
  <!-- profile -->


