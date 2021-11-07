 <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #161E54;" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <img src="<?= base_url() ?>assets/img/logo.png" width="55px" alt="">
         </div>
         <div class="sidebar-brand-text mx-3">HIMATEKINFO</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <?php

        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->join('tbl_access_menu', 'tbl_menu.id_menu=tbl_access_menu.id_menu');
        $this->db->where('tbl_access_menu.id_role', $this->session->userdata('id_role'));
        $menu = $this->db->get()->result_array();

        ?>
     <!-- Nav Item - Dashboard -->
     <?php foreach ($menu as $mn) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url() ?><?= $mn['link_menu'] ?>">
                 <i class="<?= $mn['icon_menu'] ?>"></i>
                 <span><?= $mn['nama_menu'] ?></span></a>
         </li>
     <?php endforeach; ?>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url() ?>auth/logout">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>Logout</span></a>
     </li>

 </ul>
 <!-- End of Sidebar -->