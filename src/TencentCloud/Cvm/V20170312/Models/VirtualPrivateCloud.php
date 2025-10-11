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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes information on VPC, including subnets, IP addresses, etc.
 *
 * @method string getVpcId() Obtain vpc ID, such as `vpc-xxx`. valid vpc ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or by calling the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1) and obtaining the `VpcId` field from the API response. if both VpcId and SubnetId are input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method void setVpcId(string $VpcId) Set vpc ID, such as `vpc-xxx`. valid vpc ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or by calling the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1) and obtaining the `VpcId` field from the API response. if both VpcId and SubnetId are input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method string getSubnetId() Obtain vpc subnet ID, in the form of `subnet-xxx`. valid vpc subnet ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/subnet?rid=1); or they can be obtained from the `SubnetId` field in the API response by calling the DescribeSubnets API (https://intl.cloud.tencent.com/document/product/215/15784?from_cn_redirect=1). if SubnetId and VpcId are both input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method void setSubnetId(string $SubnetId) Set vpc subnet ID, in the form of `subnet-xxx`. valid vpc subnet ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/subnet?rid=1); or they can be obtained from the `SubnetId` field in the API response by calling the DescribeSubnets API (https://intl.cloud.tencent.com/document/product/215/15784?from_cn_redirect=1). if SubnetId and VpcId are both input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
 * @method boolean getAsVpcGateway() Obtain Whether it is used as a public gateway. A public gateway can only be used normally when an instance has a public IP address and is in a VPC. Valid values:<li>true: It is used as a public gateway.</li><li>false: It is not used as a public gateway.</li>Default value: false.
 * @method void setAsVpcGateway(boolean $AsVpcGateway) Set Whether it is used as a public gateway. A public gateway can only be used normally when an instance has a public IP address and is in a VPC. Valid values:<li>true: It is used as a public gateway.</li><li>false: It is not used as a public gateway.</li>Default value: false.
 * @method array getPrivateIpAddresses() Obtain Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
 * @method integer getIpv6AddressCount() Obtain Number of IPv6 addresses randomly generated for the ENI.
If IPv6AddressType is specified under InternetAccessible, this parameter must not be set to 0.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set Number of IPv6 addresses randomly generated for the ENI.
If IPv6AddressType is specified under InternetAccessible, this parameter must not be set to 0.
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string vpc ID, such as `vpc-xxx`. valid vpc ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or by calling the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1) and obtaining the `VpcId` field from the API response. if both VpcId and SubnetId are input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
     */
    public $VpcId;

    /**
     * @var string vpc subnet ID, in the form of `subnet-xxx`. valid vpc subnet ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/subnet?rid=1); or they can be obtained from the `SubnetId` field in the API response by calling the DescribeSubnets API (https://intl.cloud.tencent.com/document/product/215/15784?from_cn_redirect=1). if SubnetId and VpcId are both input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
     */
    public $SubnetId;

    /**
     * @var boolean Whether it is used as a public gateway. A public gateway can only be used normally when an instance has a public IP address and is in a VPC. Valid values:<li>true: It is used as a public gateway.</li><li>false: It is not used as a public gateway.</li>Default value: false.
     */
    public $AsVpcGateway;

    /**
     * @var array Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer Number of IPv6 addresses randomly generated for the ENI.
If IPv6AddressType is specified under InternetAccessible, this parameter must not be set to 0.
     */
    public $Ipv6AddressCount;

    /**
     * @param string $VpcId vpc ID, such as `vpc-xxx`. valid vpc ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/vpc?rid=1) or by calling the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1) and obtaining the `VpcId` field from the API response. if both VpcId and SubnetId are input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
     * @param string $SubnetId vpc subnet ID, in the form of `subnet-xxx`. valid vpc subnet ids can be queried by logging in to the console (https://console.cloud.tencent.com/vpc/subnet?rid=1); or they can be obtained from the `SubnetId` field in the API response by calling the DescribeSubnets API (https://intl.cloud.tencent.com/document/product/215/15784?from_cn_redirect=1). if SubnetId and VpcId are both input as `DEFAULT` when creating an instance, the DEFAULT vpc network will be forcibly used.
     * @param boolean $AsVpcGateway Whether it is used as a public gateway. A public gateway can only be used normally when an instance has a public IP address and is in a VPC. Valid values:<li>true: It is used as a public gateway.</li><li>false: It is not used as a public gateway.</li>Default value: false.
     * @param array $PrivateIpAddresses Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
     * @param integer $Ipv6AddressCount Number of IPv6 addresses randomly generated for the ENI.
If IPv6AddressType is specified under InternetAccessible, this parameter must not be set to 0.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AsVpcGateway",$param) and $param["AsVpcGateway"] !== null) {
            $this->AsVpcGateway = $param["AsVpcGateway"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
