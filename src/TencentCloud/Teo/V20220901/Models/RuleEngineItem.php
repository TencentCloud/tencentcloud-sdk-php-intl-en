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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule details of the rule engine.
 *
 * @method string getStatus() Obtain Rule status. values: <li>`enable`: enabled</li> <li>`disable`: disabled</li>.
 * @method void setStatus(string $Status) Set Rule status. values: <li>`enable`: enabled</li> <li>`disable`: disabled</li>.
 * @method string getRuleId() Obtain Rule id. a unique identifier for the rule. this parameter is required when calling `modifyl7accrules`.
 * @method void setRuleId(string $RuleId) Set Rule id. a unique identifier for the rule. this parameter is required when calling `modifyl7accrules`.
 * @method string getRuleName() Obtain Rule name. name length limit: 255 characters.
 * @method void setRuleName(string $RuleName) Set Rule name. name length limit: 255 characters.
 * @method array getDescription() Obtain Rule annotation. multiple annotations can be added.
 * @method void setDescription(array $Description) Set Rule annotation. multiple annotations can be added.
 * @method array getBranches() Obtain Sub-Rule branch. this list currently supports filling in only one rule; multiple entries are invalid.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setBranches(array $Branches) Set Sub-Rule branch. this list currently supports filling in only one rule; multiple entries are invalid.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method integer getRulePriority() Obtain Rule priority. only used as an output parameter.
 * @method void setRulePriority(integer $RulePriority) Set Rule priority. only used as an output parameter.
 */
class RuleEngineItem extends AbstractModel
{
    /**
     * @var string Rule status. values: <li>`enable`: enabled</li> <li>`disable`: disabled</li>.
     */
    public $Status;

    /**
     * @var string Rule id. a unique identifier for the rule. this parameter is required when calling `modifyl7accrules`.
     */
    public $RuleId;

    /**
     * @var string Rule name. name length limit: 255 characters.
     */
    public $RuleName;

    /**
     * @var array Rule annotation. multiple annotations can be added.
     */
    public $Description;

    /**
     * @var array Sub-Rule branch. this list currently supports filling in only one rule; multiple entries are invalid.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Branches;

    /**
     * @var integer Rule priority. only used as an output parameter.
     */
    public $RulePriority;

    /**
     * @param string $Status Rule status. values: <li>`enable`: enabled</li> <li>`disable`: disabled</li>.
     * @param string $RuleId Rule id. a unique identifier for the rule. this parameter is required when calling `modifyl7accrules`.
     * @param string $RuleName Rule name. name length limit: 255 characters.
     * @param array $Description Rule annotation. multiple annotations can be added.
     * @param array $Branches Sub-Rule branch. this list currently supports filling in only one rule; multiple entries are invalid.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param integer $RulePriority Rule priority. only used as an output parameter.
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
