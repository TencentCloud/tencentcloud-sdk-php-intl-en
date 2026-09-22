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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio/Video processing task information
 *
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain Deprecated. Please use the ErrCode of each specific task.
 * @method void setErrCode(integer $ErrCode) Set Deprecated. Please use the ErrCode of each specific task.
 * @method string getMessage() Obtain Deprecated. Please use the Message of each specific task.
 * @method void setMessage(string $Message) Set Deprecated. Please use the Message of each specific task.
 * @method string getFileId() Obtain Media file ID
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents the FileId of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Id of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method void setFileId(string $FileId) Set Media file ID
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents the FileId of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Id of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method string getFileName() Obtain Media file name
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.Name of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Name of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method void setFileName(string $FileName) Set Media file name
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.Name of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Name of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method string getFileUrl() Obtain Media file address
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.MediaUrl of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Url of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method void setFileUrl(string $FileUrl) Set Media file address
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.MediaUrl of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Url of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
 * @method MediaMetaData getMetaData() Obtain Metadata of the original audio/video.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of the original audio/video.
 * @method array getMediaProcessResultSet() Obtain Execution status and results of the audio/video processing task.
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set Execution status and results of the audio/video processing task.
 * @method array getAiContentReviewResultSet() Obtain Execution status and results of a video moderation task.
 * @method void setAiContentReviewResultSet(array $AiContentReviewResultSet) Set Execution status and results of a video moderation task.
 * @method array getAiAnalysisResultSet() Obtain Execution status and results of an audio/video content analysis task.
 * @method void setAiAnalysisResultSet(array $AiAnalysisResultSet) Set Execution status and results of an audio/video content analysis task.
 * @method array getAiRecognitionResultSet() Obtain Execution status and results of an audio/video content recognition task.
 * @method void setAiRecognitionResultSet(array $AiRecognitionResultSet) Set Execution status and results of an audio/video content recognition task.
 * @method integer getTasksPriority() Obtain Priority of the task flow, with a value range of [-10, 10].
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow, with a value range of [-10, 10].
 * @method string getTasksNotifyMode() Obtain Task flow status change notification mode.
<li>Finish: Initiate an event notification only when all task flows are completed;</li>
<li>Change: As long as the state of each subtask in the task flow changes, an event notification will be sent;</li>
<li>None: non-acceptance of the task flow callback.</li>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set Task flow status change notification mode.
<li>Finish: Initiate an event notification only when all task flows are completed;</li>
<li>Change: As long as the state of each subtask in the task flow changes, an event notification will be sent;</li>
<li>None: non-acceptance of the task flow callback.</li>
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getOperator() Obtain Operator. Value range:
<li>System: indicates a system trigger.</li>
 * @method void setOperator(string $Operator) Set Operator. Value range:
<li>System: indicates a system trigger.</li>
 * @method string getOperationType() Obtain Operation type. Valid values:
<li>TSC: indicates usage of top speed Codec for smart bitrate reduction.</li>
 * @method void setOperationType(string $OperationType) Set Operation type. Valid values:
<li>TSC: indicates usage of top speed Codec for smart bitrate reduction.</li>
 */
class ProcedureTask extends AbstractModel
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
     * @var integer Deprecated. Please use the ErrCode of each specific task.
     * @deprecated
     */
    public $ErrCode;

    /**
     * @var string Deprecated. Please use the Message of each specific task.
     * @deprecated
     */
    public $Message;

    /**
     * @var string Media file ID
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents the FileId of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Id of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     */
    public $FileId;

    /**
     * @var string Media file name
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.Name of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Name of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     */
    public $FileName;

    /**
     * @var string Media file address
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.MediaUrl of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Url of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     */
    public $FileUrl;

    /**
     * @var MediaMetaData Metadata of the original audio/video.
     */
    public $MetaData;

    /**
     * @var array Execution status and results of the audio/video processing task.
     */
    public $MediaProcessResultSet;

    /**
     * @var array Execution status and results of a video moderation task.
     */
    public $AiContentReviewResultSet;

    /**
     * @var array Execution status and results of an audio/video content analysis task.
     */
    public $AiAnalysisResultSet;

    /**
     * @var array Execution status and results of an audio/video content recognition task.
     */
    public $AiRecognitionResultSet;

    /**
     * @var integer Priority of the task flow, with a value range of [-10, 10].
     */
    public $TasksPriority;

    /**
     * @var string Task flow status change notification mode.
<li>Finish: Initiate an event notification only when all task flows are completed;</li>
<li>Change: As long as the state of each subtask in the task flow changes, an event notification will be sent;</li>
<li>None: non-acceptance of the task flow callback.</li>
     */
    public $TasksNotifyMode;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Operator. Value range:
<li>System: indicates a system trigger.</li>
     */
    public $Operator;

    /**
     * @var string Operation type. Valid values:
<li>TSC: indicates usage of top speed Codec for smart bitrate reduction.</li>
     */
    public $OperationType;

    /**
     * @param string $TaskId Media processing task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode Deprecated. Please use the ErrCode of each specific task.
     * @param string $Message Deprecated. Please use the Message of each specific task.
     * @param string $FileId Media file ID
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents the FileId of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Id of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     * @param string $FileName Media file name
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.Name of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Name of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     * @param string $FileUrl Media file address
<li>If the process is initiated by [ProcessMedia](https://www.tencentcloud.com/document/product/266/33427?from_cn_redirect=1), this field represents BasicInfo.MediaUrl of [MediaInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInfo);</li>
<li>If the process is initiated by [ProcessMediaByUrl](https://www.tencentcloud.com/document/product/266/33426?from_cn_redirect=1), this field represents the Url of [MediaInputInfo](https://www.tencentcloud.com/document/product/266/31773?from_cn_redirect=1#MediaInputInfo).</li>
     * @param MediaMetaData $MetaData Metadata of the original audio/video.
     * @param array $MediaProcessResultSet Execution status and results of the audio/video processing task.
     * @param array $AiContentReviewResultSet Execution status and results of a video moderation task.
     * @param array $AiAnalysisResultSet Execution status and results of an audio/video content analysis task.
     * @param array $AiRecognitionResultSet Execution status and results of an audio/video content recognition task.
     * @param integer $TasksPriority Priority of the task flow, with a value range of [-10, 10].
     * @param string $TasksNotifyMode Task flow status change notification mode.
<li>Finish: Initiate an event notification only when all task flows are completed;</li>
<li>Change: As long as the state of each subtask in the task flow changes, an event notification will be sent;</li>
<li>None: non-acceptance of the task flow callback.</li>
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $Operator Operator. Value range:
<li>System: indicates a system trigger.</li>
     * @param string $OperationType Operation type. Valid values:
<li>TSC: indicates usage of top speed Codec for smart bitrate reduction.</li>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
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

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
