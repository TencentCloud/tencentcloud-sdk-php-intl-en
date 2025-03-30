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
 * The information of the media processing task.
 *
 * @method string getTaskId() Obtain The media processing task ID.
 * @method void setTaskId(string $TaskId) Set The media processing task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
 * @method void setErrCode(integer $ErrCode) Set If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
 * @method string getMessage() Obtain Except those for source errors, error messages vary with task type.
 * @method void setMessage(string $Message) Set Except those for source errors, error messages vary with task type.
 * @method MediaInputInfo getInputInfo() Obtain The information of the file processed.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set The information of the file processed.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method MediaMetaData getMetaData() Obtain Metadata of a source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of a source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMediaProcessResultSet() Obtain The execution status and result of the media processing task.
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set The execution status and result of the media processing task.
 * @method array getAiContentReviewResultSet() Obtain Execution status and result of a video content audit task.
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) Set Execution status and result of a video content audit task.
 * @method array getAiAnalysisResultSet() Obtain Execution status and result of video content analysis task.
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) Set Execution status and result of video content analysis task.
 * @method array getAiRecognitionResultSet() Obtain Execution status and result of a video content recognition task.
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) Set Execution status and result of a video content recognition task.
 * @method ScheduleQualityControlTaskResult getAiQualityControlTaskResult() Obtain Execution status and results of a media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiQualityControlTaskResult(ScheduleQualityControlTaskResult $AiQualityControlTaskResult) Set Execution status and results of a media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSmartSubtitlesTaskResult() Obtain Execution result of the smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSmartSubtitlesTaskResult(array $SmartSubtitlesTaskResult) Set Execution result of the smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var string The media processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
     */
    public $ErrCode;

    /**
     * @var string Except those for source errors, error messages vary with task type.
     */
    public $Message;

    /**
     * @var MediaInputInfo The information of the file processed.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InputInfo;

    /**
     * @var MediaMetaData Metadata of a source video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @var array The execution status and result of the media processing task.
     */
    public $MediaProcessResultSet;

    /**
     * @var array Execution status and result of a video content audit task.
     */
    public $AiContentReviewResultSet;

    /**
     * @var array Execution status and result of video content analysis task.
     */
    public $AiAnalysisResultSet;

    /**
     * @var array Execution status and result of a video content recognition task.
     */
    public $AiRecognitionResultSet;

    /**
     * @var ScheduleQualityControlTaskResult Execution status and results of a media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiQualityControlTaskResult;

    /**
     * @var array Execution result of the smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @param string $TaskId The media processing task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed.</li>
     * @param integer $ErrCode If the value returned is not 0, there was a source error. If 0 is returned, refer to the error codes of the corresponding task type.
     * @param string $Message Except those for source errors, error messages vary with task type.
     * @param MediaInputInfo $InputInfo The information of the file processed.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param MediaMetaData $MetaData Metadata of a source video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MediaProcessResultSet The execution status and result of the media processing task.
     * @param array $AiContentReviewResultSet Execution status and result of a video content audit task.
     * @param array $AiAnalysisResultSet Execution status and result of video content analysis task.
     * @param array $AiRecognitionResultSet Execution status and result of a video content recognition task.
     * @param ScheduleQualityControlTaskResult $AiQualityControlTaskResult Execution status and results of a media quality inspection task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SmartSubtitlesTaskResult Execution result of the smart subtitle task.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new MediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("AiContentReviewResultSet",$param) and $param["AiContentReviewResultSet"] !== null) {
            $this->AiContentReviewResultSet = [];
            foreach ($param["AiContentReviewResultSet"] as $key => $value){
                $obj = new AiContentReviewResult();
                $obj->deserialize($value);
                array_push($this->AiContentReviewResultSet, $obj);
            }
        }

        if (array_key_exists("AiAnalysisResultSet",$param) and $param["AiAnalysisResultSet"] !== null) {
            $this->AiAnalysisResultSet = [];
            foreach ($param["AiAnalysisResultSet"] as $key => $value){
                $obj = new AiAnalysisResult();
                $obj->deserialize($value);
                array_push($this->AiAnalysisResultSet, $obj);
            }
        }

        if (array_key_exists("AiRecognitionResultSet",$param) and $param["AiRecognitionResultSet"] !== null) {
            $this->AiRecognitionResultSet = [];
            foreach ($param["AiRecognitionResultSet"] as $key => $value){
                $obj = new AiRecognitionResult();
                $obj->deserialize($value);
                array_push($this->AiRecognitionResultSet, $obj);
            }
        }

        if (array_key_exists("AiQualityControlTaskResult",$param) and $param["AiQualityControlTaskResult"] !== null) {
            $this->AiQualityControlTaskResult = new ScheduleQualityControlTaskResult();
            $this->AiQualityControlTaskResult->deserialize($param["AiQualityControlTaskResult"]);
        }

        if (array_key_exists("SmartSubtitlesTaskResult",$param) and $param["SmartSubtitlesTaskResult"] !== null) {
            $this->SmartSubtitlesTaskResult = [];
            foreach ($param["SmartSubtitlesTaskResult"] as $key => $value){
                $obj = new SmartSubtitlesResult();
                $obj->deserialize($value);
                array_push($this->SmartSubtitlesTaskResult, $obj);
            }
        }
    }
}
