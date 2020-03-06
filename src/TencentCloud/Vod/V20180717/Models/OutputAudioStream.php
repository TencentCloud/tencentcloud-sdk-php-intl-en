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
 * @method string getCodec() Obtain Audio stream encoder. Valid values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
 * @method void setCodec(string $Codec) Set Audio stream encoder. Valid values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
 * @method integer getSampleRate() Obtain Audio stream sample rate. Valid values:
<li>16,000</li>
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
Default value: 16,000.
 * @method void setSampleRate(integer $SampleRate) Set Audio stream sample rate. Valid values:
<li>16,000</li>
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
Default value: 16,000.
 * @method integer getAudioChannel() Obtain Number of sound channels. Valid values:
<li>1: mono.</li>
<li>2: dual</li>
Default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Number of sound channels. Valid values:
<li>1: mono.</li>
<li>2: dual</li>
Default value: 2.
 */

/**
 *Information of output audio stream
 */
class OutputAudioStream extends AbstractModel
{
    /**
     * @var string Audio stream encoder. Valid values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
     */
    public $Codec;

    /**
     * @var integer Audio stream sample rate. Valid values:
<li>16,000</li>
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
Default value: 16,000.
     */
    public $SampleRate;

    /**
     * @var integer Number of sound channels. Valid values:
<li>1: mono.</li>
<li>2: dual</li>
Default value: 2.
     */
    public $AudioChannel;
    /**
     * @param string $Codec Audio stream encoder. Valid values:
<li>libfdk_aac: suitable for mp4 files.</li>
Default value: libfdk_aac.
     * @param integer $SampleRate Audio stream sample rate. Valid values:
<li>16,000</li>
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
Default value: 16,000.
     * @param integer $AudioChannel Number of sound channels. Valid values:
<li>1: mono.</li>
<li>2: dual</li>
Default value: 2.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }
    }
}
