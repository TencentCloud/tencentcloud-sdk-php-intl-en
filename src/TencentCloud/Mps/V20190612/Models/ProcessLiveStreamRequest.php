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
 * ProcessLiveStream request structure.
 *
 * @method string getUrl() Obtain Live stream URL, which must be a live stream file address. RTMP, HLS, and FLV are supported.
 * @method void setUrl(string $Url) Set Live stream URL, which must be a live stream file address. RTMP, HLS, and FLV are supported.
 * @method LiveStreamTaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of a task, which is used to specify the live stream processing result.
 * @method void setTaskNotifyConfig(LiveStreamTaskNotifyConfig $TaskNotifyConfig) Set Event notification information of a task, which is used to specify the live stream processing result.
 * @method TaskOutputStorage getOutputStorage() Obtain Target bucket of a live stream processing output file. This parameter is required if a file will be output.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target bucket of a live stream processing output file. This parameter is required if a file will be output.
 * @method string getOutputDir() Obtain Target directory of a live stream processing output file, such as `/movie/201909/`. If this parameter is left empty, the `/` directory will be used.
 * @method void setOutputDir(string $OutputDir) Set Target directory of a live stream processing output file, such as `/movie/201909/`. If this parameter is left empty, the `/` directory will be used.
 * @method AiContentReviewTaskInput getAiContentReviewTask() Obtain Type parameter of a video content audit task.
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) Set Type parameter of a video content audit task.
 * @method AiRecognitionTaskInput getAiRecognitionTask() Obtain Type parameter of video content recognition task.
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) Set Type parameter of video content recognition task.
 * @method AiAnalysisTaskInput getAiAnalysisTask() Obtain 
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) Set 
 * @method AiQualityControlTaskInput getAiQualityControlTask() Obtain Media quality inspection type task parameters.
 * @method void setAiQualityControlTask(AiQualityControlTaskInput $AiQualityControlTask) Set Media quality inspection type task parameters.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method integer getScheduleId() Obtain The live scheme ID.
Note 1:
<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are specified for a subtask of the scheme, those output settings will be applied. </li>
u200c<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are not specified for a subtask of the scheme, the output parameters specified for `ProcessLiveStream` (if any) will be applied. </li>
Note 2: If `TaskNotifyConfig` is specified when `ProcessLiveStream` is called, the specified settings will be applied instead of the default callback settings of the scheme.
 * @method void setScheduleId(integer $ScheduleId) Set The live scheme ID.
Note 1:
<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are specified for a subtask of the scheme, those output settings will be applied. </li>
u200c<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are not specified for a subtask of the scheme, the output parameters specified for `ProcessLiveStream` (if any) will be applied. </li>
Note 2: If `TaskNotifyConfig` is specified when `ProcessLiveStream` is called, the specified settings will be applied instead of the default callback settings of the scheme.
 */
class ProcessLiveStreamRequest extends AbstractModel
{
    /**
     * @var string Live stream URL, which must be a live stream file address. RTMP, HLS, and FLV are supported.
     */
    public $Url;

    /**
     * @var LiveStreamTaskNotifyConfig Event notification information of a task, which is used to specify the live stream processing result.
     */
    public $TaskNotifyConfig;

    /**
     * @var TaskOutputStorage Target bucket of a live stream processing output file. This parameter is required if a file will be output.
     */
    public $OutputStorage;

    /**
     * @var string Target directory of a live stream processing output file, such as `/movie/201909/`. If this parameter is left empty, the `/` directory will be used.
     */
    public $OutputDir;

    /**
     * @var AiContentReviewTaskInput Type parameter of a video content audit task.
     */
    public $AiContentReviewTask;

    /**
     * @var AiRecognitionTaskInput Type parameter of video content recognition task.
     */
    public $AiRecognitionTask;

    /**
     * @var AiAnalysisTaskInput 
     */
    public $AiAnalysisTask;

    /**
     * @var AiQualityControlTaskInput Media quality inspection type task parameters.
     */
    public $AiQualityControlTask;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The live scheme ID.
Note 1:
<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are specified for a subtask of the scheme, those output settings will be applied. </li>
u200c<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are not specified for a subtask of the scheme, the output parameters specified for `ProcessLiveStream` (if any) will be applied. </li>
Note 2: If `TaskNotifyConfig` is specified when `ProcessLiveStream` is called, the specified settings will be applied instead of the default callback settings of the scheme.
     */
    public $ScheduleId;

    /**
     * @param string $Url Live stream URL, which must be a live stream file address. RTMP, HLS, and FLV are supported.
     * @param LiveStreamTaskNotifyConfig $TaskNotifyConfig Event notification information of a task, which is used to specify the live stream processing result.
     * @param TaskOutputStorage $OutputStorage Target bucket of a live stream processing output file. This parameter is required if a file will be output.
     * @param string $OutputDir Target directory of a live stream processing output file, such as `/movie/201909/`. If this parameter is left empty, the `/` directory will be used.
     * @param AiContentReviewTaskInput $AiContentReviewTask Type parameter of a video content audit task.
     * @param AiRecognitionTaskInput $AiRecognitionTask Type parameter of video content recognition task.
     * @param AiAnalysisTaskInput $AiAnalysisTask 
     * @param AiQualityControlTaskInput $AiQualityControlTask Media quality inspection type task parameters.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param integer $ScheduleId The live scheme ID.
Note 1:
<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are specified for a subtask of the scheme, those output settings will be applied. </li>
u200c<li>If an output storage (`OutputStorage`) and directory (`OutputDir`) are not specified for a subtask of the scheme, the output parameters specified for `ProcessLiveStream` (if any) will be applied. </li>
Note 2: If `TaskNotifyConfig` is specified when `ProcessLiveStream` is called, the specified settings will be applied instead of the default callback settings of the scheme.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new LiveStreamTaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiQualityControlTask",$param) and $param["AiQualityControlTask"] !== null) {
            $this->AiQualityControlTask = new AiQualityControlTaskInput();
            $this->AiQualityControlTask->deserialize($param["AiQualityControlTask"]);
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
    }
}
