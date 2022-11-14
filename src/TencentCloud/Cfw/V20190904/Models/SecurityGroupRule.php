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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group rules
 *
 * @method string getSourceContent() Obtain Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
 * @method void setSourceContent(string $SourceContent) Set Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
 * @method string getSourceType() Obtain Access source type. Valid values: net|template|instance|resourcegroup|tag|region
 * @method void setSourceType(string $SourceType) Set Access source type. Valid values: net|template|instance|resourcegroup|tag|region
 * @method string getDestContent() Obtain Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
 * @method void setDestContent(string $DestContent) Set Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
 * @method string getDestType() Obtain Access destination type. Valid values: net|template|instance|resourcegroup|tag|region
 * @method void setDestType(string $DestType) Set Access destination type. Valid values: net|template|instance|resourcegroup|tag|region
 * @method string getRuleAction() Obtain The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
 * @method void setRuleAction(string $RuleAction) Set The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getOrderIndex() Obtain Rule priority. -1: lowest; 1: highest
 * @method void setOrderIndex(string $OrderIndex) Set Rule priority. -1: lowest; 1: highest
 * @method string getProtocol() Obtain Protocol. TCP/UDP/ICMP/ANY
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setProtocol(string $Protocol) Set Protocol. TCP/UDP/ICMP/ANY
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPort() Obtain The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPort(string $Port) Set The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getServiceTemplateId() Obtain Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getId() Obtain The unique ID of the rule
 * @method void setId(string $Id) Set The unique ID of the rule
 * @method string getEnable() Obtain Rule status. true: enabled; false: disabled
 * @method void setEnable(string $Enable) Set Rule status. true: enabled; false: disabled
 */
class SecurityGroupRule extends AbstractModel
{
    /**
     * @var string Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
     */
    public $SourceContent;

    /**
     * @var string Access source type. Valid values: net|template|instance|resourcegroup|tag|region
     */
    public $SourceType;

    /**
     * @var string Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
     */
    public $DestContent;

    /**
     * @var string Access destination type. Valid values: net|template|instance|resourcegroup|tag|region
     */
    public $DestType;

    /**
     * @var string The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
     */
    public $RuleAction;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Rule priority. -1: lowest; 1: highest
     */
    public $OrderIndex;

    /**
     * @var string Protocol. TCP/UDP/ICMP/ANY
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Protocol;

    /**
     * @var string The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Port;

    /**
     * @var string Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ServiceTemplateId;

    /**
     * @var string The unique ID of the rule
     */
    public $Id;

    /**
     * @var string Rule status. true: enabled; false: disabled
     */
    public $Enable;

    /**
     * @param string $SourceContent Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
     * @param string $SourceType Access source type. Valid values: net|template|instance|resourcegroup|tag|region
     * @param string $DestContent Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
     * @param string $DestType Access destination type. Valid values: net|template|instance|resourcegroup|tag|region
     * @param string $RuleAction The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
     * @param string $Description Description
     * @param string $OrderIndex Rule priority. -1: lowest; 1: highest
     * @param string $Protocol Protocol. TCP/UDP/ICMP/ANY
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Port The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ServiceTemplateId Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Id The unique ID of the rule
     * @param string $Enable Rule status. true: enabled; false: disabled
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
