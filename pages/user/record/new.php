<?php
session_start();
dd($_POST);
$ognoo = post('ognoo', 10);
$utga = post('utga', 255);
$togtmol = post('togtmol', 3);
$turul = post('turul', 15);
$hariltsagch = post('hariltsagch', 100);
$mungu_usuh = post('mungu_usuh', 10);
$mungu_buurah = post('mungu_buurah', 10);
$hurungu_usuh = post('hurungu_usuh', 10);
$hurungu_buurah = post('hurungu_buurah', 10);
$baraa_usuh = post('baraa_usuh', 10);
$baraa_buurah = post('baraa_buurah', 10);
$awlaga_usuh = post('awlaga_usuh', 10);
$awlaga_buurah = post('awlaga_buurah', 10);
$ur_usuh = post('ur_usuh', 10);
$ur_buurah = post('ur_buurah', 10);
$orlogo = post('orlogo', 10);
$zardal = post('zardal', 10);

try {
    $success = _exec(
        "insert into transaction set
    ognoo=?,
    utga=?,
    togtmol=?,
    turul=?,
    hariltsagch=?,
    mungu_usuh=?,
    mungu_buurah=?,
    hurungu_usuh=?,
    hurungu_buurah=?,
    baraa_usuh=?,
    baraa_buurah=?,
    awlaga_usuh=?,
    awlaga_buurah=?,
    ur_usuh=?,
    ur_buurah=?,
    orlogo=?,
    zardal=?,
    create_user_id=?,
    create_time= now()",
        'sssssiiiiiiiiiiiii',
        [$ognoo, $utga, $togtmol, $turul, $hariltsagch, $mungu_usuh, $mungu_buurah,
            $hurungu_usuh, $hurungu_buurah, $baraa_usuh, $baraa_buurah, $awlaga_usuh,
            $awlaga_buurah, $ur_usuh, $ur_buurah, $orlogo, $zardal, $_SESSION['id']],
        $count
    );

} catch (Exception $e) {
    echo "Aldaa garlaa, ta dahin oroldono uu";

}

redirect('/user/home');
