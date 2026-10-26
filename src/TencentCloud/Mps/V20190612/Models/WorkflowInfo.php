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
 * Workflow information description.
 *
 * @method integer getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(integer $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getStatus() Obtain Workflow status. Valid values:
<li>Enabled: on</li>
<li>Disabled: Disabled.</li>
 * @method void setStatus(string $Status) Set Workflow status. Valid values:
<li>Enabled: on</li>
<li>Disabled: Disabled.</li>
 * @method WorkflowTrigger getTrigger() Obtain The input rule bound to the workflow triggers the workflow when an uploaded video hits the rule for the object.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set The input rule bound to the workflow triggers the workflow when an uploaded video hits the rule for the object.
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain 
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set 
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain 
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set 
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain 
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set 
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain 
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set 
 * @method integer getTaskPriority() Obtain Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTaskPriority(integer $TaskPriority) Set Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getOutputDir() Obtain Storage directory for the output file, such as `/movie/201907/`.
 * @method void setOutputDir(string $OutputDir) Set Storage directory for the output file, such as `/movie/201907/`.
 * @method string getCreateTime() Obtain Workflow creation time, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Workflow creation time, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the workflow, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the workflow, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var integer Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Workflow status. Valid values:
<li>Enabled: on</li>
<li>Disabled: Disabled.</li>
     */
    public $Status;

    /**
     * @var WorkflowTrigger The input rule bound to the workflow triggers the workflow when an uploaded video hits the rule for the object.
     */
    public $Trigger;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @var MediaProcessTaskInput 
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput 
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput 
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput 
     */
    public $AiRecognitionTask;

    /**
     * @var TaskNotifyConfig 
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TaskPriority;

    /**
     * @var string Storage directory for the output file, such as `/movie/201907/`.
     */
    public $OutputDir;

    /**
     * @var string Workflow creation time, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the workflow, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @param integer $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $Status Workflow status. Valid values:
<li>Enabled: on</li>
<li>Disabled: Disabled.</li>
     * @param WorkflowTrigger $Trigger The input rule bound to the workflow triggers the workflow when an uploaded video hits the rule for the object.
     * @param TaskOutputStorage $OutputStorage 
     * @param MediaProcessTaskInput $MediaProcessTask 
     * @param AiContentReviewTaskInput $AiContentReviewTask 
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiRecognitionTaskInput $AiRecognitionTask 
     * @param TaskNotifyConfig $TaskNotifyConfig 
     * @param integer $TaskPriority Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $OutputDir Storage directory for the output file, such as `/movie/201907/`.
     * @param string $CreateTime Workflow creation time, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the workflow, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WorkflowTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
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

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
