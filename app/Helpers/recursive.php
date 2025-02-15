<?php

function recursive($data, $parent_id = 0, $level = 0) {
    $result = [];
    foreach ($data as $key => $item) {
        if ($item['parent_id'] == $parent_id) {
            $item['level'] = $level;
            $result[] = $item;

            unset($data[$key]);
            $child = recursive($data, $item['id'], $level + 1);
            $result = array_merge($result, $child);
        }
    }
    return $result;
}

function dataSelect($model) {
    $dataModels = $model::all();
    $dataModels = recursive($dataModels);

    foreach ($dataModels as $data) {
        $data_select[$data->id] = str_repeat('|---', $data->level) . $data->name;
    }

    return $data_select;
}
