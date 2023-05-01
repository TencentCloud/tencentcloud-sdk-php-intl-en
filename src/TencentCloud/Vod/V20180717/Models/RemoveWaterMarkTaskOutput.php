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
 * The output of a watermark removal task.
 *
 * @method string getFileId() Obtain The file ID.
 * @method void setFileId(string $FileId) Set The file ID.
 * @method string getFileType() Obtain The file type, such as MP4 or MP3.
 * @method void setFileType(string $FileType) Set The file type, such as MP4 or MP3.
 * @method string getFileUrl() Obtain The playback URL of the output file.
 * @method void setFileUrl(string $FileUrl) Set The playback URL of the output file.
 * @method string getMediaName() Obtain The filename, which can be up to 64 characters long.
 * @method void setMediaName(string $MediaName) Set The filename, which can be up to 64 characters long.
 * @method MediaMetaData getMetaData() Obtain The metadata of the video, including size, duration, video stream information, and audio stream information.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the video, including size, duration, video stream information, and audio stream information.
 */
class RemoveWaterMarkTaskOutput extends AbstractModel
{
    /**
     * @var string The file ID.
     */
    public $FileId;

    /**
     * @var string The file type, such as MP4 or MP3.
     */
    public $FileType;

    /**
     * @var string The playback URL of the output file.
     */
    public $FileUrl;

    /**
     * @var string The filename, which can be up to 64 characters long.
     */
    public $MediaName;

    /**
     * @var MediaMetaData The metadata of the video, including size, duration, video stream information, and audio stream information.
     */
    public $MetaData;

    /**
     * @param string $FileId The file ID.
     * @param string $FileType The file type, such as MP4 or MP3.
     * @param string $FileUrl The playback URL of the output file.
     * @param string $MediaName The filename, which can be up to 64 characters long.
     * @param MediaMetaData $MetaData The metadata of the video, including size, duration, video stream information, and audio stream information.
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
