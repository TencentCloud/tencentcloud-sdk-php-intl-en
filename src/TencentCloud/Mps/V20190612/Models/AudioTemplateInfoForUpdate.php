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
 * Audio stream configuration parameters
 *
 * @method string getCodec() Obtain 
 * @method void setCodec(string $Codec) Set 
 * @method integer getBitrate() Obtain 
 * @method void setBitrate(integer $Bitrate) Set 
 * @method integer getSampleRate() Obtain 
 * @method void setSampleRate(integer $SampleRate) Set 
 * @method integer getAudioChannel() Obtain 
 * @method void setAudioChannel(integer $AudioChannel) Set 
 * @method array getStreamSelects() Obtain 
 * @method void setStreamSelects(array $StreamSelects) Set 
 */
class AudioTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Codec;

    /**
     * @var integer 
     */
    public $Bitrate;

    /**
     * @var integer 
     */
    public $SampleRate;

    /**
     * @var integer 
     */
    public $AudioChannel;

    /**
     * @var array 
     */
    public $StreamSelects;

    /**
     * @param string $Codec 
     * @param integer $Bitrate 
     * @param integer $SampleRate 
     * @param integer $AudioChannel 
     * @param array $StreamSelects 
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

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("StreamSelects",$param) and $param["StreamSelects"] !== null) {
            $this->StreamSelects = $param["StreamSelects"];
        }
    }
}
