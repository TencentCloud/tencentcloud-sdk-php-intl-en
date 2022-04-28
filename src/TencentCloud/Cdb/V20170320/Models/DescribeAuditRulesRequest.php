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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditRules request structure.
 *
 * @method string getRuleId() Obtain Audit rule ID.
 * @method void setRuleId(string $RuleId) Set Audit rule ID.
 * @method string getRuleName() Obtain Audit rule name. Fuzzy match query is supported.
 * @method void setRuleName(string $RuleName) Set Audit rule name. Fuzzy match query is supported.
 * @method integer getLimit() Obtain Number of entries per page. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: 1-100. Default value: 20.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0
 */
class DescribeAuditRulesRequest extends AbstractModel
{
    /**
     * @var string Audit rule ID.
     */
    public $RuleId;

    /**
     * @var string Audit rule name. Fuzzy match query is supported.
     */
    public $RuleName;

    /**
     * @var integer Number of entries per page. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Pagination offset. Default value: 0
     */
    public $Offset;

    /**
     * @param string $RuleId Audit rule ID.
     * @param string $RuleName Audit rule name. Fuzzy match query is supported.
     * @param integer $Limit Number of entries per page. Value range: 1-100. Default value: 20.
     * @param integer $Offset Pagination offset. Default value: 0
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
