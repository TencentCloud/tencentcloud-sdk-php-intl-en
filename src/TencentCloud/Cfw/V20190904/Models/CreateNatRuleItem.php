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
 * Parameters for creating an NAT access control rule
 *
 * @method string getSourceContent() Obtain Access source. Example: `net: IP/CIDR(192.168.0.2)`
 * @method void setSourceContent(string $SourceContent) Set Access source. Example: `net: IP/CIDR(192.168.0.2)`
 * @method string getSourceType() Obtain Access source type. Values for inbound rules: `ip`, `net`, `template`, and `location`. Values for outbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`.
 * @method void setSourceType(string $SourceType) Set Access source type. Values for inbound rules: `ip`, `net`, `template`, and `location`. Values for outbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`.
 * @method string getTargetContent() Obtain Access target. Example: `net: IP/CIDR(192.168.0.2); domain: domain name rule, e.g., *.qq.com
 * @method void setTargetContent(string $TargetContent) Set Access target. Example: `net: IP/CIDR(192.168.0.2); domain: domain name rule, e.g., *.qq.com
 * @method string getTargetType() Obtain Access target type. Values for inbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`. Values for outbound rules: `ip`, `net`, `domain`, `template`, and `location`.
 * @method void setTargetType(string $TargetType) Set Access target type. Values for inbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`. Values for outbound rules: `ip`, `net`, `domain`, `template`, and `location`.
 * @method string getProtocol() Obtain Protocol. Values: `TCP`, `UDP`, `ICMP`, `ANY`, `HTTP`, `HTTPS`, `HTTP/HTTPS`, `SMTP`, `SMTPS`, `SMTP/SMTPS`, `FTP`, and `DNS`.
 * @method void setProtocol(string $Protocol) Set Protocol. Values: `TCP`, `UDP`, `ICMP`, `ANY`, `HTTP`, `HTTPS`, `HTTP/HTTPS`, `SMTP`, `SMTPS`, `SMTP/SMTPS`, `FTP`, and `DNS`.
 * @method string getRuleAction() Obtain Specify how the CFW instance deals with the traffic hit the access control rule. Values: `accept` (allow), `drop` (reject), and `log` (observe).
 * @method void setRuleAction(string $RuleAction) Set Specify how the CFW instance deals with the traffic hit the access control rule. Values: `accept` (allow), `drop` (reject), and `log` (observe).
 * @method string getPort() Obtain The port of the access control rule. Values: `-1/-1` (all ports) and `80` (Port 80)
 * @method void setPort(string $Port) Set The port of the access control rule. Values: `-1/-1` (all ports) and `80` (Port 80)
 * @method integer getDirection() Obtain Rule direction. Values: `1` (Inbound) and `0` (Outbound)
 * @method void setDirection(integer $Direction) Set Rule direction. Values: `1` (Inbound) and `0` (Outbound)
 * @method integer getOrderIndex() Obtain Rule sequence number
 * @method void setOrderIndex(integer $OrderIndex) Set Rule sequence number
 * @method string getEnable() Obtain Rule status. `true` (Enabled); `false` (Disabled)
 * @method void setEnable(string $Enable) Set Rule status. `true` (Enabled); `false` (Disabled)
 * @method integer getUuid() Obtain The unique ID of the rule, which is not required when you create a rule.
 * @method void setUuid(integer $Uuid) Set The unique ID of the rule, which is not required when you create a rule.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class CreateNatRuleItem extends AbstractModel
{
    /**
     * @var string Access source. Example: `net: IP/CIDR(192.168.0.2)`
     */
    public $SourceContent;

    /**
     * @var string Access source type. Values for inbound rules: `ip`, `net`, `template`, and `location`. Values for outbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`.
     */
    public $SourceType;

    /**
     * @var string Access target. Example: `net: IP/CIDR(192.168.0.2); domain: domain name rule, e.g., *.qq.com
     */
    public $TargetContent;

    /**
     * @var string Access target type. Values for inbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`. Values for outbound rules: `ip`, `net`, `domain`, `template`, and `location`.
     */
    public $TargetType;

    /**
     * @var string Protocol. Values: `TCP`, `UDP`, `ICMP`, `ANY`, `HTTP`, `HTTPS`, `HTTP/HTTPS`, `SMTP`, `SMTPS`, `SMTP/SMTPS`, `FTP`, and `DNS`.
     */
    public $Protocol;

    /**
     * @var string Specify how the CFW instance deals with the traffic hit the access control rule. Values: `accept` (allow), `drop` (reject), and `log` (observe).
     */
    public $RuleAction;

    /**
     * @var string The port of the access control rule. Values: `-1/-1` (all ports) and `80` (Port 80)
     */
    public $Port;

    /**
     * @var integer Rule direction. Values: `1` (Inbound) and `0` (Outbound)
     */
    public $Direction;

    /**
     * @var integer Rule sequence number
     */
    public $OrderIndex;

    /**
     * @var string Rule status. `true` (Enabled); `false` (Disabled)
     */
    public $Enable;

    /**
     * @var integer The unique ID of the rule, which is not required when you create a rule.
     */
    public $Uuid;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $SourceContent Access source. Example: `net: IP/CIDR(192.168.0.2)`
     * @param string $SourceType Access source type. Values for inbound rules: `ip`, `net`, `template`, and `location`. Values for outbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`.
     * @param string $TargetContent Access target. Example: `net: IP/CIDR(192.168.0.2); domain: domain name rule, e.g., *.qq.com
     * @param string $TargetType Access target type. Values for inbound rules: `ip`, `net`, `template`, `instance`, `group`, and `tag`. Values for outbound rules: `ip`, `net`, `domain`, `template`, and `location`.
     * @param string $Protocol Protocol. Values: `TCP`, `UDP`, `ICMP`, `ANY`, `HTTP`, `HTTPS`, `HTTP/HTTPS`, `SMTP`, `SMTPS`, `SMTP/SMTPS`, `FTP`, and `DNS`.
     * @param string $RuleAction Specify how the CFW instance deals with the traffic hit the access control rule. Values: `accept` (allow), `drop` (reject), and `log` (observe).
     * @param string $Port The port of the access control rule. Values: `-1/-1` (all ports) and `80` (Port 80)
     * @param integer $Direction Rule direction. Values: `1` (Inbound) and `0` (Outbound)
     * @param integer $OrderIndex Rule sequence number
     * @param string $Enable Rule status. `true` (Enabled); `false` (Disabled)
     * @param integer $Uuid The unique ID of the rule, which is not required when you create a rule.
     * @param string $Description Description
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

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
