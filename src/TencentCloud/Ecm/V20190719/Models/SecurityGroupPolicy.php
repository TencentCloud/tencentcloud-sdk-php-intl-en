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
 * Security group policy object
 *
 * @method integer getPolicyIndex() Obtain Security group policy index number
 * @method void setPolicyIndex(integer $PolicyIndex) Set Security group policy index number
 * @method string getProtocol() Obtain Protocol. Valid values: TCP, UDP, ICMP.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: TCP, UDP, ICMP.
 * @method string getPort() Obtain Port. Valid values: all, discrete port, range.
 * @method void setPort(string $Port) Set Port. Valid values: all, discrete port, range.
 * @method ServiceTemplateSpecification getServiceTemplate() Obtain Protocol port ID or protocol port group ID. `ServiceTemplate` and `Protocol+Port` are mutually exclusive.
 * @method void setServiceTemplate(ServiceTemplateSpecification $ServiceTemplate) Set Protocol port ID or protocol port group ID. `ServiceTemplate` and `Protocol+Port` are mutually exclusive.
 * @method string getCidrBlock() Obtain IP range or IP address (mutually exclusive).
 * @method void setCidrBlock(string $CidrBlock) Set IP range or IP address (mutually exclusive).
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-ohuuioma`.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-ohuuioma`.
 * @method AddressTemplateSpecification getAddressTemplate() Obtain IP address ID or IP address group ID.
 * @method void setAddressTemplate(AddressTemplateSpecification $AddressTemplate) Set IP address ID or IP address group ID.
 * @method string getAction() Obtain `ACCEPT` or `DROP`.
 * @method void setAction(string $Action) Set `ACCEPT` or `DROP`.
 * @method string getPolicyDescription() Obtain Security group policy description.
 * @method void setPolicyDescription(string $PolicyDescription) Set Security group policy description.
 * @method string getModifyTime() Obtain Modification time, such as `2020-07-22 19:27:23`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time, such as `2020-07-22 19:27:23`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIpv6CidrBlock() Obtain IP range or IPv6 address (mutually exclusive).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set IP range or IPv6 address (mutually exclusive).
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var integer Security group policy index number
     */
    public $PolicyIndex;

    /**
     * @var string Protocol. Valid values: TCP, UDP, ICMP.
     */
    public $Protocol;

    /**
     * @var string Port. Valid values: all, discrete port, range.
     */
    public $Port;

    /**
     * @var ServiceTemplateSpecification Protocol port ID or protocol port group ID. `ServiceTemplate` and `Protocol+Port` are mutually exclusive.
     */
    public $ServiceTemplate;

    /**
     * @var string IP range or IP address (mutually exclusive).
     */
    public $CidrBlock;

    /**
     * @var string Security group instance ID, such as `esg-ohuuioma`.
     */
    public $SecurityGroupId;

    /**
     * @var AddressTemplateSpecification IP address ID or IP address group ID.
     */
    public $AddressTemplate;

    /**
     * @var string `ACCEPT` or `DROP`.
     */
    public $Action;

    /**
     * @var string Security group policy description.
     */
    public $PolicyDescription;

    /**
     * @var string Modification time, such as `2020-07-22 19:27:23`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string IP range or IPv6 address (mutually exclusive).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6CidrBlock;

    /**
     * @param integer $PolicyIndex Security group policy index number
     * @param string $Protocol Protocol. Valid values: TCP, UDP, ICMP.
     * @param string $Port Port. Valid values: all, discrete port, range.
     * @param ServiceTemplateSpecification $ServiceTemplate Protocol port ID or protocol port group ID. `ServiceTemplate` and `Protocol+Port` are mutually exclusive.
     * @param string $CidrBlock IP range or IP address (mutually exclusive).
     * @param string $SecurityGroupId Security group instance ID, such as `esg-ohuuioma`.
     * @param AddressTemplateSpecification $AddressTemplate IP address ID or IP address group ID.
     * @param string $Action `ACCEPT` or `DROP`.
     * @param string $PolicyDescription Security group policy description.
     * @param string $ModifyTime Modification time, such as `2020-07-22 19:27:23`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Ipv6CidrBlock IP range or IPv6 address (mutually exclusive).
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }
    }
}
