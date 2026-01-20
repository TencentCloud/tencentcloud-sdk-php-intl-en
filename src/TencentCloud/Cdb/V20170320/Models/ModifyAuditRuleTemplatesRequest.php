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
 * ModifyAuditRuleTemplates request structure.
 *
 * @method array getRuleTemplateIds() Obtain Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 * @method array getRuleFilters() Obtain Modified audit rule.
 * @method void setRuleFilters(array $RuleFilters) Set Modified audit rule.
 * @method string getRuleTemplateName() Obtain Modified rule template name.
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Modified rule template name.
 * @method string getDescription() Obtain Modified rule template description.
 * @method void setDescription(string $Description) Set Modified rule template description.
 * @method integer getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method integer getAlarmPolicy() Obtain Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 */
class ModifyAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
     */
    public $RuleTemplateIds;

    /**
     * @var array Modified audit rule.
     */
    public $RuleFilters;

    /**
     * @var string Modified rule template name.
     */
    public $RuleTemplateName;

    /**
     * @var string Modified rule template description.
     */
    public $Description;

    /**
     * @var integer Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleTemplateIds Audit rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
     * @param array $RuleFilters Modified audit rule.
     * @param string $RuleTemplateName Modified rule template name.
     * @param string $Description Modified rule template description.
     * @param integer $AlarmLevel Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     * @param integer $AlarmPolicy Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
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
