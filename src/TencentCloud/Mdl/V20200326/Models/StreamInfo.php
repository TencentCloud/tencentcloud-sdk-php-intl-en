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
 * Push information.
 *
 * @method string getClientIp() Obtain Client IP.
 * @method void setClientIp(string $ClientIp) Set Client IP.
 * @method array getVideo() Obtain Video information of pushed streams.
 * @method void setVideo(array $Video) Set Video information of pushed streams.
 * @method array getAudio() Obtain Audio information of pushed streams.
 * @method void setAudio(array $Audio) Set Audio information of pushed streams.
 * @method array getScte35() Obtain SCTE-35 information of pushed streams.
 * @method void setScte35(array $Scte35) Set SCTE-35 information of pushed streams.
 */
class StreamInfo extends AbstractModel
{
    /**
     * @var string Client IP.
     */
    public $ClientIp;

    /**
     * @var array Video information of pushed streams.
     */
    public $Video;

    /**
     * @var array Audio information of pushed streams.
     */
    public $Audio;

    /**
     * @var array SCTE-35 information of pushed streams.
     */
    public $Scte35;

    /**
     * @param string $ClientIp Client IP.
     * @param array $Video Video information of pushed streams.
     * @param array $Audio Audio information of pushed streams.
     * @param array $Scte35 SCTE-35 information of pushed streams.
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new StreamVideoInfo();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new StreamAudioInfo();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }

        if (array_key_exists("Scte35",$param) and $param["Scte35"] !== null) {
            $this->Scte35 = [];
            foreach ($param["Scte35"] as $key => $value){
                $obj = new StreamScte35Info();
                $obj->deserialize($value);
                array_push($this->Scte35, $obj);
            }
        }
    }
}
