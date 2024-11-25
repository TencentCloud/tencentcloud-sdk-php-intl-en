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
 * CreateAndAttachNetworkInterface request structure.
 *
 * @method string getVpcId() Obtain The ID of the VPC instance. You can obtain the parameter value from the `VpcId` field in the returned result of the `DescribeVpcs` API.
 * @method void setVpcId(string $VpcId) Set The ID of the VPC instance. You can obtain the parameter value from the `VpcId` field in the returned result of the `DescribeVpcs` API.
 * @method string getNetworkInterfaceName() Obtain The name of the ENI. The maximum length is 60 bytes.
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set The name of the ENI. The maximum length is 60 bytes.
 * @method string getSubnetId() Obtain The subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
 * @method void setSubnetId(string $SubnetId) Set The subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
 * @method string getInstanceId() Obtain CVM instance ID.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID.
 * @method array getPrivateIpAddresses() Obtain The information of the specified private IPs. You can specify a maximum of 10 IPs each time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set The information of the specified private IPs. You can specify a maximum of 10 IPs each time.
 * @method integer getSecondaryPrivateIpAddressCount() Obtain The number of private IP addresses you apply for. The total number of private IP addresses cannot exceed the quota.
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) Set The number of private IP addresses you apply for. The total number of private IP addresses cannot exceed the quota.
 * @method string getQosLevel() Obtain IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: `PT` (Gold), `AU` (Silver), `AG` (Bronze) and `DEFAULT` (Default).
 * @method void setQosLevel(string $QosLevel) Set IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: `PT` (Gold), `AU` (Silver), `AG` (Bronze) and `DEFAULT` (Default).
 * @method array getSecurityGroupIds() Obtain The security group to be bound with, such as ['sg-1dd51d'].
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The security group to be bound with, such as ['sg-1dd51d'].
 * @method string getNetworkInterfaceDescription() Obtain The ENI description. You can enter any information within 60 characters.
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) Set The ENI description. You can enter any information within 60 characters.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method integer getAttachType() Obtain ENI mounting type. Valid values: `0` (standard); `1` (extension); default value: `0`
 * @method void setAttachType(integer $AttachType) Set ENI mounting type. Valid values: `0` (standard); `1` (extension); default value: `0`
 * @method string getClientToken() Obtain 
 * @method void setClientToken(string $ClientToken) Set 
 */
class CreateAndAttachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPC instance. You can obtain the parameter value from the `VpcId` field in the returned result of the `DescribeVpcs` API.
     */
    public $VpcId;

    /**
     * @var string The name of the ENI. The maximum length is 60 bytes.
     */
    public $NetworkInterfaceName;

    /**
     * @var string The subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
     */
    public $SubnetId;

    /**
     * @var string CVM instance ID.
     */
    public $InstanceId;

    /**
     * @var array The information of the specified private IPs. You can specify a maximum of 10 IPs each time.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer The number of private IP addresses you apply for. The total number of private IP addresses cannot exceed the quota.
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var string IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: `PT` (Gold), `AU` (Silver), `AG` (Bronze) and `DEFAULT` (Default).
     */
    public $QosLevel;

    /**
     * @var array The security group to be bound with, such as ['sg-1dd51d'].
     */
    public $SecurityGroupIds;

    /**
     * @var string The ENI description. You can enter any information within 60 characters.
     */
    public $NetworkInterfaceDescription;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @var integer ENI mounting type. Valid values: `0` (standard); `1` (extension); default value: `0`
     */
    public $AttachType;

    /**
     * @var string 
     */
    public $ClientToken;

    /**
     * @param string $VpcId The ID of the VPC instance. You can obtain the parameter value from the `VpcId` field in the returned result of the `DescribeVpcs` API.
     * @param string $NetworkInterfaceName The name of the ENI. The maximum length is 60 bytes.
     * @param string $SubnetId The subnet instance ID of the ENI, such as 'subnet-0ap8nwca'.
     * @param string $InstanceId CVM instance ID.
     * @param array $PrivateIpAddresses The information of the specified private IPs. You can specify a maximum of 10 IPs each time.
     * @param integer $SecondaryPrivateIpAddressCount The number of private IP addresses you apply for. The total number of private IP addresses cannot exceed the quota.
     * @param string $QosLevel IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: `PT` (Gold), `AU` (Silver), `AG` (Bronze) and `DEFAULT` (Default).
     * @param array $SecurityGroupIds The security group to be bound with, such as ['sg-1dd51d'].
     * @param string $NetworkInterfaceDescription The ENI description. You can enter any information within 60 characters.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     * @param integer $AttachType ENI mounting type. Valid values: `0` (standard); `1` (extension); default value: `0`
     * @param string $ClientToken 
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
