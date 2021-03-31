<?php

namespace App\Repository\Meetings;

interface MembersAbsentInterface
{
    public function getAbsentmembers(array $members);
}
