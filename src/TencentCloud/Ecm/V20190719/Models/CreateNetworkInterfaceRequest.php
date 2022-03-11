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
 * CreateNetworkInterface request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
 * @method string getNetworkInterfaceName() Obtain ENI name, which can contain up to 60 bytes.
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set ENI name, which can contain up to 60 bytes.
 * @method string getSubnetId() Obtain Subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method string getNetworkInterfaceDescription() Obtain ENI description. You can enter any information within 60 characters.
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) Set ENI description. You can enter any information within 60 characters.
 * @method integer getSecondaryPrivateIpAddressCount() Obtain Number of private IP addresses applied for. The total number of private IP addresses cannot exceed the quota.
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) Set Number of private IP addresses applied for. The total number of private IP addresses cannot exceed the quota.
 * @method array getSecurityGroupIds() Obtain The security group to be bound with, such as ['sg-1dd51d'].
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The security group to be bound with, such as ['sg-1dd51d'].
 * @method array getPrivateIpAddresses() Obtain Information of the specified private IPs. You can specify up to 10 IPs at a time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Information of the specified private IPs. You can specify up to 10 IPs at a time.
 * @method array getTags() Obtain List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
     */
    public $VpcId;

    /**
     * @var string ENI name, which can contain up to 60 bytes.
     */
    public $NetworkInterfaceName;

    /**
     * @var string Subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
     */
    public $SubnetId;

    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var string ENI description. You can enter any information within 60 characters.
     */
    public $NetworkInterfaceDescription;

    /**
     * @var integer Number of private IP addresses applied for. The total number of private IP addresses cannot exceed the quota.
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var array The security group to be bound with, such as ['sg-1dd51d'].
     */
    public $SecurityGroupIds;

    /**
     * @var array Information of the specified private IPs. You can specify up to 10 IPs at a time.
     */
    public $PrivateIpAddresses;

    /**
     * @var array List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $VpcId VPC instance ID, which can be obtained from the `VpcId` field in the returned value of the `DescribeVpcs` API.
     * @param string $NetworkInterfaceName ENI name, which can contain up to 60 bytes.
     * @param string $SubnetId Subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param string $NetworkInterfaceDescription ENI description. You can enter any information within 60 characters.
     * @param integer $SecondaryPrivateIpAddressCount Number of private IP addresses applied for. The total number of private IP addresses cannot exceed the quota.
     * @param array $SecurityGroupIds The security group to be bound with, such as ['sg-1dd51d'].
     * @param array $PrivateIpAddresses Information of the specified private IPs. You can specify up to 10 IPs at a time.
     * @param array $Tags List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
