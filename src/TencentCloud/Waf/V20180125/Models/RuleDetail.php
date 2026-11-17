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
 * aiguard rule details.
 *
 * @method string getRuleId() Obtain <p>Rule ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID.</p>
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getSeverity() Obtain <p>Severity.</p>
 * @method void setSeverity(string $Severity) Set <p>Severity.</p>
 * @method string getAction() Obtain <p>Action.</p>
 * @method void setAction(string $Action) Set <p>Action.</p>
 * @method integer getStatus() Obtain <p>Switch.</p>
 * @method void setStatus(integer $Status) Set <p>Switch.</p>
 * @method string getDesensitizeSample() Obtain <p>Desensitization example.</p>
 * @method void setDesensitizeSample(string $DesensitizeSample) Set <p>Desensitization example.</p>
 * @method integer getDirection() Obtain <p>Detection direction.</p><p>Value range: [0, 3].</p>
 * @method void setDirection(integer $Direction) Set <p>Detection direction.</p><p>Value range: [0, 3].</p>
 * @method integer getUpdateTime() Obtain <p>Rule modification time (second-level timestamp): The last time the tenant modified this rule. If it has never been modified, the value is 0.</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Rule modification time (second-level timestamp): The last time the tenant modified this rule. If it has never been modified, the value is 0.</p>
 */
class RuleDetail extends AbstractModel
{
    /**
     * @var string <p>Rule ID.</p>
     */
    public $RuleId;

    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Severity.</p>
     */
    public $Severity;

    /**
     * @var string <p>Action.</p>
     */
    public $Action;

    /**
     * @var integer <p>Switch.</p>
     */
    public $Status;

    /**
     * @var string <p>Desensitization example.</p>
     */
    public $DesensitizeSample;

    /**
     * @var integer <p>Detection direction.</p><p>Value range: [0, 3].</p>
     */
    public $Direction;

    /**
     * @var integer <p>Rule modification time (second-level timestamp): The last time the tenant modified this rule. If it has never been modified, the value is 0.</p>
     */
    public $UpdateTime;

    /**
     * @param string $RuleId <p>Rule ID.</p>
     * @param string $RuleName <p>rule name</p>
     * @param string $Description <p>Description.</p>
     * @param string $Severity <p>Severity.</p>
     * @param string $Action <p>Action.</p>
     * @param integer $Status <p>Switch.</p>
     * @param string $DesensitizeSample <p>Desensitization example.</p>
     * @param integer $Direction <p>Detection direction.</p><p>Value range: [0, 3].</p>
     * @param integer $UpdateTime <p>Rule modification time (second-level timestamp): The last time the tenant modified this rule. If it has never been modified, the value is 0.</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DesensitizeSample",$param) and $param["DesensitizeSample"] !== null) {
            $this->DesensitizeSample = $param["DesensitizeSample"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
