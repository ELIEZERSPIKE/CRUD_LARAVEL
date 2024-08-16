<?php

namespace App\Interface;

interface CodeInterface
{
    public function CheckOtpCode(array $data);
    public function forgottenPassword(array $data);
}
