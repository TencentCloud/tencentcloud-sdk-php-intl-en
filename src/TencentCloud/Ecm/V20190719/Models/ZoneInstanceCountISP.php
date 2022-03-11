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
 * Combination of the instance AZ, number of instances to be created, and ISP;
 *
 * @method string getZone() Obtain The AZ in which to create an instance.
 * @method void setZone(string $Zone) Set The AZ in which to create an instance.
 * @method integer getInstanceCount() Obtain Number of instances to be created in the current AZ.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances to be created in the current AZ.
 * @method string getISP() Obtain ISP name. Valid values:
CTCC: China Telecom
CUCC: China Unicom
CMCC: China Mobile
If there are multiple ISP names, you need to separate them by semicolons, such as `CMCC;CUCC;CTCC`. To use multiple ISPs, contact Tencent Cloud customer service for assistance.
 * @method void setISP(string $ISP) Set ISP name. Valid values:
CTCC: China Telecom
CUCC: China Unicom
CMCC: China Mobile
If there are multiple ISP names, you need to separate them by semicolons, such as `CMCC;CUCC;CTCC`. To use multiple ISPs, contact Tencent Cloud customer service for assistance.
 * @method string getVpcId() Obtain ID of the specified VPC. You must specify both `SubnetId` and `VpcId` or neither
 * @method void setVpcId(string $VpcId) Set ID of the specified VPC. You must specify both `SubnetId` and `VpcId` or neither
 * @method string getSubnetId() Obtain ID of the specified subnet. You must specify both `SubnetId` and `VpcId` or neither
 * @method void setSubnetId(string $SubnetId) Set ID of the specified subnet. You must specify both `SubnetId` and `VpcId` or neither
 * @method array getPrivateIpAddresses() Obtain Private IP of the specified primary ENI. You must specify both `SubnetId` and `VpcId` at the same time. The number of IP addresses must be the same as `InstanceCount`. You can get the private IP of the secondary ENI of a multi-IP server through DHCP in the same subnet.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Private IP of the specified primary ENI. You must specify both `SubnetId` and `VpcId` at the same time. The number of IP addresses must be the same as `InstanceCount`. You can get the private IP of the secondary ENI of a multi-IP server through DHCP in the same subnet.
 * @method integer getIpv6AddressCount() Obtain Number of the IPv6 addresses to be randomly generated for the ENI, which cannot be greater than 1.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set Number of the IPv6 addresses to be randomly generated for the ENI, which cannot be greater than 1.
 */
class ZoneInstanceCountISP extends AbstractModel
{
    /**
     * @var string The AZ in which to create an instance.
     */
    public $Zone;

    /**
     * @var integer Number of instances to be created in the current AZ.
     */
    public $InstanceCount;

    /**
     * @var string ISP name. Valid values:
CTCC: China Telecom
CUCC: China Unicom
CMCC: China Mobile
If there are multiple ISP names, you need to separate them by semicolons, such as `CMCC;CUCC;CTCC`. To use multiple ISPs, contact Tencent Cloud customer service for assistance.
     */
    public $ISP;

    /**
     * @var string ID of the specified VPC. You must specify both `SubnetId` and `VpcId` or neither
     */
    public $VpcId;

    /**
     * @var string ID of the specified subnet. You must specify both `SubnetId` and `VpcId` or neither
     */
    public $SubnetId;

    /**
     * @var array Private IP of the specified primary ENI. You must specify both `SubnetId` and `VpcId` at the same time. The number of IP addresses must be the same as `InstanceCount`. You can get the private IP of the secondary ENI of a multi-IP server through DHCP in the same subnet.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer Number of the IPv6 addresses to be randomly generated for the ENI, which cannot be greater than 1.
     */
    public $Ipv6AddressCount;

    /**
     * @param string $Zone The AZ in which to create an instance.
     * @param integer $InstanceCount Number of instances to be created in the current AZ.
     * @param string $ISP ISP name. Valid values:
CTCC: China Telecom
CUCC: China Unicom
CMCC: China Mobile
If there are multiple ISP names, you need to separate them by semicolons, such as `CMCC;CUCC;CTCC`. To use multiple ISPs, contact Tencent Cloud customer service for assistance.
     * @param string $VpcId ID of the specified VPC. You must specify both `SubnetId` and `VpcId` or neither
     * @param string $SubnetId ID of the specified subnet. You must specify both `SubnetId` and `VpcId` or neither
     * @param array $PrivateIpAddresses Private IP of the specified primary ENI. You must specify both `SubnetId` and `VpcId` at the same time. The number of IP addresses must be the same as `InstanceCount`. You can get the private IP of the secondary ENI of a multi-IP server through DHCP in the same subnet.
     * @param integer $Ipv6AddressCount Number of the IPv6 addresses to be randomly generated for the ENI, which cannot be greater than 1.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
