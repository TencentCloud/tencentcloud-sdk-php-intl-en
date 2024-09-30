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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of a scheme.
 *
 * @method integer getScheduleId() Obtain The scheme ID.
 * @method void setScheduleId(integer $ScheduleId) Set The scheme ID.
 * @method string getScheduleName() Obtain The scheme name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleName(string $ScheduleName) Set The scheme name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain The scheme type. Valid values:
 <li>`Preset`</li>
<li>`Custom` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The scheme type. Valid values:
 <li>`Preset`</li>
<li>`Custom` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain The scheme status. Valid values:
`Enabled`
`Disabled`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set The scheme status. Valid values:
`Enabled`
`Disabled`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WorkflowTrigger getTrigger() Obtain The trigger of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set The trigger of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActivities() Obtain The subtasks of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActivities(array $Activities) Set The subtasks of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain The bucket to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The bucket to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputDir() Obtain The directory to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain The notification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set The notification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The last updated time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceId() Obtain Resource ID. For those without an associated resource ID, fill in with an account's primary resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID. For those without an associated resource ID, fill in with an account's primary resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SchedulesInfo extends AbstractModel
{
    /**
     * @var integer The scheme ID.
     */
    public $ScheduleId;

    /**
     * @var string The scheme name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleName;

    /**
     * @var string The scheme type. Valid values:
 <li>`Preset`</li>
<li>`Custom` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string The scheme status. Valid values:
`Enabled`
`Disabled`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var WorkflowTrigger The trigger of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Trigger;

    /**
     * @var array The subtasks of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Activities;

    /**
     * @var TaskOutputStorage The bucket to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig The notification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var string The creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string The last updated time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Resource ID. For those without an associated resource ID, fill in with an account's primary resource ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @param integer $ScheduleId The scheme ID.
     * @param string $ScheduleName The scheme name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type The scheme type. Valid values:
 <li>`Preset`</li>
<li>`Custom` </li>
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Status The scheme status. Valid values:
`Enabled`
`Disabled`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WorkflowTrigger $Trigger The trigger of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Activities The subtasks of the scheme.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage The bucket to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputDir The directory to save the output file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskNotifyConfig $TaskNotifyConfig The notification configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime The last updated time in [ISO date format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceId Resource ID. For those without an associated resource ID, fill in with an account's primary resource ID.
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("ScheduleName",$param) and $param["ScheduleName"] !== null) {
            $this->ScheduleName = $param["ScheduleName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WorkflowTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("Activities",$param) and $param["Activities"] !== null) {
            $this->Activities = [];
            foreach ($param["Activities"] as $key => $value){
                $obj = new Activity();
                $obj->deserialize($value);
                array_push($this->Activities, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
