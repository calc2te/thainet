<?php

function showModal($id, array $data = [])
{
    $toJSON = json_encode($data);
    return "showModal('$id', $toJSON)";
}
