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
 * Direct Connect gateway object.
 *
 * @method string getDirectConnectGatewayId() Obtain Direct Connect `ID`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set Direct Connect `ID`.
 * @method string getDirectConnectGatewayName() Obtain Direct Connect gateway name.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set Direct Connect gateway name.
 * @method string getVpcId() Obtain The `ID` of the `VPC` instance associated with the Direct Connect gateway.
 * @method void setVpcId(string $VpcId) Set The `ID` of the `VPC` instance associated with the Direct Connect gateway.
 * @method string getNetworkType() Obtain The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
 * @method void setNetworkType(string $NetworkType) Set The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
 * @method string getNetworkInstanceId() Obtain The `ID` of the associated network instance:
<li>When the NetworkType is `VPC`, this value is the VPC instance `ID`</li>
<li>When the NetworkType is `CCN`, this value is the CCN instance `ID`</li>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set The `ID` of the associated network instance:
<li>When the NetworkType is `VPC`, this value is the VPC instance `ID`</li>
<li>When the NetworkType is `CCN`, this value is the CCN instance `ID`</li>
 * @method string getGatewayType() Obtain Gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>
NAT type supports network address switch configuration. After the type is confirmed, it cannot be modified. A VPC can create one NAT-type Direct Connect gateway and one non-NAT-type Direct Connect gateway
 * @method void setGatewayType(string $GatewayType) Set Gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>
NAT type supports network address switch configuration. After the type is confirmed, it cannot be modified. A VPC can create one NAT-type Direct Connect gateway and one non-NAT-type Direct Connect gateway
 * @method string getCreateTime() Obtain Creation Time.
 * @method void setCreateTime(string $CreateTime) Set Creation Time.
 * @method string getDirectConnectGatewayIp() Obtain Direct Connect gateway IP.
 * @method void setDirectConnectGatewayIp(string $DirectConnectGatewayIp) Set Direct Connect gateway IP.
 * @method string getCcnId() Obtain The `ID` of the `CCN` instance associated with the Direct Connect gateway.
 * @method void setCcnId(string $CcnId) Set The `ID` of the `CCN` instance associated with the Direct Connect gateway.
 * @method string getCcnRouteType() Obtain The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
 * @method void setCcnRouteType(string $CcnRouteType) Set The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
 * @method boolean getEnableBGP() Obtain Whether BGP is enabled.
 * @method void setEnableBGP(boolean $EnableBGP) Set Whether BGP is enabled.
 * @method boolean getEnableBGPCommunity() Obtain 
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) Set 
 * @method string getNatGatewayId() Obtain ID of the NAT gateway bound.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setNatGatewayId(string $NatGatewayId) Set ID of the NAT gateway bound.
Note: this field may return `null`, indicating that no valid value was found.
 */
class DirectConnectGateway extends AbstractModel
{
    /**
     * @var string Direct Connect `ID`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string Direct Connect gateway name.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string The `ID` of the `VPC` instance associated with the Direct Connect gateway.
     */
    public $VpcId;

    /**
     * @var string The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
     */
    public $NetworkType;

    /**
     * @var string The `ID` of the associated network instance:
<li>When the NetworkType is `VPC`, this value is the VPC instance `ID`</li>
<li>When the NetworkType is `CCN`, this value is the CCN instance `ID`</li>
     */
    public $NetworkInstanceId;

    /**
     * @var string Gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>
NAT type supports network address switch configuration. After the type is confirmed, it cannot be modified. A VPC can create one NAT-type Direct Connect gateway and one non-NAT-type Direct Connect gateway
     */
    public $GatewayType;

    /**
     * @var string Creation Time.
     */
    public $CreateTime;

    /**
     * @var string Direct Connect gateway IP.
     */
    public $DirectConnectGatewayIp;

    /**
     * @var string The `ID` of the `CCN` instance associated with the Direct Connect gateway.
     */
    public $CcnId;

    /**
     * @var string The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
     */
    public $CcnRouteType;

    /**
     * @var boolean Whether BGP is enabled.
     */
    public $EnableBGP;

    /**
     * @var boolean 
     */
    public $EnableBGPCommunity;

    /**
     * @var string ID of the NAT gateway bound.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $NatGatewayId;

    /**
     * @param string $DirectConnectGatewayId Direct Connect `ID`.
     * @param string $DirectConnectGatewayName Direct Connect gateway name.
     * @param string $VpcId The `ID` of the `VPC` instance associated with the Direct Connect gateway.
     * @param string $NetworkType The associated network type:
<li>`VPC` - VPC</li>
<li>`CCN` - CCN</li>
     * @param string $NetworkInstanceId The `ID` of the associated network instance:
<li>When the NetworkType is `VPC`, this value is the VPC instance `ID`</li>
<li>When the NetworkType is `CCN`, this value is the CCN instance `ID`</li>
     * @param string $GatewayType Gateway type:
<li>NORMAL - Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>
NAT type supports network address switch configuration. After the type is confirmed, it cannot be modified. A VPC can create one NAT-type Direct Connect gateway and one non-NAT-type Direct Connect gateway
     * @param string $CreateTime Creation Time.
     * @param string $DirectConnectGatewayIp Direct Connect gateway IP.
     * @param string $CcnId The `ID` of the `CCN` instance associated with the Direct Connect gateway.
     * @param string $CcnRouteType The route-learning type of the CCN:
<li>`BGP` - Automatic learning.</li>
<li>`STATIC` - Static, that is, user-configured.</li>
     * @param boolean $EnableBGP Whether BGP is enabled.
     * @param boolean $EnableBGPCommunity 
     * @param string $NatGatewayId ID of the NAT gateway bound.
Note: this field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }
    }
}
