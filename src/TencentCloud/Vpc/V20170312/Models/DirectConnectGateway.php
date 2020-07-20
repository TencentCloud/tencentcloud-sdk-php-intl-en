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
 * The direct connect gateway object.
 *
 * @method string getDirectConnectGatewayId() Obtain The direct connect gateway ID.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The direct connect gateway ID.
 * @method string getDirectConnectGatewayName() Obtain The direct connect gateway name.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set The direct connect gateway name.
 * @method string getVpcId() Obtain The ID of the VPC instance associated with the direct connect gateway.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance associated with the direct connect gateway.
 * @method string getNetworkType() Obtain The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
 * @method void setNetworkType(string $NetworkType) Set The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
 * @method string getNetworkInstanceId() Obtain The ID of the associated network instance:
<li>When the `NetworkType` is `VPC`, this value is the VPC instance ID</li>
<li>When the `NetworkType` is `CCN`, this value is the CCN instance ID</li>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set The ID of the associated network instance:
<li>When the `NetworkType` is `VPC`, this value is the VPC instance ID</li>
<li>When the `NetworkType` is `CCN`, this value is the CCN instance ID</li>
 * @method string getGatewayType() Obtain The gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT type</li>
The NAT type supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
 * @method void setGatewayType(string $GatewayType) Set The gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT type</li>
The NAT type supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getDirectConnectGatewayIp() Obtain The direct connect gateway IP.
 * @method void setDirectConnectGatewayIp(string $DirectConnectGatewayIp) Set The direct connect gateway IP.
 * @method string getCcnId() Obtain The ID of the CCN instance associated with the direct connect gateway.
 * @method void setCcnId(string $CcnId) Set The ID of the CCN instance associated with the direct connect gateway.
 * @method string getCcnRouteType() Obtain The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
 * @method void setCcnRouteType(string $CcnRouteType) Set The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
 * @method boolean getEnableBGP() Obtain Whether the BGP is enabled.
 * @method void setEnableBGP(boolean $EnableBGP) Set Whether the BGP is enabled.
 * @method boolean getEnableBGPCommunity() Obtain Whether the `community` attribute of the BGP is enabled.
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) Set Whether the `community` attribute of the BGP is enabled.
 */
class DirectConnectGateway extends AbstractModel
{
    /**
     * @var string The direct connect gateway ID.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string The direct connect gateway name.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string The ID of the VPC instance associated with the direct connect gateway.
     */
    public $VpcId;

    /**
     * @var string The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
     */
    public $NetworkType;

    /**
     * @var string The ID of the associated network instance:
<li>When the `NetworkType` is `VPC`, this value is the VPC instance ID</li>
<li>When the `NetworkType` is `CCN`, this value is the CCN instance ID</li>
     */
    public $NetworkInstanceId;

    /**
     * @var string The gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT type</li>
The NAT type supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
     */
    public $GatewayType;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The direct connect gateway IP.
     */
    public $DirectConnectGatewayIp;

    /**
     * @var string The ID of the CCN instance associated with the direct connect gateway.
     */
    public $CcnId;

    /**
     * @var string The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
     */
    public $CcnRouteType;

    /**
     * @var boolean Whether the BGP is enabled.
     */
    public $EnableBGP;

    /**
     * @var boolean Whether the `community` attribute of the BGP is enabled.
     */
    public $EnableBGPCommunity;

    /**
     * @param string $DirectConnectGatewayId The direct connect gateway ID.
     * @param string $DirectConnectGatewayName The direct connect gateway name.
     * @param string $VpcId The ID of the VPC instance associated with the direct connect gateway.
     * @param string $NetworkType The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
     * @param string $NetworkInstanceId The ID of the associated network instance:
<li>When the `NetworkType` is `VPC`, this value is the VPC instance ID</li>
<li>When the `NetworkType` is `CCN`, this value is the CCN instance ID</li>
     * @param string $GatewayType The gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT type</li>
The NAT type supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
     * @param string $CreateTime The creation time.
     * @param string $DirectConnectGatewayIp The direct connect gateway IP.
     * @param string $CcnId The ID of the CCN instance associated with the direct connect gateway.
     * @param string $CcnRouteType The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
     * @param boolean $EnableBGP Whether the BGP is enabled.
     * @param boolean $EnableBGPCommunity Whether the `community` attribute of the BGP is enabled.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DirectConnectGatewayIp",$param) and $param["DirectConnectGatewayIp"] !== null) {
            $this->DirectConnectGatewayIp = $param["DirectConnectGatewayIp"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }

        if (array_key_exists("EnableBGP",$param) and $param["EnableBGP"] !== null) {
            $this->EnableBGP = $param["EnableBGP"];
        }

        if (array_key_exists("EnableBGPCommunity",$param) and $param["EnableBGPCommunity"] !== null) {
            $this->EnableBGPCommunity = $param["EnableBGPCommunity"];
        }
    }
}
