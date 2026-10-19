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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * System compliance package rules on the operation side.
 *
 * @method string getIdentifier() Obtain <p>Unique rule ID.</p>
 * @method void setIdentifier(string $Identifier) Set <p>Unique rule ID.</p>
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level.</p><p>Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level.</p><p>Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method array getCompliancePackRules() Obtain <p>Compliance package rules.</p>
 * @method void setCompliancePackRules(array $CompliancePackRules) Set <p>Compliance package rules.</p>
 * @method array getControl() Obtain <p>Rule number information.</p>
 * @method void setControl(array $Control) Set <p>Rule number information.</p>
 * @method array getResourceTypes() Obtain <p>Resource type.</p>
 * @method void setResourceTypes(array $ResourceTypes) Set <p>Resource type.</p>
 */
class CompliancePackRuleForManage extends AbstractModel
{
    /**
     * @var string <p>Unique rule ID.</p>
     */
    public $Identifier;

    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Risk level.</p><p>Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>Compliance package rules.</p>
     */
    public $CompliancePackRules;

    /**
     * @var array <p>Rule number information.</p>
     */
    public $Control;

    /**
     * @var array <p>Resource type.</p>
     */
    public $ResourceTypes;

    /**
     * @param string $Identifier <p>Unique rule ID.</p>
     * @param string $RuleName <p>rule name</p>
     * @param string $Description <p>Description.</p>
     * @param integer $RiskLevel <p>Risk level.</p><p>Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param array $CompliancePackRules <p>Compliance package rules.</p>
     * @param array $Control <p>Rule number information.</p>
     * @param array $ResourceTypes <p>Resource type.</p>
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CompliancePackRules",$param) and $param["CompliancePackRules"] !== null) {
            $this->CompliancePackRules = [];
            foreach ($param["CompliancePackRules"] as $key => $value){
                $obj = new CompliancePackRules();
                $obj->deserialize($value);
                array_push($this->CompliancePackRules, $obj);
            }
        }

        if (array_key_exists("Control",$param) and $param["Control"] !== null) {
            $this->Control = [];
            foreach ($param["Control"] as $key => $value){
                $obj = new Control();
                $obj->deserialize($value);
                array_push($this->Control, $obj);
            }
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }
    }
}
