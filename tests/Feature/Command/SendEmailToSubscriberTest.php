<?php

it('test email send to subscribed users', function () {
    $this->artisan('mail:send')
        ->expectsOutput("email send success!");
});
