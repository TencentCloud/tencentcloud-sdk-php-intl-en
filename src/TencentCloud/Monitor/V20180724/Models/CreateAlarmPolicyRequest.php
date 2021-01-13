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
 * @method string getNamespace() Obtain Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 * @method void setNamespace(string $Namespace) Set Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
 * @method string getRemark() Obtain Remarks with up to 100 letters, digits, underscores, and hyphens
 * @method void setRemark(string $Remark) Set Remarks with up to 100 letters, digits, underscores, and hyphens
 * @method integer getEnable() Obtain Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
 * @method void setEnable(integer $Enable) Set Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
 * @method integer getProjectId() Obtain Project ID. Valid values: -1 (no project), 0 (default project). Default value: -1. This parameter can be left empty
 * @method void setProjectId(integer $ProjectId) Set Project ID. Valid values: -1 (no project), 0 (default project). Default value: -1. This parameter can be left empty
 * @method AlarmPolicyCondition getCondition() Obtain Metric trigger condition
 * @method void setCondition(AlarmPolicyCondition $Condition) Set Metric trigger condition
 * @method AlarmPolicyEventCondition getEventCondition() Obtain Event trigger condition
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) Set Event trigger condition
 * @method array getNoticeIds() Obtain List of notification rule IDs, which is obtained through the `DescribeAlarmNotices` API
 * @method void setNoticeIds(array $NoticeIds) Set List of notification rule IDs, which is obtained through the `DescribeAlarmNotices` API
 * @method array getTriggerTasks() Obtain Triggered task list
 * @method void setTriggerTasks(array $TriggerTasks) Set Triggered task list
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
     * @var string Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
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
     * @var integer Project ID. Valid values: -1 (no project), 0 (default project). Default value: -1. This parameter can be left empty
     */
    public $ProjectId;

    /**
     * @var AlarmPolicyCondition Metric trigger condition
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition Event trigger condition
     */
    public $EventCondition;

    /**
     * @var array List of notification rule IDs, which is obtained through the `DescribeAlarmNotices` API
     */
    public $NoticeIds;

    /**
     * @var array Triggered task list
     */
    public $TriggerTasks;

    /**
     * @param string $Module Value fixed at "monitor"
     * @param string $PolicyName Policy name, which can contain up to 20 characters
     * @param string $MonitorType Monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring)
     * @param string $Namespace Alarm policy type such as cvm_device, which is obtained through the `DescribeAllNamespaces` API
     * @param string $Remark Remarks with up to 100 letters, digits, underscores, and hyphens
     * @param integer $Enable Whether to enable. Valid values: 0 (no), 1 (yes). Default value: 1. This parameter can be left empty
     * @param integer $ProjectId Project ID. Valid values: -1 (no project), 0 (default project). Default value: -1. This parameter can be left empty
     * @param AlarmPolicyCondition $Condition Metric trigger condition
     * @param AlarmPolicyEventCondition $EventCondition Event trigger condition
     * @param array $NoticeIds List of notification rule IDs, which is obtained through the `DescribeAlarmNotices` API
     * @param array $TriggerTasks Triggered task list
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
    }
}
