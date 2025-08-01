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
 * ModifyVpnGatewayRoutes request structure.
 *
 * @method string getVpnGatewayId() Obtain Instance ID of the VPN gateway
 * @method void setVpnGatewayId(string $VpnGatewayId) Set Instance ID of the VPN gateway
 * @method array getRoutes() Obtain Route parameters to modify
 * @method void setRoutes(array $Routes) Set Route parameters to modify
 */
class ModifyVpnGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the VPN gateway
     */
    public $VpnGatewayId;

    /**
     * @var array Route parameters to modify
     */
    public $Routes;

    /**
     * @param string $VpnGatewayId Instance ID of the VPN gateway
     * @param array $Routes Route parameters to modify
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

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new VpnGatewayRouteModify();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
