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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditRuleTemplateModifyHistory request structure.
 *
 * @method array getRuleTemplateIds() Obtain Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 * @method string getStartTime() Obtain Start time of the query range.
 * @method void setStartTime(string $StartTime) Set Start time of the query range.
 * @method string getEndTime() Obtain End time of the query range.
 * @method void setEndTime(string $EndTime) Set End time of the query range.
 * @method integer getLimit() Obtain Number of entries to return. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of entries to return. Default value: 20. Maximum value: 1000.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getOrder() Obtain Sort order. DESC - Sorted by modification time in descending order, ASC - Ascending order. Default value: DESC.
 * @method void setOrder(string $Order) Set Sort order. DESC - Sorted by modification time in descending order, ASC - Ascending order. Default value: DESC.
 */
class DescribeAuditRuleTemplateModifyHistoryRequest extends AbstractModel
{
    /**
     * @var array Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
     */
    public $RuleTemplateIds;

    /**
     * @var string Start time of the query range.
     */
    public $StartTime;

    /**
     * @var string End time of the query range.
     */
    public $EndTime;

    /**
     * @var integer Number of entries to return. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Sort order. DESC - Sorted by modification time in descending order, ASC - Ascending order. Default value: DESC.
     */
    public $Order;

    /**
     * @param array $RuleTemplateIds Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
     * @param string $StartTime Start time of the query range.
     * @param string $EndTime End time of the query range.
     * @param integer $Limit Number of entries to return. Default value: 20. Maximum value: 1000.
     * @param integer $Offset Offset.
     * @param string $Order Sort order. DESC - Sorted by modification time in descending order, ASC - Ascending order. Default value: DESC.
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
        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
