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
 * DescribeEnterpriseSecurityGroupRule request structure.
 *
 * @method string getPageNo() Obtain Page number of the current page displayed for query by page number.

1 by default.
 * @method void setPageNo(string $PageNo) Set Page number of the current page displayed for query by page number.

1 by default.
 * @method string getPageSize() Obtain Maximum number of entries per page displayed for query by page number.

Maximum value: 50.
 * @method void setPageSize(string $PageSize) Set Maximum number of entries per page displayed for query by page number.

Maximum value: 50.
 * @method string getSourceContent() Obtain Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
 * @method void setSourceContent(string $SourceContent) Set Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
 * @method string getDestContent() Obtain Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
 * @method void setDestContent(string $DestContent) Set Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
 * @method string getDescription() Obtain Rule description. Wildcards are supported.
 * @method void setDescription(string $Description) Set Rule description. Wildcards are supported.
 * @method string getRuleAction() Obtain The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
 * @method void setRuleAction(string $RuleAction) Set The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
 * @method string getEnable() Obtain Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
 * @method void setEnable(string $Enable) Set Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
 * @method string getPort() Obtain The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
 * @method void setPort(string $Port) Set The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
 * @method string getProtocol() Obtain Protocol. TCP/UDP/ICMP/ANY
 * @method void setProtocol(string $Protocol) Set Protocol. TCP/UDP/ICMP/ANY
 * @method string getServiceTemplateId() Obtain Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
 */
class DescribeEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var string Page number of the current page displayed for query by page number.

1 by default.
     */
    public $PageNo;

    /**
     * @var string Maximum number of entries per page displayed for query by page number.

Maximum value: 50.
     */
    public $PageSize;

    /**
     * @var string Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
     */
    public $SourceContent;

    /**
     * @var string Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
     */
    public $DestContent;

    /**
     * @var string Rule description. Wildcards are supported.
     */
    public $Description;

    /**
     * @var string The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
     */
    public $RuleAction;

    /**
     * @var string Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
     */
    public $Enable;

    /**
     * @var string The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
     */
    public $Port;

    /**
     * @var string Protocol. TCP/UDP/ICMP/ANY
     */
    public $Protocol;

    /**
     * @var string Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
     */
    public $ServiceTemplateId;

    /**
     * @param string $PageNo Page number of the current page displayed for query by page number.

1 by default.
     * @param string $PageSize Maximum number of entries per page displayed for query by page number.

Maximum value: 50.
     * @param string $SourceContent Source example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
     * @param string $DestContent Destination example:
net: IP/CIDR (192.168.0.2)
template: parameter template (ipm-dyodhpby)
instance: asset instance (ins-123456)
resourcegroup: asset group (/all groups/group 1/subgroup 1)
tag: resource tag ({"Key":"tag key","Value":"tag value"})
region: region (ap-gaungzhou)
Wildcards are supported.
     * @param string $Description Rule description. Wildcards are supported.
     * @param string $RuleAction The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
     * @param string $Enable Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
     * @param string $Port The port to apply access control rules. Valid values:
-1/-1: all ports
80: port 80
     * @param string $Protocol Protocol. TCP/UDP/ICMP/ANY
     * @param string $ServiceTemplateId Parameter template ID of port and protocol type; mutually exclusive with Protocol and Port
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }
    }
}
