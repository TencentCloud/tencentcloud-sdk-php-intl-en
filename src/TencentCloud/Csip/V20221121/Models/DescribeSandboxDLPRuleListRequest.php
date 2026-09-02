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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSandboxDLPRuleList request structure.
 *
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of items per page. Default: 10. Upper limit: 200.
 * @method void setLimit(integer $Limit) Set Number of items per page. Default: 10. Upper limit: 200.
 * @method array getFilters() Obtain Filter criteria.
Supported filter items:
RuleID: Rule ID, used for querying an individual rule.
RuleName: Search by rule name
Status: Rule status. Available values: ON (Enable) / OFF (Disable)
Level: Rule level. Available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)
RuleAction: Rule action. Available values: PASS (Allowlist) / BLOCK (Block and alarm) / MONITOR (Alarm)
BelongAssetType: The asset type to which it belongs. Available values: HOST (host) / CONTAINER (container)
 * @method void setFilters(array $Filters) Set Filter criteria.
Supported filter items:
RuleID: Rule ID, used for querying an individual rule.
RuleName: Search by rule name
Status: Rule status. Available values: ON (Enable) / OFF (Disable)
Level: Rule level. Available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)
RuleAction: Rule action. Available values: PASS (Allowlist) / BLOCK (Block and alarm) / MONITOR (Alarm)
BelongAssetType: The asset type to which it belongs. Available values: HOST (host) / CONTAINER (container)
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 */
class DescribeSandboxDLPRuleListRequest extends AbstractModel
{
    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. Default: 10. Upper limit: 200.
     */
    public $Limit;

    /**
     * @var array Filter criteria.
Supported filter items:
RuleID: Rule ID, used for querying an individual rule.
RuleName: Search by rule name
Status: Rule status. Available values: ON (Enable) / OFF (Disable)
Level: Rule level. Available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)
RuleAction: Rule action. Available values: PASS (Allowlist) / BLOCK (Block and alarm) / MONITOR (Alarm)
BelongAssetType: The asset type to which it belongs. Available values: HOST (host) / CONTAINER (container)
     */
    public $Filters;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of items per page. Default: 10. Upper limit: 200.
     * @param array $Filters Filter criteria.
Supported filter items:
RuleID: Rule ID, used for querying an individual rule.
RuleName: Search by rule name
Status: Rule status. Available values: ON (Enable) / OFF (Disable)
Level: Rule level. Available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)
RuleAction: Rule action. Available values: PASS (Allowlist) / BLOCK (Block and alarm) / MONITOR (Alarm)
BelongAssetType: The asset type to which it belongs. Available values: HOST (host) / CONTAINER (container)
     * @param array $MemberId <p>Group account member id.</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
