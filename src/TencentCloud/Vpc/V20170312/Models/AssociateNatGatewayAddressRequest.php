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
 * AssociateNatGatewayAddress request structure.
 *
 * @method string getNatGatewayId() Obtain The ID of the NAT gateway, such as `nat-df45454`.
 * @method void setNatGatewayId(string $NatGatewayId) Set The ID of the NAT gateway, such as `nat-df45454`.
 * @method integer getAddressCount() Obtain The number of EIPs you want to apply for. Either `AddressCount` or `PublicAddresses` must be passed in.
 * @method void setAddressCount(integer $AddressCount) Set The number of EIPs you want to apply for. Either `AddressCount` or `PublicAddresses` must be passed in.
 * @method array getPublicIpAddresses() Obtain Array of the EIPs bound to the NAT gateway. Either `AddressCount` or `PublicAddresses` must be passed in.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Array of the EIPs bound to the NAT gateway. Either `AddressCount` or `PublicAddresses` must be passed in.
 * @method string getZone() Obtain The availability zone of the EIP, which is passed in when the EIP is automatically assigned.
 * @method void setZone(string $Zone) Set The availability zone of the EIP, which is passed in when the EIP is automatically assigned.
 * @method integer getStockPublicIpAddressesBandwidthOut() Obtain The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
 * @method void setStockPublicIpAddressesBandwidthOut(integer $StockPublicIpAddressesBandwidthOut) Set The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
 * @method integer getPublicIpAddressesBandwidthOut() Obtain The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
 * @method void setPublicIpAddressesBandwidthOut(integer $PublicIpAddressesBandwidthOut) Set The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
 * @method boolean getPublicIpFromSameZone() Obtain Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
 * @method void setPublicIpFromSameZone(boolean $PublicIpFromSameZone) Set Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
 */
class AssociateNatGatewayAddressRequest extends AbstractModel
{
    /**
     * @var string The ID of the NAT gateway, such as `nat-df45454`.
     */
    public $NatGatewayId;

    /**
     * @var integer The number of EIPs you want to apply for. Either `AddressCount` or `PublicAddresses` must be passed in.
     */
    public $AddressCount;

    /**
     * @var array Array of the EIPs bound to the NAT gateway. Either `AddressCount` or `PublicAddresses` must be passed in.
     */
    public $PublicIpAddresses;

    /**
     * @var string The availability zone of the EIP, which is passed in when the EIP is automatically assigned.
     */
    public $Zone;

    /**
     * @var integer The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
     */
    public $StockPublicIpAddressesBandwidthOut;

    /**
     * @var integer The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
     */
    public $PublicIpAddressesBandwidthOut;

    /**
     * @var boolean Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
     */
    public $PublicIpFromSameZone;

    /**
     * @param string $NatGatewayId The ID of the NAT gateway, such as `nat-df45454`.
     * @param integer $AddressCount The number of EIPs you want to apply for. Either `AddressCount` or `PublicAddresses` must be passed in.
     * @param array $PublicIpAddresses Array of the EIPs bound to the NAT gateway. Either `AddressCount` or `PublicAddresses` must be passed in.
     * @param string $Zone The availability zone of the EIP, which is passed in when the EIP is automatically assigned.
     * @param integer $StockPublicIpAddressesBandwidthOut The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
     * @param integer $PublicIpAddressesBandwidthOut The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
     * @param boolean $PublicIpFromSameZone Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StockPublicIpAddressesBandwidthOut",$param) and $param["StockPublicIpAddressesBandwidthOut"] !== null) {
            $this->StockPublicIpAddressesBandwidthOut = $param["StockPublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpAddressesBandwidthOut",$param) and $param["PublicIpAddressesBandwidthOut"] !== null) {
            $this->PublicIpAddressesBandwidthOut = $param["PublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpFromSameZone",$param) and $param["PublicIpFromSameZone"] !== null) {
            $this->PublicIpFromSameZone = $param["PublicIpFromSameZone"];
        }
    }
}
