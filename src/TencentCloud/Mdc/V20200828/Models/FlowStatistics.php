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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stream stats.
 *
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method string getClientIp() Obtain Peer IP.
 * @method void setClientIp(string $ClientIp) Set Peer IP.
 * @method integer getNetwork() Obtain Total bandwidth.
 * @method void setNetwork(integer $Network) Set Total bandwidth.
 * @method array getVideo() Obtain Video data.
 * @method void setVideo(array $Video) Set Video data.
 * @method array getAudio() Obtain Audio data.
 * @method void setAudio(array $Audio) Set Audio data.
 */
class FlowStatistics extends AbstractModel
{
    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var string Peer IP.
     */
    public $ClientIp;

    /**
     * @var integer Total bandwidth.
     */
    public $Network;

    /**
     * @var array Video data.
     */
    public $Video;

    /**
     * @var array Audio data.
     */
    public $Audio;

    /**
     * @param string $SessionId Session ID.
     * @param string $ClientIp Peer IP.
     * @param integer $Network Total bandwidth.
     * @param array $Video Video data.
     * @param array $Audio Audio data.
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new FlowVideo();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new FlowAudio();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }
    }
}
