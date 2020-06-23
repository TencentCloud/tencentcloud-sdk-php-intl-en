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
 * ModifyDirectConnectGatewayAttribute request structure.
 *
 * @method string getDirectConnectGatewayId() Obtain The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
 * @method string getDirectConnectGatewayName() Obtain Direct connect gateway can be named freely, but the maximum length is 60 characters.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set Direct connect gateway can be named freely, but the maximum length is 60 characters.
 * @method string getCcnRouteType() Obtain CCN route learning type. Available values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). Modifying `CcnRouteType` is only possible if the Direct Connect is CCN-type and the BGP function is enabled.
 * @method void setCcnRouteType(string $CcnRouteType) Set CCN route learning type. Available values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). Modifying `CcnRouteType` is only possible if the Direct Connect is CCN-type and the BGP function is enabled.
 */
class ModifyDirectConnectGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string Direct connect gateway can be named freely, but the maximum length is 60 characters.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string CCN route learning type. Available values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). Modifying `CcnRouteType` is only possible if the Direct Connect is CCN-type and the BGP function is enabled.
     */
    public $CcnRouteType;

    /**
     * @param string $DirectConnectGatewayId The unique `ID` of the Direct Connect gateway, such as `dcg-9o233uri`.
     * @param string $DirectConnectGatewayName Direct connect gateway can be named freely, but the maximum length is 60 characters.
     * @param string $CcnRouteType CCN route learning type. Available values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). Modifying `CcnRouteType` is only possible if the Direct Connect is CCN-type and the BGP function is enabled.
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

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }
    }
}
