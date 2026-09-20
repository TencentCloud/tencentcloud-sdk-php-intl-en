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
 * Output of the intelligent watermark removal task.
 *
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method string getFileType() Obtain File type, for example, mp4 or mp3.
 * @method void setFileType(string $FileType) Set File type, for example, mp4 or mp3.
 * @method string getFileUrl() Obtain Media file playback address.
 * @method void setFileUrl(string $FileUrl) Set Media file playback address.
 * @method string getMediaName() Obtain Filename, which contains up to 64 characters.
 * @method void setMediaName(string $MediaName) Set Filename, which contains up to 64 characters.
 * @method MediaMetaData getMetaData() Obtain Meta information, including size, duration, video stream information, and audio stream information.
 * @method void setMetaData(MediaMetaData $MetaData) Set Meta information, including size, duration, video stream information, and audio stream information.
 */
class RemoveWaterMarkTaskOutput extends AbstractModel
{
    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var string File type, for example, mp4 or mp3.
     */
    public $FileType;

    /**
     * @var string Media file playback address.
     */
    public $FileUrl;

    /**
     * @var string Filename, which contains up to 64 characters.
     */
    public $MediaName;

    /**
     * @var MediaMetaData Meta information, including size, duration, video stream information, and audio stream information.
     */
    public $MetaData;

    /**
     * @param string $FileId Media file ID.
     * @param string $FileType File type, for example, mp4 or mp3.
     * @param string $FileUrl Media file playback address.
     * @param string $MediaName Filename, which contains up to 64 characters.
     * @param MediaMetaData $MetaData Meta information, including size, duration, video stream information, and audio stream information.
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
