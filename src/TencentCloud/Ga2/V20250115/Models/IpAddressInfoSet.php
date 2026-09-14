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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public IP information in the acceleration region
 *
 * @method string getIpAddress() Obtain <p>IP address.</p>
 * @method void setIpAddress(string $IpAddress) Set <p>IP address.</p>
 * @method string getIspType() Obtain <p>IP type.</p>
 * @method void setIspType(string $IspType) Set <p>IP type.</p>
 * @method string getDdosProtectionType() Obtain <p>Ddos type</p>
 * @method void setDdosProtectionType(string $DdosProtectionType) Set <p>Ddos type</p>
 */
class IpAddressInfoSet extends AbstractModel
{
    /**
     * @var string <p>IP address.</p>
     */
    public $IpAddress;

    /**
     * @var string <p>IP type.</p>
     */
    public $IspType;

    /**
     * @var string <p>Ddos type</p>
     */
    public $DdosProtectionType;

    /**
     * @param string $IpAddress <p>IP address.</p>
     * @param string $IspType <p>IP type.</p>
     * @param string $DdosProtectionType <p>Ddos type</p>
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
        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }

        if (array_key_exists("DdosProtectionType",$param) and $param["DdosProtectionType"] !== null) {
            $this->DdosProtectionType = $param["DdosProtectionType"];
        }
    }
}
