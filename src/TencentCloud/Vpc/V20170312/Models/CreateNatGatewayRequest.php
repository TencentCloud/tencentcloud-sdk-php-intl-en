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
 * CreateNatGateway request structure.
 *
 * @method string getNatGatewayName() Obtain NAT gateway name
 * @method void setNatGatewayName(string $NatGatewayName) Set NAT gateway name
 * @method string getVpcId() Obtain The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the NAT gateway (unit: Mbps). Supported parameter values: `20, 50, 100, 200, 500, 1000, 2000, 5000`. Default: `100`.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the NAT gateway (unit: Mbps). Supported parameter values: `20, 50, 100, 200, 500, 1000, 2000, 5000`. Default: `100`.
 * @method integer getMaxConcurrentConnection() Obtain The concurrent connection cap of the NAT gateway. Values: `1000000, 3000000, 10000000`. The default value is `1000000`.
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) Set The concurrent connection cap of the NAT gateway. Values: `1000000, 3000000, 10000000`. The default value is `1000000`.
 * @method integer getAddressCount() Obtain The number of EIPs that you want to apply for. Either `AddressCount` or `PublicIpAddresses` must be passed in.
 * @method void setAddressCount(integer $AddressCount) Set The number of EIPs that you want to apply for. Either `AddressCount` or `PublicIpAddresses` must be passed in.
 * @method array getPublicIpAddresses() Obtain The EIP array bound to the NAT gateway. Either AddressCount or PublicIpAddresses must be passed in.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set The EIP array bound to the NAT gateway. Either AddressCount or PublicIpAddresses must be passed in.
 * @method string getZone() Obtain The availability zone, such as `ap-guangzhou-1`.
 * @method void setZone(string $Zone) Set The availability zone, such as `ap-guangzhou-1`.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
 * @method string getSubnetId() Obtain Subnet of the NAT gateway
 * @method void setSubnetId(string $SubnetId) Set Subnet of the NAT gateway
 * @method integer getStockPublicIpAddressesBandwidthOut() Obtain The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
 * @method void setStockPublicIpAddressesBandwidthOut(integer $StockPublicIpAddressesBandwidthOut) Set The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
 * @method integer getPublicIpAddressesBandwidthOut() Obtain The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
 * @method void setPublicIpAddressesBandwidthOut(integer $PublicIpAddressesBandwidthOut) Set The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
 * @method boolean getPublicIpFromSameZone() Obtain Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
 * @method void setPublicIpFromSameZone(boolean $PublicIpFromSameZone) Set Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
 * @method integer getNatProductVersion() Obtain NAT gateway major version. `1`: Classic, `2`: Standard
 * @method void setNatProductVersion(integer $NatProductVersion) Set NAT gateway major version. `1`: Classic, `2`: Standard
 */
class CreateNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT gateway name
     */
    public $NatGatewayName;

    /**
     * @var string The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
     */
    public $VpcId;

    /**
     * @var integer The maximum outbound bandwidth of the NAT gateway (unit: Mbps). Supported parameter values: `20, 50, 100, 200, 500, 1000, 2000, 5000`. Default: `100`.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer The concurrent connection cap of the NAT gateway. Values: `1000000, 3000000, 10000000`. The default value is `1000000`.
     */
    public $MaxConcurrentConnection;

    /**
     * @var integer The number of EIPs that you want to apply for. Either `AddressCount` or `PublicIpAddresses` must be passed in.
     */
    public $AddressCount;

    /**
     * @var array The EIP array bound to the NAT gateway. Either AddressCount or PublicIpAddresses must be passed in.
     */
    public $PublicIpAddresses;

    /**
     * @var string The availability zone, such as `ap-guangzhou-1`.
     */
    public $Zone;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string Subnet of the NAT gateway
     * @deprecated
     */
    public $SubnetId;

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
     * @var integer NAT gateway major version. `1`: Classic, `2`: Standard
     */
    public $NatProductVersion;

    /**
     * @param string $NatGatewayName NAT gateway name
     * @param string $VpcId The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the NAT gateway (unit: Mbps). Supported parameter values: `20, 50, 100, 200, 500, 1000, 2000, 5000`. Default: `100`.
     * @param integer $MaxConcurrentConnection The concurrent connection cap of the NAT gateway. Values: `1000000, 3000000, 10000000`. The default value is `1000000`.
     * @param integer $AddressCount The number of EIPs that you want to apply for. Either `AddressCount` or `PublicIpAddresses` must be passed in.
     * @param array $PublicIpAddresses The EIP array bound to the NAT gateway. Either AddressCount or PublicIpAddresses must be passed in.
     * @param string $Zone The availability zone, such as `ap-guangzhou-1`.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}]
     * @param string $SubnetId Subnet of the NAT gateway
     * @param integer $StockPublicIpAddressesBandwidthOut The bandwidth size (in Mbps) of the EIP bound to the NAT gateway, which defaults to the maximum value applicable for the current user type.
     * @param integer $PublicIpAddressesBandwidthOut The size of the public network IP bandwidth to be applied for (in Mbps), which defaults to the maximum value applicable for the current user type.
     * @param boolean $PublicIpFromSameZone Whether the public IP and the NAT gateway must be in the same availability zone. Valid values: `true` and `false`. This parameter is valid only when `Zone` is specified.
     * @param integer $NatProductVersion NAT gateway major version. `1`: Classic, `2`: Standard
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
        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
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

        if (array_key_exists("NatProductVersion",$param) and $param["NatProductVersion"] !== null) {
            $this->NatProductVersion = $param["NatProductVersion"];
        }
    }
}
