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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRemediationExecutions request structure.
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method integer getLimit() Obtain Number of items per page. Default value: 20; value range: 1–200.
 * @method void setLimit(integer $Limit) Set Number of items per page. Default value: 20; value range: 1–200.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getExecutionStatus() Obtain Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
 * @method void setExecutionStatus(integer $ExecutionStatus) Set Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
 */
class ListRemediationExecutionsRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var integer Number of items per page. Default value: 20; value range: 1–200.
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
     */
    public $ExecutionStatus;

    /**
     * @param string $RuleId Rule ID
     * @param integer $Limit Number of items per page. Default value: 20; value range: 1–200.
     * @param integer $Offset Pagination offset.
     * @param integer $ExecutionStatus Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ExecutionStatus",$param) and $param["ExecutionStatus"] !== null) {
            $this->ExecutionStatus = $param["ExecutionStatus"];
        }
    }
}
