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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateNetworkInstance request structure.
 *
 * @method string getNetworkInstanceName() Obtain New instance name
 * @method void setNetworkInstanceName(string $NetworkInstanceName) Set New instance name
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method string getNetwork() Obtain The network address (host bits must be all 0s) must fall into one of the following RFC 1918 private ranges: `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`.
 * @method void setNetwork(string $Network) Set The network address (host bits must be all 0s) must fall into one of the following RFC 1918 private ranges: `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`.
 * @method integer getMask() Obtain Mask digits. The upper limit is fixed at `28`, while the lower limit depends on the private segment it belongs to: `10.0.0.0/8` allows `8~28`, `172.16.0.0/12` allows `12~28`, `192.168.0.0/16` allows `16~28`. It must together form a valid network address with Network (host bits all set to 0).
 * @method void setMask(integer $Mask) Set Mask digits. The upper limit is fixed at `28`, while the lower limit depends on the private segment it belongs to: `10.0.0.0/8` allows `8~28`, `172.16.0.0/12` allows `12~28`, `192.168.0.0/16` allows `16~28`. It must together form a valid network address with Network (host bits all set to 0).
 */
class CreatePrivateNetworkInstanceRequest extends AbstractModel
{
    /**
     * @var string New instance name
     */
    public $NetworkInstanceName;

    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string The network address (host bits must be all 0s) must fall into one of the following RFC 1918 private ranges: `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`.
     */
    public $Network;

    /**
     * @var integer Mask digits. The upper limit is fixed at `28`, while the lower limit depends on the private segment it belongs to: `10.0.0.0/8` allows `8~28`, `172.16.0.0/12` allows `12~28`, `192.168.0.0/16` allows `16~28`. It must together form a valid network address with Network (host bits all set to 0).
     */
    public $Mask;

    /**
     * @param string $NetworkInstanceName New instance name
     * @param string $ZoneId Availability zone ID.
     * @param string $Network The network address (host bits must be all 0s) must fall into one of the following RFC 1918 private ranges: `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`.
     * @param integer $Mask Mask digits. The upper limit is fixed at `28`, while the lower limit depends on the private segment it belongs to: `10.0.0.0/8` allows `8~28`, `172.16.0.0/12` allows `12~28`, `192.168.0.0/16` allows `16~28`. It must together form a valid network address with Network (host bits all set to 0).
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
        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
