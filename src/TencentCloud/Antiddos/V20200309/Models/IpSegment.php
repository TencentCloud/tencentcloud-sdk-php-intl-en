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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Structure of IP range
 *
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method integer getMask() Obtain IP mask. For a 32-bit IP address, enter `0`.
 * @method void setMask(integer $Mask) Set IP mask. For a 32-bit IP address, enter `0`.
 */
class IpSegment extends AbstractModel
{
    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var integer IP mask. For a 32-bit IP address, enter `0`.
     */
    public $Mask;

    /**
     * @param string $Ip IP address
     * @param integer $Mask IP mask. For a 32-bit IP address, enter `0`.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
