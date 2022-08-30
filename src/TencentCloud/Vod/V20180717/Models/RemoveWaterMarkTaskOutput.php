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
 * @method string getFileId() Obtain The file ID of the video.
 * @method void setFileId(string $FileId) Set The file ID of the video.
 * @method MediaMetaData getMetaData() Obtain The metadata of the video, including size, duration, video stream information, and audio stream information.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the video, including size, duration, video stream information, and audio stream information.
 */
class RemoveWaterMarkTaskOutput extends AbstractModel
{
    /**
     * @var string The file ID of the video.
     */
    public $FileId;

    /**
     * @var MediaMetaData The metadata of the video, including size, duration, video stream information, and audio stream information.
     */
    public $MetaData;

    /**
     * @param string $FileId The file ID of the video.
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
