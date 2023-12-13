<?php

    for ($i = 1; $i <= 10000; $i++) {
        $ostatak = $i % 5;
        if ($ostatak === 0) {
            echo $i;
        }
    }