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
 * Media data in the transport stream.
 *
 * @method integer getTimestamp() Obtain Timestamp in seconds.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp in seconds.
 * @method integer getNetwork() Obtain Total bandwidth.
 * @method void setNetwork(integer $Network) Set Total bandwidth.
 * @method array getVideo() Obtain Video data of the transport stream.
 * @method void setVideo(array $Video) Set Video data of the transport stream.
 * @method array getAudio() Obtain Audio data of the transport stream.
 * @method void setAudio(array $Audio) Set Audio data of the transport stream.
 * @method string getSessionId() Obtain Flag of the same push.
 * @method void setSessionId(string $SessionId) Set Flag of the same push.
 * @method string getClientIp() Obtain Client IP.
 * @method void setClientIp(string $ClientIp) Set Client IP.
 */
class FlowMediaInfo extends AbstractModel
{
    /**
     * @var integer Timestamp in seconds.
     */
    public $Timestamp;

    /**
     * @var integer Total bandwidth.
     */
    public $Network;

    /**
     * @var array Video data of the transport stream.
     */
    public $Video;

    /**
     * @var array Audio data of the transport stream.
     */
    public $Audio;

    /**
     * @var string Flag of the same push.
     */
    public $SessionId;

    /**
     * @var string Client IP.
     */
    public $ClientIp;

    /**
     * @param integer $Timestamp Timestamp in seconds.
     * @param integer $Network Total bandwidth.
     * @param array $Video Video data of the transport stream.
     * @param array $Audio Audio data of the transport stream.
     * @param string $SessionId Flag of the same push.
     * @param string $ClientIp Client IP.
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
