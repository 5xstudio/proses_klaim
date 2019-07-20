<?php
require_once 'config.php';

//  switch req get
if (isset($_GET['type'])) {
    switch ($_GET['type']) { 
        case 'logout':
        logout();
        break;
    }
}

//  switch req post
if (isset($_POST['type'])) {
    switch ($_POST['type']) {
        case 'login':
            login();
            break;
    }
}

function login()
{
    global $conn;
    $post = $_POST;
    $p = md5($post['p']);
    $sql = "SELECT * from db_user where username = '{$post['u']}' AND `password`= '{$p}' ";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {        
        $data = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['akses'] = $data['akses'];
        echo json_encode(['success' => 1, 'message' => 'login berhasil', 'data' => []]);
      }else{
        echo json_encode(['success' => 1, 'message' => 'Username Atau Password salah', 'data' => []]);
    }
}

function logout(){
    session_destroy();
    echo "<script>
        alert('Logout Berhasil!');
        location.replace('index.php');        
    </script>";
}
