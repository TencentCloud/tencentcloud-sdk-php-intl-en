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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the recording files, which is returned by the `DescribeCloudRecording` API.
 *
 * @method string getUserId() Obtain The user whose stream is recorded into the file. In the mixed-stream recording mode, this parameter will be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set The user whose stream is recorded into the file. In the mixed-stream recording mode, this parameter will be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getFileName() Obtain The filename.
 * @method void setFileName(string $FileName) Set The filename.
 * @method string getTrackType() Obtain The type of the media recorded.
video
audio
audio_video
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTrackType(string $TrackType) Set The type of the media recorded.
video
audio
audio_video
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBeginTimeStamp() Obtain The start time (Unix timestamp) of the recording file.
 * @method void setBeginTimeStamp(integer $BeginTimeStamp) Set The start time (Unix timestamp) of the recording file.
 */
class StorageFile extends AbstractModel
{
    /**
     * @var string The user whose stream is recorded into the file. In the mixed-stream recording mode, this parameter will be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string The filename.
     */
    public $FileName;

    /**
     * @var string The type of the media recorded.
video
audio
audio_video
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TrackType;

    /**
     * @var integer The start time (Unix timestamp) of the recording file.
     */
    public $BeginTimeStamp;

    /**
     * @param string $UserId The user whose stream is recorded into the file. In the mixed-stream recording mode, this parameter will be empty.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $FileName The filename.
     * @param string $TrackType The type of the media recorded.
video
audio
audio_video
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $BeginTimeStamp The start time (Unix timestamp) of the recording file.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("BeginTimeStamp",$param) and $param["BeginTimeStamp"] !== null) {
            $this->BeginTimeStamp = $param["BeginTimeStamp"];
        }
    }
}
