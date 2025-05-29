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
 * OpenAuditService request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getLogExpireDay() Obtain Log retention period
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period
 * @method integer getHighLogExpireDay() Obtain Frequent log retention period
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set Frequent log retention period
 * @method array getAuditRuleFilters() Obtain Audit rule. If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Audit rule. If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
 * @method array getRuleTemplateIds() Obtain Rule template ID. If both this parameter and `AuditRuleFilters` are left empty, full audit will be applied.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID. If both this parameter and `AuditRuleFilters` are left empty, full audit will be applied.
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Log retention period
     */
    public $LogExpireDay;

    /**
     * @var integer Frequent log retention period
     */
    public $HighLogExpireDay;

    /**
     * @var array Audit rule. If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
     * @deprecated
     */
    public $AuditRuleFilters;

    /**
     * @var array Rule template ID. If both this parameter and `AuditRuleFilters` are left empty, full audit will be applied.
     */
    public $RuleTemplateIds;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $LogExpireDay Log retention period
     * @param integer $HighLogExpireDay Frequent log retention period
     * @param array $AuditRuleFilters Audit rule. If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
     * @param array $RuleTemplateIds Rule template ID. If both this parameter and `AuditRuleFilters` are left empty, full audit will be applied.
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

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }
    }
}
