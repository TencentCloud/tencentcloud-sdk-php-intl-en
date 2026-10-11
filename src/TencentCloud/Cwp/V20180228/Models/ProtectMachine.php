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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorization expiration info of the machine
 *
 * @method string getHostName() Obtain Machine name
 * @method void setHostName(string $HostName) Set Machine name
 * @method string getHostIp() Obtain Machine IP address
 * @method void setHostIp(string $HostIp) Set Machine IP address
 * @method integer getSafeguardDirNum() Obtain Number of protection directories
 * @method void setSafeguardDirNum(integer $SafeguardDirNum) Set Number of protection directories
 */
class ProtectMachine extends AbstractModel
{
    /**
     * @var string Machine name
     */
    public $HostName;

    /**
     * @var string Machine IP address
     */
    public $HostIp;

    /**
     * @var integer Number of protection directories
     */
    public $SafeguardDirNum;

    /**
     * @param string $HostName Machine name
     * @param string $HostIp Machine IP address
     * @param integer $SafeguardDirNum Number of protection directories
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("SafeguardDirNum",$param) and $param["SafeguardDirNum"] !== null) {
            $this->SafeguardDirNum = $param["SafeguardDirNum"];
        }
    }
}
