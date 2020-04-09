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
 * CreateDirectConnectGatewayCcnRoutes request structure.
 *
 * @method string getDirectConnectGatewayId() Obtain The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
 * @method array getRoutes() Obtain The list of IDC IP range that must be connected
 * @method void setRoutes(array $Routes) Set The list of IDC IP range that must be connected
 */
class CreateDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
     */
    public $DirectConnectGatewayId;

    /**
     * @var array The list of IDC IP range that must be connected
     */
    public $Routes;

    /**
     * @param string $DirectConnectGatewayId The ID of the Direct Connect gateway, such as `dcg-prpqlmg1`
     * @param array $Routes The list of IDC IP range that must be connected
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

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new DirectConnectGatewayCcnRoute();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
