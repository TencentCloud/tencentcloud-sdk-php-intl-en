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
 * Media processing task information
 *
 * @method string getTaskId() Obtain <p>Media processing task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Media processing task ID.</p>
 * @method string getStatus() Obtain <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain <p>Returns a non-zero error code when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Returns a non-zero error code when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
 * @method string getMessage() Obtain <p>Returns the corresponding error Message when a source error occurs. Otherwise, use the Message of each specific task.</p>
 * @method void setMessage(string $Message) Set <p>Returns the corresponding error Message when a source error occurs. Otherwise, use the Message of each specific task.</p>
 * @method MediaInputInfo getInputInfo() Obtain <p>Target file information of media processing.</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set <p>Target file information of media processing.</p>
 * @method MediaMetaData getMetaData() Obtain <p>Metadata of the original video.</p>
 * @method void setMetaData(MediaMetaData $MetaData) Set <p>Metadata of the original video.</p>
 * @method array getMediaProcessResultSet() Obtain <p>Execution status and result of the media processing task.</p>
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set <p>Execution status and result of the media processing task.</p>
 * @method array getAiContentReviewResultSet() Obtain <p>Execution status and results of the video content review task.</p>
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) Set <p>Execution status and results of the video content review task.</p>
 * @method array getAiAnalysisResultSet() Obtain <p>Execution status and results of the video content analysis task.</p>
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) Set <p>Execution status and results of the video content analysis task.</p>
 * @method array getAiRecognitionResultSet() Obtain <p>Execution status and results of the video content recognition task.</p>
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) Set <p>Execution status and results of the video content recognition task.</p>
 * @method ScheduleQualityControlTaskResult getAiQualityControlTaskResult() Obtain <p>Execution status and results of a media quality inspection task.</p>
 * @method void setAiQualityControlTaskResult(ScheduleQualityControlTaskResult $AiQualityControlTaskResult) Set <p>Execution status and results of a media quality inspection task.</p>
 * @method array getSmartSubtitlesTaskResult() Obtain <p>Execution result of the smart subtitle task</p>
 * @method void setSmartSubtitlesTaskResult(array $SmartSubtitlesTaskResult) Set <p>Execution result of the smart subtitle task</p>
 * @method SmartEraseTaskResult getSmartEraseTaskResult() Obtain <p>Outcome of the intelligent erasure task</p>
 * @method void setSmartEraseTaskResult(SmartEraseTaskResult $SmartEraseTaskResult) Set <p>Outcome of the intelligent erasure task</p>
 * @method AIDubbingTaskResult getAiDubbingTaskResult() Obtain <p>Outcome of the AI dubbing task.</p>
 * @method void setAiDubbingTaskResult(AIDubbingTaskResult $AiDubbingTaskResult) Set <p>Outcome of the AI dubbing task.</p>
 */
class WorkflowTask extends AbstractModel
{
    /**
     * @var string <p>Media processing task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer <p>Returns a non-zero error code when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Returns the corresponding error Message when a source error occurs. Otherwise, use the Message of each specific task.</p>
     */
    public $Message;

    /**
     * @var MediaInputInfo <p>Target file information of media processing.</p>
     */
    public $InputInfo;

    /**
     * @var MediaMetaData <p>Metadata of the original video.</p>
     */
    public $MetaData;

    /**
     * @var array <p>Execution status and result of the media processing task.</p>
     */
    public $MediaProcessResultSet;

    /**
     * @var array <p>Execution status and results of the video content review task.</p>
     */
    public $AiContentReviewResultSet;

    /**
     * @var array <p>Execution status and results of the video content analysis task.</p>
     */
    public $AiAnalysisResultSet;

    /**
     * @var array <p>Execution status and results of the video content recognition task.</p>
     */
    public $AiRecognitionResultSet;

    /**
     * @var ScheduleQualityControlTaskResult <p>Execution status and results of a media quality inspection task.</p>
     */
    public $AiQualityControlTaskResult;

    /**
     * @var array <p>Execution result of the smart subtitle task</p>
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @var SmartEraseTaskResult <p>Outcome of the intelligent erasure task</p>
     */
    public $SmartEraseTaskResult;

    /**
     * @var AIDubbingTaskResult <p>Outcome of the AI dubbing task.</p>
     */
    public $AiDubbingTaskResult;

    /**
     * @param string $TaskId <p>Media processing task ID.</p>
     * @param string $Status <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     * @param integer $ErrCode <p>Returns a non-zero error code when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
     * @param string $Message <p>Returns the corresponding error Message when a source error occurs. Otherwise, use the Message of each specific task.</p>
     * @param MediaInputInfo $InputInfo <p>Target file information of media processing.</p>
     * @param MediaMetaData $MetaData <p>Metadata of the original video.</p>
     * @param array $MediaProcessResultSet <p>Execution status and result of the media processing task.</p>
     * @param array $AiContentReviewResultSet <p>Execution status and results of the video content review task.</p>
     * @param array $AiAnalysisResultSet <p>Execution status and results of the video content analysis task.</p>
     * @param array $AiRecognitionResultSet <p>Execution status and results of the video content recognition task.</p>
     * @param ScheduleQualityControlTaskResult $AiQualityControlTaskResult <p>Execution status and results of a media quality inspection task.</p>
     * @param array $SmartSubtitlesTaskResult <p>Execution result of the smart subtitle task</p>
     * @param SmartEraseTaskResult $SmartEraseTaskResult <p>Outcome of the intelligent erasure task</p>
     * @param AIDubbingTaskResult $AiDubbingTaskResult <p>Outcome of the AI dubbing task.</p>
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

        if (array_key_exists("AiDubbingTaskResult",$param) and $param["AiDubbingTaskResult"] !== null) {
            $this->AiDubbingTaskResult = new AIDubbingTaskResult();
            $this->AiDubbingTaskResult->deserialize($param["AiDubbingTaskResult"]);
        }
    }
}
