<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li><a href="/dashboard"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>

        <li><a href="{{route('user.index')}}"><i class="fa fa-user"></i> <span>User</span></a></li>

        <li><a href="{{route('daftar_daerah.index')}}"><i class="fa fa-folder"></i> <span>Nama Daerah</span></a></li>
        
       
        <li class="treeview">
          <a href="samarinda">
            <i class="fa fa-pencil"></i>
            <span>Pendataan Perjanjian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="{{route('samarinda.index')}}"><i class="fa fa-circle-o"></i> Kota Samarinda</a></li>
            <li><a href="{{route('balikpapan.index')}}"><i class="fa fa-circle-o"></i> Kota Balikpapan</a></li>
            <li><a href="{{route('bontang.index')}}"><i class="fa fa-circle-o"></i> Kota Bontang</a></li>
            <li><a href="{{route('kukar.index')}}"><i class="fa fa-circle-o"></i> Kab. Kutai Kartanegara</a></li>
            <li><a href="{{route('kutim.index')}}"><i class="fa fa-circle-o"></i> Kab. Kutai Timur</a></li>
            <li><a href="{{route('kubar.index')}}"><i class="fa fa-circle-o"></i> Kab. Kutai Barat</a></li>
            <li><a href="{{route('berau.index')}}"><i class="fa fa-circle-o"></i> Kab. Berau</a></li>
            <li><a href="{{route('mahakam.index')}}"><i class="fa fa-circle-o"></i> Kab. Mahakam Ulu</a></li>
            <li><a href="{{route('penajam.index')}}"><i class="fa fa-circle-o"></i> Kab. Penajam Paser Utara</a></li>
            <li><a href="{{route('paser.index')}}"><i class="fa fa-circle-o"></i> Kab. Paser</a></li>

          </ul>
        </li>
       

       
</ul>       