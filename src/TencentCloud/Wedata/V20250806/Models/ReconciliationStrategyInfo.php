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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Offline integration reconciliation Alarm rule.
 *
 * @method string getRuleType() Obtain Offline Integration Task Reconciliation Alarms

reconciliationFailure: Alarm when offline reconciliation task fails

reconciliationOvertime: Alarm when offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method void setRuleType(string $RuleType) Set Offline Integration Task Reconciliation Alarms

reconciliationFailure: Alarm when offline reconciliation task fails

reconciliationOvertime: Alarm when offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
 * @method integer getMismatchCount() Obtain Reconciliation Mismatch Threshold - Required when RuleType = reconciliationMismatch. Specifies the threshold for the number of mismatched records in reconciliation. No default value.
 * @method void setMismatchCount(integer $MismatchCount) Set Reconciliation Mismatch Threshold - Required when RuleType = reconciliationMismatch. Specifies the threshold for the number of mismatched records in reconciliation. No default value.
 * @method integer getHour() Obtain Task run timeout threshold for reconciliation: hr, defaults to 0.
 * @method void setHour(integer $Hour) Set Task run timeout threshold for reconciliation: hr, defaults to 0.
 * @method integer getMin() Obtain Reconciliation task timeout threshold: minutes, defaults to 1.
 * @method void setMin(integer $Min) Set Reconciliation task timeout threshold: minutes, defaults to 1.
 */
class ReconciliationStrategyInfo extends AbstractModel
{
    /**
     * @var string Offline Integration Task Reconciliation Alarms

reconciliationFailure: Alarm when offline reconciliation task fails

reconciliationOvertime: Alarm when offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     */
    public $RuleType;

    /**
     * @var integer Reconciliation Mismatch Threshold - Required when RuleType = reconciliationMismatch. Specifies the threshold for the number of mismatched records in reconciliation. No default value.
     */
    public $MismatchCount;

    /**
     * @var integer Task run timeout threshold for reconciliation: hr, defaults to 0.
     */
    public $Hour;

    /**
     * @var integer Reconciliation task timeout threshold: minutes, defaults to 1.
     */
    public $Min;

    /**
     * @param string $RuleType Offline Integration Task Reconciliation Alarms

reconciliationFailure: Alarm when offline reconciliation task fails

reconciliationOvertime: Alarm when offline reconciliation task runs overtime

reconciliationMismatch: Alarm when the number of mismatched records in reconciliation exceeds the threshold
     * @param integer $MismatchCount Reconciliation Mismatch Threshold - Required when RuleType = reconciliationMismatch. Specifies the threshold for the number of mismatched records in reconciliation. No default value.
     * @param integer $Hour Task run timeout threshold for reconciliation: hr, defaults to 0.
     * @param integer $Min Reconciliation task timeout threshold: minutes, defaults to 1.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MismatchCount",$param) and $param["MismatchCount"] !== null) {
            $this->MismatchCount = $param["MismatchCount"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }
    }
}
