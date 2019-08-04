
<header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                               
                    <form id="caridasboard" class="form-header" action="/dashboard" method="get">
                        <input class="au-input au-input--xl" type="text" name="cari" placeholder="search...">
                        <button class="au-btn--submit" type="button">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                             
                        <div class="header-button ml-auto">
                            <div class="noti-wrap"></div>
                                <div class="account-dropdown__footer">
                                    <a href="/logoutadmin">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                                     <div class="">
                                         <a class="" href="#">{{auth()->user()->nama}}</a>
                                     </div>
                                         
                        </div>       
                </div>
            </div>
        </div>
    </header>