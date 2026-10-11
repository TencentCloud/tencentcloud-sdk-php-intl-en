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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkflow request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method WorkflowBaseInfo getBaseInfo() Obtain <p>Workflow basic info. Required, where WorkflowName is required and unique within the workspace</p>
 * @method void setBaseInfo(WorkflowBaseInfo $BaseInfo) Set <p>Workflow basic info. Required, where WorkflowName is required and unique within the workspace</p>
 * @method array getTrigger() Obtain <p>Workflow scheduling configuration.</p>
 * @method void setTrigger(array $Trigger) Set <p>Workflow scheduling configuration.</p>
 * @method array getParamList() Obtain <p>Workflow parameter list</p>
 * @method void setParamList(array $ParamList) Set <p>Workflow parameter list</p>
 * @method array getLabelList() Obtain <p>Tag list.</p>
 * @method void setLabelList(array $LabelList) Set <p>Tag list.</p>
 * @method AlarmBrief getAlarm() Obtain <p>Workflow alert configuration.</p>
 * @method void setAlarm(AlarmBrief $Alarm) Set <p>Workflow alert configuration.</p>
 * @method MonitorMetricBrief getMonitorMetric() Obtain <p>Monitoring metrics configuration. If monitoring and alerting is selected in the alarm condition, this field is required.</p>
 * @method void setMonitorMetric(MonitorMetricBrief $MonitorMetric) Set <p>Monitoring metrics configuration. If monitoring and alerting is selected in the alarm condition, this field is required.</p>
 * @method WorkflowAdvanceConfig getAdvanceConfig() Obtain <p>Workflow advanced setting.</p>
 * @method void setAdvanceConfig(WorkflowAdvanceConfig $AdvanceConfig) Set <p>Workflow advanced setting.</p>
 * @method array getTaskList() Obtain <p>Workflow task list</p>
 * @method void setTaskList(array $TaskList) Set <p>Workflow task list</p>
 * @method string getBundleId() Obtain <p>BundleId, obtainable through the Bundle API</p>
 * @method void setBundleId(string $BundleId) Set <p>BundleId, obtainable through the Bundle API</p>
 * @method string getBundleInfo() Obtain <p>Bundle information</p>
 * @method void setBundleInfo(string $BundleInfo) Set <p>Bundle information</p>
 * @method string getGitConfigId() Obtain <p>Git configuration ID, which can be obtained through Git configuration APIs.</p>
 * @method void setGitConfigId(string $GitConfigId) Set <p>Git configuration ID, which can be obtained through Git configuration APIs.</p>
 * @method string getGitBranch() Obtain <p>Git branch information.</p>
 * @method void setGitBranch(string $GitBranch) Set <p>Git branch information.</p>
 */
class CreateWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     */
    public $WorkspaceId;

    /**
     * @var WorkflowBaseInfo <p>Workflow basic info. Required, where WorkflowName is required and unique within the workspace</p>
     */
    public $BaseInfo;

    /**
     * @var array <p>Workflow scheduling configuration.</p>
     */
    public $Trigger;

    /**
     * @var array <p>Workflow parameter list</p>
     */
    public $ParamList;

    /**
     * @var array <p>Tag list.</p>
     */
    public $LabelList;

    /**
     * @var AlarmBrief <p>Workflow alert configuration.</p>
     */
    public $Alarm;

    /**
     * @var MonitorMetricBrief <p>Monitoring metrics configuration. If monitoring and alerting is selected in the alarm condition, this field is required.</p>
     */
    public $MonitorMetric;

    /**
     * @var WorkflowAdvanceConfig <p>Workflow advanced setting.</p>
     */
    public $AdvanceConfig;

    /**
     * @var array <p>Workflow task list</p>
     */
    public $TaskList;

    /**
     * @var string <p>BundleId, obtainable through the Bundle API</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bundle information</p>
     */
    public $BundleInfo;

    /**
     * @var string <p>Git configuration ID, which can be obtained through Git configuration APIs.</p>
     */
    public $GitConfigId;

    /**
     * @var string <p>Git branch information.</p>
     */
    public $GitBranch;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param WorkflowBaseInfo $BaseInfo <p>Workflow basic info. Required, where WorkflowName is required and unique within the workspace</p>
     * @param array $Trigger <p>Workflow scheduling configuration.</p>
     * @param array $ParamList <p>Workflow parameter list</p>
     * @param array $LabelList <p>Tag list.</p>
     * @param AlarmBrief $Alarm <p>Workflow alert configuration.</p>
     * @param MonitorMetricBrief $MonitorMetric <p>Monitoring metrics configuration. If monitoring and alerting is selected in the alarm condition, this field is required.</p>
     * @param WorkflowAdvanceConfig $AdvanceConfig <p>Workflow advanced setting.</p>
     * @param array $TaskList <p>Workflow task list</p>
     * @param string $BundleId <p>BundleId, obtainable through the Bundle API</p>
     * @param string $BundleInfo <p>Bundle information</p>
     * @param string $GitConfigId <p>Git configuration ID, which can be obtained through Git configuration APIs.</p>
     * @param string $GitBranch <p>Git branch information.</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new WorkflowBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = [];
            foreach ($param["Trigger"] as $key => $value){
                $obj = new WorkflowTriggerConfiguration();
                $obj->deserialize($value);
                array_push($this->Trigger, $obj);
            }
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("Alarm",$param) and $param["Alarm"] !== null) {
            $this->Alarm = new AlarmBrief();
            $this->Alarm->deserialize($param["Alarm"]);
        }

        if (array_key_exists("MonitorMetric",$param) and $param["MonitorMetric"] !== null) {
            $this->MonitorMetric = new MonitorMetricBrief();
            $this->MonitorMetric->deserialize($param["MonitorMetric"]);
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = new WorkflowAdvanceConfig();
            $this->AdvanceConfig->deserialize($param["AdvanceConfig"]);
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new WorkflowTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GitConfigId",$param) and $param["GitConfigId"] !== null) {
            $this->GitConfigId = $param["GitConfigId"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }
    }
}
