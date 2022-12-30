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
 * @method TaskOutputStorage getOutputStorage() Obtain The storage location of the media processing output file. If this parameter is left empty, the storage location in `InputInfo` will be inherited.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The storage location of the media processing output file. If this parameter is left empty, the storage location in `InputInfo` will be inherited.
 * @method string getOutputDir() Obtain The directory to save the media processing output file, such as `/movie/201907/`. If this parameter is left empty, the file will be saved to the directory in `InputInfo`.
 * @method void setOutputDir(string $OutputDir) Set The directory to save the media processing output file, such as `/movie/201907/`. If this parameter is left empty, the file will be saved to the directory in `InputInfo`.
 * @method MediaProcessTaskInput getMediaProcessTask() Obtain The media processing parameters to use.
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) Set The media processing parameters to use.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Type parameter of a video content audit task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Type parameter of a video content audit task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain Video content analysis task parameter.
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set Video content analysis task parameter.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of a video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of a video content recognition task.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
 * @method integer getTasksPriority() Obtain Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method integer getScheduleId() Obtain The scheme ID.
Note 1: About `OutputStorage` and `OutputDir`
<li>If an output storage and directory are specified for a subtask of the scheme, those output settings will be applied.</li>
<li>If an output storage and directory are not specified for the subtasks of a scheme, the output parameters passed in the `ProcessMedia` API will be applied.</li>
Note 2: If `TaskNotifyConfig` is specified, the specified settings will be used instead of the default callback settings of the scheme.

Note 3: The trigger configured for a scheme is for automatically starting a scheme. It stops working when you manually call this API to start a scheme.
 * @method void setScheduleId(integer $ScheduleId) Set The scheme ID.
Note 1: About `OutputStorage` and `OutputDir`
<li>If an output storage and directory are specified for a subtask of the scheme, those output settings will be applied.</li>
<li>If an output storage and directory are not specified for the subtasks of a scheme, the output parameters passed in the `ProcessMedia` API will be applied.</li>
Note 2: If `TaskNotifyConfig` is specified, the specified settings will be used instead of the default callback settings of the scheme.

Note 3: The trigger configured for a scheme is for automatically starting a scheme. It stops working when you manually call this API to start a scheme.
 * @method string getTaskType() Obtain The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
 * @method void setTaskType(string $TaskType) Set The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
 */
class ProcessMediaRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo The information of the file to process.
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage The storage location of the media processing output file. If this parameter is left empty, the storage location in `InputInfo` will be inherited.
     */
    public $OutputStorage;

    /**
     * @var string The directory to save the media processing output file, such as `/movie/201907/`. If this parameter is left empty, the file will be saved to the directory in `InputInfo`.
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
     * @var TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The scheme ID.
Note 1: About `OutputStorage` and `OutputDir`
<li>If an output storage and directory are specified for a subtask of the scheme, those output settings will be applied.</li>
<li>If an output storage and directory are not specified for the subtasks of a scheme, the output parameters passed in the `ProcessMedia` API will be applied.</li>
Note 2: If `TaskNotifyConfig` is specified, the specified settings will be used instead of the default callback settings of the scheme.

Note 3: The trigger configured for a scheme is for automatically starting a scheme. It stops working when you manually call this API to start a scheme.
     */
    public $ScheduleId;

    /**
     * @var string The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
     */
    public $TaskType;

    /**
     * @param MediaInputInfo $InputInfo The information of the file to process.
     * @param TaskOutputStorage $OutputStorage The storage location of the media processing output file. If this parameter is left empty, the storage location in `InputInfo` will be inherited.
     * @param string $OutputDir The directory to save the media processing output file, such as `/movie/201907/`. If this parameter is left empty, the file will be saved to the directory in `InputInfo`.
     * @param MediaProcessTaskInput $MediaProcessTask The media processing parameters to use.
     * @param AiContentReviewTaskInput $AiContentReviewTask Type parameter of a video content audit task.
     * @param AiAnalysisTaskInput $AiAnalysisTask Video content analysis task parameter.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of a video content recognition task.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of a task. If this parameter is left empty, no event notifications will be obtained.
     * @param integer $TasksPriority Task flow priority. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param integer $ScheduleId The scheme ID.
Note 1: About `OutputStorage` and `OutputDir`
<li>If an output storage and directory are specified for a subtask of the scheme, those output settings will be applied.</li>
<li>If an output storage and directory are not specified for the subtasks of a scheme, the output parameters passed in the `ProcessMedia` API will be applied.</li>
Note 2: If `TaskNotifyConfig` is specified, the specified settings will be used instead of the default callback settings of the scheme.

Note 3: The trigger configured for a scheme is for automatically starting a scheme. It stops working when you manually call this API to start a scheme.
     * @param string $TaskType The task type.
<li> `Online` (default): A task that is executed immediately.</li>
<li> `Offline`: A task that is executed when the system is idle (within three days by default).</li>
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

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
