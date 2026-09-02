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
 * Command sandbox file access rule basic information
 *
 * @method integer getRuleID() Obtain <p>Rule ID.</p>
 * @method void setRuleID(integer $RuleID) Set <p>Rule ID.</p>
 * @method string getRuleType() Obtain <p>Rule source type</p><p>Enumeration values:</p><ul><li>SYSTEM: system preset rule</li><li>CUSTOM: custom rule</li></ul>
 * @method void setRuleType(string $RuleType) Set <p>Rule source type</p><p>Enumeration values:</p><ul><li>SYSTEM: system preset rule</li><li>CUSTOM: custom rule</li></ul>
 * @method string getUpdateTime() Obtain <p>Rule update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Rule update time</p>
 * @method CommandSandboxFileRuleBase getRuleContent() Obtain <p>Rule content</p>
 * @method void setRuleContent(CommandSandboxFileRuleBase $RuleContent) Set <p>Rule content</p>
 */
class CommandSandboxFileRule extends AbstractModel
{
    /**
     * @var integer <p>Rule ID.</p>
     */
    public $RuleID;

    /**
     * @var string <p>Rule source type</p><p>Enumeration values:</p><ul><li>SYSTEM: system preset rule</li><li>CUSTOM: custom rule</li></ul>
     */
    public $RuleType;

    /**
     * @var string <p>Rule update time</p>
     */
    public $UpdateTime;

    /**
     * @var CommandSandboxFileRuleBase <p>Rule content</p>
     */
    public $RuleContent;

    /**
     * @param integer $RuleID <p>Rule ID.</p>
     * @param string $RuleType <p>Rule source type</p><p>Enumeration values:</p><ul><li>SYSTEM: system preset rule</li><li>CUSTOM: custom rule</li></ul>
     * @param string $UpdateTime <p>Rule update time</p>
     * @param CommandSandboxFileRuleBase $RuleContent <p>Rule content</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = new CommandSandboxFileRuleBase();
            $this->RuleContent->deserialize($param["RuleContent"]);
        }
    }
}
