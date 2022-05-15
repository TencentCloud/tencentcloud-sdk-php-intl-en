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
 * SRT configuration information of the queried input.
 *
 * @method string getMode() Obtain The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMode(string $Mode) Set The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStreamId() Obtain Stream ID.
 * @method void setStreamId(string $StreamId) Set Stream ID.
 * @method integer getLatency() Obtain Latency.
 * @method void setLatency(integer $Latency) Set Latency.
 * @method integer getRecvLatency() Obtain Receive latency.
 * @method void setRecvLatency(integer $RecvLatency) Set Receive latency.
 * @method integer getPeerLatency() Obtain Peer latency.
 * @method void setPeerLatency(integer $PeerLatency) Set Peer latency.
 * @method integer getPeerIdleTimeout() Obtain Peer idle timeout period.
 * @method void setPeerIdleTimeout(integer $PeerIdleTimeout) Set Peer idle timeout period.
 * @method string getPassphrase() Obtain Decryption key.
 * @method void setPassphrase(string $Passphrase) Set Decryption key.
 * @method integer getPbKeyLen() Obtain Key length.
 * @method void setPbKeyLen(integer $PbKeyLen) Set Key length.
 * @method array getSourceAddresses() Obtain The SRT peer address.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSourceAddresses(array $SourceAddresses) Set The SRT peer address.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DescribeInputSRTSettings extends AbstractModel
{
    /**
     * @var string The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mode;

    /**
     * @var string Stream ID.
     */
    public $StreamId;

    /**
     * @var integer Latency.
     */
    public $Latency;

    /**
     * @var integer Receive latency.
     */
    public $RecvLatency;

    /**
     * @var integer Peer latency.
     */
    public $PeerLatency;

    /**
     * @var integer Peer idle timeout period.
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
     * @var array The SRT peer address.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SourceAddresses;

    /**
     * @param string $Mode The SRT mode.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $StreamId Stream ID.
     * @param integer $Latency Latency.
     * @param integer $RecvLatency Receive latency.
     * @param integer $PeerLatency Peer latency.
     * @param integer $PeerIdleTimeout Peer idle timeout period.
     * @param string $Passphrase Decryption key.
     * @param integer $PbKeyLen Key length.
     * @param array $SourceAddresses The SRT peer address.
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
    }
}
