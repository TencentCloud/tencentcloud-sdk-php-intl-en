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
 * Audit Policy
 *
 * @method string getPolicyId() Obtain Audit policy ID.
 * @method void setPolicyId(string $PolicyId) Set Audit policy ID.
 * @method string getStatus() Obtain Audit policy status. Valid values:
`creating`;
`running`,
`paused`;
`failed`.
 * @method void setStatus(string $Status) Set Audit policy status. Valid values:
`creating`;
`running`,
`paused`;
`failed`.
 * @method string getInstanceId() Obtain Database instance ID
 * @method void setInstanceId(string $InstanceId) Set Database instance ID
 * @method string getCreateTime() Obtain Creation time of audit policy in the format of 2019-03-20 17:09:13
 * @method void setCreateTime(string $CreateTime) Set Creation time of audit policy in the format of 2019-03-20 17:09:13
 * @method string getModifyTime() Obtain Last modified time of audit policy in the format of 2019-03-20 17:09:13
 * @method void setModifyTime(string $ModifyTime) Set Last modified time of audit policy in the format of 2019-03-20 17:09:13
 * @method string getPolicyName() Obtain Audit policy name
 * @method void setPolicyName(string $PolicyName) Set Audit policy name
 * @method string getRuleId() Obtain Audit rule ID
 * @method void setRuleId(string $RuleId) Set Audit rule ID
 * @method string getRuleName() Obtain Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRuleName(string $RuleName) Set Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Database instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Database instance name
Note: This field may return `null`, indicating that no valid value was found.
 */
class AuditPolicy extends AbstractModel
{
    /**
     * @var string Audit policy ID.
     */
    public $PolicyId;

    /**
     * @var string Audit policy status. Valid values:
`creating`;
`running`,
`paused`;
`failed`.
     */
    public $Status;

    /**
     * @var string Database instance ID
     */
    public $InstanceId;

    /**
     * @var string Creation time of audit policy in the format of 2019-03-20 17:09:13
     */
    public $CreateTime;

    /**
     * @var string Last modified time of audit policy in the format of 2019-03-20 17:09:13
     */
    public $ModifyTime;

    /**
     * @var string Audit policy name
     */
    public $PolicyName;

    /**
     * @var string Audit rule ID
     */
    public $RuleId;

    /**
     * @var string Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RuleName;

    /**
     * @var string Database instance name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @param string $PolicyId Audit policy ID.
     * @param string $Status Audit policy status. Valid values:
`creating`;
`running`,
`paused`;
`failed`.
     * @param string $InstanceId Database instance ID
     * @param string $CreateTime Creation time of audit policy in the format of 2019-03-20 17:09:13
     * @param string $ModifyTime Last modified time of audit policy in the format of 2019-03-20 17:09:13
     * @param string $PolicyName Audit policy name
     * @param string $RuleId Audit rule ID
     * @param string $RuleName Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceName Database instance name
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
