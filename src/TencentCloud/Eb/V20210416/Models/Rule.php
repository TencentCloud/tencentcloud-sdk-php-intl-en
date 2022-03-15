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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule information
 *
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getModTime() Obtain Modification time
 * @method void setModTime(string $ModTime) Set Modification time
 * @method boolean getEnable() Obtain Switch
 * @method void setEnable(boolean $Enable) Set Switch
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method array getTargets() Obtain Target overview
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set Target overview
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DeadLetterConfig getDeadLetterConfig() Obtain DLQ rule set by the rule, which may be null
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) Set DLQ rule set by the rule, which may be null
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Rule extends AbstractModel
{
    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Modification time
     */
    public $ModTime;

    /**
     * @var boolean Switch
     */
    public $Enable;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var array Target overview
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @var DeadLetterConfig DLQ rule set by the rule, which may be null
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeadLetterConfig;

    /**
     * @param string $Status Status
     * @param string $ModTime Modification time
     * @param boolean $Enable Switch
     * @param string $Description Description
     * @param string $RuleId Rule ID
     * @param string $AddTime Creation time
     * @param string $EventBusId Event bus ID
     * @param string $RuleName Rule name
     * @param array $Targets Target overview
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DeadLetterConfig $DeadLetterConfig DLQ rule set by the rule, which may be null
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetBrief();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }
    }
}
