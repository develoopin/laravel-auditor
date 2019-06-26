<?php

namespace Develoopin\Audit\Exceptions;

class AuditActivityNotFoundException extends \Exception
{
    public static function couldNotFindRecordById($id)
    {
        return new static("Could not determine a record with identifier `{$id}`.");
    }
}
