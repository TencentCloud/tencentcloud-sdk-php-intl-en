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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPolicyGroup request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID.
 * @method void setGroupId(integer $GroupId) Set Policy group ID.
 * @method string getViewName() Obtain Alarm type.
 * @method void setViewName(string $ViewName) Set Alarm type.
 * @method string getGroupName() Obtain Policy group name.
 * @method void setGroupName(string $GroupName) Set Policy group name.
 * @method integer getIsUnionRule() Obtain The 'AND' and 'OR' rules for metric alarms. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met.
 * @method void setIsUnionRule(integer $IsUnionRule) Set The 'AND' and 'OR' rules for metric alarms. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met.
 * @method array getConditions() Obtain Metric alarm condition rules. No filling indicates that all existing metric alarm condition rules will be deleted.
 * @method void setConditions(array $Conditions) Set Metric alarm condition rules. No filling indicates that all existing metric alarm condition rules will be deleted.
 * @method array getEventConditions() Obtain Event alarm conditions. No filling indicates that all existing event alarm conditions will be deleted.
 * @method void setEventConditions(array $EventConditions) Set Event alarm conditions. No filling indicates that all existing event alarm conditions will be deleted.
 * @method integer getConditionTempGroupId() Obtain Template-based policy group ID.
 * @method void setConditionTempGroupId(integer $ConditionTempGroupId) Set Template-based policy group ID.
 */
class ModifyPolicyGroupRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID.
     */
    public $GroupId;

    /**
     * @var string Alarm type.
     */
    public $ViewName;

    /**
     * @var string Policy group name.
     */
    public $GroupName;

    /**
     * @var integer The 'AND' and 'OR' rules for metric alarms. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met.
     */
    public $IsUnionRule;

    /**
     * @var array Metric alarm condition rules. No filling indicates that all existing metric alarm condition rules will be deleted.
     */
    public $Conditions;

    /**
     * @var array Event alarm conditions. No filling indicates that all existing event alarm conditions will be deleted.
     */
    public $EventConditions;

    /**
     * @var integer Template-based policy group ID.
     */
    public $ConditionTempGroupId;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $GroupId Policy group ID.
     * @param string $ViewName Alarm type.
     * @param string $GroupName Policy group name.
     * @param integer $IsUnionRule The 'AND' and 'OR' rules for metric alarms. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met.
     * @param array $Conditions Metric alarm condition rules. No filling indicates that all existing metric alarm condition rules will be deleted.
     * @param array $EventConditions Event alarm conditions. No filling indicates that all existing event alarm conditions will be deleted.
     * @param integer $ConditionTempGroupId Template-based policy group ID.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ModifyPolicyGroupCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new ModifyPolicyGroupEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }
    }
}
