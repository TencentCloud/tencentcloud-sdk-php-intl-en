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
 * CreateAuditRuleTemplate request structure.
 *
 * @method array getRuleFilters() Obtain Audit rule.
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule.
 * @method string getRuleTemplateName() Obtain Rule template name. Up to 30 characters are allowed.
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name. Up to 30 characters are allowed.
 * @method string getDescription() Obtain Rule template description. Up to 200 characters are allowed.
 * @method void setDescription(string $Description) Set Rule template description. Up to 200 characters are allowed.
 * @method integer getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk. Default value: 1.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk. Default value: 1.
 * @method integer getAlarmPolicy() Obtain Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled. Default value: 0.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled. Default value: 0.
 */
class CreateAuditRuleTemplateRequest extends AbstractModel
{
    /**
     * @var array Audit rule.
     */
    public $RuleFilters;

    /**
     * @var string Rule template name. Up to 30 characters are allowed.
     */
    public $RuleTemplateName;

    /**
     * @var string Rule template description. Up to 200 characters are allowed.
     */
    public $Description;

    /**
     * @var integer Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk. Default value: 1.
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled. Default value: 0.
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleFilters Audit rule.
     * @param string $RuleTemplateName Rule template name. Up to 30 characters are allowed.
     * @param string $Description Rule template description. Up to 200 characters are allowed.
     * @param integer $AlarmLevel Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk. Default value: 1.
     * @param integer $AlarmPolicy Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled. Default value: 0.
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
