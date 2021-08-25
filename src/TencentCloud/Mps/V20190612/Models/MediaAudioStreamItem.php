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
 * Information of the audio stream in a VOD file
 *
 * @method integer getBitrate() Obtain Bitrate of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSamplingRate() Obtain Sample rate of an audio stream in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSamplingRate(integer $SamplingRate) Set Sample rate of an audio stream in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Audio stream codec, such as aac.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Audio stream codec, such as aac.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getChannel() Obtain Number of sound channels, e.g., 2
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setChannel(integer $Channel) Set Number of sound channels, e.g., 2
Note: this field may return `null`, indicating that no valid value was found.
 */
class MediaAudioStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Sample rate of an audio stream in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SamplingRate;

    /**
     * @var string Audio stream codec, such as aac.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Number of sound channels, e.g., 2
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $Channel;

    /**
     * @param integer $Bitrate Bitrate of an audio stream in bps.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SamplingRate Sample rate of an audio stream in Hz.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Audio stream codec, such as aac.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Channel Number of sound channels, e.g., 2
Note: this field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
