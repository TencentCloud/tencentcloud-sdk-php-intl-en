<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Details of an audit rule template
 *
 * @method string getRuleTemplateId() Obtain Rule template ID
 * @method void setRuleTemplateId(string $RuleTemplateId) Set Rule template ID
 * @method string getRuleTemplateName() Obtain Rule template name
 * @method void setRuleTemplateName(string $RuleTemplateName) Set Rule template name
 * @method array getRuleFilters() Obtain Filter of the rule template
 * @method void setRuleFilters(array $RuleFilters) Set Filter of the rule template
 * @method string getDescription() Obtain Rule template description.
 * @method void setDescription(string $Description) Set Rule template description.
 * @method string getCreateAt() Obtain Creation time of a rule template
 * @method void setCreateAt(string $CreateAt) Set Creation time of a rule template
 * @method string getUpdateAt() Obtain Rule template modification time.
 * @method void setUpdateAt(string $UpdateAt) Set Rule template modification time.
 * @method integer getAlarmLevel() Obtain Alarm level. valid values: 1 (low risk), 2 (medium risk), 3 (high risk).
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. valid values: 1 (low risk), 2 (medium risk), 3 (high risk).
 * @method integer getAlarmPolicy() Obtain Alarm policy. 0 - no alert, 1 - alert.
 * @method void setAlarmPolicy(integer $AlarmPolicy) Set Alarm policy. 0 - no alert, 1 - alert.
 * @method integer getStatus() Obtain Template status. 0 - no task, 1 - modifying.
 * @method void setStatus(integer $Status) Set Template status. 0 - no task, 1 - modifying.
 * @method array getAffectedInstances() Obtain Template application is used in which instances.
 * @method void setAffectedInstances(array $AffectedInstances) Set Template application is used in which instances.
 */
class AuditRuleTemplateInfo extends AbstractModel
{
    /**
     * @var string Rule template ID
     */
    public $RuleTemplateId;

    /**
     * @var string Rule template name
     */
    public $RuleTemplateName;

    /**
     * @var array Filter of the rule template
     */
    public $RuleFilters;

    /**
     * @var string Rule template description.
     */
    public $Description;

    /**
     * @var string Creation time of a rule template
     */
    public $CreateAt;

    /**
     * @var string Rule template modification time.
     */
    public $UpdateAt;

    /**
     * @var integer Alarm level. valid values: 1 (low risk), 2 (medium risk), 3 (high risk).
     */
    public $AlarmLevel;

    /**
     * @var integer Alarm policy. 0 - no alert, 1 - alert.
     */
    public $AlarmPolicy;

    /**
     * @var integer Template status. 0 - no task, 1 - modifying.
     */
    public $Status;

    /**
     * @var array Template application is used in which instances.
     */
    public $AffectedInstances;

    /**
     * @param string $RuleTemplateId Rule template ID
     * @param string $RuleTemplateName Rule template name
     * @param array $RuleFilters Filter of the rule template
     * @param string $Description Rule template description.
     * @param string $CreateAt Creation time of a rule template
     * @param string $UpdateAt Rule template modification time.
     * @param integer $AlarmLevel Alarm level. valid values: 1 (low risk), 2 (medium risk), 3 (high risk).
     * @param integer $AlarmPolicy Alarm policy. 0 - no alert, 1 - alert.
     * @param integer $Status Template status. 0 - no task, 1 - modifying.
     * @param array $AffectedInstances Template application is used in which instances.
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

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AffectedInstances",$param) and $param["AffectedInstances"] !== null) {
            $this->AffectedInstances = $param["AffectedInstances"];
        }
    }
}
