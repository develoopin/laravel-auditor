<?php

namespace Develoopin\Audit\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Develoopin\Audit\AuditServiceProvider;

trait CausesActivity
{
    use MorphManyWithoutCollection;

    /**
     * List the actions caused by the Model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function actions(): MorphMany
    {
        return $this->morphManyWithoutCollection(
            AuditServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
