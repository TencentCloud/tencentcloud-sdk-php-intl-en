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
 * CreateWorkflow request structure.
 *
 * @method string getWorkflowName() Obtain Workflow name of up to 128 characters, which must be unique for the same user.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name of up to 128 characters, which must be unique for the same user.
 * @method WorkflowTrigger getTrigger() Obtain Triggering rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set Triggering rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
 * @method TaskOutputStorage getOutputStorage() Obtain The location to save the output file of media processing. If this parameter is left empty, the storage location in `Trigger` will be inherited.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The location to save the output file of media processing. If this parameter is left empty, the storage location in `Trigger` will be inherited.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain The media processing parameters to use.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set The media processing parameters to use.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Type parameter of a video content audit task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Type parameter of a video content audit task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Video content analysis task parameter.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Video content analysis task parameter.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of a video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of a video content recognition task.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification configuration for a task. If this parameter is left empty, no event notifications will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification configuration for a task. If this parameter is left empty, no event notifications will be obtained.
 * @method integer getTaskPriority() Obtain Workflow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method void setTaskPriority(integer $TaskPriority) Set Workflow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 */
class CreateWorkflowRequest extends AbstractModel
{
    /**
     * @var string Workflow name of up to 128 characters, which must be unique for the same user.
     */
    public $WorkflowName;

    /**
     * @var WorkflowTrigger Triggering rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
     */
    public $Trigger;

    /**
     * @var TaskOutputStorage The location to save the output file of media processing. If this parameter is left empty, the storage location in `Trigger` will be inherited.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
     */
    public $OutputDir;

    /**
     * @var MediaProcessTaskInput The media processing parameters to use.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput Type parameter of a video content audit task.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Video content analysis task parameter.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of a video content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var TaskNotifyConfig Event notification configuration for a task. If this parameter is left empty, no event notifications will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Workflow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     */
    public $TaskPriority;

    /**
     * @param string $WorkflowName Workflow name of up to 128 characters, which must be unique for the same user.
     * @param WorkflowTrigger $Trigger Triggering rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
     * @param TaskOutputStorage $OutputStorage The location to save the output file of media processing. If this parameter is left empty, the storage location in `Trigger` will be inherited.
     * @param string $OutputDir The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this, the file will be saved to the trigger directory.
     * @param MediaProcessTaskInput $MediaProcessTask The media processing parameters to use.
     * @param AiContentReviewTaskInput $AiContentReviewTask Type parameter of a video content audit task.
     * @param AiAnalysisTaskInput $AiAnalysisTask Video content analysis task parameter.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of a video content recognition task.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification configuration for a task. If this parameter is left empty, no event notifications will be obtained.
     * @param integer $TaskPriority Workflow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WorkflowTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TaskPriority",$param) and $param["TaskPriority"] !== null) {
            $this->TaskPriority = $param["TaskPriority"];
        }
    }
}
