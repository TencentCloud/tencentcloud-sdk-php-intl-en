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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The data governance rules.
 *
 * @method string getRuleType() Obtain Governance rule type. Valid values: `Customize` (custom) and `Intelligence` (intelligent).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Governance rule type. Valid values: `Customize` (custom) and `Intelligence` (intelligent).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGovernEngine() Obtain The governance engine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGovernEngine(string $GovernEngine) Set The governance engine.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataGovernPolicy extends AbstractModel
{
    /**
     * @var string Governance rule type. Valid values: `Customize` (custom) and `Intelligence` (intelligent).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var string The governance engine.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GovernEngine;

    /**
     * @param string $RuleType Governance rule type. Valid values: `Customize` (custom) and `Intelligence` (intelligent).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GovernEngine The governance engine.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("GovernEngine",$param) and $param["GovernEngine"] !== null) {
            $this->GovernEngine = $param["GovernEngine"];
        }
    }
}
