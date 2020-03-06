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
 * @method string getFileId() Obtain Unique file ID.
 * @method void setFileId(string $FileId) Set Unique file ID.
 * @method MediaBasicInfo getMediaBasicInfo() Obtain Basic information of media file generated after upload is completed.
 * @method void setMediaBasicInfo(MediaBasicInfo $MediaBasicInfo) Set Basic information of media file generated after upload is completed.
 * @method string getProcedureTaskId() Obtain If a video processing flow is specified when a video is uploaded, this field will be the ID of the task flow.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set If a video processing flow is specified when a video is uploaded, this field will be the ID of the task flow.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaMetaData getMetaData() Obtain Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *File upload task information
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
     * @var string If a video processing flow is specified when a video is uploaded, this field will be the ID of the task flow.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProcedureTaskId;

    /**
     * @var MediaMetaData Metadata, such as size, duration, video stream information, audio stream information, etc.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;
    /**
     * @param string $FileId Unique file ID.
     * @param MediaBasicInfo $MediaBasicInfo Basic information of media file generated after upload is completed.
     * @param string $ProcedureTaskId If a video processing flow is specified when a video is uploaded, this field will be the ID of the task flow.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
