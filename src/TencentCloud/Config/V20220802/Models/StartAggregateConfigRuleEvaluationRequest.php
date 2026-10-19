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
 * StartAggregateConfigRuleEvaluation request structure.
 *
 * @method string getTriggerType() Obtain Valid values: MANUAL (manual triggering) and SCHEDULE (periodic triggering).
 * @method void setTriggerType(string $TriggerType) Set Valid values: MANUAL (manual triggering) and SCHEDULE (periodic triggering).
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getCompliancePackId() Obtain Compliance package ID.
 * @method void setCompliancePackId(string $CompliancePackId) Set Compliance package ID.
 */
class StartAggregateConfigRuleEvaluationRequest extends AbstractModel
{
    /**
     * @var string Valid values: MANUAL (manual triggering) and SCHEDULE (periodic triggering).
     */
    public $TriggerType;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Compliance package ID.
     */
    public $CompliancePackId;

    /**
     * @param string $TriggerType Valid values: MANUAL (manual triggering) and SCHEDULE (periodic triggering).
     * @param string $AccountGroupId Account group ID.
     * @param string $RuleId Rule ID
     * @param string $CompliancePackId Compliance package ID.
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
        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }
    }
}
