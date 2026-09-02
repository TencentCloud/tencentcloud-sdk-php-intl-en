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
 * DescribeSandboxACLRuleList request structure.
 *
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported filter items:<br>RuleID: rule ID, used for querying an individual rule<br>RuleName: search by rule name<br>Status: rule status, available values: ON (enable) / OFF (disable)<br>Level: rule level, available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)<br>RuleAction: rule action, available values: PASS (allowlist) / BLOCK (block and alarm) / MONITOR (alarm)<br>BelongAssetType: asset type, available values: HOST (host) / CONTAINER (container)</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported filter items:<br>RuleID: rule ID, used for querying an individual rule<br>RuleName: search by rule name<br>Status: rule status, available values: ON (enable) / OFF (disable)<br>Level: rule level, available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)<br>RuleAction: rule action, available values: PASS (allowlist) / BLOCK (block and alarm) / MONITOR (alarm)<br>BelongAssetType: asset type, available values: HOST (host) / CONTAINER (container)</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 */
class DescribeSandboxACLRuleListRequest extends AbstractModel
{
    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported filter items:<br>RuleID: rule ID, used for querying an individual rule<br>RuleName: search by rule name<br>Status: rule status, available values: ON (enable) / OFF (disable)<br>Level: rule level, available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)<br>RuleAction: rule action, available values: PASS (allowlist) / BLOCK (block and alarm) / MONITOR (alarm)<br>BelongAssetType: asset type, available values: HOST (host) / CONTAINER (container)</p>
     */
    public $Filters;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
     * @param array $Filters <p>Filter criteria<br>Supported filter items:<br>RuleID: rule ID, used for querying an individual rule<br>RuleName: search by rule name<br>Status: rule status, available values: ON (enable) / OFF (disable)<br>Level: rule level, available values: INFO (notification) / LOW (low risk) / MEDIUM (medium risk) / HIGH (high risk) / CRITICAL (critical)<br>RuleAction: rule action, available values: PASS (allowlist) / BLOCK (block and alarm) / MONITOR (alarm)<br>BelongAssetType: asset type, available values: HOST (host) / CONTAINER (container)</p>
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
