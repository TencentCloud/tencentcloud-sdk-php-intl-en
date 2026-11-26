<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom rule - basic access control configuration.
 *
 * @method string getAction() Obtain Action. Valid values:
<li> drop: block;</li>
<li> trans: release;</li>
<li>monitor: observation.</li>
 * @method void setAction(string $Action) Set Action. Valid values:
<li> drop: block;</li>
<li> trans: release;</li>
<li>monitor: observation.</li>
 * @method string getMatchFrom() Obtain According to type matching. Valid values:
<li>ip: Match by client IP;</li>
<li>area: match by client IP region;</li>
<li>asn: Match the autonomous system to which the client belongs;</li>
<li>referer: match the Referer request header;</li>
<li>ua: match the User-Agent request header;</li>
<li>url: Request URL for matching.</li>
 * @method void setMatchFrom(string $MatchFrom) Set According to type matching. Valid values:
<li>ip: Match by client IP;</li>
<li>area: match by client IP region;</li>
<li>asn: Match the autonomous system to which the client belongs;</li>
<li>referer: match the Referer request header;</li>
<li>ua: match the User-Agent request header;</li>
<li>url: Request URL for matching.</li>
 * @method string getOperator() Obtain Match method of the rule. Valid values:
<li> match: match, suitable for MatchFrom as ip;</li>
<li> not_match: Not match, suitable for when MatchFrom is ip;</li>
<li> include_area: region inclusion, suitable for MatchFrom as area;</li>
<li> not_include_area: Regions excluded, applicable to MatchFrom as area;</li>
<li> asn_match: ASN contains, suitable for MatchFrom as asn;</li>
<li> asn_not_match: ASN not contained, applicable to MatchFrom as asn;</li>
<li> equal: equal, suitable for MatchFrom being ua, referer;</li>
<li> not_equal: Not equal to, applicable to MatchFrom being ua, referer;</li>
<li> include: wildcard match, suitable for MatchFrom being ua, referer, url;</li>
<li> not_include: wildcard mismatch, suitable for MatchFrom being ua, referer;</li>
<li> is_emty: The configuration content is empty, suitable for MatchFrom being ua or referer;</li>
<li> not_exists: The configuration content does not exist. This is applicable when MatchFrom is ua or referer.</li>
 * @method void setOperator(string $Operator) Set Match method of the rule. Valid values:
<li> match: match, suitable for MatchFrom as ip;</li>
<li> not_match: Not match, suitable for when MatchFrom is ip;</li>
<li> include_area: region inclusion, suitable for MatchFrom as area;</li>
<li> not_include_area: Regions excluded, applicable to MatchFrom as area;</li>
<li> asn_match: ASN contains, suitable for MatchFrom as asn;</li>
<li> asn_not_match: ASN not contained, applicable to MatchFrom as asn;</li>
<li> equal: equal, suitable for MatchFrom being ua, referer;</li>
<li> not_equal: Not equal to, applicable to MatchFrom being ua, referer;</li>
<li> include: wildcard match, suitable for MatchFrom being ua, referer, url;</li>
<li> not_include: wildcard mismatch, suitable for MatchFrom being ua, referer;</li>
<li> is_emty: The configuration content is empty, suitable for MatchFrom being ua or referer;</li>
<li> not_exists: The configuration content does not exist. This is applicable when MatchFrom is ua or referer.</li>
 * @method integer getRuleID() Obtain Rule id. Output only.
 * @method void setRuleID(integer $RuleID) Set Rule id. Output only.
 * @method string getUpdateTime() Obtain Update time. For output usage only.
 * @method void setUpdateTime(string $UpdateTime) Set Update time. For output usage only.
 * @method string getStatus() Obtain Rule enablement status. Valid values:
<li>`on`: Enable;</li>
<li> off: Disabled.</li>
If the input parameter is not specified, the value defaults to `on`.
 * @method void setStatus(string $Status) Set Rule enablement status. Valid values:
<li>`on`: Enable;</li>
<li> off: Disabled.</li>
If the input parameter is not specified, the value defaults to `on`.
 * @method string getRuleName() Obtain Rule name.
 * @method void setRuleName(string $RuleName) Set Rule name.
 * @method string getMatchContent() Obtain Matching content. Multi-value input is supported.
<li>When entering multiple matching values, please separate them with English commas;</li>
<li>When MatchFrom is ua, multi-value input is not supported;</li>
<li>When Operator is is_empty or not_exists, the input value of this field is invalid.</li>
 * @method void setMatchContent(string $MatchContent) Set Matching content. Multi-value input is supported.
<li>When entering multiple matching values, please separate them with English commas;</li>
<li>When MatchFrom is ua, multi-value input is not supported;</li>
<li>When Operator is is_empty or not_exists, the input value of this field is invalid.</li>
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var string Action. Valid values:
<li> drop: block;</li>
<li> trans: release;</li>
<li>monitor: observation.</li>
     */
    public $Action;

    /**
     * @var string According to type matching. Valid values:
<li>ip: Match by client IP;</li>
<li>area: match by client IP region;</li>
<li>asn: Match the autonomous system to which the client belongs;</li>
<li>referer: match the Referer request header;</li>
<li>ua: match the User-Agent request header;</li>
<li>url: Request URL for matching.</li>
     */
    public $MatchFrom;

    /**
     * @var string Match method of the rule. Valid values:
<li> match: match, suitable for MatchFrom as ip;</li>
<li> not_match: Not match, suitable for when MatchFrom is ip;</li>
<li> include_area: region inclusion, suitable for MatchFrom as area;</li>
<li> not_include_area: Regions excluded, applicable to MatchFrom as area;</li>
<li> asn_match: ASN contains, suitable for MatchFrom as asn;</li>
<li> asn_not_match: ASN not contained, applicable to MatchFrom as asn;</li>
<li> equal: equal, suitable for MatchFrom being ua, referer;</li>
<li> not_equal: Not equal to, applicable to MatchFrom being ua, referer;</li>
<li> include: wildcard match, suitable for MatchFrom being ua, referer, url;</li>
<li> not_include: wildcard mismatch, suitable for MatchFrom being ua, referer;</li>
<li> is_emty: The configuration content is empty, suitable for MatchFrom being ua or referer;</li>
<li> not_exists: The configuration content does not exist. This is applicable when MatchFrom is ua or referer.</li>
     */
    public $Operator;

    /**
     * @var integer Rule id. Output only.
     */
    public $RuleID;

    /**
     * @var string Update time. For output usage only.
     */
    public $UpdateTime;

    /**
     * @var string Rule enablement status. Valid values:
<li>`on`: Enable;</li>
<li> off: Disabled.</li>
If the input parameter is not specified, the value defaults to `on`.
     */
    public $Status;

    /**
     * @var string Rule name.
     */
    public $RuleName;

    /**
     * @var string Matching content. Multi-value input is supported.
<li>When entering multiple matching values, please separate them with English commas;</li>
<li>When MatchFrom is ua, multi-value input is not supported;</li>
<li>When Operator is is_empty or not_exists, the input value of this field is invalid.</li>
     */
    public $MatchContent;

    /**
     * @param string $Action Action. Valid values:
<li> drop: block;</li>
<li> trans: release;</li>
<li>monitor: observation.</li>
     * @param string $MatchFrom According to type matching. Valid values:
<li>ip: Match by client IP;</li>
<li>area: match by client IP region;</li>
<li>asn: Match the autonomous system to which the client belongs;</li>
<li>referer: match the Referer request header;</li>
<li>ua: match the User-Agent request header;</li>
<li>url: Request URL for matching.</li>
     * @param string $Operator Match method of the rule. Valid values:
<li> match: match, suitable for MatchFrom as ip;</li>
<li> not_match: Not match, suitable for when MatchFrom is ip;</li>
<li> include_area: region inclusion, suitable for MatchFrom as area;</li>
<li> not_include_area: Regions excluded, applicable to MatchFrom as area;</li>
<li> asn_match: ASN contains, suitable for MatchFrom as asn;</li>
<li> asn_not_match: ASN not contained, applicable to MatchFrom as asn;</li>
<li> equal: equal, suitable for MatchFrom being ua, referer;</li>
<li> not_equal: Not equal to, applicable to MatchFrom being ua, referer;</li>
<li> include: wildcard match, suitable for MatchFrom being ua, referer, url;</li>
<li> not_include: wildcard mismatch, suitable for MatchFrom being ua, referer;</li>
<li> is_emty: The configuration content is empty, suitable for MatchFrom being ua or referer;</li>
<li> not_exists: The configuration content does not exist. This is applicable when MatchFrom is ua or referer.</li>
     * @param integer $RuleID Rule id. Output only.
     * @param string $UpdateTime Update time. For output usage only.
     * @param string $Status Rule enablement status. Valid values:
<li>`on`: Enable;</li>
<li> off: Disabled.</li>
If the input parameter is not specified, the value defaults to `on`.
     * @param string $RuleName Rule name.
     * @param string $MatchContent Matching content. Multi-value input is supported.
<li>When entering multiple matching values, please separate them with English commas;</li>
<li>When MatchFrom is ua, multi-value input is not supported;</li>
<li>When Operator is is_empty or not_exists, the input value of this field is invalid.</li>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
