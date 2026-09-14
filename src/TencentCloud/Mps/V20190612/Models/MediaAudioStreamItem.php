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
 * Audio stream information of VOD files
 *
 * @method integer getBitrate() Obtain Bitrate of the audio stream. Unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of the audio stream. Unit: bps.
 * @method integer getSamplingRate() Obtain Sampling rate of the audio stream. Unit: hz.
 * @method void setSamplingRate(integer $SamplingRate) Set Sampling rate of the audio stream. Unit: hz.
 * @method string getCodec() Obtain Audio stream encoding format, for example, aac.
 * @method void setCodec(string $Codec) Set Audio stream encoding format, for example, aac.
 * @method integer getChannel() Obtain 
 * @method void setChannel(integer $Channel) Set 
 * @method string getCodecs() Obtain 
 * @method void setCodecs(string $Codecs) Set 
 * @method float getLoudness() Obtain 
 * @method void setLoudness(float $Loudness) Set 
 */
class MediaAudioStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of the audio stream. Unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Sampling rate of the audio stream. Unit: hz.
     */
    public $SamplingRate;

    /**
     * @var string Audio stream encoding format, for example, aac.
     */
    public $Codec;

    /**
     * @var integer 
     */
    public $Channel;

    /**
     * @var string 
     */
    public $Codecs;

    /**
     * @var float 
     */
    public $Loudness;

    /**
     * @param integer $Bitrate Bitrate of the audio stream. Unit: bps.
     * @param integer $SamplingRate Sampling rate of the audio stream. Unit: hz.
     * @param string $Codec Audio stream encoding format, for example, aac.
     * @param integer $Channel 
     * @param string $Codecs 
     * @param float $Loudness 
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

        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("Loudness",$param) and $param["Loudness"] !== null) {
            $this->Loudness = $param["Loudness"];
        }
    }
}
