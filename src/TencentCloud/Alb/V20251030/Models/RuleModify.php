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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding rule modification information
 *
 * @method array getActions() Obtain Action list of the forwarding rule.
 * @method void setActions(array $Actions) Set Action list of the forwarding rule.
 * @method array getConditions() Obtain List of forward rule conditions.
 * @method void setConditions(array $Conditions) Set List of forward rule conditions.
 * @method integer getPriority() Obtain Priority. A smaller value indicates higher priority. Value range: 1-10000.
 * @method void setPriority(integer $Priority) Set Priority. A smaller value indicates higher priority. Value range: 1-10000.
 * @method string getRuleId() Obtain Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
 * @method string getRuleName() Obtain Forwarding rule name.
 * @method void setRuleName(string $RuleName) Set Forwarding rule name.
 */
class RuleModify extends AbstractModel
{
    /**
     * @var array Action list of the forwarding rule.
     */
    public $Actions;

    /**
     * @var array List of forward rule conditions.
     */
    public $Conditions;

    /**
     * @var integer Priority. A smaller value indicates higher priority. Value range: 1-10000.
     */
    public $Priority;

    /**
     * @var string Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
     */
    public $RuleId;

    /**
     * @var string Forwarding rule name.
     */
    public $RuleName;

    /**
     * @param array $Actions Action list of the forwarding rule.
     * @param array $Conditions List of forward rule conditions.
     * @param integer $Priority Priority. A smaller value indicates higher priority. Value range: 1-10000.
     * @param string $RuleId Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
     * @param string $RuleName Forwarding rule name.
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
        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
