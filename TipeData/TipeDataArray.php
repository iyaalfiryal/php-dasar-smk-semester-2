<?php
// $values = array(10, 9, 8, 7.5);
// var_dump($values);

// $names = ["IDN", "Boarding", "School"];
// // var_dump($names);

// //menampilkan data array index ke 1
// var_dump($names[0]);

// //mengubah data array
// $names[0] = "SMK IDN";
// var_dump($names);

// //menghapus data array
// unset($names[1]);
// var_dump($names);

// //menambahkan data array
// $names[] = "Jonggol";
// var_dump($names);


// $sekolah = array(
//   "id" => "1",
//   "nama" => "SMK IDN Boarding School",
// );
//menampilkan seluruh array
// var_dump($sekolah);

//menampilkan arrat sesuai index
// var_dump($sekolah["nama"]);

$sekolah = array(
  "id" => "1",
  "nama" => "SMK IDN Boarding School",
  "address" => array(
    "city" => "Jonggol",
    "country" => "Indonesia"
    )
  );

var_dump($sekolah["address"]["country"]);
