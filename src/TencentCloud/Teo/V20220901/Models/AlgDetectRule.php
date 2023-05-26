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
 * Active bot detection rule.
 *
 * @method integer getRuleID() Obtain ID of the rule.
 * @method void setRuleID(integer $RuleID) Set ID of the rule.
 * @method string getRuleName() Obtain Name of the rule.
 * @method void setRuleName(string $RuleName) Set Name of the rule.
 * @method string getSwitch() Obtain Whether to enable the rule.
 * @method void setSwitch(string $Switch) Set Whether to enable the rule.
 * @method array getAlgConditions() Obtain Condition specified for the rule.
 * @method void setAlgConditions(array $AlgConditions) Set Condition specified for the rule.
 * @method AlgDetectSession getAlgDetectSession() Obtain Validate Cookie when the condition is satisfied.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlgDetectSession(AlgDetectSession $AlgDetectSession) Set Validate Cookie when the condition is satisfied.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getAlgDetectJS() Obtain Validate client behavior when the condition is satisfied.
 * @method void setAlgDetectJS(array $AlgDetectJS) Set Validate client behavior when the condition is satisfied.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
 */
class AlgDetectRule extends AbstractModel
{
    /**
     * @var integer ID of the rule.
     */
    public $RuleID;

    /**
     * @var string Name of the rule.
     */
    public $RuleName;

    /**
     * @var string Whether to enable the rule.
     */
    public $Switch;

    /**
     * @var array Condition specified for the rule.
     */
    public $AlgConditions;

    /**
     * @var AlgDetectSession Validate Cookie when the condition is satisfied.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlgDetectSession;

    /**
     * @var array Validate client behavior when the condition is satisfied.
     */
    public $AlgDetectJS;

    /**
     * @var string The update time, which is only used as an output parameter.
     */
    public $UpdateTime;

    /**
     * @param integer $RuleID ID of the rule.
     * @param string $RuleName Name of the rule.
     * @param string $Switch Whether to enable the rule.
     * @param array $AlgConditions Condition specified for the rule.
     * @param AlgDetectSession $AlgDetectSession Validate Cookie when the condition is satisfied.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $AlgDetectJS Validate client behavior when the condition is satisfied.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
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
