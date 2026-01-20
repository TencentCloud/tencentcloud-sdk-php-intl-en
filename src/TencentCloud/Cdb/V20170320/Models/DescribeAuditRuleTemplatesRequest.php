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
 * DescribeAuditRuleTemplates request structure.
 *
 * @method array getRuleTemplateIds() Obtain Rule template ID.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID.
 * @method array getRuleTemplateNames() Obtain Rule template name.
 * @method void setRuleTemplateNames(array $RuleTemplateNames) Set Rule template name.
 * @method integer getLimit() Obtain Number of entries to return per request. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of entries to return per request. Default value: 20. Maximum value: 1000.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method integer getAlarmPolicy() Obtain Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 */
class DescribeAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array Rule template ID.
     */
    public $RuleTemplateIds;

    /**
     * @var array Rule template name.
     */
    public $RuleTemplateNames;

    /**
     * @var integer Number of entries to return per request. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleTemplateIds Rule template ID.
     * @param array $RuleTemplateNames Rule template name.
     * @param integer $Limit Number of entries to return per request. Default value: 20. Maximum value: 1000.
     * @param integer $Offset Offset. Default value: 0.
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

        if (array_key_exists("RuleTemplateNames",$param) and $param["RuleTemplateNames"] !== null) {
            $this->RuleTemplateNames = $param["RuleTemplateNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }
    }
}
