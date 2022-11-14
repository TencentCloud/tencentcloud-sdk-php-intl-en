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
 * AddAcRule request structure.
 *
 * @method string getOrderIndex() Obtain -1: lowest priority; 1: highest priority
 * @method void setOrderIndex(string $OrderIndex) Set -1: lowest priority; 1: highest priority
 * @method string getRuleAction() Obtain The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
log: observe
 * @method void setRuleAction(string $RuleAction) Set The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
log: observe
 * @method string getDirection() Obtain The traffic direction for access control rules. Valid values:
in: incoming traffic access control
out: outgoing traffic access control
 * @method void setDirection(string $Direction) Set The traffic direction for access control rules. Valid values:
in: incoming traffic access control
out: outgoing traffic access control
 * @method string getDescription() Obtain The description of access control rules.
 * @method void setDescription(string $Description) Set The description of access control rules.
 * @method string getSourceType() Obtain The type of source address in access control rules. Valid values:
net: source IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
 * @method void setSourceType(string $SourceType) Set The type of source address in access control rules. Valid values:
net: source IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
 * @method string getSourceContent() Obtain The source address in the access control policy. 
When `SourceType` is `net`, `SourceContent` is the source IP or CIDR block.
For example: 1.1.1.0/24

When `SourceType` is `template`, `SourceContent` must be the source address template ID.

When `SourceType` is `location`, `SourceContent` is the source region. 
For example, ["BJ11", "ZB"]

When `SourceType` is `instance`, `SourceContent` is the public IP of the instance.
For example, ins-xxxxx

When `SourceType` is `vendor`, `SourceContent` is the cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
 * @method void setSourceContent(string $SourceContent) Set The source address in the access control policy. 
When `SourceType` is `net`, `SourceContent` is the source IP or CIDR block.
For example: 1.1.1.0/24

When `SourceType` is `template`, `SourceContent` must be the source address template ID.

When `SourceType` is `location`, `SourceContent` is the source region. 
For example, ["BJ11", "ZB"]

When `SourceType` is `instance`, `SourceContent` is the public IP of the instance.
For example, ins-xxxxx

When `SourceType` is `vendor`, `SourceContent` is the cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
 * @method string getDestType() Obtain The type of destination address in access control rules. Valid values:
net: destination IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
domain: Domain name or IP.
 * @method void setDestType(string $DestType) Set The type of destination address in access control rules. Valid values:
net: destination IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
domain: Domain name or IP.
 * @method string getDestContent() Obtain The destination address in the access control policy. 
When `DestType` is `net`, `DestContent` is the destination IP or CIDR block.
For example: 1.1.1.0/24

When `DestType` is `template`, `DestContent` is the destination address template ID.

When `DestType` is `location`, `DestContent` is the destination region. 
For example, ["BJ11", "ZB"]

When `DestType` is `instance`, `DestContent` is the public IP of the instance.
For example, ins-xxxxx

When `DestType` is `domain`, `DestContent` is the domain name associated with the instance.
For example, *.qq.com

When `DestType`, `DestContent` is the selected cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
 * @method void setDestContent(string $DestContent) Set The destination address in the access control policy. 
When `DestType` is `net`, `DestContent` is the destination IP or CIDR block.
For example: 1.1.1.0/24

When `DestType` is `template`, `DestContent` is the destination address template ID.

When `DestType` is `location`, `DestContent` is the destination region. 
For example, ["BJ11", "ZB"]

When `DestType` is `instance`, `DestContent` is the public IP of the instance.
For example, ins-xxxxx

When `DestType` is `domain`, `DestContent` is the domain name associated with the instance.
For example, *.qq.com

When `DestType`, `DestContent` is the selected cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
 * @method string getPort() Obtain The port to apply access control rules. Valid values:
-1/-1: all ports
80,443: 80 or 443
 * @method void setPort(string $Port) Set The port to apply access control rules. Valid values:
-1/-1: all ports
80,443: 80 or 443
 * @method string getProtocol() Obtain The protocol type of traffic in access control rules. Valid value: TCP. Only TCP is supported for edge firewall rules. If this parameter is not specified, it defaults to TCP.
 * @method void setProtocol(string $Protocol) Set The protocol type of traffic in access control rules. Valid value: TCP. Only TCP is supported for edge firewall rules. If this parameter is not specified, it defaults to TCP.
 * @method string getApplicationName() Obtain The Layer 7 protocol. Valid values:
HTTP/HTTPS
TLS/SSL
 * @method void setApplicationName(string $ApplicationName) Set The Layer 7 protocol. Valid values:
HTTP/HTTPS
TLS/SSL
 * @method string getEnable() Obtain Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
 * @method void setEnable(string $Enable) Set Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
 */
class AddAcRuleRequest extends AbstractModel
{
    /**
     * @var string -1: lowest priority; 1: highest priority
     */
    public $OrderIndex;

    /**
     * @var string The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
log: observe
     */
    public $RuleAction;

    /**
     * @var string The traffic direction for access control rules. Valid values:
in: incoming traffic access control
out: outgoing traffic access control
     */
    public $Direction;

    /**
     * @var string The description of access control rules.
     */
    public $Description;

    /**
     * @var string The type of source address in access control rules. Valid values:
net: source IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
     */
    public $SourceType;

    /**
     * @var string The source address in the access control policy. 
When `SourceType` is `net`, `SourceContent` is the source IP or CIDR block.
For example: 1.1.1.0/24

When `SourceType` is `template`, `SourceContent` must be the source address template ID.

When `SourceType` is `location`, `SourceContent` is the source region. 
For example, ["BJ11", "ZB"]

When `SourceType` is `instance`, `SourceContent` is the public IP of the instance.
For example, ins-xxxxx

When `SourceType` is `vendor`, `SourceContent` is the cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
     */
    public $SourceContent;

    /**
     * @var string The type of destination address in access control rules. Valid values:
net: destination IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
domain: Domain name or IP.
     */
    public $DestType;

    /**
     * @var string The destination address in the access control policy. 
When `DestType` is `net`, `DestContent` is the destination IP or CIDR block.
For example: 1.1.1.0/24

When `DestType` is `template`, `DestContent` is the destination address template ID.

When `DestType` is `location`, `DestContent` is the destination region. 
For example, ["BJ11", "ZB"]

When `DestType` is `instance`, `DestContent` is the public IP of the instance.
For example, ins-xxxxx

When `DestType` is `domain`, `DestContent` is the domain name associated with the instance.
For example, *.qq.com

When `DestType`, `DestContent` is the selected cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
     */
    public $DestContent;

    /**
     * @var string The port to apply access control rules. Valid values:
-1/-1: all ports
80,443: 80 or 443
     */
    public $Port;

    /**
     * @var string The protocol type of traffic in access control rules. Valid value: TCP. Only TCP is supported for edge firewall rules. If this parameter is not specified, it defaults to TCP.
     */
    public $Protocol;

    /**
     * @var string The Layer 7 protocol. Valid values:
HTTP/HTTPS
TLS/SSL
     */
    public $ApplicationName;

    /**
     * @var string Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
     */
    public $Enable;

    /**
     * @param string $OrderIndex -1: lowest priority; 1: highest priority
     * @param string $RuleAction The action that Cloud Firewall performs on the traffic. Valid values:
accept: allow
drop: deny
log: observe
     * @param string $Direction The traffic direction for access control rules. Valid values:
in: incoming traffic access control
out: outgoing traffic access control
     * @param string $Description The description of access control rules.
     * @param string $SourceType The type of source address in access control rules. Valid values:
net: source IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
     * @param string $SourceContent The source address in the access control policy. 
When `SourceType` is `net`, `SourceContent` is the source IP or CIDR block.
For example: 1.1.1.0/24

When `SourceType` is `template`, `SourceContent` must be the source address template ID.

When `SourceType` is `location`, `SourceContent` is the source region. 
For example, ["BJ11", "ZB"]

When `SourceType` is `instance`, `SourceContent` is the public IP of the instance.
For example, ins-xxxxx

When `SourceType` is `vendor`, `SourceContent` is the cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
     * @param string $DestType The type of destination address in access control rules. Valid values:
net: destination IP or range (IP or CIDR)
location: source region
template: CFW address template
instance: instance ID
vendor: Cloud vendor
domain: Domain name or IP.
     * @param string $DestContent The destination address in the access control policy. 
When `DestType` is `net`, `DestContent` is the destination IP or CIDR block.
For example: 1.1.1.0/24

When `DestType` is `template`, `DestContent` is the destination address template ID.

When `DestType` is `location`, `DestContent` is the destination region. 
For example, ["BJ11", "ZB"]

When `DestType` is `instance`, `DestContent` is the public IP of the instance.
For example, ins-xxxxx

When `DestType` is `domain`, `DestContent` is the domain name associated with the instance.
For example, *.qq.com

When `DestType`, `DestContent` is the selected cloud service provider.
Values: `aws`, `huawei`, `tencent`, `aliyun`, `azure` and `all`. 
     * @param string $Port The port to apply access control rules. Valid values:
-1/-1: all ports
80,443: 80 or 443
     * @param string $Protocol The protocol type of traffic in access control rules. Valid value: TCP. Only TCP is supported for edge firewall rules. If this parameter is not specified, it defaults to TCP.
     * @param string $ApplicationName The Layer 7 protocol. Valid values:
HTTP/HTTPS
TLS/SSL
     * @param string $Enable Indicates whether to enable the rules. Default: enable. Valid values:
true: enable; false: disable
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
