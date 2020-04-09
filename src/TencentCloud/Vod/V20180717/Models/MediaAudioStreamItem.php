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
 * Information of audio stream in VOD file
 *
 * @method integer getBitrate() Obtain Bitrate of audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSamplingRate() Obtain Sample rate of audio stream in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSamplingRate(integer $SamplingRate) Set Sample rate of audio stream in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Audio stream encoder, such as aac.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Audio stream encoder, such as aac.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaAudioStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Sample rate of audio stream in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SamplingRate;

    /**
     * @var string Audio stream encoder, such as aac.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @param integer $Bitrate Bitrate of audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SamplingRate Sample rate of audio stream in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Audio stream encoder, such as aac.
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }
    }
}
