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
 * CreateSchedule request structure.
 *
 * @method string getScheduleName() Obtain The scheme name (max 128 characters). This name should be unique across your account.
 * @method void setScheduleName(string $ScheduleName) Set The scheme name (max 128 characters). This name should be unique across your account.
 * @method WorkflowTrigger getTrigger() Obtain The trigger of the scheme. If a file is uploaded to the specified bucket, the scheme will be triggered.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set The trigger of the scheme. If a file is uploaded to the specified bucket, the scheme will be triggered.
 * @method array getActivities() Obtain The subtasks of the scheme.
 * @method void setActivities(array $Activities) Set The subtasks of the scheme.
 * @method TaskOutputStorage getOutputStorage() Obtain The bucket to save the output file. If you do not specify this parameter, the bucket in `Trigger` will be used.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The bucket to save the output file. If you do not specify this parameter, the bucket in `Trigger` will be used.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain The notification configuration. If you do not specify this parameter, notifications will not be sent.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set The notification configuration. If you do not specify this parameter, notifications will not be sent.
 * @method string getResourceId() Obtain Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 */
class CreateScheduleRequest extends AbstractModel
{
    /**
     * @var string The scheme name (max 128 characters). This name should be unique across your account.
     */
    public $ScheduleName;

    /**
     * @var WorkflowTrigger The trigger of the scheme. If a file is uploaded to the specified bucket, the scheme will be triggered.
     */
    public $Trigger;

    /**
     * @var array The subtasks of the scheme.
     */
    public $Activities;

    /**
     * @var TaskOutputStorage The bucket to save the output file. If you do not specify this parameter, the bucket in `Trigger` will be used.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
     */
    public $OutputDir;

    /**
     * @var TaskNotifyConfig The notification configuration. If you do not specify this parameter, notifications will not be sent.
     */
    public $TaskNotifyConfig;

    /**
     * @var string Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
     */
    public $ResourceId;

    /**
     * @param string $ScheduleName The scheme name (max 128 characters). This name should be unique across your account.
     * @param WorkflowTrigger $Trigger The trigger of the scheme. If a file is uploaded to the specified bucket, the scheme will be triggered.
     * @param array $Activities The subtasks of the scheme.
     * @param TaskOutputStorage $OutputStorage The bucket to save the output file. If you do not specify this parameter, the bucket in `Trigger` will be used.
     * @param string $OutputDir The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
     * @param TaskNotifyConfig $TaskNotifyConfig The notification configuration. If you do not specify this parameter, notifications will not be sent.
     * @param string $ResourceId Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
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
