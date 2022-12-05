<?php
require 'connection.php';

function store($request)
{
    global $conn;

    $fullname = $request['fullname'];
    $from = $request['from'];
    $to_airport = $request['to_airport'];
    $date = $request['date'];
    $no_pass = $request['no_pass'];
    $class = $request['class'];
    $price = $request['price'];
    $query = "INSERT INTO ticket VALUE('', '$fullname', '$from', '$to_airport', '$no_pass', '$class', '$price', '$date')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function getData($query)
{
    global $conn;

    $rows = [];
    $execute = mysqli_query($conn, $query);;
    while ($row = mysqli_fetch_assoc($execute)) {
        $rows[] = $row;
    }
    return $rows;
}
