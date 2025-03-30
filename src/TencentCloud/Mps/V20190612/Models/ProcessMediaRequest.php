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
 * ProcessMedia request structure.
 *
 * @method MediaInputInfo getInputInfo() Obtain The information of the file to process.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set The information of the file to process.
 * @method TaskOutputStorage getOutputStorage() Obtain Target storage for Media Processing Service output files. If left blank, it inherits the storage location in InputInfo.

Note: When InputInfo.Type is URL, this parameter is required.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target storage for Media Processing Service output files. If left blank, it inherits the storage location in InputInfo.

Note: When InputInfo.Type is URL, this parameter is required.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this parameter, the file will be saved to the directory specified in `InputInfo`.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this parameter, the file will be saved to the directory specified in `InputInfo`.
 * @method integer getScheduleId() Obtain Orchestration ID.
Note 1: For parameters OutputStorage and OutputDir:
<li>When a sub-task node in service orchestration has OutputStorage and OutputDir configured, the output configured in this sub-task node is used as the output of the sub-task.</li>
<li>When a sub-task node in service orchestration does not have OutputStorage and OutputDir configured, if the task creation API (ProcessMedia) has specified an output, it will override the default output of the original orchestration.</li>
<li>The priority of output settings is: Orchestration sub-task node > Output specified by the task API > Corresponding configuration within an orchestration.</li>
Note 2: For the TaskNotifyConfig parameter, if the task creation API (ProcessMedia) has set this parameter, it will override the default callback of the original orchestration.

Note 3: The trigger configured for an orchestration is for automatically starting the orchestration. It stops working when you manually call this API to start an orchestration.
 * @method void setScheduleId(integer $ScheduleId) Set Orchestration ID.
Note 1: For parameters OutputStorage and OutputDir:
<li>When a sub-task node in service orchestration has OutputStorage and OutputDir configured, the output configured in this sub-task node is used as the output of the sub-task.</li>
<li>When a sub-task node in service orchestration does not have OutputStorage and OutputDir configured, if the task creation API (ProcessMedia) has specified an output, it will override the default output of the original orchestration.</li>
<li>The priority of output settings is: Orchestration sub-task node > Output specified by the task API > Corresponding configuration within an orchestration.</li>
Note 2: For the TaskNotifyConfig parameter, if the task creation API (ProcessMedia) has set this parameter, it will override the default callback of the original orchestration.

Note 3: The trigger configured for an orchestration is for automatically starting the orchestration. It stops working when you manually call this API to start an orchestration.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain The media processing parameters to use.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set The media processing parameters to use.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Type parameter of a video content audit task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Type parameter of a video content audit task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Video content analysis task parameter.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Video content analysis task parameter.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of a video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of a video content recognition task.
 * @method AiQualityControlTaskInput getAiQualityControlTask() Obtain Media quality inspection type task parameters.
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) Set Media quality inspection type task parameters.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
 * @method integer getTasksPriority() Obtain Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method string getSessionId() Obtain Identification code for deduplication, up to 50 characters. If a request with the same identification code was made within the past 3 days, an error will be returned for the current request. If this parameter is not provided or is an empty string, deduplication will not be performed for this request.
 * @method void setSessionId(string $SessionId) Set Identification code for deduplication, up to 50 characters. If a request with the same identification code was made within the past 3 days, an error will be returned for the current request. If this parameter is not provided or is an empty string, deduplication will not be performed for this request.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method string getTaskType() Obtain The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
 * @method void setTaskType(string $TaskType) Set The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
 * @method string getResourceId() Obtain Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain Smart subtitle task.
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) Set Smart subtitle task.
 * @method integer getSkipMateData() Obtain Whether to skip metadata acquisition. Valid values:
0: do not skip
1: skip
Default value: 0		
 * @method void setSkipMateData(integer $SkipMateData) Set Whether to skip metadata acquisition. Valid values:
0: do not skip
1: skip
Default value: 0		
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo The information of the file to process.
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage Target storage for Media Processing Service output files. If left blank, it inherits the storage location in InputInfo.

Note: When InputInfo.Type is URL, this parameter is required.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this parameter, the file will be saved to the directory specified in `InputInfo`.
     */
    public $OutputDir;

    /**
     * @var integer Orchestration ID.
Note 1: For parameters OutputStorage and OutputDir:
<li>When a sub-task node in service orchestration has OutputStorage and OutputDir configured, the output configured in this sub-task node is used as the output of the sub-task.</li>
<li>When a sub-task node in service orchestration does not have OutputStorage and OutputDir configured, if the task creation API (ProcessMedia) has specified an output, it will override the default output of the original orchestration.</li>
<li>The priority of output settings is: Orchestration sub-task node > Output specified by the task API > Corresponding configuration within an orchestration.</li>
Note 2: For the TaskNotifyConfig parameter, if the task creation API (ProcessMedia) has set this parameter, it will override the default callback of the original orchestration.

Note 3: The trigger configured for an orchestration is for automatically starting the orchestration. It stops working when you manually call this API to start an orchestration.
     */
    public $ScheduleId;

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
     * @var AiQualityControlTaskInput Media quality inspection type task parameters.
     */
    public $AiQualityControlTask;

    /**
     * @var TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string Identification code for deduplication, up to 50 characters. If a request with the same identification code was made within the past 3 days, an error will be returned for the current request. If this parameter is not provided or is an empty string, deduplication will not be performed for this request.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
     */
    public $TaskType;

    /**
     * @var string Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
     */
    public $ResourceId;

    /**
     * @var SmartSubtitlesTaskInput Smart subtitle task.
     */
    public $SmartSubtitlesTask;

    /**
     * @var integer Whether to skip metadata acquisition. Valid values:
0: do not skip
1: skip
Default value: 0		
     */
    public $SkipMateData;

    /**
     * @param MediaInputInfo $InputInfo The information of the file to process.
     * @param TaskOutputStorage $OutputStorage Target storage for Media Processing Service output files. If left blank, it inherits the storage location in InputInfo.

Note: When InputInfo.Type is URL, this parameter is required.
     * @param string $OutputDir The directory to save the media processing output file, which must start and end with `/`, such as `/movie/201907/`.
If you do not specify this parameter, the file will be saved to the directory specified in `InputInfo`.
     * @param integer $ScheduleId Orchestration ID.
Note 1: For parameters OutputStorage and OutputDir:
<li>When a sub-task node in service orchestration has OutputStorage and OutputDir configured, the output configured in this sub-task node is used as the output of the sub-task.</li>
<li>When a sub-task node in service orchestration does not have OutputStorage and OutputDir configured, if the task creation API (ProcessMedia) has specified an output, it will override the default output of the original orchestration.</li>
<li>The priority of output settings is: Orchestration sub-task node > Output specified by the task API > Corresponding configuration within an orchestration.</li>
Note 2: For the TaskNotifyConfig parameter, if the task creation API (ProcessMedia) has set this parameter, it will override the default callback of the original orchestration.

Note 3: The trigger configured for an orchestration is for automatically starting the orchestration. It stops working when you manually call this API to start an orchestration.
     * @param MediaProcessTaskInput $MediaProcessTask The media processing parameters to use.
     * @param AiContentReviewTaskInput $AiContentReviewTask Type parameter of a video content audit task.
     * @param AiAnalysisTaskInput $AiAnalysisTask Video content analysis task parameter.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of a video content recognition task.
     * @param AiQualityControlTaskInput $AiQualityControlTask Media quality inspection type task parameters.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
     * @param integer $TasksPriority Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     * @param string $SessionId Identification code for deduplication, up to 50 characters. If a request with the same identification code was made within the past 3 days, an error will be returned for the current request. If this parameter is not provided or is an empty string, deduplication will not be performed for this request.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param string $TaskType The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
     * @param string $ResourceId Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask Smart subtitle task.
     * @param integer $SkipMateData Whether to skip metadata acquisition. Valid values:
0: do not skip
1: skip
Default value: 0		
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
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

        if (array_key_exists("AiQualityControlTask",$param) and $param["AiQualityControlTask"] !== null) {
            $this->AiQualityControlTask = new AiQualityControlTaskInput();
            $this->AiQualityControlTask->deserialize($param["AiQualityControlTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SkipMateData",$param) and $param["SkipMateData"] !== null) {
            $this->SkipMateData = $param["SkipMateData"];
        }
    }
}
