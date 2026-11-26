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
 * Bot active feature detection rule.
 *
 * @method integer getRuleID() Obtain Rule id.
 * @method void setRuleID(integer $RuleID) Set Rule id.
 * @method string getRuleName() Obtain Rule name.
 * @method void setRuleName(string $RuleName) Set Rule name.
 * @method string getSwitch() Obtain Rule switch.
 * @method void setSwitch(string $Switch) Set Rule switch.
 * @method array getAlgConditions() Obtain Custom rule.
 * @method void setAlgConditions(array $AlgConditions) Set Custom rule.
 * @method AlgDetectSession getAlgDetectSession() Obtain Cookie checksum and session behavior analysis.
 * @method void setAlgDetectSession(AlgDetectSession $AlgDetectSession) Set Cookie checksum and session behavior analysis.
 * @method array getAlgDetectJS() Obtain Client behavior validation.
 * @method void setAlgDetectJS(array $AlgDetectJS) Set Client behavior validation.
 * @method string getUpdateTime() Obtain Update time. For output usage only.
 * @method void setUpdateTime(string $UpdateTime) Set Update time. For output usage only.
 */
class AlgDetectRule extends AbstractModel
{
    /**
     * @var integer Rule id.
     */
    public $RuleID;

    /**
     * @var string Rule name.
     */
    public $RuleName;

    /**
     * @var string Rule switch.
     */
    public $Switch;

    /**
     * @var array Custom rule.
     */
    public $AlgConditions;

    /**
     * @var AlgDetectSession Cookie checksum and session behavior analysis.
     */
    public $AlgDetectSession;

    /**
     * @var array Client behavior validation.
     */
    public $AlgDetectJS;

    /**
     * @var string Update time. For output usage only.
     */
    public $UpdateTime;

    /**
     * @param integer $RuleID Rule id.
     * @param string $RuleName Rule name.
     * @param string $Switch Rule switch.
     * @param array $AlgConditions Custom rule.
     * @param AlgDetectSession $AlgDetectSession Cookie checksum and session behavior analysis.
     * @param array $AlgDetectJS Client behavior validation.
     * @param string $UpdateTime Update time. For output usage only.
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AlgConditions",$param) and $param["AlgConditions"] !== null) {
            $this->AlgConditions = [];
            foreach ($param["AlgConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AlgConditions, $obj);
            }
        }

        if (array_key_exists("AlgDetectSession",$param) and $param["AlgDetectSession"] !== null) {
            $this->AlgDetectSession = new AlgDetectSession();
            $this->AlgDetectSession->deserialize($param["AlgDetectSession"]);
        }

        if (array_key_exists("AlgDetectJS",$param) and $param["AlgDetectJS"] !== null) {
            $this->AlgDetectJS = [];
            foreach ($param["AlgDetectJS"] as $key => $value){
                $obj = new AlgDetectJS();
                $obj->deserialize($value);
                array_push($this->AlgDetectJS, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
