<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetVpnGatewayInternetMaxBandwidth request structure.
 *
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method integer getInternetMaxBandwidthOut() Obtain The new bandwidth cap in Mbps. Values: `5`, `10`, `20`, `50`, `100`, `200`, `500` and `1000`. The adjustment of the VPN gateway bandwidth is limited to [5,100] Mbps and [200,1000] Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The new bandwidth cap in Mbps. Values: `5`, `10`, `20`, `50`, `100`, `200`, `500` and `1000`. The adjustment of the VPN gateway bandwidth is limited to [5,100] Mbps and [200,1000] Mbps.
 */
class ResetVpnGatewayInternetMaxBandwidthRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var integer The new bandwidth cap in Mbps. Values: `5`, `10`, `20`, `50`, `100`, `200`, `500` and `1000`. The adjustment of the VPN gateway bandwidth is limited to [5,100] Mbps and [200,1000] Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param integer $InternetMaxBandwidthOut The new bandwidth cap in Mbps. Values: `5`, `10`, `20`, `50`, `100`, `200`, `500` and `1000`. The adjustment of the VPN gateway bandwidth is limited to [5,100] Mbps and [200,1000] Mbps.
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
