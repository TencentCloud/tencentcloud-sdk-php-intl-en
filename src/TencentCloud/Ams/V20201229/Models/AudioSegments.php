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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Indicates audio segment information
 *
 * @method string getOffsetTime() Obtain This field is used to return the start time of an audio segment in seconds. For audio on demand files, this parameter indicates the time offset of the audio from the complete audio track, such as 0 (no offset), 5 (5 seconds after the start of the audio track), and 10 (10 seconds after the start of the audio track). For live audio stream files, this parameter returns the Unix timestamp of the start of the audio segment, such as `1594650717`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOffsetTime(string $OffsetTime) Set This field is used to return the start time of an audio segment in seconds. For audio on demand files, this parameter indicates the time offset of the audio from the complete audio track, such as 0 (no offset), 5 (5 seconds after the start of the audio track), and 10 (10 seconds after the start of the audio track). For live audio stream files, this parameter returns the Unix timestamp of the start of the audio segment, such as `1594650717`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AudioResult getResult() Obtain This field is used to return the specific moderation result of an audio segment. For details, see the description of the `AudioResult` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResult(AudioResult $Result) Set This field is used to return the specific moderation result of an audio segment. For details, see the description of the `AudioResult` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AudioSegments extends AbstractModel
{
    /**
     * @var string This field is used to return the start time of an audio segment in seconds. For audio on demand files, this parameter indicates the time offset of the audio from the complete audio track, such as 0 (no offset), 5 (5 seconds after the start of the audio track), and 10 (10 seconds after the start of the audio track). For live audio stream files, this parameter returns the Unix timestamp of the start of the audio segment, such as `1594650717`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OffsetTime;

    /**
     * @var AudioResult This field is used to return the specific moderation result of an audio segment. For details, see the description of the `AudioResult` data structure.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @param string $OffsetTime This field is used to return the start time of an audio segment in seconds. For audio on demand files, this parameter indicates the time offset of the audio from the complete audio track, such as 0 (no offset), 5 (5 seconds after the start of the audio track), and 10 (10 seconds after the start of the audio track). For live audio stream files, this parameter returns the Unix timestamp of the start of the audio segment, such as `1594650717`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AudioResult $Result This field is used to return the specific moderation result of an audio segment. For details, see the description of the `AudioResult` data structure.
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
        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new AudioResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
