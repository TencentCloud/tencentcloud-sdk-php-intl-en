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
 * DescribePolicyGroupList.Group
 *
 * @method integer getGroupId() Obtain Policy group ID.
 * @method void setGroupId(integer $GroupId) Set Policy group ID.
 * @method string getGroupName() Obtain Policy group name.
 * @method void setGroupName(string $GroupName) Set Policy group name.
 * @method boolean getIsOpen() Obtain Whether it is enabled.
 * @method void setIsOpen(boolean $IsOpen) Set Whether it is enabled.
 * @method string getViewName() Obtain Policy view name.
 * @method void setViewName(string $ViewName) Set Policy view name.
 * @method string getLastEditUin() Obtain Uin that was last edited.
 * @method void setLastEditUin(string $LastEditUin) Set Uin that was last edited.
 * @method integer getUpdateTime() Obtain Last modified time.
 * @method void setUpdateTime(integer $UpdateTime) Set Last modified time.
 * @method integer getInsertTime() Obtain Creation time.
 * @method void setInsertTime(integer $InsertTime) Set Creation time.
 * @method integer getUseSum() Obtain Number of instances that are bound to the policy group.
 * @method void setUseSum(integer $UseSum) Set Number of instances that are bound to the policy group.
 * @method integer getNoShieldedSum() Obtain Number of unshielded instances that are bound to the policy group.
 * @method void setNoShieldedSum(integer $NoShieldedSum) Set Number of unshielded instances that are bound to the policy group.
 * @method integer getIsDefault() Obtain Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
 * @method void setIsDefault(integer $IsDefault) Set Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
 * @method boolean getCanSetDefault() Obtain Whether the policy can be configured as the default policy.
 * @method void setCanSetDefault(boolean $CanSetDefault) Set Whether the policy can be configured as the default policy.
 * @method integer getParentGroupId() Obtain Parent policy group ID.
 * @method void setParentGroupId(integer $ParentGroupId) Set Parent policy group ID.
 * @method string getRemark() Obtain Remarks of the policy group.
 * @method void setRemark(string $Remark) Set Remarks of the policy group.
 * @method integer getProjectId() Obtain ID of the project to which the policy group belongs.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the policy group belongs.
 * @method array getConditions() Obtain Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setConditions(array $Conditions) Set Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method array getEventConditions() Obtain Product event rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventConditions(array $EventConditions) Set Product event rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method array getReceiverInfos() Obtain Recipient list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setReceiverInfos(array $ReceiverInfos) Set Recipient list.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() Obtain Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) Set Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyGroupListGroupInstanceGroup getInstanceGroup() Obtain Instance group that is bound to the policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceGroup(DescribePolicyGroupListGroupInstanceGroup $InstanceGroup) Set Instance group that is bound to the policy group.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getIsUnionRule() Obtain The 'AND' or 'OR' rule. The value 0 indicates the 'OR' rule (indicating that an alarm will be triggered if any rule meets the threshold condition). The value 1 indicates the 'AND' rule (indicating that an alarm will be triggered when all rules meet the threshold conditions).
Note: This field may return null, indicating that no valid value was found.
 * @method void setIsUnionRule(integer $IsUnionRule) Set The 'AND' or 'OR' rule. The value 0 indicates the 'OR' rule (indicating that an alarm will be triggered if any rule meets the threshold condition). The value 1 indicates the 'AND' rule (indicating that an alarm will be triggered when all rules meet the threshold conditions).
Note: This field may return null, indicating that no valid value was found.
 */
class DescribePolicyGroupListGroup extends AbstractModel
{
    /**
     * @var integer Policy group ID.
     */
    public $GroupId;

    /**
     * @var string Policy group name.
     */
    public $GroupName;

    /**
     * @var boolean Whether it is enabled.
     */
    public $IsOpen;

    /**
     * @var string Policy view name.
     */
    public $ViewName;

    /**
     * @var string Uin that was last edited.
     */
    public $LastEditUin;

    /**
     * @var integer Last modified time.
     */
    public $UpdateTime;

    /**
     * @var integer Creation time.
     */
    public $InsertTime;

    /**
     * @var integer Number of instances that are bound to the policy group.
     */
    public $UseSum;

    /**
     * @var integer Number of unshielded instances that are bound to the policy group.
     */
    public $NoShieldedSum;

    /**
     * @var integer Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
     */
    public $IsDefault;

    /**
     * @var boolean Whether the policy can be configured as the default policy.
     */
    public $CanSetDefault;

    /**
     * @var integer Parent policy group ID.
     */
    public $ParentGroupId;

    /**
     * @var string Remarks of the policy group.
     */
    public $Remark;

    /**
     * @var integer ID of the project to which the policy group belongs.
     */
    public $ProjectId;

    /**
     * @var array Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Conditions;

    /**
     * @var array Product event rule list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventConditions;

    /**
     * @var array Recipient list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoConditionTpl Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ConditionsTemp;

    /**
     * @var DescribePolicyGroupListGroupInstanceGroup Instance group that is bound to the policy group.
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceGroup;

    /**
     * @var integer The 'AND' or 'OR' rule. The value 0 indicates the 'OR' rule (indicating that an alarm will be triggered if any rule meets the threshold condition). The value 1 indicates the 'AND' rule (indicating that an alarm will be triggered when all rules meet the threshold conditions).
Note: This field may return null, indicating that no valid value was found.
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId Policy group ID.
     * @param string $GroupName Policy group name.
     * @param boolean $IsOpen Whether it is enabled.
     * @param string $ViewName Policy view name.
     * @param string $LastEditUin Uin that was last edited.
     * @param integer $UpdateTime Last modified time.
     * @param integer $InsertTime Creation time.
     * @param integer $UseSum Number of instances that are bound to the policy group.
     * @param integer $NoShieldedSum Number of unshielded instances that are bound to the policy group.
     * @param integer $IsDefault Whether it is the default policy. The value 0 indicates that it is not the default policy. The value 1 indicates that it is the default policy.
     * @param boolean $CanSetDefault Whether the policy can be configured as the default policy.
     * @param integer $ParentGroupId Parent policy group ID.
     * @param string $Remark Remarks of the policy group.
     * @param integer $ProjectId ID of the project to which the policy group belongs.
     * @param array $Conditions Threshold rule list.
Note: This field may return null, indicating that no valid value was found.
     * @param array $EventConditions Product event rule list.
Note: This field may return null, indicating that no valid value was found.
     * @param array $ReceiverInfos Recipient list.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp Template-based policy group.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyGroupListGroupInstanceGroup $InstanceGroup Instance group that is bound to the policy group.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $IsUnionRule The 'AND' or 'OR' rule. The value 0 indicates the 'OR' rule (indicating that an alarm will be triggered if any rule meets the threshold condition). The value 1 indicates the 'AND' rule (indicating that an alarm will be triggered when all rules meet the threshold conditions).
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("NoShieldedSum",$param) and $param["NoShieldedSum"] !== null) {
            $this->NoShieldedSum = $param["NoShieldedSum"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("ParentGroupId",$param) and $param["ParentGroupId"] !== null) {
            $this->ParentGroupId = $param["ParentGroupId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("EventConditions",$param) and $param["EventConditions"] !== null) {
            $this->EventConditions = [];
            foreach ($param["EventConditions"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConditions, $obj);
            }
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new DescribePolicyGroupInfoReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = new DescribePolicyGroupListGroupInstanceGroup();
            $this->InstanceGroup->deserialize($param["InstanceGroup"]);
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
