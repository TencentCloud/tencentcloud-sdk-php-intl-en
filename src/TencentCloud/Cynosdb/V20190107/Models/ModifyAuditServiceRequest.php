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
 * ModifyAuditService request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getLogExpireDay() Obtain Log retention period
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period
 * @method integer getHighLogExpireDay() Obtain Frequent log retention period
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set Frequent log retention period
 * @method boolean getAuditAll() Obtain The parameter used to change the audit rule of the instance to full audit
 * @method void setAuditAll(boolean $AuditAll) Set The parameter used to change the audit rule of the instance to full audit
 * @method array getAuditRuleFilters() Obtain Rule audit
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Rule audit
 * @method array getRuleTemplateIds() Obtain Rule template ID
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID
 */
class ModifyAuditServiceRequest extends AbstractModel
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
     * @var boolean The parameter used to change the audit rule of the instance to full audit
     */
    public $AuditAll;

    /**
     * @var array Rule audit
     */
    public $AuditRuleFilters;

    /**
     * @var array Rule template ID
     */
    public $RuleTemplateIds;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $LogExpireDay Log retention period
     * @param integer $HighLogExpireDay Frequent log retention period
     * @param boolean $AuditAll The parameter used to change the audit rule of the instance to full audit
     * @param array $AuditRuleFilters Rule audit
     * @param array $RuleTemplateIds Rule template ID
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

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
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
