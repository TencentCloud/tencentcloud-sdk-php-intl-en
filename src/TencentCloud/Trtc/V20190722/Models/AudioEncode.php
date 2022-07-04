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
 * The audio encoding parameters.
 *
 * @method integer getSampleRate() Obtain The audio sample rate (Hz). Valid values: 48000, 44100, 32000, 24000, 16000, 8000.
 * @method void setSampleRate(integer $SampleRate) Set The audio sample rate (Hz). Valid values: 48000, 44100, 32000, 24000, 16000, 8000.
 * @method integer getChannel() Obtain The number of sound channels. Valid values: 1 (mono), 2 (dual).
 * @method void setChannel(integer $Channel) Set The number of sound channels. Valid values: 1 (mono), 2 (dual).
 * @method integer getBitRate() Obtain The audio bitrate (Kbps). Value range: 8-500.
 * @method void setBitRate(integer $BitRate) Set The audio bitrate (Kbps). Value range: 8-500.
 * @method integer getCodec() Obtain The audio codec. Valid values: 0 (LC-AAC), 1 (HE-AAC), 2 (HE-AACv2). The default value is 0. If this parameter is set to 2, `Channel` must be 2. If it is set to 1 or 2, `SampleRate` can only be 48000, 44100, 32000, 24000, or 16000.
 * @method void setCodec(integer $Codec) Set The audio codec. Valid values: 0 (LC-AAC), 1 (HE-AAC), 2 (HE-AACv2). The default value is 0. If this parameter is set to 2, `Channel` must be 2. If it is set to 1 or 2, `SampleRate` can only be 48000, 44100, 32000, 24000, or 16000.
 */
class AudioEncode extends AbstractModel
{
    /**
     * @var integer The audio sample rate (Hz). Valid values: 48000, 44100, 32000, 24000, 16000, 8000.
     */
    public $SampleRate;

    /**
     * @var integer The number of sound channels. Valid values: 1 (mono), 2 (dual).
     */
    public $Channel;

    /**
     * @var integer The audio bitrate (Kbps). Value range: 8-500.
     */
    public $BitRate;

    /**
     * @var integer The audio codec. Valid values: 0 (LC-AAC), 1 (HE-AAC), 2 (HE-AACv2). The default value is 0. If this parameter is set to 2, `Channel` must be 2. If it is set to 1 or 2, `SampleRate` can only be 48000, 44100, 32000, 24000, or 16000.
     */
    public $Codec;

    /**
     * @param integer $SampleRate The audio sample rate (Hz). Valid values: 48000, 44100, 32000, 24000, 16000, 8000.
     * @param integer $Channel The number of sound channels. Valid values: 1 (mono), 2 (dual).
     * @param integer $BitRate The audio bitrate (Kbps). Value range: 8-500.
     * @param integer $Codec The audio codec. Valid values: 0 (LC-AAC), 1 (HE-AAC), 2 (HE-AACv2). The default value is 0. If this parameter is set to 2, `Channel` must be 2. If it is set to 1 or 2, `SampleRate` can only be 48000, 44100, 32000, 24000, or 16000.
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
        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }
    }
}
