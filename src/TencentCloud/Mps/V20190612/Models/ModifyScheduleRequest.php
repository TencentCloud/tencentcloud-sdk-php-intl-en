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
 * ModifySchedule request structure.
 *
 * @method integer getScheduleId() Obtain The scheme ID.
 * @method void setScheduleId(integer $ScheduleId) Set The scheme ID.
 * @method string getScheduleName() Obtain The scheme name.
 * @method void setScheduleName(string $ScheduleName) Set The scheme name.
 * @method WorkflowTrigger getTrigger() Obtain The trigger of the scheme.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set The trigger of the scheme.
 * @method array getActivities() Obtain The subtasks of the scheme.
Note: You need to pass in the full list of subtasks even if you want to change only some of the subtasks.
 * @method void setActivities(array $Activities) Set The subtasks of the scheme.
Note: You need to pass in the full list of subtasks even if you want to change only some of the subtasks.
 * @method TaskOutputStorage getOutputStorage() Obtain The bucket to save the output file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The bucket to save the output file.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, which must start and end with `/`.
Note: If this parameter is left empty, the current `OutputDir` value will be invalidated.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, which must start and end with `/`.
Note: If this parameter is left empty, the current `OutputDir` value will be invalidated.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain The notification configuration.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set The notification configuration.
 * @method string getResourceId() Obtain Resource ID. Ensure the corresponding resource is in the enabled state.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure the corresponding resource is in the enabled state.
 */
class ModifyScheduleRequest extends AbstractModel
{
    /**
     * @var integer The scheme ID.
     */
    public $ScheduleId;

    /**
     * @var string The scheme name.
     */
    public $ScheduleName;

    /**
     * @var WorkflowTrigger The trigger of the scheme.
     */
    public $Trigger;

    /**
     * @var array The subtasks of the scheme.
Note: You need to pass in the full list of subtasks even if you want to change only some of the subtasks.
     */
    public $Activities;

    /**
     * @var TaskOutputStorage The bucket to save the output file.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the media processing output file, which must start and end with `/`.
Note: If this parameter is left empty, the current `OutputDir` value will be invalidated.
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig The notification configuration.
     */
    public $TaskNotifyConfig;

    /**
     * @var string Resource ID. Ensure the corresponding resource is in the enabled state.
     */
    public $ResourceId;

    /**
     * @param integer $ScheduleId The scheme ID.
     * @param string $ScheduleName The scheme name.
     * @param WorkflowTrigger $Trigger The trigger of the scheme.
     * @param array $Activities The subtasks of the scheme.
Note: You need to pass in the full list of subtasks even if you want to change only some of the subtasks.
     * @param TaskOutputStorage $OutputStorage The bucket to save the output file.
     * @param string $OutputDir The directory to save the media processing output file, which must start and end with `/`.
Note: If this parameter is left empty, the current `OutputDir` value will be invalidated.
     * @param TaskNotifyConfig $TaskNotifyConfig The notification configuration.
     * @param string $ResourceId Resource ID. Ensure the corresponding resource is in the enabled state.
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
