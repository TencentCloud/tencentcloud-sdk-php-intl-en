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
 * Alarm policy details
 *
 * @method string getPolicyId() Obtain Alarm policy ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyName() Obtain Alarm policy name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Alarm policy name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMonitorType() Obtain Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMonitorType(string $MonitorType) Set Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEnable() Obtain Status. Valid values: 0 (disabled), 1 (enabled)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Status. Valid values: 0 (disabled), 1 (enabled)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUseSum() Obtain Number of instances bound to policy group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUseSum(integer $UseSum) Set Number of instances bound to policy group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID. Valid values: -1 (no project), 0 (default project)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Valid values: -1 (no project), 0 (default project)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Alarm policy type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Alarm policy type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getConditionTemplateId() Obtain Trigger condition template ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConditionTemplateId(string $ConditionTemplateId) Set Trigger condition template ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNoticeIds() Obtain Notification rule ID list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeIds(array $NoticeIds) Set Notification rule ID list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNotices() Obtain Notification rule list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNotices(array $Notices) Set Notification rule list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTriggerTasks() Obtain Triggered task list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTriggerTasks(array $TriggerTasks) Set Triggered task list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ConditionsTemp getConditionsTemp() Obtain Template policy group
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConditionsTemp(ConditionsTemp $ConditionsTemp) Set Template policy group
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastEditUin() Obtain `Uin` of the last modifying user
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastEditUin(string $LastEditUin) Set `Uin` of the last modifying user
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Update time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInsertTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInsertTime(integer $InsertTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getRegion() Obtain Region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(array $Region) Set Region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceShowName() Obtain Namespace display name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceShowName(string $NamespaceShowName) Set Namespace display name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDefault() Obtain Whether it is the default policy. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefault(integer $IsDefault) Set Whether it is the default policy. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCanSetDefault() Obtain Whether the default policy can be set. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCanSetDefault(integer $CanSetDefault) Set Whether the default policy can be set. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceGroupId() Obtain Instance group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceSum() Obtain Total number of instances in instance group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceSum(integer $InstanceSum) Set Total number of instances in instance group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceGroupName() Obtain Instance group name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceGroupName(string $InstanceGroupName) Set Instance group name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRuleType() Obtain Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRuleType(string $RuleType) Set Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOriginId() Obtain Policy ID for instance/instance group binding and unbinding APIs (BindingPolicyObject, UnBindingAllPolicyObject, UnBindingPolicyObject)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginId(string $OriginId) Set Policy ID for instance/instance group binding and unbinding APIs (BindingPolicyObject, UnBindingAllPolicyObject, UnBindingPolicyObject)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagInstances() Obtain Tag
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagInstances(array $TagInstances) Set Tag
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getFilterDimensionsParam() Obtain Information on the filter dimension associated with a policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFilterDimensionsParam(string $FilterDimensionsParam) Set Information on the filter dimension associated with a policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsOneClick() Obtain Whether it is a quick alarm policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsOneClick(integer $IsOneClick) Set Whether it is a quick alarm policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getOneClickStatus() Obtain Whether the quick alarm policy is enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOneClickStatus(integer $OneClickStatus) Set Whether the quick alarm policy is enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAdvancedMetricNumber() Obtain The number of advanced metrics.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAdvancedMetricNumber(integer $AdvancedMetricNumber) Set The number of advanced metrics.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsBindAll() Obtain Whether the policy is associated with all objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsBindAll(integer $IsBindAll) Set Whether the policy is associated with all objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Policy tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Policy tag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmPolicy extends AbstractModel
{
    /**
     * @var string Alarm policy ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Alarm policy name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MonitorType;

    /**
     * @var integer Status. Valid values: 0 (disabled), 1 (enabled)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer Number of instances bound to policy group
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UseSum;

    /**
     * @var integer Project ID. Valid values: -1 (no project), 0 (default project)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Alarm policy type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Trigger condition template ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EventCondition;

    /**
     * @var array Notification rule ID list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeIds;

    /**
     * @var array Notification rule list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Notices;

    /**
     * @var array Triggered task list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TriggerTasks;

    /**
     * @var ConditionsTemp Template policy group
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConditionsTemp;

    /**
     * @var string `Uin` of the last modifying user
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastEditUin;

    /**
     * @var integer Update time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Creation time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InsertTime;

    /**
     * @var array Region
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Namespace display name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceShowName;

    /**
     * @var integer Whether it is the default policy. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefault;

    /**
     * @var integer Whether the default policy can be set. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CanSetDefault;

    /**
     * @var integer Instance group ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceGroupId;

    /**
     * @var integer Total number of instances in instance group
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceSum;

    /**
     * @var string Instance group name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceGroupName;

    /**
     * @var string Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RuleType;

    /**
     * @var string Policy ID for instance/instance group binding and unbinding APIs (BindingPolicyObject, UnBindingAllPolicyObject, UnBindingPolicyObject)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginId;

    /**
     * @var array Tag
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagInstances;

    /**
     * @var string Information on the filter dimension associated with a policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FilterDimensionsParam;

    /**
     * @var integer Whether it is a quick alarm policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsOneClick;

    /**
     * @var integer Whether the quick alarm policy is enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OneClickStatus;

    /**
     * @var integer The number of advanced metrics.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AdvancedMetricNumber;

    /**
     * @var integer Whether the policy is associated with all objects
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsBindAll;

    /**
     * @var array Policy tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $PolicyId Alarm policy ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyName Alarm policy name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MonitorType Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Enable Status. Valid values: 0 (disabled), 1 (enabled)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UseSum Number of instances bound to policy group
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID. Valid values: -1 (no project), 0 (default project)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Alarm policy type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ConditionTemplateId Trigger condition template ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AlarmPolicyCondition $Condition Metric trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $NoticeIds Notification rule ID list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Notices Notification rule list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TriggerTasks Triggered task list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ConditionsTemp $ConditionsTemp Template policy group
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastEditUin `Uin` of the last modifying user
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Update time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InsertTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Region Region
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceShowName Namespace display name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDefault Whether it is the default policy. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CanSetDefault Whether the default policy can be set. Valid values: 1 (yes), 0 (no)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceGroupId Instance group ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceSum Total number of instances in instance group
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceGroupName Instance group name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RuleType Trigger condition type. Valid values: STATIC (static threshold), DYNAMIC (dynamic)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OriginId Policy ID for instance/instance group binding and unbinding APIs (BindingPolicyObject, UnBindingAllPolicyObject, UnBindingPolicyObject)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagInstances Tag
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $FilterDimensionsParam Information on the filter dimension associated with a policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IsOneClick Whether it is a quick alarm policy.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $OneClickStatus Whether the quick alarm policy is enabled.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AdvancedMetricNumber The number of advanced metrics.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IsBindAll Whether the policy is associated with all objects
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Policy tag
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ConditionTemplateId",$param) and $param["ConditionTemplateId"] !== null) {
            $this->ConditionTemplateId = $param["ConditionTemplateId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new AlarmNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new ConditionsTemp();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NamespaceShowName",$param) and $param["NamespaceShowName"] !== null) {
            $this->NamespaceShowName = $param["NamespaceShowName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("InstanceGroupName",$param) and $param["InstanceGroupName"] !== null) {
            $this->InstanceGroupName = $param["InstanceGroupName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("TagInstances",$param) and $param["TagInstances"] !== null) {
            $this->TagInstances = [];
            foreach ($param["TagInstances"] as $key => $value){
                $obj = new TagInstance();
                $obj->deserialize($value);
                array_push($this->TagInstances, $obj);
            }
        }

        if (array_key_exists("FilterDimensionsParam",$param) and $param["FilterDimensionsParam"] !== null) {
            $this->FilterDimensionsParam = $param["FilterDimensionsParam"];
        }

        if (array_key_exists("IsOneClick",$param) and $param["IsOneClick"] !== null) {
            $this->IsOneClick = $param["IsOneClick"];
        }

        if (array_key_exists("OneClickStatus",$param) and $param["OneClickStatus"] !== null) {
            $this->OneClickStatus = $param["OneClickStatus"];
        }

        if (array_key_exists("AdvancedMetricNumber",$param) and $param["AdvancedMetricNumber"] !== null) {
            $this->AdvancedMetricNumber = $param["AdvancedMetricNumber"];
        }

        if (array_key_exists("IsBindAll",$param) and $param["IsBindAll"] !== null) {
            $this->IsBindAll = $param["IsBindAll"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
