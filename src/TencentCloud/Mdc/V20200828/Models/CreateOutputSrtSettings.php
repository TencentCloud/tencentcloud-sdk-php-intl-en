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
 * Create the SRT configuration for the output of a media transmission stream.
 *
 * @method array getDestinations() Obtain Target address for push. Required when Mode is CALLER. Only 1 group can be filled in.
 * @method void setDestinations(array $Destinations) Set Target address for push. Required when Mode is CALLER. Only 1 group can be filled in.
 * @method string getMode() Obtain SRT mode. Valid values: `LISTENER` and `CALLER`. Default value: `CALLER`.
 * @method void setMode(string $Mode) Set SRT mode. Valid values: `LISTENER` and `CALLER`. Default value: `CALLER`.
 * @method string getStreamId() Obtain Stream Id for SRT retransmission. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512.
 * @method void setStreamId(string $StreamId) Set Stream Id for SRT retransmission. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512.
 * @method integer getLatency() Obtain Total delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000]. This parameter simultaneously sets the sender and recipient delays (recvlatency and peerlatency) to the same value. Recommended configuration: at least 3 times the RTT to ensure effective handling of packet retransmission and confirmation during network congestion.
 * @method void setLatency(integer $Latency) Set Total delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000]. This parameter simultaneously sets the sender and recipient delays (recvlatency and peerlatency) to the same value. Recommended configuration: at least 3 times the RTT to ensure effective handling of packet retransmission and confirmation during network congestion.
 * @method integer getRecvLatency() Obtain Receive latency for SRT relay. Default value: 120. Unit: ms. Range: [0, 3000].
This parameter indicates the time length for the recipient to cache data packets.
 * @method void setRecvLatency(integer $RecvLatency) Set Receive latency for SRT relay. Default value: 120. Unit: ms. Range: [0, 3000].
This parameter indicates the time length for the recipient to cache data packets.
 * @method integer getPeerLatency() Obtain Peer delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000].
This parameter is set by the sender to inform the recipient of the expected buffer time for delay.
 * @method void setPeerLatency(integer $PeerLatency) Set Peer delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000].
This parameter is set by the sender to inform the recipient of the expected buffer time for delay.
 * @method integer getPeerIdleTimeout() Obtain Idle timeout for SRT relay. Default value: 5000 ms. Range: [1000, 10000].
If there is no activity on a connection within the set timeout period, it will be closed.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Idle timeout for SRT relay. Default value: 5000 ms. Range: [1000, 10000].
If there is no activity on a connection within the set timeout period, it will be closed.
 * @method string getPassphrase() Obtain Encryption key for SRT retweet. It is empty by default, indicating not encrypted. Only ascii characters are allowed, with a length of [10, 79].
 * @method void setPassphrase(string $Passphrase) Set Encryption key for SRT retweet. It is empty by default, indicating not encrypted. Only ascii characters are allowed, with a length of [10, 79].
 * @method integer getPbKeyLen() Obtain Key length for SRT retransmission. Default value: 0. Options: [0|16|24|32].
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length for SRT retransmission. Default value: 0. Options: [0|16|24|32].
 * @method SRTFECFullOptions getFEC() Obtain SRT FEC settings
 * @method void setFEC(SRTFECFullOptions $FEC) Set SRT FEC settings
 */
class CreateOutputSrtSettings extends AbstractModel
{
    /**
     * @var array Target address for push. Required when Mode is CALLER. Only 1 group can be filled in.
     */
    public $Destinations;

    /**
     * @var string SRT mode. Valid values: `LISTENER` and `CALLER`. Default value: `CALLER`.
     */
    public $Mode;

    /**
     * @var string Stream Id for SRT retransmission. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512.
     */
    public $StreamId;

    /**
     * @var integer Total delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000]. This parameter simultaneously sets the sender and recipient delays (recvlatency and peerlatency) to the same value. Recommended configuration: at least 3 times the RTT to ensure effective handling of packet retransmission and confirmation during network congestion.
     */
    public $Latency;

    /**
     * @var integer Receive latency for SRT relay. Default value: 120. Unit: ms. Range: [0, 3000].
This parameter indicates the time length for the recipient to cache data packets.
     */
    public $RecvLatency;

    /**
     * @var integer Peer delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000].
This parameter is set by the sender to inform the recipient of the expected buffer time for delay.
     */
    public $PeerLatency;

    /**
     * @var integer Idle timeout for SRT relay. Default value: 5000 ms. Range: [1000, 10000].
If there is no activity on a connection within the set timeout period, it will be closed.
     */
    public $PeerIdleTimeout;

    /**
     * @var string Encryption key for SRT retweet. It is empty by default, indicating not encrypted. Only ascii characters are allowed, with a length of [10, 79].
     */
    public $Passphrase;

    /**
     * @var integer Key length for SRT retransmission. Default value: 0. Options: [0|16|24|32].
     */
    public $PbKeyLen;

    /**
     * @var SRTFECFullOptions SRT FEC settings
     */
    public $FEC;

    /**
     * @param array $Destinations Target address for push. Required when Mode is CALLER. Only 1 group can be filled in.
     * @param string $Mode SRT mode. Valid values: `LISTENER` and `CALLER`. Default value: `CALLER`.
     * @param string $StreamId Stream Id for SRT retransmission. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512.
     * @param integer $Latency Total delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000]. This parameter simultaneously sets the sender and recipient delays (recvlatency and peerlatency) to the same value. Recommended configuration: at least 3 times the RTT to ensure effective handling of packet retransmission and confirmation during network congestion.
     * @param integer $RecvLatency Receive latency for SRT relay. Default value: 120. Unit: ms. Range: [0, 3000].
This parameter indicates the time length for the recipient to cache data packets.
     * @param integer $PeerLatency Peer delay for SRT retransmission. Default value: 0. Unit: ms. Range: [0, 3000].
This parameter is set by the sender to inform the recipient of the expected buffer time for delay.
     * @param integer $PeerIdleTimeout Idle timeout for SRT relay. Default value: 5000 ms. Range: [1000, 10000].
If there is no activity on a connection within the set timeout period, it will be closed.
     * @param string $Passphrase Encryption key for SRT retweet. It is empty by default, indicating not encrypted. Only ascii characters are allowed, with a length of [10, 79].
     * @param integer $PbKeyLen Key length for SRT retransmission. Default value: 0. Options: [0|16|24|32].
     * @param SRTFECFullOptions $FEC SRT FEC settings
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

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = new SRTFECFullOptions();
            $this->FEC->deserialize($param["FEC"]);
        }
    }
}
