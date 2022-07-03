<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(2);

        // if ($role_id == 2 && ($menu == 'hapus' || $menu == 'ubah' || $menu == 'tambah')) {
        //     redirect('barang');
        // }

        if ($role_id == 2 && in_array($menu, array("hapus", "ubah", "tambah"))) {
            $base = "<?= base_url('barang'); ?>";
            echo '
                <div style="text-align: center">
                <h1>403</h1>
                <h4>Access Forbidden</h4>
                <a href= "/barang">Kembali</a>
                </div>
            ';
            exit;
        }
    }
}
