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
 * Basic information on the rule template hit by the audit log.
 *
 * @method string getRuleTemplateId() Obtain Template ID.
 * @method void setRuleTemplateId(string $RuleTemplateId) Set Template ID.
 * @method string getRuleTemplateName() Obtain Rule template name
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name
 * @method string getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method void setAlarmLevel(string $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method integer getRuleTemplateStatus() Obtain Rule template change status. Valid values: 0 - Not changed, 1 - changed, 2 - deleted.
 * @method void setRuleTemplateStatus(integer $RuleTemplateStatus) Set Rule template change status. Valid values: 0 - Not changed, 1 - changed, 2 - deleted.
 */
class LogRuleTemplateInfo extends AbstractModel
{
    /**
     * @var string Template ID.
     */
    public $RuleTemplateId;

    /**
     * @var string Rule template name
     */
    public $RuleTemplateName;

    /**
     * @var string Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Rule template change status. Valid values: 0 - Not changed, 1 - changed, 2 - deleted.
     */
    public $RuleTemplateStatus;

    /**
     * @param string $RuleTemplateId Template ID.
     * @param string $RuleTemplateName Rule template name
     * @param string $AlarmLevel Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     * @param integer $RuleTemplateStatus Rule template change status. Valid values: 0 - Not changed, 1 - changed, 2 - deleted.
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

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("RuleTemplateStatus",$param) and $param["RuleTemplateStatus"] !== null) {
            $this->RuleTemplateStatus = $param["RuleTemplateStatus"];
        }
    }
}
