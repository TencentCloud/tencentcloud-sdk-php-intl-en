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
 * CreatePolicyGroup request structure.
 *
 * @method string getGroupName() Obtain Policy group name.
 * @method void setGroupName(string $GroupName) Set Policy group name.
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method string getViewName() Obtain Name of the view to which the policy group belongs. If the policy group is created based on a template, this parameter is optional.
 * @method void setViewName(string $ViewName) Set Name of the view to which the policy group belongs. If the policy group is created based on a template, this parameter is optional.
 * @method integer getProjectId() Obtain ID of the project to which the policy group belongs, which will be used for authentication.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the policy group belongs, which will be used for authentication.
 * @method integer getConditionTempGroupId() Obtain ID of a template-based policy group. This parameter is required only when the policy group is created based on a template.
 * @method void setConditionTempGroupId(integer $ConditionTempGroupId) Set ID of a template-based policy group. This parameter is required only when the policy group is created based on a template.
 * @method integer getIsShielded() Obtain Whether the policy group is shielded. The value 0 indicates that the policy group is not shielded. The value 1 indicates that the policy group is shielded. The default value is 0.
 * @method void setIsShielded(integer $IsShielded) Set Whether the policy group is shielded. The value 0 indicates that the policy group is not shielded. The value 1 indicates that the policy group is shielded. The default value is 0.
 * @method string getRemark() Obtain Remarks of the policy group.
 * @method void setRemark(string $Remark) Set Remarks of the policy group.
 * @method integer getInsertTime() Obtain Insertion time in the format of Unix timestamp. If this parameter is not configured, the backend processing time is used.
 * @method void setInsertTime(integer $InsertTime) Set Insertion time in the format of Unix timestamp. If this parameter is not configured, the backend processing time is used.
 * @method array getConditions() Obtain Alarm threshold rules in the policy group.
 * @method void setConditions(array $Conditions) Set Alarm threshold rules in the policy group.
 * @method array getEventConditions() Obtain Event alarm rules in the policy group.
 * @method void setEventConditions(array $EventConditions) Set Event alarm rules in the policy group.
 * @method integer getBackEndCall() Obtain Whether it is a backend call. Rules pulled from the policy template will be used to fill in the `Conditions` and `EventConditions` fields only when the value of this parameter is `1`.
 * @method void setBackEndCall(integer $BackEndCall) Set Whether it is a backend call. Rules pulled from the policy template will be used to fill in the `Conditions` and `EventConditions` fields only when the value of this parameter is `1`.
 * @method integer getIsUnionRule() Obtain The 'AND' and 'OR' rules for alarm metrics. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met.
 * @method void setIsUnionRule(integer $IsUnionRule) Set The 'AND' and 'OR' rules for alarm metrics. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met.
 */
class CreatePolicyGroupRequest extends AbstractModel
{
    /**
     * @var string Policy group name.
     */
    public $GroupName;

    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var string Name of the view to which the policy group belongs. If the policy group is created based on a template, this parameter is optional.
     */
    public $ViewName;

    /**
     * @var integer ID of the project to which the policy group belongs, which will be used for authentication.
     */
    public $ProjectId;

    /**
     * @var integer ID of a template-based policy group. This parameter is required only when the policy group is created based on a template.
     */
    public $ConditionTempGroupId;

    /**
     * @var integer Whether the policy group is shielded. The value 0 indicates that the policy group is not shielded. The value 1 indicates that the policy group is shielded. The default value is 0.
     */
    public $IsShielded;

    /**
     * @var string Remarks of the policy group.
     */
    public $Remark;

    /**
     * @var integer Insertion time in the format of Unix timestamp. If this parameter is not configured, the backend processing time is used.
     */
    public $InsertTime;

    /**
     * @var array Alarm threshold rules in the policy group.
     */
    public $Conditions;

    /**
     * @var array Event alarm rules in the policy group.
     */
    public $EventConditions;

    /**
     * @var integer Whether it is a backend call. Rules pulled from the policy template will be used to fill in the `Conditions` and `EventConditions` fields only when the value of this parameter is `1`.
     */
    public $BackEndCall;

    /**
     * @var integer The 'AND' and 'OR' rules for alarm metrics. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met.
     */
    public $IsUnionRule;

    /**
     * @param string $GroupName Policy group name.
     * @param string $Module The value is fixed to monitor.
     * @param string $ViewName Name of the view to which the policy group belongs. If the policy group is created based on a template, this parameter is optional.
     * @param integer $ProjectId ID of the project to which the policy group belongs, which will be used for authentication.
     * @param integer $ConditionTempGroupId ID of a template-based policy group. This parameter is required only when the policy group is created based on a template.
     * @param integer $IsShielded Whether the policy group is shielded. The value 0 indicates that the policy group is not shielded. The value 1 indicates that the policy group is shielded. The default value is 0.
     * @param string $Remark Remarks of the policy group.
     * @param integer $InsertTime Insertion time in the format of Unix timestamp. If this parameter is not configured, the backend processing time is used.
     * @param array $Conditions Alarm threshold rules in the policy group.
     * @param array $EventConditions Event alarm rules in the policy group.
     * @param integer $BackEndCall Whether it is a backend call. Rules pulled from the policy template will be used to fill in the `Conditions` and `EventConditions` fields only when the value of this parameter is `1`.
     * @param integer $IsUnionRule The 'AND' and 'OR' rules for alarm metrics. The value 0 indicates 'OR', which means that an alarm will be triggered when any rule is met. The value 1 indicates 'AND', which means that an alarm will be triggered only when all rules are met.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ConditionTempGroupId",$param) and $param["ConditionTempGroupId"] !== null) {
            $this->ConditionTempGroupId = $param["ConditionTempGroupId"];
        }

        if (array_key_exists("IsShielded",$param) and $param["IsShielded"] !== null) {
            $this->IsShielded = $param["IsShielded"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new CreatePolicyGroupCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new CreatePolicyGroupEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("BackEndCall",$param) and $param["BackEndCall"] !== null) {
            $this->BackEndCall = $param["BackEndCall"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
