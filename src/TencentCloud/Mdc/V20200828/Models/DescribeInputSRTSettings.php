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
 * Query the input SRT configuration information.
 *
 * @method string getMode() Obtain SRT mode.
 * @method void setMode(string $Mode) Set SRT mode.
 * @method string getStreamId() Obtain Stream Id.
 * @method void setStreamId(string $StreamId) Set Stream Id.
 * @method integer getLatency() Obtain Delay.
 * @method void setLatency(integer $Latency) Set Delay.
 * @method integer getRecvLatency() Obtain Receive delay.
 * @method void setRecvLatency(integer $RecvLatency) Set Receive delay.
 * @method integer getPeerLatency() Obtain Peer delay.
 * @method void setPeerLatency(integer $PeerLatency) Set Peer delay.
 * @method integer getPeerIdleTimeout() Obtain Idle timeout period of the peer.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Idle timeout period of the peer.
 * @method string getPassphrase() Obtain Decryption key.
 * @method void setPassphrase(string $Passphrase) Set Decryption key.
 * @method integer getPbKeyLen() Obtain Key length.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length.
 * @method array getSourceAddresses() Obtain SRT peer address.
 * @method void setSourceAddresses(array $SourceAddresses) Set SRT peer address.
 * @method SRTFECSimpleOptions getFEC() Obtain FEC settings
 * @method void setFEC(SRTFECSimpleOptions $FEC) Set FEC settings
 */
class DescribeInputSRTSettings extends AbstractModel
{
    /**
     * @var string SRT mode.
     */
    public $Mode;

    /**
     * @var string Stream Id.
     */
    public $StreamId;

    /**
     * @var integer Delay.
     */
    public $Latency;

    /**
     * @var integer Receive delay.
     */
    public $RecvLatency;

    /**
     * @var integer Peer delay.
     */
    public $PeerLatency;

    /**
     * @var integer Idle timeout period of the peer.
     */
    public $PeerIdleTimeout;

    /**
     * @var string Decryption key.
     */
    public $Passphrase;

    /**
     * @var integer Key length.
     */
    public $PbKeyLen;

    /**
     * @var array SRT peer address.
     */
    public $SourceAddresses;

    /**
     * @var SRTFECSimpleOptions FEC settings
     */
    public $FEC;

    /**
     * @param string $Mode SRT mode.
     * @param string $StreamId Stream Id.
     * @param integer $Latency Delay.
     * @param integer $RecvLatency Receive delay.
     * @param integer $PeerLatency Peer delay.
     * @param integer $PeerIdleTimeout Idle timeout period of the peer.
     * @param string $Passphrase Decryption key.
     * @param integer $PbKeyLen Key length.
     * @param array $SourceAddresses SRT peer address.
     * @param SRTFECSimpleOptions $FEC FEC settings
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
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

        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new SRTSourceAddressResp();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = new SRTFECSimpleOptions();
            $this->FEC->deserialize($param["FEC"]);
        }
    }
}
