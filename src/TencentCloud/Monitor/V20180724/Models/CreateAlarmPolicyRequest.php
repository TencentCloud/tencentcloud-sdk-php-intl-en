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
 * CreateAlarmPolicy request structure.
 *
 * @method string getModule() Obtain Value fixed at "monitor"
 * @method void setModule(string $Module) Set Value fixed at "monitor"
 * @method string getPolicyName() Obtain Policy name, which can contain up to 20 characters
 * @method void setPolicyName(string $PolicyName) Set Policy name, which can contain up to 20 characters
 * @method string getMonitorType() Obtain Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
 * @method void setMonitorType(string $MonitorType) Set Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
 * @method string getNamespace() Obtain Type of alarm policy, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). An example value is `cvm_device`.
 * @method void setNamespace(string $Namespace) Set Type of alarm policy, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). An example value is `cvm_device`.
 * @method string getRemark() Obtain Remarks with up to 100 letters, digits, underscores, and hyphens
 * @method void setRemark(string $Remark) Set Remarks with up to 100 letters, digits, underscores, and hyphens
 * @method integer getEnable() Obtain Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
 * @method void setEnable(integer $Enable) Set Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
 * @method integer getProjectId() Obtain Project ID. For products with different projects, a value other than `-1` must be passed in. `-1`: no project; `0`: default project. If no value is passed in, `-1` will be used. The supported project IDs can be viewed on the [**Account Center** > **Project Management**](https://console.cloud.tencent.com/project) page of the console.
 * @method void setProjectId(integer $ProjectId) Set Project ID. For products with different projects, a value other than `-1` must be passed in. `-1`: no project; `0`: default project. If no value is passed in, `-1` will be used. The supported project IDs can be viewed on the [**Account Center** > **Project Management**](https://console.cloud.tencent.com/project) page of the console.
 * @method integer getConditionTemplateId() Obtain ID of trigger condition template. This parameter can be left empty.
 * @method void setConditionTemplateId(integer $ConditionTemplateId) Set ID of trigger condition template. This parameter can be left empty.
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition. The supported events can be queried via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition. The supported events can be queried via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
 * @method array getNoticeIds() Obtain List of notification rule IDs, which can be obtained via [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
 * @method void setNoticeIds(array $NoticeIds) Set List of notification rule IDs, which can be obtained via [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
 * @method array getTriggerTasks() Obtain Triggered task list
 * @method void setTriggerTasks(array $TriggerTasks) Set Triggered task list
 * @method AlarmPolicyFilter getFilter() Obtain Global filter.
 * @method void setFilter(AlarmPolicyFilter $Filter) Set Global filter.
 * @method array getGroupBy() Obtain Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
 * @method void setGroupBy(array $GroupBy) Set Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
 */
class CreateAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string Value fixed at "monitor"
     */
    public $Module;

    /**
     * @var string Policy name, which can contain up to 20 characters
     */
    public $PolicyName;

    /**
     * @var string Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
     */
    public $MonitorType;

    /**
     * @var string Type of alarm policy, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). An example value is `cvm_device`.
     */
    public $Namespace;

    /**
     * @var string Remarks with up to 100 letters, digits, underscores, and hyphens
     */
    public $Remark;

    /**
     * @var integer Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
     */
    public $Enable;

    /**
     * @var integer Project ID. For products with different projects, a value other than `-1` must be passed in. `-1`: no project; `0`: default project. If no value is passed in, `-1` will be used. The supported project IDs can be viewed on the [**Account Center** > **Project Management**](https://console.cloud.tencent.com/project) page of the console.
     */
    public $ProjectId;

    /**
     * @var integer ID of trigger condition template. This parameter can be left empty.
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition Metric trigger condition. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition. The supported events can be queried via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
     */
    public $EventCondition;

    /**
     * @var array List of notification rule IDs, which can be obtained via [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
     */
    public $NoticeIds;

    /**
     * @var array Triggered task list
     */
    public $TriggerTasks;

    /**
     * @var AlarmPolicyFilter Global filter.
     */
    public $Filter;

    /**
     * @var array Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
     */
    public $GroupBy;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param string $PolicyName Policy name, which can contain up to 20 characters
     * @param string $MonitorType Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
     * @param string $Namespace Type of alarm policy, which can be obtained via [DescribeAllNamespaces](https://intl.cloud.tencent.com/document/product/248/48683?from_cn_redirect=1). An example value is `cvm_device`.
     * @param string $Remark Remarks with up to 100 letters, digits, underscores, and hyphens
     * @param integer $Enable Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
     * @param integer $ProjectId Project ID. For products with different projects, a value other than `-1` must be passed in. `-1`: no project; `0`: default project. If no value is passed in, `-1` will be used. The supported project IDs can be viewed on the [**Account Center** > **Project Management**](https://console.cloud.tencent.com/project) page of the console.
     * @param integer $ConditionTemplateId ID of trigger condition template. This parameter can be left empty.
     * @param AlarmPolicyCondition $Condition Metric trigger condition. The supported metrics can be queried via [DescribeAlarmMetrics](https://intl.cloud.tencent.com/document/product/248/51283?from_cn_redirect=1).
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition. The supported events can be queried via [DescribeAlarmEvents](https://intl.cloud.tencent.com/document/product/248/51284?from_cn_redirect=1).
     * @param array $NoticeIds List of notification rule IDs, which can be obtained via [DescribeAlarmNotices](https://intl.cloud.tencent.com/document/product/248/51280?from_cn_redirect=1)
     * @param array $TriggerTasks Triggered task list
     * @param AlarmPolicyFilter $Filter Global filter.
     * @param array $GroupBy Aggregation dimension list, which is used to specify which dimension keys data is grouped by.
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }
    }
}
