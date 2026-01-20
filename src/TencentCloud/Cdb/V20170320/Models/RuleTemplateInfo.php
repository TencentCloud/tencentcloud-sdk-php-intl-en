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
 * Rule template content.
 *
 * @method string getRuleTemplateId() Obtain Rule template ID.
 * @method void setRuleTemplateId(string $RuleTemplateId) Set Rule template ID.
 * @method string getRuleTemplateName() Obtain Rule template name.
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name.
 * @method array getRuleFilters() Obtain Rule content.
 * @method void setRuleFilters(array $RuleFilters) Set Rule content.
 * @method integer getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method integer getAlarmPolicy() Obtain Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method string getDescription() Obtain Rule description.
 * @method void setDescription(string $Description) Set Rule description.
 */
class RuleTemplateInfo extends AbstractModel
{
    /**
     * @var string Rule template ID.
     */
    public $RuleTemplateId;

    /**
     * @var string Rule template name.
     */
    public $RuleTemplateName;

    /**
     * @var array Rule content.
     */
    public $RuleFilters;

    /**
     * @var integer Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     */
    public $AlarmPolicy;

    /**
     * @var string Rule description.
     */
    public $Description;

    /**
     * @param string $RuleTemplateId Rule template ID.
     * @param string $RuleTemplateName Rule template name.
     * @param array $RuleFilters Rule content.
     * @param integer $AlarmLevel Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     * @param integer $AlarmPolicy Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     * @param string $Description Rule description.
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
        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
