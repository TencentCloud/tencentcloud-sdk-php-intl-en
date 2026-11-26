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
 * Rule details of the engine rule.
 *
 * @method string getStatus() Obtain <p>Rule status. Valid values: <li> enable: Enable; </li><li> disable: Disabled.</li></p>
 * @method void setStatus(string $Status) Set <p>Rule status. Valid values: <li> enable: Enable; </li><li> disable: Disabled.</li></p>
 * @method string getRuleId() Obtain <p>Rule ID. The unique identifier of a rule. This parameter is required when calling ModifyL7AccRule.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID. The unique identifier of a rule. This parameter is required when calling ModifyL7AccRule.</p>
 * @method string getRuleName() Obtain <p>Rule name. The name can contain no more than 255 characters.</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name. The name can contain no more than 255 characters.</p>
 * @method array getDescription() Obtain <p>Rule note. Multiple notes can be filled.</p>
 * @method void setDescription(array $Description) Set <p>Rule note. Multiple notes can be filled.</p>
 * @method array getCustomVariables() Obtain <p>List of rule-level custom variables. CustomVariable.Name requires the use of user.rule. as a prefix. Variables are initialized sequentially in the array order. InitialValue supports referencing site-level custom variables and rule-level custom variables before the current variable. It does not support referencing the current variable itself or rule-level custom variables after it. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. When Branches is empty, CustomVariable cannot be filled in, and any entry is invalid.</p>
 * @method void setCustomVariables(array $CustomVariables) Set <p>List of rule-level custom variables. CustomVariable.Name requires the use of user.rule. as a prefix. Variables are initialized sequentially in the array order. InitialValue supports referencing site-level custom variables and rule-level custom variables before the current variable. It does not support referencing the current variable itself or rule-level custom variables after it. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. When Branches is empty, CustomVariable cannot be filled in, and any entry is invalid.</p>
 * @method array getCustomVariableOperations() Obtain <p>Operation details of rule-level custom variables. You can reference site-level custom variables and rule-level custom variables defined in the current rule during operations. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. This list currently only supports filling in one rule; additional entries are invalid. When Branches is empty, CustomVariableOperations is not allowed to be filled in, and any entry will be invalid.</p>
 * @method void setCustomVariableOperations(array $CustomVariableOperations) Set <p>Operation details of rule-level custom variables. You can reference site-level custom variables and rule-level custom variables defined in the current rule during operations. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. This list currently only supports filling in one rule; additional entries are invalid. When Branches is empty, CustomVariableOperations is not allowed to be filled in, and any entry will be invalid.</p>
 * @method array getBranches() Obtain <p>Sub-rule branch. This list currently only supports filling in one rule. Additional rules are invalid.</p>
 * @method void setBranches(array $Branches) Set <p>Sub-rule branch. This list currently only supports filling in one rule. Additional rules are invalid.</p>
 * @method integer getRulePriority() Obtain <p>Rule priority. Output only.</p>
 * @method void setRulePriority(integer $RulePriority) Set <p>Rule priority. Output only.</p>
 */
class RuleEngineItem extends AbstractModel
{
    /**
     * @var string <p>Rule status. Valid values: <li> enable: Enable; </li><li> disable: Disabled.</li></p>
     */
    public $Status;

    /**
     * @var string <p>Rule ID. The unique identifier of a rule. This parameter is required when calling ModifyL7AccRule.</p>
     */
    public $RuleId;

    /**
     * @var string <p>Rule name. The name can contain no more than 255 characters.</p>
     */
    public $RuleName;

    /**
     * @var array <p>Rule note. Multiple notes can be filled.</p>
     */
    public $Description;

    /**
     * @var array <p>List of rule-level custom variables. CustomVariable.Name requires the use of user.rule. as a prefix. Variables are initialized sequentially in the array order. InitialValue supports referencing site-level custom variables and rule-level custom variables before the current variable. It does not support referencing the current variable itself or rule-level custom variables after it. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. When Branches is empty, CustomVariable cannot be filled in, and any entry is invalid.</p>
     */
    public $CustomVariables;

    /**
     * @var array <p>Operation details of rule-level custom variables. You can reference site-level custom variables and rule-level custom variables defined in the current rule during operations. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. This list currently only supports filling in one rule; additional entries are invalid. When Branches is empty, CustomVariableOperations is not allowed to be filled in, and any entry will be invalid.</p>
     */
    public $CustomVariableOperations;

    /**
     * @var array <p>Sub-rule branch. This list currently only supports filling in one rule. Additional rules are invalid.</p>
     */
    public $Branches;

    /**
     * @var integer <p>Rule priority. Output only.</p>
     */
    public $RulePriority;

    /**
     * @param string $Status <p>Rule status. Valid values: <li> enable: Enable; </li><li> disable: Disabled.</li></p>
     * @param string $RuleId <p>Rule ID. The unique identifier of a rule. This parameter is required when calling ModifyL7AccRule.</p>
     * @param string $RuleName <p>Rule name. The name can contain no more than 255 characters.</p>
     * @param array $Description <p>Rule note. Multiple notes can be filled.</p>
     * @param array $CustomVariables <p>List of rule-level custom variables. CustomVariable.Name requires the use of user.rule. as a prefix. Variables are initialized sequentially in the array order. InitialValue supports referencing site-level custom variables and rule-level custom variables before the current variable. It does not support referencing the current variable itself or rule-level custom variables after it. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. When Branches is empty, CustomVariable cannot be filled in, and any entry is invalid.</p>
     * @param array $CustomVariableOperations <p>Operation details of rule-level custom variables. You can reference site-level custom variables and rule-level custom variables defined in the current rule during operations. Site-level custom variables can be queried through the DescribeZoneCustomVariables API. This list currently only supports filling in one rule; additional entries are invalid. When Branches is empty, CustomVariableOperations is not allowed to be filled in, and any entry will be invalid.</p>
     * @param array $Branches <p>Sub-rule branch. This list currently only supports filling in one rule. Additional rules are invalid.</p>
     * @param integer $RulePriority <p>Rule priority. Output only.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("CustomVariableOperations",$param) and $param["CustomVariableOperations"] !== null) {
            $this->CustomVariableOperations = [];
            foreach ($param["CustomVariableOperations"] as $key => $value){
                $obj = new CustomVariableOperation();
                $obj->deserialize($value);
                array_push($this->CustomVariableOperations, $obj);
            }
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = [];
            foreach ($param["Branches"] as $key => $value){
                $obj = new RuleBranch();
                $obj->deserialize($value);
                array_push($this->Branches, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }
    }
}
