<!-- div_White_Box1 -->
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-7 col-sm-12 col-md-12 p-4 white_box1">
        <p class="box_heading1">To prevent your passwords from being hacked by social engineering, brute force or
          dictionary attack method, and keep your online accounts safe, you should notice that:</p><br>
        <ol type="1" class="list">
          <li>Do not use the same password, security question and answer for multiple important accounts.</li>
          <li>Use a password that has at least 16 characters, use at least one number, one uppercase letter, one
            lowercase letter and one special symbol.</li>
          <li>Do not use the names of your families, friends or pets in your passwords.</li>
          <li>Do not use postcodes, house numbers, phone numbers, birthdates, ID card numbers, social security numbers,
            and so on in your passwords.</li>
          <li> Do not use any dictionary word in your passwords. Examples of strong passwords: ePYHc~dS*)8$+V-' ,
            qzRtC{6rXN3N\RgL , zbfUMZPE6`FC%)sZ. Examples of weak passwords: qwert12345, Gbt3fC79ZmMEFUFJ, 1234567890,
            987654321, nortonpassword.</li>
          <li>Do not log in to important accounts on the computers of others, or when connected to a public Wi-Fi
            hotspot, Tor, free VPN or web proxy.</li>
          <li>Do not let your Web browsers( FireFox, Chrome, Safari, Opera, IE, Microsoft Edge ) to store your
            passwords, since all passwords saved in Web browsers can be revealed easily.</li>
          <li>Encrypt and backup your passwords to different locations, then if you lost access to your computer or account, you can retrieve your passwords back quickly.</li>
          <!-- <li>It's recommended that you remember a few master passwords, store other passwords in a plain text file and encrypt this file with 7-Zip, GPG or a disk encryption software such as BitLocker, or manage your passwords with a password management software.</li> -->
          <li>If you want to save your passwords at one place you can use our Notes Storage.</li>
          
        </ol>
      </div>
      <!-- div_White_Box1 -->

      <!-- div_White_Box2 -->
      <div class="col-sm-12 col-lg-4 col-md-12 white_box2">
        <div class="containerss">
          <h2 class="title text-center box2_heading">Password Generator</h2>
          <div class="result_box">
            <div class="result_box_info right">click to copy</div>
            <div class="result_box_info left">copied</div>
            <div class="result__viewbox" id="result_box">CLICK GENERATE</div>
            <form action="#">
              <button id="copy-btn"><i class="far fa-copy"
                  onclick="return  confirm('Do You want to Save Your Password in Notes Storage')"></i>
              </button>
            </form>
          </div>
          <div class="length range__slider" data-min="8" data-max="40">
            <div class="length__title result_box_title" data-length='0'>LENGTH:</div><br>
            <input id="slider" type="range" min="8" max="40" value="16" />
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

  </div>

  </div>

  <!-- div_White_Box2 -->