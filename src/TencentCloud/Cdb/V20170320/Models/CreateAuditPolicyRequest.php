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
 * CreateAuditPolicy request structure.
 *
 * @method string getName() Obtain Audit policy name.
 * @method void setName(string $Name) Set Audit policy name.
 * @method string getRuleId() Obtain Audit rule ID.
 * @method void setRuleId(string $RuleId) Set Audit rule ID.
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method integer getLogExpireDay() Obtain Retention period of audit logs. Valid values:
7: seven days (a week);
30: 30 days (a month);
180: 180 days (six months);
365: 365 days (a year);
1095: 1095 days (three years);
1825: 1825 days (five years).
This parameter specifies the retention period (30 days by default) of audit logs, which is valid when you create the first audit policy for an instance. If the instance already has audit policies, this parameter is invalid, but you can use the `ModifyAuditConfig` API to modify the retention period.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Retention period of audit logs. Valid values:
7: seven days (a week);
30: 30 days (a month);
180: 180 days (six months);
365: 365 days (a year);
1095: 1095 days (three years);
1825: 1825 days (five years).
This parameter specifies the retention period (30 days by default) of audit logs, which is valid when you create the first audit policy for an instance. If the instance already has audit policies, this parameter is invalid, but you can use the `ModifyAuditConfig` API to modify the retention period.
 */
class CreateAuditPolicyRequest extends AbstractModel
{
    /**
     * @var string Audit policy name.
     */
    public $Name;

    /**
     * @var string Audit rule ID.
     */
    public $RuleId;

    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var integer Retention period of audit logs. Valid values:
7: seven days (a week);
30: 30 days (a month);
180: 180 days (six months);
365: 365 days (a year);
1095: 1095 days (three years);
1825: 1825 days (five years).
This parameter specifies the retention period (30 days by default) of audit logs, which is valid when you create the first audit policy for an instance. If the instance already has audit policies, this parameter is invalid, but you can use the `ModifyAuditConfig` API to modify the retention period.
     */
    public $LogExpireDay;

    /**
     * @param string $Name Audit policy name.
     * @param string $RuleId Audit rule ID.
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param integer $LogExpireDay Retention period of audit logs. Valid values:
7: seven days (a week);
30: 30 days (a month);
180: 180 days (six months);
365: 365 days (a year);
1095: 1095 days (three years);
1825: 1825 days (five years).
This parameter specifies the retention period (30 days by default) of audit logs, which is valid when you create the first audit policy for an instance. If the instance already has audit policies, this parameter is invalid, but you can use the `ModifyAuditConfig` API to modify the retention period.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }
    }
}
