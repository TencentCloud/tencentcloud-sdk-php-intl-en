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
 * Audit rule details of the instance, which is an output parameter of the `DescribeAuditRuleWithInstanceIds` API.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method boolean getAuditRule() Obtain Specifies whether it is a rule-based audit. true - rule-based audit; false - comprehensive audit.
 * @method void setAuditRule(boolean $AuditRule) Set Specifies whether it is a rule-based audit. true - rule-based audit; false - comprehensive audit.
 * @method array getAuditRuleFilters() Obtain Specifies the audit rule details. valid when AuditRule=true.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Specifies the audit rule details. valid when AuditRule=true.
 * @method boolean getOldRule() Obtain Whether it is an audit policy.
 * @method void setOldRule(boolean $OldRule) Set Whether it is an audit policy.
 * @method array getRuleTemplates() Obtain The rule template details of the instance application.
 * @method void setRuleTemplates(array $RuleTemplates) Set The rule template details of the instance application.
 */
class InstanceAuditRule extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var boolean Specifies whether it is a rule-based audit. true - rule-based audit; false - comprehensive audit.
     */
    public $AuditRule;

    /**
     * @var array Specifies the audit rule details. valid when AuditRule=true.
     */
    public $AuditRuleFilters;

    /**
     * @var boolean Whether it is an audit policy.
     */
    public $OldRule;

    /**
     * @var array The rule template details of the instance application.
     */
    public $RuleTemplates;

    /**
     * @param string $InstanceId Instance ID.
     * @param boolean $AuditRule Specifies whether it is a rule-based audit. true - rule-based audit; false - comprehensive audit.
     * @param array $AuditRuleFilters Specifies the audit rule details. valid when AuditRule=true.
     * @param boolean $OldRule Whether it is an audit policy.
     * @param array $RuleTemplates The rule template details of the instance application.
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
