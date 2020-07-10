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
 * CreateDirectConnectGateway request structure.
 *
 * @method string getDirectConnectGatewayName() Obtain The name of the direct connect gateway.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set The name of the direct connect gateway.
 * @method string getNetworkType() Obtain The type of the associated network. Valid values:
<li>VPC</li>
<li>CCN</li>
 * @method void setNetworkType(string $NetworkType) Set The type of the associated network. Valid values:
<li>VPC</li>
<li>CCN</li>
 * @method string getNetworkInstanceId() Obtain <li>When the NetworkType is VPC, this value is the VPC instance ID</li>
<li>When the NetworkType is CCN, this value is the CCN instance ID</li>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set <li>When the NetworkType is VPC, this value is the VPC instance ID</li>
<li>When the NetworkType is CCN, this value is the CCN instance ID</li>
 * @method string getGatewayType() Obtain The type of the gateway. Valid values:
<li>NORMAL - (Default) Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>NAT gateway supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
 * @method void setGatewayType(string $GatewayType) Set The type of the gateway. Valid values:
<li>NORMAL - (Default) Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>NAT gateway supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
 */
class CreateDirectConnectGatewayRequest extends AbstractModel
{
    /**
     * @var string The name of the direct connect gateway.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string The type of the associated network. Valid values:
<li>VPC</li>
<li>CCN</li>
     */
    public $NetworkType;

    /**
     * @var string <li>When the NetworkType is VPC, this value is the VPC instance ID</li>
<li>When the NetworkType is CCN, this value is the CCN instance ID</li>
     */
    public $NetworkInstanceId;

    /**
     * @var string The type of the gateway. Valid values:
<li>NORMAL - (Default) Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>NAT gateway supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
     */
    public $GatewayType;

    /**
     * @param string $DirectConnectGatewayName The name of the direct connect gateway.
     * @param string $NetworkType The type of the associated network. Valid values:
<li>VPC</li>
<li>CCN</li>
     * @param string $NetworkInstanceId <li>When the NetworkType is VPC, this value is the VPC instance ID</li>
<li>When the NetworkType is CCN, this value is the CCN instance ID</li>
     * @param string $GatewayType The type of the gateway. Valid values:
<li>NORMAL - (Default) Standard type. Note: CCN only supports the standard type</li>
<li>NAT - NAT type</li>NAT gateway supports network address translation. The specified type cannot be modified. A VPC can create one NAT direct connect gateway and one non-NAT direct connect gateway
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
        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
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
    }
}
