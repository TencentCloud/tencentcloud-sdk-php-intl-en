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
 * Information on VPN gateway-based CCN routes.
 *
 * @method string getRouteId() Obtain Route ID
 * @method void setRouteId(string $RouteId) Set Route ID
 * @method string getStatus() Obtain Enable the route or not
ENABLE: enable the route
DISABLE: do not enable the route
 * @method void setStatus(string $Status) Set Enable the route or not
ENABLE: enable the route
DISABLE: do not enable the route
 * @method string getDestinationCidrBlock() Obtain Route CIDR block
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Route CIDR block
 */
class VpngwCcnRoutes extends AbstractModel
{
    /**
     * @var string Route ID
     */
    public $RouteId;

    /**
     * @var string Enable the route or not
ENABLE: enable the route
DISABLE: do not enable the route
     */
    public $Status;

    /**
     * @var string Route CIDR block
     */
    public $DestinationCidrBlock;

    /**
     * @param string $RouteId Route ID
     * @param string $Status Enable the route or not
ENABLE: enable the route
DISABLE: do not enable the route
     * @param string $DestinationCidrBlock Route CIDR block
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

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }
    }
}
