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
 * SRT configuration of the created MediaConnect flow output.
 *
 * @method array getDestinations() Obtain Push destination address. Please configure 1–2 addresses.
 * @method void setDestinations(array $Destinations) Set Push destination address. Please configure 1–2 addresses.
 * @method string getStreamId() Obtain Stream ID of SRT push.
 * @method void setStreamId(string $StreamId) Set Stream ID of SRT push.
 * @method integer getLatency() Obtain Total latency of SRT push.
 * @method void setLatency(integer $Latency) Set Total latency of SRT push.
 * @method integer getRecvLatency() Obtain Receipt latency of SRT push.
 * @method void setRecvLatency(integer $RecvLatency) Set Receipt latency of SRT push.
 * @method integer getPeerLatency() Obtain Peer latency of SRT push.
 * @method void setPeerLatency(integer $PeerLatency) Set Peer latency of SRT push.
 * @method integer getPeerIdleTimeout() Obtain Peer idle timeout period of SRT push.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Peer idle timeout period of SRT push.
 * @method string getPassphrase() Obtain Encryption key of SRT push.
 * @method void setPassphrase(string $Passphrase) Set Encryption key of SRT push.
 * @method integer getPbKeyLen() Obtain Key length of SRT push.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length of SRT push.
 */
class CreateOutputSrtSettings extends AbstractModel
{
    /**
     * @var array Push destination address. Please configure 1–2 addresses.
     */
    public $Destinations;

    /**
     * @var string Stream ID of SRT push.
     */
    public $StreamId;

    /**
     * @var integer Total latency of SRT push.
     */
    public $Latency;

    /**
     * @var integer Receipt latency of SRT push.
     */
    public $RecvLatency;

    /**
     * @var integer Peer latency of SRT push.
     */
    public $PeerLatency;

    /**
     * @var integer Peer idle timeout period of SRT push.
     */
    public $PeerIdleTimeout;

    /**
     * @var string Encryption key of SRT push.
     */
    public $Passphrase;

    /**
     * @var integer Key length of SRT push.
     */
    public $PbKeyLen;

    /**
     * @param array $Destinations Push destination address. Please configure 1–2 addresses.
     * @param string $StreamId Stream ID of SRT push.
     * @param integer $Latency Total latency of SRT push.
     * @param integer $RecvLatency Receipt latency of SRT push.
     * @param integer $PeerLatency Peer latency of SRT push.
     * @param integer $PeerIdleTimeout Peer idle timeout period of SRT push.
     * @param string $Passphrase Encryption key of SRT push.
     * @param integer $PbKeyLen Key length of SRT push.
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new CreateOutputSrtSettingsDestinations();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("RecvLatency",$param) and $param["RecvLatency"] !== null) {
            $this->RecvLatency = $param["RecvLatency"];
        }

        if (array_key_exists("PeerLatency",$param) and $param["PeerLatency"] !== null) {
            $this->PeerLatency = $param["PeerLatency"];
        }

        if (array_key_exists("PeerIdleTimeout",$param) and $param["PeerIdleTimeout"] !== null) {
            $this->PeerIdleTimeout = $param["PeerIdleTimeout"];
        }

        if (array_key_exists("Passphrase",$param) and $param["Passphrase"] !== null) {
            $this->Passphrase = $param["Passphrase"];
        }

        if (array_key_exists("PbKeyLen",$param) and $param["PbKeyLen"] !== null) {
            $this->PbKeyLen = $param["PbKeyLen"];
        }
    }
}
