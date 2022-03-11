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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC information configuration.
 *
 * @method string getVpcId() Obtain VPC ID, such as `vpc-xxx`.
 * @method void setVpcId(string $VpcId) Set VPC ID, such as `vpc-xxx`.
 * @method string getSubnetId() Obtain Subnet ID of the VPC, such as `subnet-xxx`.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the VPC, such as `subnet-xxx`.
 * @method boolean getAsVpcGateway() Obtain Whether it is used as a public gateway. The public gateway can be used only when the instance has a public IP and resides in a VPC. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
 * @method void setAsVpcGateway(boolean $AsVpcGateway) Set Whether it is used as a public gateway. The public gateway can be used only when the instance has a public IP and resides in a VPC. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
 * @method array getPrivateIpAddresses() Obtain Array of VPC subnet IPs. This parameter can be used to create instances or modify the VPC attributes of instances.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Array of VPC subnet IPs. This parameter can be used to create instances or modify the VPC attributes of instances.
 * @method integer getIpv6AddressCount() Obtain Number of the IPv6 addresses to be randomly generated for the ENI.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set Number of the IPv6 addresses to be randomly generated for the ENI.
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string VPC ID, such as `vpc-xxx`.
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the VPC, such as `subnet-xxx`.
     */
    public $SubnetId;

    /**
     * @var boolean Whether it is used as a public gateway. The public gateway can be used only when the instance has a public IP and resides in a VPC. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
     */
    public $AsVpcGateway;

    /**
     * @var array Array of VPC subnet IPs. This parameter can be used to create instances or modify the VPC attributes of instances.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer Number of the IPv6 addresses to be randomly generated for the ENI.
     */
    public $Ipv6AddressCount;

    /**
     * @param string $VpcId VPC ID, such as `vpc-xxx`.
     * @param string $SubnetId Subnet ID of the VPC, such as `subnet-xxx`.
     * @param boolean $AsVpcGateway Whether it is used as a public gateway. The public gateway can be used only when the instance has a public IP and resides in a VPC. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
     * @param array $PrivateIpAddresses Array of VPC subnet IPs. This parameter can be used to create instances or modify the VPC attributes of instances.
     * @param integer $Ipv6AddressCount Number of the IPv6 addresses to be randomly generated for the ENI.
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
