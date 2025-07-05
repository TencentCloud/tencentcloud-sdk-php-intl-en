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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPv6 access configuration
 *
 * @method string getSwitch() Obtain Domain name enables ipv6 access configuration switch. The value is: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Domain name enables ipv6 access configuration switch. The value is: <li>on: on; </li> <li>off: off. </li>
 */
class Ipv6Access extends AbstractModel
{
    /**
     * @var string Domain name enables ipv6 access configuration switch. The value is: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @param string $Switch Domain name enables ipv6 access configuration switch. The value is: <li>on: on; </li> <li>off: off. </li>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
