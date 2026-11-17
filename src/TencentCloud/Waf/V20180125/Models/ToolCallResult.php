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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tool_call scenario detection result
 *
 * @method string getRuleName() Obtain <p>Hit rule name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Hit rule name.</p>
 * @method string getAction() Obtain <p>Rule action</p>
 * @method void setAction(string $Action) Set <p>Rule action</p>
 * @method string getSeverity() Obtain <p>Risk level.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium</li><li>low: Low</li></ul>
 * @method void setSeverity(string $Severity) Set <p>Risk level.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium</li><li>low: Low</li></ul>
 */
class ToolCallResult extends AbstractModel
{
    /**
     * @var string <p>Hit rule name.</p>
     */
    public $RuleName;

    /**
     * @var string <p>Rule action</p>
     */
    public $Action;

    /**
     * @var string <p>Risk level.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium</li><li>low: Low</li></ul>
     */
    public $Severity;

    /**
     * @param string $RuleName <p>Hit rule name.</p>
     * @param string $Action <p>Rule action</p>
     * @param string $Severity <p>Risk level.</p><p>Valid values:</p><ul><li>critical: Critical</li><li>high: High</li><li>medium: Medium</li><li>low: Low</li></ul>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }
    }
}
