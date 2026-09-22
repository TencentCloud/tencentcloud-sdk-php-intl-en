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
 * File upload task information
 *
 * @method string getFileId() Obtain Unique file ID.
 * @method void setFileId(string $FileId) Set Unique file ID.
 * @method MediaBasicInfo getMediaBasicInfo() Obtain Basic information of the media file generated after upload completion.
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set Basic information of the media file generated after upload completion.
 * @method string getProcedureTaskId() Obtain Task ID for the task type `Procedure`. If A task (Procedure) is specified during video upload, the task is initiated when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, or `AiRecognitionTask`.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set Task ID for the task type `Procedure`. If A task (Procedure) is specified during video upload, the task is initiated when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, or `AiRecognitionTask`.
 * @method string getReviewAudioVideoTaskId() Obtain Task ID of the ReviewAudioVideo task type. If a task procedure is specified during video upload (https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), the task is initiated when the task flow template specifies ReviewAudioVideoTask.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set Task ID of the ReviewAudioVideo task type. If a task procedure is specified during video upload (https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), the task is initiated when the task flow template specifies ReviewAudioVideoTask.
 * @method MediaMetaData getMetaData() Obtain Metadata, including size, duration, video stream information, and audio stream information.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata, including size, duration, video stream information, and audio stream information.
 */
class FileUploadTask extends AbstractModel
{
    /**
     * @var string Unique file ID.
     */
    public $FileId;

    /**
     * @var MediaBasicInfo Basic information of the media file generated after upload completion.
     */
    public $MediaBasicInfo;

    /**
     * @var string Task ID for the task type `Procedure`. If A task (Procedure) is specified during video upload, the task is initiated when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, or `AiRecognitionTask`.
     */
    public $ProcedureTaskId;

    /**
     * @var string Task ID of the ReviewAudioVideo task type. If a task procedure is specified during video upload (https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), the task is initiated when the task flow template specifies ReviewAudioVideoTask.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var MediaMetaData Metadata, including size, duration, video stream information, and audio stream information.
     */
    public $MetaData;

    /**
     * @param string $FileId Unique file ID.
     * @param MediaBasicInfo $MediaBasicInfo Basic information of the media file generated after upload completion.
     * @param string $ProcedureTaskId Task ID for the task type `Procedure`. If A task (Procedure) is specified during video upload, the task is initiated when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, or `AiRecognitionTask`.
     * @param string $ReviewAudioVideoTaskId Task ID of the ReviewAudioVideo task type. If a task procedure is specified during video upload (https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), the task is initiated when the task flow template specifies ReviewAudioVideoTask.
     * @param MediaMetaData $MetaData Metadata, including size, duration, video stream information, and audio stream information.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaBasicInfo",$param) and $param["MediaBasicInfo"] !== null) {
            $this->MediaBasicInfo = new MediaBasicInfo();
            $this->MediaBasicInfo->deserialize($param["MediaBasicInfo"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
