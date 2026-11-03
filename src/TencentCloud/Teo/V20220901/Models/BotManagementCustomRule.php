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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom Bot rules for Web security.
 *
 * @method string getId() Obtain <p>ID of the bot custom rule.<br>Different rule configuration operations are supported via the rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BotManagementCustomRules parameter will be deleted.</li></p>
 * @method void setId(string $Id) Set <p>ID of the bot custom rule.<br>Different rule configuration operations are supported via the rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BotManagementCustomRules parameter will be deleted.</li></p>
 * @method string getName() Obtain <p>Name of the Bot custom rule.</p>
 * @method void setName(string $Name) Set <p>Name of the Bot custom rule.</p>
 * @method string getEnabled() Obtain <p>Whether the custom Bot rule is enabled. Valid values: <li>on: enable;</li><li>off: disable.</li></p>
 * @method void setEnabled(string $Enabled) Set <p>Whether the custom Bot rule is enabled. Valid values: <li>on: enable;</li><li>off: disable.</li></p>
 * @method integer getPriority() Obtain <p>Priority of Bot custom rules, ranging from 1 to 100, with a default value of 50.</p>
 * @method void setPriority(integer $Priority) Set <p>Priority of Bot custom rules, ranging from 1 to 100, with a default value of 50.</p>
 * @method string getCondition() Obtain <p>For specific content of the Bot custom rule, it must comply with the expression grammar. For detailed specifications, see the product document.</p>
 * @method void setCondition(string $Condition) Set <p>For specific content of the Bot custom rule, it must comply with the expression grammar. For detailed specifications, see the product document.</p>
 * @method array getAction() Obtain <p>List of safe execution actions by weight assignment.</p>
 * @method void setAction(array $Action) Set <p>List of safe execution actions by weight assignment.</p>
 */
class BotManagementCustomRule extends AbstractModel
{
    /**
     * @var string <p>ID of the bot custom rule.<br>Different rule configuration operations are supported via the rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BotManagementCustomRules parameter will be deleted.</li></p>
     */
    public $Id;

    /**
     * @var string <p>Name of the Bot custom rule.</p>
     */
    public $Name;

    /**
     * @var string <p>Whether the custom Bot rule is enabled. Valid values: <li>on: enable;</li><li>off: disable.</li></p>
     */
    public $Enabled;

    /**
     * @var integer <p>Priority of Bot custom rules, ranging from 1 to 100, with a default value of 50.</p>
     */
    public $Priority;

    /**
     * @var string <p>For specific content of the Bot custom rule, it must comply with the expression grammar. For detailed specifications, see the product document.</p>
     */
    public $Condition;

    /**
     * @var array <p>List of safe execution actions by weight assignment.</p>
     */
    public $Action;

    /**
     * @param string $Id <p>ID of the bot custom rule.<br>Different rule configuration operations are supported via the rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or do not specify the ID parameter;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BotManagementCustomRules parameter will be deleted.</li></p>
     * @param string $Name <p>Name of the Bot custom rule.</p>
     * @param string $Enabled <p>Whether the custom Bot rule is enabled. Valid values: <li>on: enable;</li><li>off: disable.</li></p>
     * @param integer $Priority <p>Priority of Bot custom rules, ranging from 1 to 100, with a default value of 50.</p>
     * @param string $Condition <p>For specific content of the Bot custom rule, it must comply with the expression grammar. For detailed specifications, see the product document.</p>
     * @param array $Action <p>List of safe execution actions by weight assignment.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = [];
            foreach ($param["Action"] as $key => $value){
                $obj = new SecurityWeightedAction();
                $obj->deserialize($value);
                array_push($this->Action, $obj);
            }
        }
    }
}
