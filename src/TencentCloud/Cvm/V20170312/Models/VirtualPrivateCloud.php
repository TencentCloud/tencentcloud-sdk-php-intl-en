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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getVpcId() 获取
 * @method void setVpcId(string $VpcId) 设置
 * @method string getSubnetId() 获取VPC subnet ID in the format `subnet-xxx`. To obtain valid subnet IDs, you can log in to the [console](https://console.cloud.tencent.com/vpc/subnet?rid=1) or call [DescribeSubnets](/document/api/215/15784) and look for the `unSubnetId` fields in the response. If you specify `DEFAULT` for both `SubnetId` and `VpcId` when creating an instance, the default VPC will be used.
 * @method void setSubnetId(string $SubnetId) 设置VPC subnet ID in the format `subnet-xxx`. To obtain valid subnet IDs, you can log in to the [console](https://console.cloud.tencent.com/vpc/subnet?rid=1) or call [DescribeSubnets](/document/api/215/15784) and look for the `unSubnetId` fields in the response. If you specify `DEFAULT` for both `SubnetId` and `VpcId` when creating an instance, the default VPC will be used.
 * @method boolean getAsVpcGateway() 获取Whether to use an instance as a public gateway. An instance can be used as a public gateway only when it has a public IP and resides in a VPC. Valid values: <br><li>TRUE: use the instance as a public gateway <br><li>FALSE: do not use the instance as a public gateway <br><br>Default value: FALSE.
 * @method void setAsVpcGateway(boolean $AsVpcGateway) 设置Whether to use an instance as a public gateway. An instance can be used as a public gateway only when it has a public IP and resides in a VPC. Valid values: <br><li>TRUE: use the instance as a public gateway <br><li>FALSE: do not use the instance as a public gateway <br><br>Default value: FALSE.
 * @method array getPrivateIpAddresses() 获取Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
 * @method integer getIpv6AddressCount() 获取
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置
 */

/**
 *Describes information on VPC, including subnets, IP addresses, etc.
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format `subnet-xxx`. To obtain valid subnet IDs, you can log in to the [console](https://console.cloud.tencent.com/vpc/subnet?rid=1) or call [DescribeSubnets](/document/api/215/15784) and look for the `unSubnetId` fields in the response. If you specify `DEFAULT` for both `SubnetId` and `VpcId` when creating an instance, the default VPC will be used.
     */
    public $SubnetId;

    /**
     * @var boolean Whether to use an instance as a public gateway. An instance can be used as a public gateway only when it has a public IP and resides in a VPC. Valid values: <br><li>TRUE: use the instance as a public gateway <br><li>FALSE: do not use the instance as a public gateway <br><br>Default value: FALSE.
     */
    public $AsVpcGateway;

    /**
     * @var array Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 
     */
    public $Ipv6AddressCount;
    /**
     * @param string $VpcId 
     * @param string $SubnetId VPC subnet ID in the format `subnet-xxx`. To obtain valid subnet IDs, you can log in to the [console](https://console.cloud.tencent.com/vpc/subnet?rid=1) or call [DescribeSubnets](/document/api/215/15784) and look for the `unSubnetId` fields in the response. If you specify `DEFAULT` for both `SubnetId` and `VpcId` when creating an instance, the default VPC will be used.
     * @param boolean $AsVpcGateway Whether to use an instance as a public gateway. An instance can be used as a public gateway only when it has a public IP and resides in a VPC. Valid values: <br><li>TRUE: use the instance as a public gateway <br><li>FALSE: do not use the instance as a public gateway <br><br>Default value: FALSE.
     * @param array $PrivateIpAddresses Array of VPC subnet IPs. You can use this parameter when creating instances or modifying VPC attributes of instances. Currently you can specify multiple IPs in one subnet only when creating multiple instances at the same time.
     * @param integer $Ipv6AddressCount 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
