<?php
header("Content-Type: application/json");

include "koneksi.php";

// Mengecek apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $projectId = $_GET['id'];
    $query = "SELECT * FROM tblangka WHERE id = $projectId";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
        echo json_encode($project);
    } else {
        echo json_encode(["message" => "Proyek tidak ditemukan"]);
    }
} else {
    // Mengecek endpoint
    if (isset($_GET['endpoint'])) {
        $endpoint = $_GET['endpoint'];

        if ($endpoint === "all") {
            $result = $koneksi->query("SELECT * FROM `tblangka` ORDER BY `judul` ASC");
        } elseif ($endpoint === "hewan") {
            $result = $koneksi->query("SELECT * FROM tblangka WHERE jenis='Hewan'");
        } elseif ($endpoint === "tumbuhan") {
            $result = $koneksi->query("SELECT * FROM tblangka WHERE jenis='Tumbuhan'");
        } elseif ($endpoint === "lain") {
            $result = $koneksi->query("SELECT * FROM tblangka WHERE jenis='lain'");
        } elseif ($endpoint === "info") {
            $result = $koneksi->query("SELECT * FROM kontak WHERE id='1'");
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Endpoint tidak ditemukan"]);
            exit();
        }

        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo json_encode(["message" => "Data tidak ditemukan"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Parameter 'endpoint' harus ditentukan"]);
    }
}

$koneksi->close();
?>
