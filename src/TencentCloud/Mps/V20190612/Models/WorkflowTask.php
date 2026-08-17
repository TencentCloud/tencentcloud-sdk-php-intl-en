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
 * Media Processing Service task information
 *
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method void setErrCode(integer $ErrCode) Set An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method string getMessage() Obtain The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method void setMessage(string $Message) Set The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method MediaInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 * @method array getMediaProcessResultSet() Obtain Execution status and results of a Media Processing Service task.
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set Execution status and results of a Media Processing Service task.
 * @method array getAiContentReviewResultSet() Obtain Execution status and results of a video content review task.
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) Set Execution status and results of a video content review task.
 * @method array getAiAnalysisResultSet() Obtain Execution status and results of a video content analysis task.
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) Set Execution status and results of a video content analysis task.
 * @method array getAiRecognitionResultSet() Obtain Task execution status and results of the video content recognition task.
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) Set Task execution status and results of the video content recognition task.
 * @method ScheduleQualityControlTaskResult getAiQualityControlTaskResult() Obtain 
 * @method void setAiQualityControlTaskResult(ScheduleQualityControlTaskResult $AiQualityControlTaskResult) Set 
 * @method array getSmartSubtitlesTaskResult() Obtain 
 * @method void setSmartSubtitlesTaskResult(array $SmartSubtitlesTaskResult) Set 
 * @method SmartEraseTaskResult getSmartEraseTaskResult() Obtain 
 * @method void setSmartEraseTaskResult(SmartEraseTaskResult $SmartEraseTaskResult) Set 
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var string Media processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     */
    public $ErrCode;

    /**
     * @var string The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     */
    public $Message;

    /**
     * @var MediaInputInfo 
     */
    public $InputInfo;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @var array Execution status and results of a Media Processing Service task.
     */
    public $MediaProcessResultSet;

    /**
     * @var array Execution status and results of a video content review task.
     */
    public $AiContentReviewResultSet;

    /**
     * @var array Execution status and results of a video content analysis task.
     */
    public $AiAnalysisResultSet;

    /**
     * @var array Task execution status and results of the video content recognition task.
     */
    public $AiRecognitionResultSet;

    /**
     * @var ScheduleQualityControlTaskResult 
     */
    public $AiQualityControlTaskResult;

    /**
     * @var array 
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @var SmartEraseTaskResult 
     */
    public $SmartEraseTaskResult;

    /**
     * @param string $TaskId Media processing task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     * @param string $Message The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     * @param MediaInputInfo $InputInfo 
     * @param MediaMetaData $MetaData 
     * @param array $MediaProcessResultSet Execution status and results of a Media Processing Service task.
     * @param array $AiContentReviewResultSet Execution status and results of a video content review task.
     * @param array $AiAnalysisResultSet Execution status and results of a video content analysis task.
     * @param array $AiRecognitionResultSet Task execution status and results of the video content recognition task.
     * @param ScheduleQualityControlTaskResult $AiQualityControlTaskResult 
     * @param array $SmartSubtitlesTaskResult 
     * @param SmartEraseTaskResult $SmartEraseTaskResult 
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

        if (array_key_exists("SmartEraseTaskResult",$param) and $param["SmartEraseTaskResult"] !== null) {
            $this->SmartEraseTaskResult = new SmartEraseTaskResult();
            $this->SmartEraseTaskResult->deserialize($param["SmartEraseTaskResult"]);
        }
    }
}
