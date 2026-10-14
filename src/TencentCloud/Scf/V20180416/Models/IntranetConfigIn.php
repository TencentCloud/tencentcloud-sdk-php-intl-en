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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private network configuration
 *
 * @method string getIpFixed() Obtain Whether a fixed private IP address is enabled
ENABLE: enable
DISABLE means not enabled.

 * @method void setIpFixed(string $IpFixed) Set Whether a fixed private IP address is enabled
ENABLE: enable
DISABLE means not enabled.
 */
class IntranetConfigIn extends AbstractModel
{
    /**
     * @var string Whether a fixed private IP address is enabled
ENABLE: enable
DISABLE means not enabled.

     */
    public $IpFixed;

    /**
     * @param string $IpFixed Whether a fixed private IP address is enabled
ENABLE: enable
DISABLE means not enabled.
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
        if (array_key_exists("IpFixed",$param) and $param["IpFixed"] !== null) {
            $this->IpFixed = $param["IpFixed"];
        }
    }
}
