<?php

Route::get('tes', function () {
    return 'coba package';
});

Route::get('facade', function () {
    return Message::display();
});

Route::get('instagram', function () {
    return Instagram::getData();
});

Route::get('instagram/{name}', function ($name) {
    return Instagram::getName($name);
});