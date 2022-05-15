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
 * SRT configuration information of the created input.
 *
 * @method string getMode() Obtain The SRT mode. Valid values: LISTENER (default), CALLER.
 * @method void setMode(string $Mode) Set The SRT mode. Valid values: LISTENER (default), CALLER.
 * @method string getStreamId() Obtain Stream ID, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
 * @method void setStreamId(string $StreamId) Set Stream ID, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
 * @method integer getLatency() Obtain Latency in ms. Default value: 0. Value range: [0, 3000].
 * @method void setLatency(integer $Latency) Set Latency in ms. Default value: 0. Value range: [0, 3000].
 * @method integer getRecvLatency() Obtain Receive latency in ms. Default value: 120. Value range: [0, 3000].
 * @method void setRecvLatency(integer $RecvLatency) Set Receive latency in ms. Default value: 120. Value range: [0, 3000].
 * @method integer getPeerLatency() Obtain Peer latency in ms. Default value: 0. Value range: [0, 3000].
 * @method void setPeerLatency(integer $PeerLatency) Set Peer latency in ms. Default value: 0. Value range: [0, 3000].
 * @method integer getPeerIdleTimeout() Obtain Peer timeout period in ms. Default value: 5000. Value range: [1000, 10000].
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Peer timeout period in ms. Default value: 5000. Value range: [1000, 10000].
 * @method string getPassphrase() Obtain Decryption key, which is empty by default, indicating not to encrypt. Only ASCII codes can be filled. Length: [10, 79].
 * @method void setPassphrase(string $Passphrase) Set Decryption key, which is empty by default, indicating not to encrypt. Only ASCII codes can be filled. Length: [10, 79].
 * @method integer getPbKeyLen() Obtain Key length. Default value: 0. Valid values: 0, 16, 24, 32.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length. Default value: 0. Valid values: 0, 16, 24, 32.
 * @method array getSourceAddresses() Obtain The SRT peer address, which is required if `Mode` is `CALLER`. Only one address is allowed.
 * @method void setSourceAddresses(array $SourceAddresses) Set The SRT peer address, which is required if `Mode` is `CALLER`. Only one address is allowed.
 */
class CreateInputSRTSettings extends AbstractModel
{
    /**
     * @var string The SRT mode. Valid values: LISTENER (default), CALLER.
     */
    public $Mode;

    /**
     * @var string Stream ID, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
     */
    public $StreamId;

    /**
     * @var integer Latency in ms. Default value: 0. Value range: [0, 3000].
     */
    public $Latency;

    /**
     * @var integer Receive latency in ms. Default value: 120. Value range: [0, 3000].
     */
    public $RecvLatency;

    /**
     * @var integer Peer latency in ms. Default value: 0. Value range: [0, 3000].
     */
    public $PeerLatency;

    /**
     * @var integer Peer timeout period in ms. Default value: 5000. Value range: [1000, 10000].
     */
    public $PeerIdleTimeout;

    /**
     * @var string Decryption key, which is empty by default, indicating not to encrypt. Only ASCII codes can be filled. Length: [10, 79].
     */
    public $Passphrase;

    /**
     * @var integer Key length. Default value: 0. Valid values: 0, 16, 24, 32.
     */
    public $PbKeyLen;

    /**
     * @var array The SRT peer address, which is required if `Mode` is `CALLER`. Only one address is allowed.
     */
    public $SourceAddresses;

    /**
     * @param string $Mode The SRT mode. Valid values: LISTENER (default), CALLER.
     * @param string $StreamId Stream ID, which can contain 0 to 512 letters, digits, and special characters (.#!:&,=_-).
     * @param integer $Latency Latency in ms. Default value: 0. Value range: [0, 3000].
     * @param integer $RecvLatency Receive latency in ms. Default value: 120. Value range: [0, 3000].
     * @param integer $PeerLatency Peer latency in ms. Default value: 0. Value range: [0, 3000].
     * @param integer $PeerIdleTimeout Peer timeout period in ms. Default value: 5000. Value range: [1000, 10000].
     * @param string $Passphrase Decryption key, which is empty by default, indicating not to encrypt. Only ASCII codes can be filled. Length: [10, 79].
     * @param integer $PbKeyLen Key length. Default value: 0. Valid values: 0, 16, 24, 32.
     * @param array $SourceAddresses The SRT peer address, which is required if `Mode` is `CALLER`. Only one address is allowed.
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
    }
}
