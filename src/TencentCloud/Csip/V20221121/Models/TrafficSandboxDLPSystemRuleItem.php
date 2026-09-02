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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data structure of the DLP system rule
 *
 * @method integer getID() Obtain System rule ID
 * @method void setID(integer $ID) Set System rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleContent() Obtain Rule content, a Hyperscan-compatible regular expression (display-only, not editable).
 * @method void setRuleContent(string $RuleContent) Set Rule content, a Hyperscan-compatible regular expression (display-only, not editable).
 */
class TrafficSandboxDLPSystemRuleItem extends AbstractModel
{
    /**
     * @var integer System rule ID
     */
    public $ID;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule content, a Hyperscan-compatible regular expression (display-only, not editable).
     */
    public $RuleContent;

    /**
     * @param integer $ID System rule ID
     * @param string $RuleName Rule name
     * @param string $RuleContent Rule content, a Hyperscan-compatible regular expression (display-only, not editable).
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }
    }
}
