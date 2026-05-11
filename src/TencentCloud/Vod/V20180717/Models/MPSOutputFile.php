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
 * For description of the returned file in an MPS video processing task.
 *
 * @method string getFileType() Obtain File type. Used to identify specific return files in the execution result of an MPS video processing task.
Value: <li>AiAnalysis.DeLogo.Video: The erased video file generated in the intelligent erasure task, stored in the original file type by default;</li> <li>AiAnalysis.DeLogo.OriginSubtitle: The subtitle file extracted from video in the intelligent erasure task;</li> <li>AiAnalysis.DeLogo.TranslateSubtitle: The translation file of subtitles extracted from video in the intelligent erasure task.</li> <li>MediaProcess.Transcode.Video: The enhanced audio and video file in the audio and video enhancement task, stored in the transcoded file type by default.</li>
<li>AiAnalysis.HorizontalToVerticalTask.Video: The generated video file in the horizontal to vertical task is stored as an intelligent media type by default.</li>
<li>AiAnalysis.VideoRemakeTaskk.Video: The generated video file in the intelligent deduplication task, stored as an intelligent media type by default.</li>
<li>AiAnalysis.SegmentTask.Video: Generated video file in the intelligent video splitting task, stored as intelligent media type by default.</li>
<li>SmartErase.Video: Generated video file in the intelligent erasure task, stored as intelligent media type by default.</li>

 * @method void setFileType(string $FileType) Set File type. Used to identify specific return files in the execution result of an MPS video processing task.
Value: <li>AiAnalysis.DeLogo.Video: The erased video file generated in the intelligent erasure task, stored in the original file type by default;</li> <li>AiAnalysis.DeLogo.OriginSubtitle: The subtitle file extracted from video in the intelligent erasure task;</li> <li>AiAnalysis.DeLogo.TranslateSubtitle: The translation file of subtitles extracted from video in the intelligent erasure task.</li> <li>MediaProcess.Transcode.Video: The enhanced audio and video file in the audio and video enhancement task, stored in the transcoded file type by default.</li>
<li>AiAnalysis.HorizontalToVerticalTask.Video: The generated video file in the horizontal to vertical task is stored as an intelligent media type by default.</li>
<li>AiAnalysis.VideoRemakeTaskk.Video: The generated video file in the intelligent deduplication task, stored as an intelligent media type by default.</li>
<li>AiAnalysis.SegmentTask.Video: Generated video file in the intelligent video splitting task, stored as intelligent media type by default.</li>
<li>SmartErase.Video: Generated video file in the intelligent erasure task, stored as intelligent media type by default.</li>

 * @method string getStorageMode() Obtain Storage format. To represent the storage format of the result file. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage.</li>
 * @method void setStorageMode(string $StorageMode) Set Storage format. To represent the storage format of the result file. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage.</li>
 * @method string getFileId() Obtain Media file ID. Valid when Type is Permanent, indicating that the result file is stored as a media asset on the VOD platform, with the field value being the FileId of the media asset.
 * @method void setFileId(string $FileId) Set Media file ID. Valid when Type is Permanent, indicating that the result file is stored as a media asset on the VOD platform, with the field value being the FileId of the media asset.
 * @method string getUrl() Obtain Downloadable Url of the result file.
 * @method void setUrl(string $Url) Set Downloadable Url of the result file.
 * @method string getDefinition() Obtain Transcoding specification ID. Valid when FileType equals MediaProcess.Transcode.Video. A value of 0 means the original file.
 * @method void setDefinition(string $Definition) Set Transcoding specification ID. Valid when FileType equals MediaProcess.Transcode.Video. A value of 0 means the original file.
 * @method integer getExpiredTime() Obtain Expiration time. Valid when StorageMode is Temporary, indicates the expiry date of the Url, in seconds.
 * @method void setExpiredTime(integer $ExpiredTime) Set Expiration time. Valid when StorageMode is Temporary, indicates the expiry date of the Url, in seconds.
 */
class MPSOutputFile extends AbstractModel
{
    /**
     * @var string File type. Used to identify specific return files in the execution result of an MPS video processing task.
Value: <li>AiAnalysis.DeLogo.Video: The erased video file generated in the intelligent erasure task, stored in the original file type by default;</li> <li>AiAnalysis.DeLogo.OriginSubtitle: The subtitle file extracted from video in the intelligent erasure task;</li> <li>AiAnalysis.DeLogo.TranslateSubtitle: The translation file of subtitles extracted from video in the intelligent erasure task.</li> <li>MediaProcess.Transcode.Video: The enhanced audio and video file in the audio and video enhancement task, stored in the transcoded file type by default.</li>
<li>AiAnalysis.HorizontalToVerticalTask.Video: The generated video file in the horizontal to vertical task is stored as an intelligent media type by default.</li>
<li>AiAnalysis.VideoRemakeTaskk.Video: The generated video file in the intelligent deduplication task, stored as an intelligent media type by default.</li>
<li>AiAnalysis.SegmentTask.Video: Generated video file in the intelligent video splitting task, stored as intelligent media type by default.</li>
<li>SmartErase.Video: Generated video file in the intelligent erasure task, stored as intelligent media type by default.</li>

     */
    public $FileType;

    /**
     * @var string Storage format. To represent the storage format of the result file. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage.</li>
     */
    public $StorageMode;

    /**
     * @var string Media file ID. Valid when Type is Permanent, indicating that the result file is stored as a media asset on the VOD platform, with the field value being the FileId of the media asset.
     */
    public $FileId;

    /**
     * @var string Downloadable Url of the result file.
     */
    public $Url;

    /**
     * @var string Transcoding specification ID. Valid when FileType equals MediaProcess.Transcode.Video. A value of 0 means the original file.
     */
    public $Definition;

    /**
     * @var integer Expiration time. Valid when StorageMode is Temporary, indicates the expiry date of the Url, in seconds.
     */
    public $ExpiredTime;

    /**
     * @param string $FileType File type. Used to identify specific return files in the execution result of an MPS video processing task.
Value: <li>AiAnalysis.DeLogo.Video: The erased video file generated in the intelligent erasure task, stored in the original file type by default;</li> <li>AiAnalysis.DeLogo.OriginSubtitle: The subtitle file extracted from video in the intelligent erasure task;</li> <li>AiAnalysis.DeLogo.TranslateSubtitle: The translation file of subtitles extracted from video in the intelligent erasure task.</li> <li>MediaProcess.Transcode.Video: The enhanced audio and video file in the audio and video enhancement task, stored in the transcoded file type by default.</li>
<li>AiAnalysis.HorizontalToVerticalTask.Video: The generated video file in the horizontal to vertical task is stored as an intelligent media type by default.</li>
<li>AiAnalysis.VideoRemakeTaskk.Video: The generated video file in the intelligent deduplication task, stored as an intelligent media type by default.</li>
<li>AiAnalysis.SegmentTask.Video: Generated video file in the intelligent video splitting task, stored as intelligent media type by default.</li>
<li>SmartErase.Video: Generated video file in the intelligent erasure task, stored as intelligent media type by default.</li>

     * @param string $StorageMode Storage format. To represent the storage format of the result file. Valid values: <li>Permanent: permanent storage;</li> <li>Temporary: temporary storage.</li>
     * @param string $FileId Media file ID. Valid when Type is Permanent, indicating that the result file is stored as a media asset on the VOD platform, with the field value being the FileId of the media asset.
     * @param string $Url Downloadable Url of the result file.
     * @param string $Definition Transcoding specification ID. Valid when FileType equals MediaProcess.Transcode.Video. A value of 0 means the original file.
     * @param integer $ExpiredTime Expiration time. Valid when StorageMode is Temporary, indicates the expiry date of the Url, in seconds.
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
