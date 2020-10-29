<li class="{{ Request::is('profile-jurusan*') ? 'active' : '' }}">
    <a href="{{ route('profile-jurusan') }}"><i class="fa fa-edit"></i><span>Profile Jurusan</span></a>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Kepengurusan</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('divisis*') ? 'active' : '' }}">
            <a href="{{ route('divisis.index') }}"><i class="fa fa-circle-o"></i><span>Divisi</span></a>
        </li>

        <li class="{{ Request::is('jabatanPenguruses*') ? 'active' : '' }}">
            <a href="{{ route('jabatanPenguruses.index') }}"><i class="fa fa-circle-o"></i><span>Jabatan Pengurus</span></a>
        </li>

        <li class="{{ Request::is('penguruses*') ? 'active' : '' }}">
            <a href="{{ route('penguruses.index') }}"><i class="fa fa-circle-o"></i><span>Pengurus</span></a>
        </li>
    </ul>
</li>

<li class="treeview" style="height: auto;">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>Komunitas & Kegiatan</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('komunitas*') ? 'active' : '' }}">
            <a href="{{ route('komunitas.index') }}"><i class="fa fa-circle-o"></i><span>Komunitas & Kegiatan</span></a>
        </li>

        <li class="{{ Request::is('galeriKomunitas*') ? 'active' : '' }}">
            <a href="{{ route('galeriKomunitas.index') }}"><i
                    class="fa fa-circle-o"></i><span>Galeri Komunitas</span></a>
        </li>
    </ul>
</li>

<li class="treeview" style="height: auto;">
    <a href="#">
        <i class="fa fa-file"></i>
        <span>Berita</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('beritas*') ? 'active' : '' }}">
            <a href="{{ route('beritas.index') }}"><i class="fa fa-circle-o"></i><span>Berita</span></a>
        </li>
        <li class="{{ Request::is('categoryBeritas*') ? 'active' : '' }}">
            <a href="{{ route('categoryBeritas.index') }}"><i class="fa fa-circle-o"></i><span>Category Berita</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('galeriUmums*') ? 'active' : '' }}">
    <a href="{{ route('galeriUmums.index') }}"><i class="fa fa-edit"></i><span>Galeri Umum</span></a>
</li>

<li class="{{ Request::is('developers*') ? 'active' : '' }}">
    <a href="{{ route('developers.index') }}"><i class="fa fa-edit"></i><span>Developer</span></a>
</li>

<li class="{{ Request::is('kontaks*') ? 'active' : '' }}">
    <a href="{{ route('kontaks.index') }}"><i class="fa fa-edit"></i><span>Kontak</span></a>
</li>
