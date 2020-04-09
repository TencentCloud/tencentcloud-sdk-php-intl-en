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
 * VOD video file editing information
 *
 * @method string getFileId() Obtain Video ID.
 * @method void setFileId(string $FileId) Set Video ID.
 * @method float getStartTimeOffset() Obtain Start time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getEndTimeOffset() Obtain End time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EditMediaFileInfo extends AbstractModel
{
    /**
     * @var string Video ID.
     */
    public $FileId;

    /**
     * @var float Start time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId Video ID.
     * @param float $StartTimeOffset Start time offset of video clipping in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $EndTimeOffset End time offset of video clipping in seconds.
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
