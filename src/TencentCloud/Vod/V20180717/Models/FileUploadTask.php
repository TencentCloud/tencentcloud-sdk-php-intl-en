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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File upload task information
 *
 * @method string getFileId() Obtain Unique file ID.
 * @method void setFileId(string $FileId) Set Unique file ID.
 * @method MediaBasicInfo getMediaBasicInfo() Obtain Basic information of media file generated after upload is completed.
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set Basic information of media file generated after upload is completed.
 * @method string getProcedureTaskId() Obtain The task ID for the task type `Procedure`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set The task ID for the task type `Procedure`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method string getReviewAudioVideoTaskId() Obtain The task ID for the task type `ReviewAudioVideo`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set The task ID for the task type `ReviewAudioVideo`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method MediaMetaData getMetaData() Obtain Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class FileUploadTask extends AbstractModel
{
    /**
     * @var string Unique file ID.
     */
    public $FileId;

    /**
     * @var MediaBasicInfo Basic information of media file generated after upload is completed.
     */
    public $MediaBasicInfo;

    /**
     * @var string The task ID for the task type `Procedure`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     */
    public $ProcedureTaskId;

    /**
     * @var string The task ID for the task type `ReviewAudioVideo`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var MediaMetaData Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @param string $FileId Unique file ID.
     * @param MediaBasicInfo $MediaBasicInfo Basic information of media file generated after upload is completed.
     * @param string $ProcedureTaskId The task ID for the task type `Procedure`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     * @param string $ReviewAudioVideoTaskId The task ID for the task type `ReviewAudioVideo`. If a task flow is specified for [uploaded media](https://intl.cloud.tencent.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E5.8F.91.E8.B5.B7), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     * @param MediaMetaData $MetaData Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
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
