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
 * Workflow information details.
 *
 * @method integer getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(integer $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getStatus() Obtain Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
 * @method void setStatus(string $Status) Set Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
 * @method WorkflowTrigger getTrigger() Obtain Input rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
 * @method void setTrigger(WorkflowTrigger $Trigger) Set Input rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
 * @method TaskOutputStorage getOutputStorage() Obtain The location to save the media processing output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The location to save the media processing output file.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain The media processing parameters to use.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set The media processing parameters to use.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Type parameter of a video content audit task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Type parameter of a video content audit task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Video content analysis task parameter.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Video content analysis task parameter.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of a video content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of a video content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskPriority() Obtain Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method void setTaskPriority(integer $TaskPriority) Set Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, such as `/movie/201907/`.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, such as `/movie/201907/`.
 * @method string getCreateTime() Obtain Creation time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
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
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
     */
    public $Status;

    /**
     * @var WorkflowTrigger Input rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
     */
    public $Trigger;

    /**
     * @var TaskOutputStorage The location to save the media processing output file.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputStorage;

    /**
     * @var MediaProcessTaskInput The media processing parameters to use.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput Type parameter of a video content audit task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput Video content analysis task parameter.
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of a video content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiRecognitionTask;

    /**
     * @var TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     */
    public $TaskPriority;

    /**
     * @var string The directory to save the media processing output file, such as `/movie/201907/`.
     */
    public $OutputDir;

    /**
     * @var string Creation time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @param integer $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $Status Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
     * @param WorkflowTrigger $Trigger Input rule bound to a workflow. If an uploaded video hits the rule for the object, the workflow will be triggered.
     * @param TaskOutputStorage $OutputStorage The location to save the media processing output file.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param MediaProcessTaskInput $MediaProcessTask The media processing parameters to use.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param AiContentReviewTaskInput $AiContentReviewTask Type parameter of a video content audit task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskInput $AiAnalysisTask Video content analysis task parameter.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of a video content recognition task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskPriority Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     * @param string $OutputDir The directory to save the media processing output file, such as `/movie/201907/`.
     * @param string $CreateTime Creation time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of a workflow in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
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
