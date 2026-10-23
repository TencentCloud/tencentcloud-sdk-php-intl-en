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
 * Audit rule details of the instance.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method boolean getAuditRule() Obtain Whether it is rule audit. true - Rule audit, false - Full audit.
 * @method void setAuditRule(boolean $AuditRule) Set Whether it is rule audit. true - Rule audit, false - Full audit.
 * @method array getAuditRuleFilters() Obtain Audit rule details. Valid only when AuditRule=true.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Audit rule details. Valid only when AuditRule=true.
 * @method boolean getOldRule() Obtain Whether it is an audit policy.
 * @method void setOldRule(boolean $OldRule) Set Whether it is an audit policy.
 * @method array getRuleTemplates() Obtain Description of the rule template applied to the instance.
 * @method void setRuleTemplates(array $RuleTemplates) Set Description of the rule template applied to the instance.
 */
class InstanceAuditRule extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var boolean Whether it is rule audit. true - Rule audit, false - Full audit.
     */
    public $AuditRule;

    /**
     * @var array Audit rule details. Valid only when AuditRule=true.
     */
    public $AuditRuleFilters;

    /**
     * @var boolean Whether it is an audit policy.
     */
    public $OldRule;

    /**
     * @var array Description of the rule template applied to the instance.
     */
    public $RuleTemplates;

    /**
     * @param string $InstanceId Instance ID.
     * @param boolean $AuditRule Whether it is rule audit. true - Rule audit, false - Full audit.
     * @param array $AuditRuleFilters Audit rule details. Valid only when AuditRule=true.
     * @param boolean $OldRule Whether it is an audit policy.
     * @param array $RuleTemplates Description of the rule template applied to the instance.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditRule",$param) and $param["AuditRule"] !== null) {
            $this->AuditRule = $param["AuditRule"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }

        if (array_key_exists("OldRule",$param) and $param["OldRule"] !== null) {
            $this->OldRule = $param["OldRule"];
        }

        if (array_key_exists("RuleTemplates",$param) and $param["RuleTemplates"] !== null) {
            $this->RuleTemplates = [];
            foreach ($param["RuleTemplates"] as $key => $value){
                $obj = new RuleTemplateInfo();
                $obj->deserialize($value);
                array_push($this->RuleTemplates, $obj);
            }
        }
    }
}
