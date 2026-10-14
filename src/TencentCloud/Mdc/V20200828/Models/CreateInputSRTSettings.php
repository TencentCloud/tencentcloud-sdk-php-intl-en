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
 * Configuration message of the created input SRT.
 *
 * @method string getMode() Obtain SRT mode. Options: [LISTENER|CALLER]. Default value: LISTENER.
 * @method void setMode(string $Mode) Set SRT mode. Options: [LISTENER|CALLER]. Default value: LISTENER.
 * @method string getStreamId() Obtain Stream Id. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512. For the specific format, see: https://github.com/Haivision/srt/blob/master/docs/features/access-control.md#standard-keys.	
 * @method void setStreamId(string $StreamId) Set Stream Id. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512. For the specific format, see: https://github.com/Haivision/srt/blob/master/docs/features/access-control.md#standard-keys.	
 * @method integer getLatency() Obtain Delay. Default value: 0. Unit: ms. Range: [0, 3000].
 * @method void setLatency(integer $Latency) Set Delay. Default value: 0. Unit: ms. Range: [0, 3000].
 * @method integer getRecvLatency() Obtain Receive latency. Default value: 120. Unit: ms. Range: [0, 3000].
 * @method void setRecvLatency(integer $RecvLatency) Set Receive latency. Default value: 120. Unit: ms. Range: [0, 3000].
 * @method integer getPeerLatency() Obtain Peer delay. Default value: 0. Unit: ms. Range: [0, 3000].
 * @method void setPeerLatency(integer $PeerLatency) Set Peer delay. Default value: 0. Unit: ms. Range: [0, 3000].
 * @method integer getPeerIdleTimeout() Obtain Peer timeout. Default value: 5000 ms. Range: [1000, 10000].
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Peer timeout. Default value: 5000 ms. Range: [1000, 10000].
 * @method string getPassphrase() Obtain Decryption key. Empty by default, which means not encrypted. Only ascii characters are supported. Length range: [10, 79].
 * @method void setPassphrase(string $Passphrase) Set Decryption key. Empty by default, which means not encrypted. Only ascii characters are supported. Length range: [10, 79].
 * @method integer getPbKeyLen() Obtain Key length. Default value: 0. Options: [0|16|24|32].
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length. Default value: 0. Options: [0|16|24|32].
 * @method array getSourceAddresses() Obtain SRT peer address. Required when Mode is CALLER, and can only contain 1 group.
 * @method void setSourceAddresses(array $SourceAddresses) Set SRT peer address. Required when Mode is CALLER, and can only contain 1 group.
 * @method SRTFECSimpleOptions getFEC() Obtain SRT FEC settings
 * @method void setFEC(SRTFECSimpleOptions $FEC) Set SRT FEC settings
 */
class CreateInputSRTSettings extends AbstractModel
{
    /**
     * @var string SRT mode. Options: [LISTENER|CALLER]. Default value: LISTENER.
     */
    public $Mode;

    /**
     * @var string Stream Id. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512. For the specific format, see: https://github.com/Haivision/srt/blob/master/docs/features/access-control.md#standard-keys.	
     */
    public $StreamId;

    /**
     * @var integer Delay. Default value: 0. Unit: ms. Range: [0, 3000].
     */
    public $Latency;

    /**
     * @var integer Receive latency. Default value: 120. Unit: ms. Range: [0, 3000].
     */
    public $RecvLatency;

    /**
     * @var integer Peer delay. Default value: 0. Unit: ms. Range: [0, 3000].
     */
    public $PeerLatency;

    /**
     * @var integer Peer timeout. Default value: 5000 ms. Range: [1000, 10000].
     */
    public $PeerIdleTimeout;

    /**
     * @var string Decryption key. Empty by default, which means not encrypted. Only ascii characters are supported. Length range: [10, 79].
     */
    public $Passphrase;

    /**
     * @var integer Key length. Default value: 0. Options: [0|16|24|32].
     */
    public $PbKeyLen;

    /**
     * @var array SRT peer address. Required when Mode is CALLER, and can only contain 1 group.
     */
    public $SourceAddresses;

    /**
     * @var SRTFECSimpleOptions SRT FEC settings
     */
    public $FEC;

    /**
     * @param string $Mode SRT mode. Options: [LISTENER|CALLER]. Default value: LISTENER.
     * @param string $StreamId Stream Id. It can contain upper- and lower-case letters, digits, and special characters (.#!:&,=_-), with a length of 0 to 512. For the specific format, see: https://github.com/Haivision/srt/blob/master/docs/features/access-control.md#standard-keys.	
     * @param integer $Latency Delay. Default value: 0. Unit: ms. Range: [0, 3000].
     * @param integer $RecvLatency Receive latency. Default value: 120. Unit: ms. Range: [0, 3000].
     * @param integer $PeerLatency Peer delay. Default value: 0. Unit: ms. Range: [0, 3000].
     * @param integer $PeerIdleTimeout Peer timeout. Default value: 5000 ms. Range: [1000, 10000].
     * @param string $Passphrase Decryption key. Empty by default, which means not encrypted. Only ascii characters are supported. Length range: [10, 79].
     * @param integer $PbKeyLen Key length. Default value: 0. Options: [0|16|24|32].
     * @param array $SourceAddresses SRT peer address. Required when Mode is CALLER, and can only contain 1 group.
     * @param SRTFECSimpleOptions $FEC SRT FEC settings
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
                $obj = new SRTSourceAddressReq();
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
