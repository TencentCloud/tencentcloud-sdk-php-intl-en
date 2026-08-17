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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSchedule request structure.
 *
 * @method string getScheduleName() Obtain Orchestration name, up to 128 characters. The name is unique for the same user.
 * @method void setScheduleName(string $ScheduleName) Set Orchestration name, up to 128 characters. The name is unique for the same user.
 * @method WorkflowTrigger getTrigger() Obtain Orchestrate the bound trigger rule. The orchestration is triggered when an uploaded video hits the rule for the object.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set Orchestrate the bound trigger rule. The orchestration is triggered when an uploaded video hits the rule for the object.
 * @method array getActivities() Obtain Orchestration task list.
 * @method void setActivities(array $Activities) Set Orchestration task list.
 * @method TaskOutputStorage getOutputStorage() Obtain Media Processing Service output storage location. If left blank, it inherits the storage location from Trigger.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Media Processing Service output storage location. If left blank, it inherits the storage location from Trigger.
 * @method string getOutputDir() Obtain Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left empty, it is the same as the directory of the trigger file.
 * @method void setOutputDir(string $OutputDir) Set Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left empty, it is the same as the directory of the trigger file.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification configuration of the task. If left blank, it indicates that no event notification will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification configuration of the task. If left blank, it indicates that no event notification will be obtained.
 * @method string getResourceId() Obtain Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
 */
class CreateScheduleRequest extends AbstractModel
{
    /**
     * @var string Orchestration name, up to 128 characters. The name is unique for the same user.
     */
    public $ScheduleName;

    /**
     * @var WorkflowTrigger Orchestrate the bound trigger rule. The orchestration is triggered when an uploaded video hits the rule for the object.
     */
    public $Trigger;

    /**
     * @var array Orchestration task list.
     */
    public $Activities;

    /**
     * @var TaskOutputStorage Media Processing Service output storage location. If left blank, it inherits the storage location from Trigger.
     */
    public $OutputStorage;

    /**
     * @var string Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left empty, it is the same as the directory of the trigger file.
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig Event notification configuration of the task. If left blank, it indicates that no event notification will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var string Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
     */
    public $ResourceId;

    /**
     * @param string $ScheduleName Orchestration name, up to 128 characters. The name is unique for the same user.
     * @param WorkflowTrigger $Trigger Orchestrate the bound trigger rule. The orchestration is triggered when an uploaded video hits the rule for the object.
     * @param array $Activities Orchestration task list.
     * @param TaskOutputStorage $OutputStorage Media Processing Service output storage location. If left blank, it inherits the storage location from Trigger.
     * @param string $OutputDir Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left empty, it is the same as the directory of the trigger file.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification configuration of the task. If left blank, it indicates that no event notification will be obtained.
     * @param string $ResourceId Resource ID. Ensure that the corresponding resource is enabled. The default value is the primary resource ID of the account.
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
