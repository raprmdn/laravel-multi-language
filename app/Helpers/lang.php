<?php

function translations($file) {
    if(!file_exists($file)) {
        return [];
    }

    return json_decode(file_get_contents($file), true);
}
