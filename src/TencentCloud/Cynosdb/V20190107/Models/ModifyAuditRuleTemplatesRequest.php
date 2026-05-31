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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditRuleTemplates request structure.
 *
 * @method array getRuleTemplateIds() Obtain Audit rule template ID
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Audit rule template ID
 * @method array getRuleFilters() Obtain Audit rule after modification
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule after modification
 * @method string getRuleTemplateName() Obtain New name of the rule template
 * @method void setRuleTemplateName(string $RuleTemplateName) Set New name of the rule template
 * @method string getDescription() Obtain New description of the rule template
 * @method void setDescription(string $Description) Set New description of the rule template
 * @method integer getAlarmLevel() Obtain Alert Levels. 1 - Low Risk, 2 - Medium Risk, 3 - High Risk.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alert Levels. 1 - Low Risk, 2 - Medium Risk, 3 - High Risk.
 * @method integer getAlarmPolicy() Obtain Alert policy. 0 - No alert, 1 - Alert.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alert policy. 0 - No alert, 1 - Alert.
 */
class ModifyAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array Audit rule template ID
     */
    public $RuleTemplateIds;

    /**
     * @var array Audit rule after modification
     */
    public $RuleFilters;

    /**
     * @var string New name of the rule template
     */
    public $RuleTemplateName;

    /**
     * @var string New description of the rule template
     */
    public $Description;

    /**
     * @var integer Alert Levels. 1 - Low Risk, 2 - Medium Risk, 3 - High Risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Alert policy. 0 - No alert, 1 - Alert.
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleTemplateIds Audit rule template ID
     * @param array $RuleFilters Audit rule after modification
     * @param string $RuleTemplateName New name of the rule template
     * @param string $Description New description of the rule template
     * @param integer $AlarmLevel Alert Levels. 1 - Low Risk, 2 - Medium Risk, 3 - High Risk.
     * @param integer $AlarmPolicy Alert policy. 0 - No alert, 1 - Alert.
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

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }
    }
}
