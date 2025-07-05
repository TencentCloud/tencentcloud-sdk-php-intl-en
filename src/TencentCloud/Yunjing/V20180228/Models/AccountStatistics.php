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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account statistics.
 *
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method integer getMachineNum() Obtain Number of servers.
 * @method void setMachineNum(integer $MachineNum) Set Number of servers.
 */
class AccountStatistics extends AbstractModel
{
    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var integer Number of servers.
     */
    public $MachineNum;

    /**
     * @param string $Username Username.
     * @param integer $MachineNum Number of servers.
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }
    }
}
