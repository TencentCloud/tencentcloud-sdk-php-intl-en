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
 * DownloadCustomerGatewayConfiguration request structure.
 *
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method string getVpnConnectionId() Obtain The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
 * @method void setVpnConnectionId(string $VpnConnectionId) Set The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
 * @method CustomerGatewayVendor getCustomerGatewayVendor() Obtain Customer gateway vendor information object, which can be obtained through DescribeCustomerGatewayVendors.
 * @method void setCustomerGatewayVendor(CustomerGatewayVendor $CustomerGatewayVendor) Set Customer gateway vendor information object, which can be obtained through DescribeCustomerGatewayVendors.
 * @method string getInterfaceName() Obtain Name of the physical API for tunnel access device.
 * @method void setInterfaceName(string $InterfaceName) Set Name of the physical API for tunnel access device.
 */
class DownloadCustomerGatewayConfigurationRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var string The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
     */
    public $VpnConnectionId;

    /**
     * @var CustomerGatewayVendor Customer gateway vendor information object, which can be obtained through DescribeCustomerGatewayVendors.
     */
    public $CustomerGatewayVendor;

    /**
     * @var string Name of the physical API for tunnel access device.
     */
    public $InterfaceName;

    /**
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param string $VpnConnectionId The ID of the VPN tunnel instance, such as `vpnx-f49l6u0z`.
     * @param CustomerGatewayVendor $CustomerGatewayVendor Customer gateway vendor information object, which can be obtained through DescribeCustomerGatewayVendors.
     * @param string $InterfaceName Name of the physical API for tunnel access device.
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

        if (array_key_exists("VpnConnectionId",$param) and $param["VpnConnectionId"] !== null) {
            $this->VpnConnectionId = $param["VpnConnectionId"];
        }

        if (array_key_exists("CustomerGatewayVendor",$param) and $param["CustomerGatewayVendor"] !== null) {
            $this->CustomerGatewayVendor = new CustomerGatewayVendor();
            $this->CustomerGatewayVendor->deserialize($param["CustomerGatewayVendor"]);
        }

        if (array_key_exists("InterfaceName",$param) and $param["InterfaceName"] !== null) {
            $this->InterfaceName = $param["InterfaceName"];
        }
    }
}
