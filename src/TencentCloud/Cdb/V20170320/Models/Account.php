<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB account information
 *
 * @method string getUser() Obtain Account name, enter 1-32 characters.
 * @method void setUser(string $User) Set Account name, enter 1-32 characters.
 * @method string getHost() Obtain Account's host.
Note:
1. IP format. You can specify a percent sign (%).
2. Multiple hosts are separated by a separator, which supports ;, |, line break, and space.
 * @method void setHost(string $Host) Set Account's host.
Note:
1. IP format. You can specify a percent sign (%).
2. Multiple hosts are separated by a separator, which supports ;, |, line break, and space.
 */
class Account extends AbstractModel
{
    /**
     * @var string Account name, enter 1-32 characters.
     */
    public $User;

    /**
     * @var string Account's host.
Note:
1. IP format. You can specify a percent sign (%).
2. Multiple hosts are separated by a separator, which supports ;, |, line break, and space.
     */
    public $Host;

    /**
     * @param string $User Account name, enter 1-32 characters.
     * @param string $Host Account's host.
Note:
1. IP format. You can specify a percent sign (%).
2. Multiple hosts are separated by a separator, which supports ;, |, line break, and space.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
