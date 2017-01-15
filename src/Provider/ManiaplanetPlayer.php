<?php

/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

namespace J5\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class ManiaplanetPlayer implements ResourceOwnerInterface
{
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }

    public function getId()
    {
        return $this->response['id'];
    }

    public function getLogin()
    {
        return $this->response['login'];
    }

    public function getNickname()
    {
        return $this->response['nickname'];
    }

    public function getPath()
    {
        return $this->response['path'];
    }

    public function getIdZone()
    {
        return $this->response['idZone'];
    }

    public function toArray()
    {
        return $this->response;
    }
}
