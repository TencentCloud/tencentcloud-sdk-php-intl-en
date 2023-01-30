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
 * Container runtime security - Information of the access control sub-policy
 *
 * @method string getRuleMode() Obtain Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method void setRuleMode(string $RuleMode) Set Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getTargetFilePath() Obtain Accessed file path, which is valid only for access control.
 * @method void setTargetFilePath(string $TargetFilePath) Set Accessed file path, which is valid only for access control.
 * @method string getRuleId() Obtain Sub-policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(string $RuleId) Set Sub-policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AccessControlChildRuleInfo extends AbstractModel
{
    /**
     * @var string Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     */
    public $RuleMode;

    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Accessed file path, which is valid only for access control.
     */
    public $TargetFilePath;

    /**
     * @var string Sub-policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @param string $RuleMode Policy mode. `RULE_MODE_RELEASE`: Allow.
   `RULE_MODE_ALERT`: Alert.
   `RULE_MODE_HOLDUP`: Block.
     * @param string $ProcessPath Process path
     * @param string $TargetFilePath Accessed file path, which is valid only for access control.
     * @param string $RuleId Sub-policy ID
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
        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("TargetFilePath",$param) and $param["TargetFilePath"] !== null) {
            $this->TargetFilePath = $param["TargetFilePath"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
