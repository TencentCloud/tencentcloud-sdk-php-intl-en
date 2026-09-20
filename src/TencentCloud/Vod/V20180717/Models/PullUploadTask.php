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
 * Pull upload task information
 *
 * @method string getTaskId() Obtain <p>Pull the upload task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Pull the upload task ID.</p>
 * @method string getStatus() Obtain <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain <p>Error code. 0 indicates success, and other values indicate failure:</p><li>40000: Invalid input parameters. Check the input parameters.</li><li>60000: Source file error (for example, video data corruption). Confirm whether the source file is normal.</li><li>70000: Internal service error. Retry is recommended.</li>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. 0 indicates success, and other values indicate failure:</p><li>40000: Invalid input parameters. Check the input parameters.</li><li>60000: Source file error (for example, video data corruption). Confirm whether the source file is normal.</li><li>70000: Internal service error. Retry is recommended.</li>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method string getFileId() Obtain <p>Pull the video ID generated after upload completion.</p>
 * @method void setFileId(string $FileId) Set <p>Pull the video ID generated after upload completion.</p>
 * @method MediaBasicInfo getMediaBasicInfo() Obtain <p>Pull basic information of the generated media file after upload completion.</p>
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set <p>Pull basic information of the generated media file after upload completion.</p>
 * @method MediaMetaData getMetaData() Obtain <p>Meta-information of the output video.</p>
 * @method void setMetaData(MediaMetaData $MetaData) Set <p>Meta-information of the output video.</p>
 * @method string getFileUrl() Obtain <p>Get the playback address generated after upload completion.</p>
 * @method void setFileUrl(string $FileUrl) Set <p>Get the playback address generated after upload completion.</p>
 * @method string getProcedureTaskId() Obtain <p>Task ID of the task type Procedure. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, and AiRecognitionTask.</p>
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set <p>Task ID of the task type Procedure. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, and AiRecognitionTask.</p>
 * @method string getReviewAudioVideoTaskId() Obtain <p>Task ID of the task type ReviewAudioVideo. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies ReviewAudioVideoTask.</p>
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set <p>Task ID of the task type ReviewAudioVideo. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies ReviewAudioVideoTask.</p>
 * @method string getSessionContext() Obtain <p>Source context, used to pass through user request information. <a href="https://www.tencentcloud.com/document/product/266/7831?from_cn_redirect=1">URL pull video upload completed</a> will return the value of this field, up to 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context, used to pass through user request information. <a href="https://www.tencentcloud.com/document/product/266/7831?from_cn_redirect=1">URL pull video upload completed</a> will return the value of this field, up to 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method integer getProgress() Obtain <p>Pull the upload progress, with a value range of [0-100].</p>
 * @method void setProgress(integer $Progress) Set <p>Pull the upload progress, with a value range of [0-100].</p>
 */
class PullUploadTask extends AbstractModel
{
    /**
     * @var string <p>Pull the upload task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer <p>Error code. 0 indicates success, and other values indicate failure:</p><li>40000: Invalid input parameters. Check the input parameters.</li><li>60000: Source file error (for example, video data corruption). Confirm whether the source file is normal.</li><li>70000: Internal service error. Retry is recommended.</li>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var string <p>Pull the video ID generated after upload completion.</p>
     */
    public $FileId;

    /**
     * @var MediaBasicInfo <p>Pull basic information of the generated media file after upload completion.</p>
     */
    public $MediaBasicInfo;

    /**
     * @var MediaMetaData <p>Meta-information of the output video.</p>
     */
    public $MetaData;

    /**
     * @var string <p>Get the playback address generated after upload completion.</p>
     */
    public $FileUrl;

    /**
     * @var string <p>Task ID of the task type Procedure. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, and AiRecognitionTask.</p>
     */
    public $ProcedureTaskId;

    /**
     * @var string <p>Task ID of the task type ReviewAudioVideo. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies ReviewAudioVideoTask.</p>
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var string <p>Source context, used to pass through user request information. <a href="https://www.tencentcloud.com/document/product/266/7831?from_cn_redirect=1">URL pull video upload completed</a> will return the value of this field, up to 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var integer <p>Pull the upload progress, with a value range of [0-100].</p>
     */
    public $Progress;

    /**
     * @param string $TaskId <p>Pull the upload task ID.</p>
     * @param string $Status <p>Task flow status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     * @param integer $ErrCode <p>Error code. 0 indicates success, and other values indicate failure:</p><li>40000: Invalid input parameters. Check the input parameters.</li><li>60000: Source file error (for example, video data corruption). Confirm whether the source file is normal.</li><li>70000: Internal service error. Retry is recommended.</li>
     * @param string $Message <p>Error message.</p>
     * @param string $FileId <p>Pull the video ID generated after upload completion.</p>
     * @param MediaBasicInfo $MediaBasicInfo <p>Pull basic information of the generated media file after upload completion.</p>
     * @param MediaMetaData $MetaData <p>Meta-information of the output video.</p>
     * @param string $FileUrl <p>Get the playback address generated after upload completion.</p>
     * @param string $ProcedureTaskId <p>Task ID of the task type Procedure. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, and AiRecognitionTask.</p>
     * @param string $ReviewAudioVideoTaskId <p>Task ID of the task type ReviewAudioVideo. If a media subsequent task operation (Procedure) is specified during <a href="https://www.tencentcloud.com/document/api/266/35575?from_cn_redirect=1">pull upload</a>, the task is initiated when the task flow template specifies ReviewAudioVideoTask.</p>
     * @param string $SessionContext <p>Source context, used to pass through user request information. <a href="https://www.tencentcloud.com/document/product/266/7831?from_cn_redirect=1">URL pull video upload completed</a> will return the value of this field, up to 1000 characters.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param integer $Progress <p>Pull the upload progress, with a value range of [0-100].</p>
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

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
