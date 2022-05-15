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
 * The media data of a flow.
 *
 * @method integer getTimestamp() Obtain The timestamp (seconds).
 * @method void setTimestamp(integer $Timestamp) Set The timestamp (seconds).
 * @method integer getNetwork() Obtain The total bandwidth.
 * @method void setNetwork(integer $Network) Set The total bandwidth.
 * @method array getVideo() Obtain The video data of the flow.
 * @method void setVideo(array $Video) Set The video data of the flow.
 * @method array getAudio() Obtain The audio data of the flow.
 * @method void setAudio(array $Audio) Set The audio data of the flow.
 * @method string getSessionId() Obtain The ID of a push session.
 * @method void setSessionId(string $SessionId) Set The ID of a push session.
 * @method string getClientIp() Obtain The client IP.
 * @method void setClientIp(string $ClientIp) Set The client IP.
 */
class FlowMediaInfo extends AbstractModel
{
    /**
     * @var integer The timestamp (seconds).
     */
    public $Timestamp;

    /**
     * @var integer The total bandwidth.
     */
    public $Network;

    /**
     * @var array The video data of the flow.
     */
    public $Video;

    /**
     * @var array The audio data of the flow.
     */
    public $Audio;

    /**
     * @var string The ID of a push session.
     */
    public $SessionId;

    /**
     * @var string The client IP.
     */
    public $ClientIp;

    /**
     * @param integer $Timestamp The timestamp (seconds).
     * @param integer $Network The total bandwidth.
     * @param array $Video The video data of the flow.
     * @param array $Audio The audio data of the flow.
     * @param string $SessionId The ID of a push session.
     * @param string $ClientIp The client IP.
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

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new FlowMediaVideo();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new FlowMediaAudio();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }
    }
}
