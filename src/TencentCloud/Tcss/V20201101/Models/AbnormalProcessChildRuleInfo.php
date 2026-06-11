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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container runtime security - Sub-policy information
 *
 * @method string getProcessPath() Obtain <p>Process path.</p>
 * @method void setProcessPath(string $ProcessPath) Set <p>Process path.</p>
 * @method string getRuleMode() Obtain <p>Policy mode: RULE_MODE_RELEASE: allow<br>   RULE_MODE_ALERT: alarm<br>   RULE_MODE_HOLDUP: block</p>
 * @method void setRuleMode(string $RuleMode) Set <p>Policy mode: RULE_MODE_RELEASE: allow<br>   RULE_MODE_ALERT: alarm<br>   RULE_MODE_HOLDUP: block</p>
 * @method string getCmdLine() Obtain <p>Command line parameters.</p>
 * @method void setCmdLine(string $CmdLine) Set <p>Command line parameters.</p>
 * @method string getRuleId() Obtain <p>Sub-policy ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Sub-policy ID.</p>
 * @method string getRuleLevel() Obtain <p>Threat level: HIGH, MIDDLE, and LOW.</p>
 * @method void setRuleLevel(string $RuleLevel) Set <p>Threat level: HIGH, MIDDLE, and LOW.</p>
 */
class AbnormalProcessChildRuleInfo extends AbstractModel
{
    /**
     * @var string <p>Process path.</p>
     */
    public $ProcessPath;

    /**
     * @var string <p>Policy mode: RULE_MODE_RELEASE: allow<br>   RULE_MODE_ALERT: alarm<br>   RULE_MODE_HOLDUP: block</p>
     */
    public $RuleMode;

    /**
     * @var string <p>Command line parameters.</p>
     */
    public $CmdLine;

    /**
     * @var string <p>Sub-policy ID.</p>
     */
    public $RuleId;

    /**
     * @var string <p>Threat level: HIGH, MIDDLE, and LOW.</p>
     */
    public $RuleLevel;

    /**
     * @param string $ProcessPath <p>Process path.</p>
     * @param string $RuleMode <p>Policy mode: RULE_MODE_RELEASE: allow<br>   RULE_MODE_ALERT: alarm<br>   RULE_MODE_HOLDUP: block</p>
     * @param string $CmdLine <p>Command line parameters.</p>
     * @param string $RuleId <p>Sub-policy ID.</p>
     * @param string $RuleLevel <p>Threat level: HIGH, MIDDLE, and LOW.</p>
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
        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("RuleMode",$param) and $param["RuleMode"] !== null) {
            $this->RuleMode = $param["RuleMode"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }
    }
}
