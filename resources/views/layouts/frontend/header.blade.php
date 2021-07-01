<header>
    <div class="header-top">
       <div class="container">
          <div class="header-top-area">
             <div class="header-top-item">
                <a href=""><i class="fa fa-envelope"></i> demo@email.com</a>
             </div>
             <div class="header-top-item">
                <a href=""><i class="fa fa-phone"></i> +91 0000 000 000</a>
             </div>
             <div class="header-top-item ml-auto d-none d-sm-block">
                <select class="select-bar langSel">
                   <option value="en"
                      selected >English</option>
                   <option value="hn"
                      >Hindi</option>
                   <option value="bn"
                      >Bangla</option>
                </select>
             </div>
          </div>
       </div>
    </div>
    <div class="header-bottom">
       <div class="container">
          <div class="header-area">
             <div class="logo">
                <a href="index.html"><img src=" {{ asset('assets/images/logoIcon/logo.png') }}"
                   alt="logo"></a>
             </div>
             <ul class="menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us.index') }}">About</a></li>
                <li><a href="{{ route('marketing-tool.index') }}">Marketing Tool</a></li>
                <li><a href="{{ route('faq.index') }}">Faq</a></li>
                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                <li>
                   <a href="javascript:void(0)">Account</a>
                   <ul class="submenu">
                      <li><a href="login.html">Sign In</a>
                      </li>
                      <li><a href="register.html">Sign Up</a></li>
                   </ul>
                </li>
             </ul>
             <select class="select-bar d-sm-none ml-auto mr-3 langSel">
                <option value="en"
                   selected >English</option>
                <option value="hn"
                   >Hindi</option>
                <option value="bn"
                   >Bangla</option>
             </select>
             <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
             </div>
          </div>
       </div>
    </div>
 </header>
