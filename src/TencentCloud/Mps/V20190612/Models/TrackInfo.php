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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio track info.
 *
 * @method string getTrackNum() Obtain Audio track and sound channel serial number, description:
When the SelectType value is trask, this value is of the integer type, for example: 1.
When the SelectType value is trask_channel, this value is of the decimal type, for example: 1.0.
Default value: `1.0`.
The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, and input of 0 and positive integers is supported. The decimal part supports up to 2 decimal places, and only 0 - 63 is supported. However, when the Codec is aac/eac3/ac3, only 0 - 15 is supported for the decimal part. For example: for an audio track with a stream index of 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTrackNum(string $TrackNum) Set Audio track and sound channel serial number, description:
When the SelectType value is trask, this value is of the integer type, for example: 1.
When the SelectType value is trask_channel, this value is of the decimal type, for example: 1.0.
Default value: `1.0`.
The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, and input of 0 and positive integers is supported. The decimal part supports up to 2 decimal places, and only 0 - 63 is supported. However, when the Codec is aac/eac3/ac3, only 0 - 15 is supported for the decimal part. For example: for an audio track with a stream index of 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getChannelVolume() Obtain Sound channel volume. specifies the volume of the sound channel.
When the value of AudioChannel is 1, the value length is 1.
When the value of AudioChannel is 2, the value length is 2.
When the value of AudioChannel is 6, the length of this value is greater than 2.
The array value of this parameter has a valid value range of [-60, 6]. among them, -60 indicates mute, 0 indicates keeping the original volume, and 6 means doubling the original volume. the default value is -60.
Supports 3 decimal places.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChannelVolume(array $ChannelVolume) Set Sound channel volume. specifies the volume of the sound channel.
When the value of AudioChannel is 1, the value length is 1.
When the value of AudioChannel is 2, the value length is 2.
When the value of AudioChannel is 6, the length of this value is greater than 2.
The array value of this parameter has a valid value range of [-60, 6]. among them, -60 indicates mute, 0 indicates keeping the original volume, and 6 means doubling the original volume. the default value is -60.
Supports 3 decimal places.

Note: This field may return null, indicating that no valid value can be obtained.
 */
class TrackInfo extends AbstractModel
{
    /**
     * @var string Audio track and sound channel serial number, description:
When the SelectType value is trask, this value is of the integer type, for example: 1.
When the SelectType value is trask_channel, this value is of the decimal type, for example: 1.0.
Default value: `1.0`.
The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, and input of 0 and positive integers is supported. The decimal part supports up to 2 decimal places, and only 0 - 63 is supported. However, when the Codec is aac/eac3/ac3, only 0 - 15 is supported for the decimal part. For example: for an audio track with a stream index of 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TrackNum;

    /**
     * @var array Sound channel volume. specifies the volume of the sound channel.
When the value of AudioChannel is 1, the value length is 1.
When the value of AudioChannel is 2, the value length is 2.
When the value of AudioChannel is 6, the length of this value is greater than 2.
The array value of this parameter has a valid value range of [-60, 6]. among them, -60 indicates mute, 0 indicates keeping the original volume, and 6 means doubling the original volume. the default value is -60.
Supports 3 decimal places.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChannelVolume;

    /**
     * @param string $TrackNum Audio track and sound channel serial number, description:
When the SelectType value is trask, this value is of the integer type, for example: 1.
When the SelectType value is trask_channel, this value is of the decimal type, for example: 1.0.
Default value: `1.0`.
The integer part represents the audio track serial number, and the decimal part represents the sound channel. The audio track serial number is the stream index of the audio track, and input of 0 and positive integers is supported. The decimal part supports up to 2 decimal places, and only 0 - 63 is supported. However, when the Codec is aac/eac3/ac3, only 0 - 15 is supported for the decimal part. For example: for an audio track with a stream index of 1, 1.0 represents the first sound channel of this audio track, and 1.1 represents the second sound channel of this audio track.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ChannelVolume Sound channel volume. specifies the volume of the sound channel.
When the value of AudioChannel is 1, the value length is 1.
When the value of AudioChannel is 2, the value length is 2.
When the value of AudioChannel is 6, the length of this value is greater than 2.
The array value of this parameter has a valid value range of [-60, 6]. among them, -60 indicates mute, 0 indicates keeping the original volume, and 6 means doubling the original volume. the default value is -60.
Supports 3 decimal places.

Note: This field may return null, indicating that no valid value can be obtained.
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
