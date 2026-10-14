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
 * Query the output SRT configuration information.
 *
 * @method array getDestinations() Obtain Destination address list. Used when the SRT mode is CALLER.
 * @method void setDestinations(array $Destinations) Set Destination address list. Used when the SRT mode is CALLER.
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
 * @method string getPassphrase() Obtain Encryption key.
 * @method void setPassphrase(string $Passphrase) Set Encryption key.
 * @method integer getPbKeyLen() Obtain Encryption key length.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Encryption key length.
 * @method string getMode() Obtain SRT mode.
 * @method void setMode(string $Mode) Set SRT mode.
 * @method array getSourceAddresses() Obtain Server listening address, used when the SRT mode is LISTENER.
 * @method void setSourceAddresses(array $SourceAddresses) Set Server listening address, used when the SRT mode is LISTENER.
 * @method SRTFECFullOptions getFEC() Obtain SRT FEC configuration
 * @method void setFEC(SRTFECFullOptions $FEC) Set SRT FEC configuration
 */
class DescribeOutputSRTSettings extends AbstractModel
{
    /**
     * @var array Destination address list. Used when the SRT mode is CALLER.
     */
    public $Destinations;

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
     * @var string Encryption key.
     */
    public $Passphrase;

    /**
     * @var integer Encryption key length.
     */
    public $PbKeyLen;

    /**
     * @var string SRT mode.
     */
    public $Mode;

    /**
     * @var array Server listening address, used when the SRT mode is LISTENER.
     */
    public $SourceAddresses;

    /**
     * @var SRTFECFullOptions SRT FEC configuration
     */
    public $FEC;

    /**
     * @param array $Destinations Destination address list. Used when the SRT mode is CALLER.
     * @param string $StreamId Stream Id.
     * @param integer $Latency Delay.
     * @param integer $RecvLatency Receive delay.
     * @param integer $PeerLatency Peer delay.
     * @param integer $PeerIdleTimeout Idle timeout period of the peer.
     * @param string $Passphrase Encryption key.
     * @param integer $PbKeyLen Encryption key length.
     * @param string $Mode SRT mode.
     * @param array $SourceAddresses Server listening address, used when the SRT mode is LISTENER.
     * @param SRTFECFullOptions $FEC SRT FEC configuration
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

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = new SRTFECFullOptions();
            $this->FEC->deserialize($param["FEC"]);
        }
    }
}
