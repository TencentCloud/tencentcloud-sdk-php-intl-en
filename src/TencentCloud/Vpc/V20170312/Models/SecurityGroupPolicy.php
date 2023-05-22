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
 * Security group policy object
 *
 * @method integer getPolicyIndex() Obtain The index number of security group rules, which dynamically changes with the rules. This parameter can be obtained via the `DescribeSecurityGroupPolicies` API and used with the `Version` field in the returned value of the API.
 * @method void setPolicyIndex(integer $PolicyIndex) Set The index number of security group rules, which dynamically changes with the rules. This parameter can be obtained via the `DescribeSecurityGroupPolicies` API and used with the `Version` field in the returned value of the API.
 * @method string getProtocol() Obtain Protocol. Valid values: TCP, UDP, ICMP, ICMPv6, ALL.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: TCP, UDP, ICMP, ICMPv6, ALL.
 * @method string getPort() Obtain Port (`all`, a single port, or a port range).
Note: If the `Protocol` value is set to `ALL`, the `Port` value also needs to be set to `all`.
 * @method void setPort(string $Port) Set Port (`all`, a single port, or a port range).
Note: If the `Protocol` value is set to `ALL`, the `Port` value also needs to be set to `all`.
 * @method ServiceTemplateSpecification getServiceTemplate() Obtain Protocol port ID or protocol port group ID. ServiceTemplate and Protocol+Port are mutually exclusive.
 * @method void setServiceTemplate(ServiceTemplateSpecification $ServiceTemplate) Set Protocol port ID or protocol port group ID. ServiceTemplate and Protocol+Port are mutually exclusive.
 * @method string getCidrBlock() Obtain Either `CidrBlock` or `Ipv6CidrBlock can be specified. Note that if `0.0.0.0/n` is entered, it is mapped to 0.0.0.0/0.
 * @method void setCidrBlock(string $CidrBlock) Set Either `CidrBlock` or `Ipv6CidrBlock can be specified. Note that if `0.0.0.0/n` is entered, it is mapped to 0.0.0.0/0.
 * @method string getIpv6CidrBlock() Obtain The CIDR block or IPv6 (mutually exclusive).
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set The CIDR block or IPv6 (mutually exclusive).
 * @method string getSecurityGroupId() Obtain The security group instance ID, such as `sg-ohuuioma`.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set The security group instance ID, such as `sg-ohuuioma`.
 * @method AddressTemplateSpecification getAddressTemplate() Obtain IP address ID or IP address group ID.
 * @method void setAddressTemplate(AddressTemplateSpecification $AddressTemplate) Set IP address ID or IP address group ID.
 * @method string getAction() Obtain ACCEPT or DROP.
 * @method void setAction(string $Action) Set ACCEPT or DROP.
 * @method string getPolicyDescription() Obtain Security group policy description.
 * @method void setPolicyDescription(string $PolicyDescription) Set Security group policy description.
 * @method string getModifyTime() Obtain The last modification time of the security group.
 * @method void setModifyTime(string $ModifyTime) Set The last modification time of the security group.
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var integer The index number of security group rules, which dynamically changes with the rules. This parameter can be obtained via the `DescribeSecurityGroupPolicies` API and used with the `Version` field in the returned value of the API.
     */
    public $PolicyIndex;

    /**
     * @var string Protocol. Valid values: TCP, UDP, ICMP, ICMPv6, ALL.
     */
    public $Protocol;

    /**
     * @var string Port (`all`, a single port, or a port range).
Note: If the `Protocol` value is set to `ALL`, the `Port` value also needs to be set to `all`.
     */
    public $Port;

    /**
     * @var ServiceTemplateSpecification Protocol port ID or protocol port group ID. ServiceTemplate and Protocol+Port are mutually exclusive.
     */
    public $ServiceTemplate;

    /**
     * @var string Either `CidrBlock` or `Ipv6CidrBlock can be specified. Note that if `0.0.0.0/n` is entered, it is mapped to 0.0.0.0/0.
     */
    public $CidrBlock;

    /**
     * @var string The CIDR block or IPv6 (mutually exclusive).
     */
    public $Ipv6CidrBlock;

    /**
     * @var string The security group instance ID, such as `sg-ohuuioma`.
     */
    public $SecurityGroupId;

    /**
     * @var AddressTemplateSpecification IP address ID or IP address group ID.
     */
    public $AddressTemplate;

    /**
     * @var string ACCEPT or DROP.
     */
    public $Action;

    /**
     * @var string Security group policy description.
     */
    public $PolicyDescription;

    /**
     * @var string The last modification time of the security group.
     */
    public $ModifyTime;

    /**
     * @param integer $PolicyIndex The index number of security group rules, which dynamically changes with the rules. This parameter can be obtained via the `DescribeSecurityGroupPolicies` API and used with the `Version` field in the returned value of the API.
     * @param string $Protocol Protocol. Valid values: TCP, UDP, ICMP, ICMPv6, ALL.
     * @param string $Port Port (`all`, a single port, or a port range).
Note: If the `Protocol` value is set to `ALL`, the `Port` value also needs to be set to `all`.
     * @param ServiceTemplateSpecification $ServiceTemplate Protocol port ID or protocol port group ID. ServiceTemplate and Protocol+Port are mutually exclusive.
     * @param string $CidrBlock Either `CidrBlock` or `Ipv6CidrBlock can be specified. Note that if `0.0.0.0/n` is entered, it is mapped to 0.0.0.0/0.
     * @param string $Ipv6CidrBlock The CIDR block or IPv6 (mutually exclusive).
     * @param string $SecurityGroupId The security group instance ID, such as `sg-ohuuioma`.
     * @param AddressTemplateSpecification $AddressTemplate IP address ID or IP address group ID.
     * @param string $Action ACCEPT or DROP.
     * @param string $PolicyDescription Security group policy description.
     * @param string $ModifyTime The last modification time of the security group.
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
        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplate",$param) and $param["ServiceTemplate"] !== null) {
            $this->ServiceTemplate = new ServiceTemplateSpecification();
            $this->ServiceTemplate->deserialize($param["ServiceTemplate"]);
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("AddressTemplate",$param) and $param["AddressTemplate"] !== null) {
            $this->AddressTemplate = new AddressTemplateSpecification();
            $this->AddressTemplate->deserialize($param["AddressTemplate"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
