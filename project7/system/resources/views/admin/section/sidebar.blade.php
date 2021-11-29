<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{url('public')}}/admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{url('public')}}/admin/images/layout_img/client-1.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Erwinda</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="{{url('dashboard')}}"><i class="fa fa-home orange_color"></i> <span>Dashboard</span></a>
                     </li>

                     <li>
                        <a href="{{url('produk')}}"><i class="fa fa-archive orange_color"></i> <span>Produk</span></a>
                     </li>

                     <li>
                        <a href="{{url('kategori')}}"><i class="fa fa-star orange_color"></i> <span>Kategori</span></a>
                     </li>

                     <li>
                        <a href="{{url('user')}}"><i class="fa fa-users orange_color"></i> <span>User</span></a>
                     </li>

         
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user yellow_color"></i> <span>Profil</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{url('login')}}">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="{{url('profile')}}">> <span>Profile</span></a>
                           </li>
                        </ul>
                     </li>
                     
                  </ul>
               </div>
            </nav>