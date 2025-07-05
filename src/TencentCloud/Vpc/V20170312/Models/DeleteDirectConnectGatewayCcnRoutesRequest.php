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
 * DeleteDirectConnectGatewayCcnRoutes request structure.
 *
 * @method string getDirectConnectGatewayId() Obtain The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
 * @method array getRouteIds() Obtain The route ID, such as `ccnr-f49l6u0z`.
 * @method void setRouteIds(array $RouteIds) Set The route ID, such as `ccnr-f49l6u0z`.
 */
class DeleteDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
     */
    public $DirectConnectGatewayId;

    /**
     * @var array The route ID, such as `ccnr-f49l6u0z`.
     */
    public $RouteIds;

    /**
     * @param string $DirectConnectGatewayId The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
     * @param array $RouteIds The route ID, such as `ccnr-f49l6u0z`.
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }
    }
}
