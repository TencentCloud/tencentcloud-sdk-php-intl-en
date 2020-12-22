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
 * @method string getDirectConnectGatewayId() Obtain The unique ID of the direct connect gateway, such as `dcg-9o233uri`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The unique ID of the direct connect gateway, such as `dcg-9o233uri`.
 * @method string getDirectConnectGatewayName() Obtain The direct connect gateway name. You can enter any name within 60 characters.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set The direct connect gateway name. You can enter any name within 60 characters.
 * @method string getCcnRouteType() Obtain The CCN route-learning type. Valid values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). You can only modify `CcnRouteType` for a CCN direct connect gateway with BGP enabled.
 * @method void setCcnRouteType(string $CcnRouteType) Set The CCN route-learning type. Valid values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). You can only modify `CcnRouteType` for a CCN direct connect gateway with BGP enabled.
 * @method string getModeType() Obtain CCN route publishing method. Valid values: `standard` and `exquisite`. You can only modify `ModeType` for a CCN direct connect gateway.
 * @method void setModeType(string $ModeType) Set CCN route publishing method. Valid values: `standard` and `exquisite`. You can only modify `ModeType` for a CCN direct connect gateway.
 */
class ModifyDirectConnectGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the direct connect gateway, such as `dcg-9o233uri`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string The direct connect gateway name. You can enter any name within 60 characters.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string The CCN route-learning type. Valid values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). You can only modify `CcnRouteType` for a CCN direct connect gateway with BGP enabled.
     */
    public $CcnRouteType;

    /**
     * @var string CCN route publishing method. Valid values: `standard` and `exquisite`. You can only modify `ModeType` for a CCN direct connect gateway.
     */
    public $ModeType;

    /**
     * @param string $DirectConnectGatewayId The unique ID of the direct connect gateway, such as `dcg-9o233uri`.
     * @param string $DirectConnectGatewayName The direct connect gateway name. You can enter any name within 60 characters.
     * @param string $CcnRouteType The CCN route-learning type. Valid values: `BGP` (Automatic learning), `STATIC` (Static, that is, user-configured). You can only modify `CcnRouteType` for a CCN direct connect gateway with BGP enabled.
     * @param string $ModeType CCN route publishing method. Valid values: `standard` and `exquisite`. You can only modify `ModeType` for a CCN direct connect gateway.
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

        if (array_key_exists("ModeType",$param) and $param["ModeType"] !== null) {
            $this->ModeType = $param["ModeType"];
        }
    }
}
