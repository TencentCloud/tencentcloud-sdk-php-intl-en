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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The flow statistics.
 *
 * @method string getSessionId() Obtain The session ID.
 * @method void setSessionId(string $SessionId) Set The session ID.
 * @method string getClientIp() Obtain The peer IP.
 * @method void setClientIp(string $ClientIp) Set The peer IP.
 * @method integer getNetwork() Obtain The total bandwidth.
 * @method void setNetwork(integer $Network) Set The total bandwidth.
 * @method array getVideo() Obtain The video data.
 * @method void setVideo(array $Video) Set The video data.
 * @method array getAudio() Obtain The audio data.
 * @method void setAudio(array $Audio) Set The audio data.
 */
class FlowStatistics extends AbstractModel
{
    /**
     * @var string The session ID.
     */
    public $SessionId;

    /**
     * @var string The peer IP.
     */
    public $ClientIp;

    /**
     * @var integer The total bandwidth.
     */
    public $Network;

    /**
     * @var array The video data.
     */
    public $Video;

    /**
     * @var array The audio data.
     */
    public $Audio;

    /**
     * @param string $SessionId The session ID.
     * @param string $ClientIp The peer IP.
     * @param integer $Network The total bandwidth.
     * @param array $Video The video data.
     * @param array $Audio The audio data.
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
