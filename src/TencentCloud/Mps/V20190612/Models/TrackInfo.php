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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio track info.
 *
 * @method string getTrackNum() Obtain Audio track and number of sound channels. Description:
When SelectType is track, this value is an integer, for example: 1.
When SelectType is track_channel, this value is of decimal type, for example: 1.0;
Default value: 1.0.
Note: The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, supporting input of 0 and positive integers. The decimal part supports up to 2 decimal places and is only allowed from 0 to 63. However, if the Codec is aac, eac3, or ac3, the decimal part only supports 0 to 15. For example, for an audio track with stream index 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
 * @method void setTrackNum(string $TrackNum) Set Audio track and number of sound channels. Description:
When SelectType is track, this value is an integer, for example: 1.
When SelectType is track_channel, this value is of decimal type, for example: 1.0;
Default value: 1.0.
Note: The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, supporting input of 0 and positive integers. The decimal part supports up to 2 decimal places and is only allowed from 0 to 63. However, if the Codec is aac, eac3, or ac3, the decimal part only supports 0 to 15. For example, for an audio track with stream index 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
 * @method array getChannelVolume() Obtain Sound channel volume, description:
When AudioChannel is set to 1, the array length is 1, for example: [6].
When AudioChannel is set to 2, the array length is 2, for example: [0,6];
When the value of AudioChannel is 6, the length of this array is greater than 2 and less than 16, for example: [-60,0,0,6].
The value array ranges from -60 to 6. Among them, -60 means mute, 0 means keep the original volume, and 6 means double the original volume. The default value is -60.
Note: Supports 3 decimal places.

 * @method void setChannelVolume(array $ChannelVolume) Set Sound channel volume, description:
When AudioChannel is set to 1, the array length is 1, for example: [6].
When AudioChannel is set to 2, the array length is 2, for example: [0,6];
When the value of AudioChannel is 6, the length of this array is greater than 2 and less than 16, for example: [-60,0,0,6].
The value array ranges from -60 to 6. Among them, -60 means mute, 0 means keep the original volume, and 6 means double the original volume. The default value is -60.
Note: Supports 3 decimal places.
 */
class TrackInfo extends AbstractModel
{
    /**
     * @var string Audio track and number of sound channels. Description:
When SelectType is track, this value is an integer, for example: 1.
When SelectType is track_channel, this value is of decimal type, for example: 1.0;
Default value: 1.0.
Note: The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, supporting input of 0 and positive integers. The decimal part supports up to 2 decimal places and is only allowed from 0 to 63. However, if the Codec is aac, eac3, or ac3, the decimal part only supports 0 to 15. For example, for an audio track with stream index 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
     */
    public $TrackNum;

    /**
     * @var array Sound channel volume, description:
When AudioChannel is set to 1, the array length is 1, for example: [6].
When AudioChannel is set to 2, the array length is 2, for example: [0,6];
When the value of AudioChannel is 6, the length of this array is greater than 2 and less than 16, for example: [-60,0,0,6].
The value array ranges from -60 to 6. Among them, -60 means mute, 0 means keep the original volume, and 6 means double the original volume. The default value is -60.
Note: Supports 3 decimal places.

     */
    public $ChannelVolume;

    /**
     * @param string $TrackNum Audio track and number of sound channels. Description:
When SelectType is track, this value is an integer, for example: 1.
When SelectType is track_channel, this value is of decimal type, for example: 1.0;
Default value: 1.0.
Note: The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, supporting input of 0 and positive integers. The decimal part supports up to 2 decimal places and is only allowed from 0 to 63. However, if the Codec is aac, eac3, or ac3, the decimal part only supports 0 to 15. For example, for an audio track with stream index 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
     * @param array $ChannelVolume Sound channel volume, description:
When AudioChannel is set to 1, the array length is 1, for example: [6].
When AudioChannel is set to 2, the array length is 2, for example: [0,6];
When the value of AudioChannel is 6, the length of this array is greater than 2 and less than 16, for example: [-60,0,0,6].
The value array ranges from -60 to 6. Among them, -60 means mute, 0 means keep the original volume, and 6 means double the original volume. The default value is -60.
Note: Supports 3 decimal places.
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
        if (array_key_exists("TrackNum",$param) and $param["TrackNum"] !== null) {
            $this->TrackNum = $param["TrackNum"];
        }

        if (array_key_exists("ChannelVolume",$param) and $param["ChannelVolume"] !== null) {
            $this->ChannelVolume = $param["ChannelVolume"];
        }
    }
}
