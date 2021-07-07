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
 * DeleteVpnGatewayRoutes request structure.
 *
 * @method string getVpnGatewayId() Obtain Instance ID of the VPN gateway
 * @method void setVpnGatewayId(string $VpnGatewayId) Set Instance ID of the VPN gateway
 * @method array getRouteIds() Obtain List of route IDs
 * @method void setRouteIds(array $RouteIds) Set List of route IDs
 */
class DeleteVpnGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the VPN gateway
     */
    public $VpnGatewayId;

    /**
     * @var array List of route IDs
     */
    public $RouteIds;

    /**
     * @param string $VpnGatewayId Instance ID of the VPN gateway
     * @param array $RouteIds List of route IDs
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

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }
    }
}
