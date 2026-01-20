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
 * Details of an audit rule template.
 *
 * @method string getRuleTemplateId() Obtain Rule template ID.
 * @method void setRuleTemplateId(string $RuleTemplateId) Set Rule template ID.
 * @method string getRuleTemplateName() Obtain Rule template name.
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name.
 * @method array getRuleFilters() Obtain Filter conditions of the rule template.
 * @method void setRuleFilters(array $RuleFilters) Set Filter conditions of the rule template.
 * @method string getDescription() Obtain Rule template description.
 * @method void setDescription(string $Description) Set Rule template description.
 * @method string getCreateAt() Obtain Rule template creation time.
 * @method void setCreateAt(string $CreateAt) Set Rule template creation time.
 * @method integer getAlarmLevel() Obtain Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
 * @method integer getAlarmPolicy() Obtain Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
 * @method array getAffectedInstances() Obtain Instances to which this rule template is applied.
 * @method void setAffectedInstances(array $AffectedInstances) Set Instances to which this rule template is applied.
 * @method integer getStatus() Obtain Template status. Valid values: 0 - No task, 1 - modifying.
 * @method void setStatus(integer $Status) Set Template status. Valid values: 0 - No task, 1 - modifying.
 * @method string getUpdateAt() Obtain Template update time.
 * @method void setUpdateAt(string $UpdateAt) Set Template update time.
 */
class AuditRuleTemplateInfo extends AbstractModel
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
     * @var array Filter conditions of the rule template.
     */
    public $RuleFilters;

    /**
     * @var string Rule template description.
     */
    public $Description;

    /**
     * @var string Rule template creation time.
     */
    public $CreateAt;

    /**
     * @var integer Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     */
    public $AlarmPolicy;

    /**
     * @var array Instances to which this rule template is applied.
     */
    public $AffectedInstances;

    /**
     * @var integer Template status. Valid values: 0 - No task, 1 - modifying.
     */
    public $Status;

    /**
     * @var string Template update time.
     */
    public $UpdateAt;

    /**
     * @param string $RuleTemplateId Rule template ID.
     * @param string $RuleTemplateName Rule template name.
     * @param array $RuleFilters Filter conditions of the rule template.
     * @param string $Description Rule template description.
     * @param string $CreateAt Rule template creation time.
     * @param integer $AlarmLevel Alarm level. Valid values: 1 - Low risk, 2 - Medium risk, 3 - High risk.
     * @param integer $AlarmPolicy Alarm policy. Valid values: 0 - Alarm disabled, 1 - Alarm enabled.
     * @param array $AffectedInstances Instances to which this rule template is applied.
     * @param integer $Status Template status. Valid values: 0 - No task, 1 - modifying.
     * @param string $UpdateAt Template update time.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("AffectedInstances",$param) and $param["AffectedInstances"] !== null) {
            $this->AffectedInstances = $param["AffectedInstances"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
