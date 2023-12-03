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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenAuditService request structure.
 *
 * @method string getInstanceId() Obtain TencentDB for MySQL instance ID
 * @method void setInstanceId(string $InstanceId) Set TencentDB for MySQL instance ID
 * @method integer getLogExpireDay() Obtain Retention period of the audit log. Valid values:  `7` (one week), `30` (one month), `90` (three months), `180` (six months), `365` (one year), `1095` (three years), `1825` (five years).
 * @method void setLogExpireDay(integer $LogExpireDay) Set Retention period of the audit log. Valid values:  `7` (one week), `30` (one month), `90` (three months), `180` (six months), `365` (one year), `1095` (three years), `1825` (five years).
 * @method integer getHighLogExpireDay() Obtain Retention period of high-frequency audit logs. Valid values:  `7` (one week), `30` (one month).
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set Retention period of high-frequency audit logs. Valid values:  `7` (one week), `30` (one month).
 * @method array getAuditRuleFilters() Obtain Audit rule If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Audit rule If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
 * @method array getRuleTemplateIds() Obtain Rule template ID. If both this parameter and AuditRuleFilters are not specified, all SQL statements will be recorded.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID. If both this parameter and AuditRuleFilters are not specified, all SQL statements will be recorded.
 * @method boolean getAuditAll() Obtain Audit type. Valid values: true: Record all; false: Record by rules (default value).
 * @method void setAuditAll(boolean $AuditAll) Set Audit type. Valid values: true: Record all; false: Record by rules (default value).
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string TencentDB for MySQL instance ID
     */
    public $InstanceId;

    /**
     * @var integer Retention period of the audit log. Valid values:  `7` (one week), `30` (one month), `90` (three months), `180` (six months), `365` (one year), `1095` (three years), `1825` (five years).
     */
    public $LogExpireDay;

    /**
     * @var integer Retention period of high-frequency audit logs. Valid values:  `7` (one week), `30` (one month).
     */
    public $HighLogExpireDay;

    /**
     * @var array Audit rule If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
     */
    public $AuditRuleFilters;

    /**
     * @var array Rule template ID. If both this parameter and AuditRuleFilters are not specified, all SQL statements will be recorded.
     */
    public $RuleTemplateIds;

    /**
     * @var boolean Audit type. Valid values: true: Record all; false: Record by rules (default value).
     */
    public $AuditAll;

    /**
     * @param string $InstanceId TencentDB for MySQL instance ID
     * @param integer $LogExpireDay Retention period of the audit log. Valid values:  `7` (one week), `30` (one month), `90` (three months), `180` (six months), `365` (one year), `1095` (three years), `1825` (five years).
     * @param integer $HighLogExpireDay Retention period of high-frequency audit logs. Valid values:  `7` (one week), `30` (one month).
     * @param array $AuditRuleFilters Audit rule If both this parameter and `RuleTemplateIds` are left empty, full audit will be applied.
     * @param array $RuleTemplateIds Rule template ID. If both this parameter and AuditRuleFilters are not specified, all SQL statements will be recorded.
     * @param boolean $AuditAll Audit type. Valid values: true: Record all; false: Record by rules (default value).
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

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
