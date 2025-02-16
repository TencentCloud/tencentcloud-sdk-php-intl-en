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
 * Playlist Program Playback Information
 *
 * @method string getItemId() Obtain Playlist program id, assigned by the system.
 * @method void setItemId(string $ItemId) Set Playlist program id, assigned by the system.
 * @method string getFileId() Obtain The media file id.
 * @method void setFileId(string $FileId) Set The media file id.
 * @method string getStartPlayTime() Obtain The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method void setStartPlayTime(string $StartPlayTime) Set The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method float getDuration() Obtain Playback duration, in seconds.
Note: this field may return null, indicating that no valid value was found.
 * @method void setDuration(float $Duration) Set Playback duration, in seconds.
Note: this field may return null, indicating that no valid value was found.
 * @method float getProgress() Obtain Playback progress, in seconds.
Note: this field may return null, indicating that no valid value was found.
 * @method void setProgress(float $Progress) Set Playback progress, in seconds.
Note: this field may return null, indicating that no valid value was found.
 */
class RoundPlayFilePlayInfo extends AbstractModel
{
    /**
     * @var string Playlist program id, assigned by the system.
     */
    public $ItemId;

    /**
     * @var string The media file id.
     */
    public $FileId;

    /**
     * @var string The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     */
    public $StartPlayTime;

    /**
     * @var float Playback duration, in seconds.
Note: this field may return null, indicating that no valid value was found.
     */
    public $Duration;

    /**
     * @var float Playback progress, in seconds.
Note: this field may return null, indicating that no valid value was found.
     */
    public $Progress;

    /**
     * @param string $ItemId Playlist program id, assigned by the system.
     * @param string $FileId The media file id.
     * @param string $StartPlayTime The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     * @param float $Duration Playback duration, in seconds.
Note: this field may return null, indicating that no valid value was found.
     * @param float $Progress Playback progress, in seconds.
Note: this field may return null, indicating that no valid value was found.
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
