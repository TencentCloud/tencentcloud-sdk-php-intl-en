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
 * The audio transcoding parameters for recording.
 *
 * @method integer getSampleRate() Obtain The audio sample rate.
1: 48000 Hz (default)
2: 44100 Hz
3: 16000 Hz
 * @method void setSampleRate(integer $SampleRate) Set The audio sample rate.
1: 48000 Hz (default)
2: 44100 Hz
3: 16000 Hz
 * @method integer getChannel() Obtain The number of sound channels.
1: Mono-channel
2: Dual-channel (default)
 * @method void setChannel(integer $Channel) Set The number of sound channels.
1: Mono-channel
2: Dual-channel (default)
 * @method integer getBitRate() Obtain The audio bitrate (bps). Value range: [32000, 128000]. Default: 64000.
 * @method void setBitRate(integer $BitRate) Set The audio bitrate (bps). Value range: [32000, 128000]. Default: 64000.
 */
class AudioParams extends AbstractModel
{
    /**
     * @var integer The audio sample rate.
1: 48000 Hz (default)
2: 44100 Hz
3: 16000 Hz
     */
    public $SampleRate;

    /**
     * @var integer The number of sound channels.
1: Mono-channel
2: Dual-channel (default)
     */
    public $Channel;

    /**
     * @var integer The audio bitrate (bps). Value range: [32000, 128000]. Default: 64000.
     */
    public $BitRate;

    /**
     * @param integer $SampleRate The audio sample rate.
1: 48000 Hz (default)
2: 44100 Hz
3: 16000 Hz
     * @param integer $Channel The number of sound channels.
1: Mono-channel
2: Dual-channel (default)
     * @param integer $BitRate The audio bitrate (bps). Value range: [32000, 128000]. Default: 64000.
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
    }
}
