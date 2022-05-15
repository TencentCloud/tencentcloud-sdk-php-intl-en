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
 * The SRT configuration of the output to create.
 *
 * @method array getDestinations() Obtain The relay destination address, which is required if `Mode` is `CALLER`. Only one address is allowed.
 * @method void setDestinations(array $Destinations) Set The relay destination address, which is required if `Mode` is `CALLER`. Only one address is allowed.
 * @method string getStreamId() Obtain The stream ID for relay, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
 * @method void setStreamId(string $StreamId) Set The stream ID for relay, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
 * @method integer getLatency() Obtain The total latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
 * @method void setLatency(integer $Latency) Set The total latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
 * @method integer getRecvLatency() Obtain The receive latency (ms) of SRT relay. Value range: [0, 3000]. Default: 120.
 * @method void setRecvLatency(integer $RecvLatency) Set The receive latency (ms) of SRT relay. Value range: [0, 3000]. Default: 120.
 * @method integer getPeerLatency() Obtain The peer-to-peer latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
 * @method void setPeerLatency(integer $PeerLatency) Set The peer-to-peer latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
 * @method integer getPeerIdleTimeout() Obtain The timeout period (ms) for the SRT relay peer. Value range: [1000, 10000]. Default: 5000.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set The timeout period (ms) for the SRT relay peer. Value range: [1000, 10000]. Default: 5000.
 * @method string getPassphrase() Obtain The encryption key for SRT relay, which is empty by default, indicating not to encrypt. Only ASCII codes are allowed. Length: [10, 79].
 * @method void setPassphrase(string $Passphrase) Set The encryption key for SRT relay, which is empty by default, indicating not to encrypt. Only ASCII codes are allowed. Length: [10, 79].
 * @method integer getPbKeyLen() Obtain The key length for SRT relay. Valid values: 0 (default), 16, 24, 32.
 * @method void setPbKeyLen(integer $PbKeyLen) Set The key length for SRT relay. Valid values: 0 (default), 16, 24, 32.
 * @method string getMode() Obtain The SRT mode. Valid values: LISTENER, CALLER (default).
 * @method void setMode(string $Mode) Set The SRT mode. Valid values: LISTENER, CALLER (default).
 */
class CreateOutputSrtSettings extends AbstractModel
{
    /**
     * @var array The relay destination address, which is required if `Mode` is `CALLER`. Only one address is allowed.
     */
    public $Destinations;

    /**
     * @var string The stream ID for relay, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
     */
    public $StreamId;

    /**
     * @var integer The total latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
     */
    public $Latency;

    /**
     * @var integer The receive latency (ms) of SRT relay. Value range: [0, 3000]. Default: 120.
     */
    public $RecvLatency;

    /**
     * @var integer The peer-to-peer latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
     */
    public $PeerLatency;

    /**
     * @var integer The timeout period (ms) for the SRT relay peer. Value range: [1000, 10000]. Default: 5000.
     */
    public $PeerIdleTimeout;

    /**
     * @var string The encryption key for SRT relay, which is empty by default, indicating not to encrypt. Only ASCII codes are allowed. Length: [10, 79].
     */
    public $Passphrase;

    /**
     * @var integer The key length for SRT relay. Valid values: 0 (default), 16, 24, 32.
     */
    public $PbKeyLen;

    /**
     * @var string The SRT mode. Valid values: LISTENER, CALLER (default).
     */
    public $Mode;

    /**
     * @param array $Destinations The relay destination address, which is required if `Mode` is `CALLER`. Only one address is allowed.
     * @param string $StreamId The stream ID for relay, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
     * @param integer $Latency The total latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
     * @param integer $RecvLatency The receive latency (ms) of SRT relay. Value range: [0, 3000]. Default: 120.
     * @param integer $PeerLatency The peer-to-peer latency (ms) of SRT relay. Value range: [0, 3000]. Default: 0.
     * @param integer $PeerIdleTimeout The timeout period (ms) for the SRT relay peer. Value range: [1000, 10000]. Default: 5000.
     * @param string $Passphrase The encryption key for SRT relay, which is empty by default, indicating not to encrypt. Only ASCII codes are allowed. Length: [10, 79].
     * @param integer $PbKeyLen The key length for SRT relay. Valid values: 0 (default), 16, 24, 32.
     * @param string $Mode The SRT mode. Valid values: LISTENER, CALLER (default).
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
