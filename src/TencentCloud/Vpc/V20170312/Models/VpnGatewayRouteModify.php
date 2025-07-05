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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify route status of the VPN gateway
 *
 * @method string getRouteId() Obtain Route ID of the VPN gateway
 * @method void setRouteId(string $RouteId) Set Route ID of the VPN gateway
 * @method string getStatus() Obtain Route status of the VPN gateway. Valid values: `ENABLE`, and `DISABLE`.
 * @method void setStatus(string $Status) Set Route status of the VPN gateway. Valid values: `ENABLE`, and `DISABLE`.
 */
class VpnGatewayRouteModify extends AbstractModel
{
    /**
     * @var string Route ID of the VPN gateway
     */
    public $RouteId;

    /**
     * @var string Route status of the VPN gateway. Valid values: `ENABLE`, and `DISABLE`.
     */
    public $Status;

    /**
     * @param string $RouteId Route ID of the VPN gateway
     * @param string $Status Route status of the VPN gateway. Valid values: `ENABLE`, and `DISABLE`.
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
