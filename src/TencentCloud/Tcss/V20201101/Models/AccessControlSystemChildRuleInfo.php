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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container runtime security - Information of the sub-policy of the preset access control policy
 *
 * @method string getRuleId() Obtain Sub-policy ID
 * @method void setRuleId(string $RuleId) Set Sub-policy ID
 * @method string getRuleMode() Obtain Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method void setRuleMode(string $RuleMode) Set Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method boolean getIsEnable() Obtain Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
 * @method void setIsEnable(boolean $IsEnable) Set Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
 * @method string getRuleType() Obtain Intrusion behavior type detected by the sub-policy
`CHANGE_CRONTAB`: Tampering with the scheduled task.
`CHANGE_SYS_BIN`: Tampering with the system program.
`CHANGE_USRCFG`: Tampering with user configuration.
 * @method void setRuleType(string $RuleType) Set Intrusion behavior type detected by the sub-policy
`CHANGE_CRONTAB`: Tampering with the scheduled task.
`CHANGE_SYS_BIN`: Tampering with the system program.
`CHANGE_USRCFG`: Tampering with user configuration.
 */
class AccessControlSystemChildRuleInfo extends AbstractModel
{
    /**
     * @var string Sub-policy ID
     */
    public $RuleId;

    /**
     * @var string Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     */
    public $RuleMode;

    /**
     * @var boolean Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
     */
    public $IsEnable;

    /**
     * @var string Intrusion behavior type detected by the sub-policy
`CHANGE_CRONTAB`: Tampering with the scheduled task.
`CHANGE_SYS_BIN`: Tampering with the system program.
`CHANGE_USRCFG`: Tampering with user configuration.
     */
    public $RuleType;

    /**
     * @param string $RuleId Sub-policy ID
     * @param string $RuleMode Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     * @param boolean $IsEnable Sub-policy status. Valid values: `true` (enabled); `false` (disabled).
     * @param string $RuleType Intrusion behavior type detected by the sub-policy
`CHANGE_CRONTAB`: Tampering with the scheduled task.
`CHANGE_SYS_BIN`: Tampering with the system program.
`CHANGE_USRCFG`: Tampering with user configuration.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
