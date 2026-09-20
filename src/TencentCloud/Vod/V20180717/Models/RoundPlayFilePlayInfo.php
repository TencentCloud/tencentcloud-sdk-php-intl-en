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
 * Playback information of the carousel program
 *
 * @method string getItemId() Obtain Playlist program ID assigned by the system.
 * @method void setItemId(string $ItemId) Set Playlist program ID assigned by the system.
 * @method string getFileId() Obtain Media file identifier.
 * @method void setFileId(string $FileId) Set Media file identifier.
 * @method string getStartPlayTime() Obtain Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartPlayTime(string $StartPlayTime) Set Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method float getDuration() Obtain Playback duration, in seconds.
 * @method void setDuration(float $Duration) Set Playback duration, in seconds.
 * @method float getProgress() Obtain Playback progress, in seconds.
 * @method void setProgress(float $Progress) Set Playback progress, in seconds.
 */
class RoundPlayFilePlayInfo extends AbstractModel
{
    /**
     * @var string Playlist program ID assigned by the system.
     */
    public $ItemId;

    /**
     * @var string Media file identifier.
     */
    public $FileId;

    /**
     * @var string Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartPlayTime;

    /**
     * @var float Playback duration, in seconds.
     */
    public $Duration;

    /**
     * @var float Playback progress, in seconds.
     */
    public $Progress;

    /**
     * @param string $ItemId Playlist program ID assigned by the system.
     * @param string $FileId Media file identifier.
     * @param string $StartPlayTime Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param float $Duration Playback duration, in seconds.
     * @param float $Progress Playback progress, in seconds.
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartPlayTime",$param) and $param["StartPlayTime"] !== null) {
            $this->StartPlayTime = $param["StartPlayTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
