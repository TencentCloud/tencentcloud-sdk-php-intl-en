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
 * Audio transcoding parameters
 *
 * @method integer getSampleRate() Obtain Audio Sample rate, Value range [48000, 44100], unit is Hz.
 * @method void setSampleRate(integer $SampleRate) Set Audio Sample rate, Value range [48000, 44100], unit is Hz.
 * @method integer getChannel() Obtain Audio Channel number, Value range [1,2], 1 means Audio is Mono-channel, 2 means Audio is Dual-channel.
 * @method void setChannel(integer $Channel) Set Audio Channel number, Value range [1,2], 1 means Audio is Mono-channel, 2 means Audio is Dual-channel.
 * @method integer getBitRate() Obtain Audio Bitrate, Value range [8,500], unit is kbps.
 * @method void setBitRate(integer $BitRate) Set Audio Bitrate, Value range [8,500], unit is kbps.
 */
class AudioEncodeParams extends AbstractModel
{
    /**
     * @var integer Audio Sample rate, Value range [48000, 44100], unit is Hz.
     */
    public $SampleRate;

    /**
     * @var integer Audio Channel number, Value range [1,2], 1 means Audio is Mono-channel, 2 means Audio is Dual-channel.
     */
    public $Channel;

    /**
     * @var integer Audio Bitrate, Value range [8,500], unit is kbps.
     */
    public $BitRate;

    /**
     * @param integer $SampleRate Audio Sample rate, Value range [48000, 44100], unit is Hz.
     * @param integer $Channel Audio Channel number, Value range [1,2], 1 means Audio is Mono-channel, 2 means Audio is Dual-channel.
     * @param integer $BitRate Audio Bitrate, Value range [8,500], unit is kbps.
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
