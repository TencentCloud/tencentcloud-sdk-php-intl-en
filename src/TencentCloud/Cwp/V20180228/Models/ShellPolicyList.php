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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reverse shell list data details.
 *
 * @method integer getPolicyId() Obtain Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyName() Obtain Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicyType() Obtain 0: system policy, 1: custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyType(integer $PolicyType) Set 0: system policy, 1: custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyDesc() Obtain Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyDesc(string $PolicyDesc) Set Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicyAction() Obtain Policy action [0: alarm; 1: allow; 2:intercept + alarm]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyAction(integer $PolicyAction) Set Policy action [0: alarm; 1: allow; 2:intercept + alarm]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsEnabled() Obtain 0: enabled, 1: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEnabled(integer $IsEnabled) Set 0: enabled, 1: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostScope() Obtain Host range. [0: a group of QUuids, 1: all Pro edition hosts, 2: Premium edition, 3: all hosts.]
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostScope(integer $HostScope) Set Host range. [0: a group of QUuids, 1: all Pro edition hosts, 2: Premium edition, 3: all hosts.]
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShellPolicyList extends AbstractModel
{
    /**
     * @var integer Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @var integer 0: system policy, 1: custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyType;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyDesc;

    /**
     * @var integer Policy action [0: alarm; 1: allow; 2:intercept + alarm]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyAction;

    /**
     * @var integer 0: enabled, 1: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsEnabled;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Host range. [0: a group of QUuids, 1: all Pro edition hosts, 2: Premium edition, 3: all hosts.]
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostScope;

    /**
     * @param integer $PolicyId Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyName Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PolicyType 0: system policy, 1: custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyDesc Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PolicyAction Policy action [0: alarm; 1: allow; 2:intercept + alarm]
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsEnabled 0: enabled, 1: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostScope Host range. [0: a group of QUuids, 1: all Pro edition hosts, 2: Premium edition, 3: all hosts.]
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyDesc",$param) and $param["PolicyDesc"] !== null) {
            $this->PolicyDesc = $param["PolicyDesc"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostScope",$param) and $param["HostScope"] !== null) {
            $this->HostScope = $param["HostScope"];
        }
    }
}
