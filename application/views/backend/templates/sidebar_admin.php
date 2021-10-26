 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
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