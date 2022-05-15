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
 * SRT configuration information of the queried output.
 *
 * @method array getDestinations() Obtain A list of the destination addresses for relay. This parameter is valid if `Mode` is `CALLER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDestinations(array $Destinations) Set A list of the destination addresses for relay. This parameter is valid if `Mode` is `CALLER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStreamId() Obtain Stream ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStreamId(string $StreamId) Set Stream ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLatency() Obtain Latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatency(integer $Latency) Set Latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRecvLatency() Obtain Receive latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRecvLatency(integer $RecvLatency) Set Receive latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPeerLatency() Obtain Peer latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPeerLatency(integer $PeerLatency) Set Peer latency.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPeerIdleTimeout() Obtain Peer idle timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Peer idle timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPassphrase() Obtain Encryption key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPassphrase(string $Passphrase) Set Encryption key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPbKeyLen() Obtain Encryption key length.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Encryption key length.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMode() Obtain The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMode(string $Mode) Set The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getSourceAddresses() Obtain The server’s listen address, which is valid if `Mode` is `LISTENER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSourceAddresses(array $SourceAddresses) Set The server’s listen address, which is valid if `Mode` is `LISTENER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DescribeOutputSRTSettings extends AbstractModel
{
    /**
     * @var array A list of the destination addresses for relay. This parameter is valid if `Mode` is `CALLER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Destinations;

    /**
     * @var string Stream ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StreamId;

    /**
     * @var integer Latency.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Latency;

    /**
     * @var integer Receive latency.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RecvLatency;

    /**
     * @var integer Peer latency.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PeerLatency;

    /**
     * @var integer Peer idle timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PeerIdleTimeout;

    /**
     * @var string Encryption key.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Passphrase;

    /**
     * @var integer Encryption key length.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PbKeyLen;

    /**
     * @var string The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mode;

    /**
     * @var array The server’s listen address, which is valid if `Mode` is `LISTENER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SourceAddresses;

    /**
     * @param array $Destinations A list of the destination addresses for relay. This parameter is valid if `Mode` is `CALLER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $StreamId Stream ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Latency Latency.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RecvLatency Receive latency.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PeerLatency Peer latency.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PeerIdleTimeout Peer idle timeout period.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Passphrase Encryption key.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PbKeyLen Encryption key length.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Mode The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $SourceAddresses The server’s listen address, which is valid if `Mode` is `LISTENER`.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
                $obj = new SRTAddressDestination();
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

        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new OutputSRTSourceAddressResp();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
