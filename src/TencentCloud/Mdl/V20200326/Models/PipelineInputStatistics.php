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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pipeline input statistics.
 *
 * @method integer getTimestamp() Obtain Data timestamp in seconds.
 * @method void setTimestamp(integer $Timestamp) Set Data timestamp in seconds.
 * @method integer getNetworkIn() Obtain Input bandwidth in bps.
 * @method void setNetworkIn(integer $NetworkIn) Set Input bandwidth in bps.
 * @method array getVideo() Obtain Video information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input video.
For other inputs, the quantity is 1.
 * @method void setVideo(array $Video) Set Video information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input video.
For other inputs, the quantity is 1.
 * @method array getAudio() Obtain Audio information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input audio.
For other inputs, the quantity is 1.
 * @method void setAudio(array $Audio) Set Audio information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input audio.
For other inputs, the quantity is 1.
 */
class PipelineInputStatistics extends AbstractModel
{
    /**
     * @var integer Data timestamp in seconds.
     */
    public $Timestamp;

    /**
     * @var integer Input bandwidth in bps.
     */
    public $NetworkIn;

    /**
     * @var array Video information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input video.
For other inputs, the quantity is 1.
     */
    public $Video;

    /**
     * @var array Audio information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input audio.
For other inputs, the quantity is 1.
     */
    public $Audio;

    /**
     * @param integer $Timestamp Data timestamp in seconds.
     * @param integer $NetworkIn Input bandwidth in bps.
     * @param array $Video Video information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input video.
For other inputs, the quantity is 1.
     * @param array $Audio Audio information array.
For `rtp/udp` input, the quantity is the number of `Pid` of the input audio.
For other inputs, the quantity is 1.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("NetworkIn",$param) and $param["NetworkIn"] !== null) {
            $this->NetworkIn = $param["NetworkIn"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new VideoPipelineInputStatistics();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new AudioPipelineInputStatistics();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }
    }
}
