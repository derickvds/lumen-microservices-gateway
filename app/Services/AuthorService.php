<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * Base uri to consume authors service
     *
     * @var string
     */
    public $baseUri;

    public function _construct()
    {
        $this->$baseUri = config('services.authors.base_uri');
    }
}

?>