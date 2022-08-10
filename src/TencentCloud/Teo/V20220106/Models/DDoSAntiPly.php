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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS protection against protocol and connection attacks
 *
 * @method string getDropTcp() Obtain Enables TCP protocol blocking. `on` (enable); `off` (disable).
 * @method void setDropTcp(string $DropTcp) Set Enables TCP protocol blocking. `on` (enable); `off` (disable).
 * @method string getDropUdp() Obtain Enables UDP protocol blocking. `on` (enable); `off` (disable).
 * @method void setDropUdp(string $DropUdp) Set Enables UDP protocol blocking. `on` (enable); `off` (disable).
 * @method string getDropIcmp() Obtain Enables ICMP protocol blocking. `on` (enable); `off` (disable).
 * @method void setDropIcmp(string $DropIcmp) Set Enables ICMP protocol blocking. `on` (enable); `off` (disable).
 * @method string getDropOther() Obtain Enables blocking for other protocols. `on` (enable); `off` (disable).
 * @method void setDropOther(string $DropOther) Set Enables blocking for other protocols. `on` (enable); `off` (disable).
 * @method integer getSourceCreateLimit() Obtain Number of new connections the source port can establish. Value range: 0-4294967295.
 * @method void setSourceCreateLimit(integer $SourceCreateLimit) Set Number of new connections the source port can establish. Value range: 0-4294967295.
 * @method integer getSourceConnectLimit() Obtain Number of concurrent connections the source port can establish. Value range: 0-4294967295.
 * @method void setSourceConnectLimit(integer $SourceConnectLimit) Set Number of concurrent connections the source port can establish. Value range: 0-4294967295.
 * @method integer getDestinationCreateLimit() Obtain Number of new connections the destination port can establish. Value range: 0-4294967295.
 * @method void setDestinationCreateLimit(integer $DestinationCreateLimit) Set Number of new connections the destination port can establish. Value range: 0-4294967295.
 * @method integer getDestinationConnectLimit() Obtain Number of concurrent connections the destination port can establish. Value range: 0-4294967295.
 * @method void setDestinationConnectLimit(integer $DestinationConnectLimit) Set Number of concurrent connections the destination port can establish. Value range: 0-4294967295.
 * @method integer getAbnormalConnectNum() Obtain Number of abnormal connections allowed. Value range: 0-4294967295.
 * @method void setAbnormalConnectNum(integer $AbnormalConnectNum) Set Number of abnormal connections allowed. Value range: 0-4294967295.
 * @method integer getAbnormalSynRatio() Obtain Specifies the ratio of SYN exceptions to trigger alerts. Value range: 0-100
 * @method void setAbnormalSynRatio(integer $AbnormalSynRatio) Set Specifies the ratio of SYN exceptions to trigger alerts. Value range: 0-100
 * @method integer getAbnormalSynNum() Obtain Specifies a max number of SYN packets that triggers alarms. Value range: 0-65535
 * @method void setAbnormalSynNum(integer $AbnormalSynNum) Set Specifies a max number of SYN packets that triggers alarms. Value range: 0-65535
 * @method integer getConnectTimeout() Obtain Connection timeout period. Value range: 0-65535.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Connection timeout period. Value range: 0-65535.
 * @method string getEmptyConnectProtect() Obtain Whether to enable null session protection. `0`: Disable; `1`: Enable.
 * @method void setEmptyConnectProtect(string $EmptyConnectProtect) Set Whether to enable null session protection. `0`: Disable; `1`: Enable.
 * @method string getUdpShard() Obtain Whether to enable UDP fragmentation. `off`: Disable; `on`: Enable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUdpShard(string $UdpShard) Set Whether to enable UDP fragmentation. `off`: Disable; `on`: Enable.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DDoSAntiPly extends AbstractModel
{
    /**
     * @var string Enables TCP protocol blocking. `on` (enable); `off` (disable).
     */
    public $DropTcp;

    /**
     * @var string Enables UDP protocol blocking. `on` (enable); `off` (disable).
     */
    public $DropUdp;

    /**
     * @var string Enables ICMP protocol blocking. `on` (enable); `off` (disable).
     */
    public $DropIcmp;

    /**
     * @var string Enables blocking for other protocols. `on` (enable); `off` (disable).
     */
    public $DropOther;

    /**
     * @var integer Number of new connections the source port can establish. Value range: 0-4294967295.
     */
    public $SourceCreateLimit;

    /**
     * @var integer Number of concurrent connections the source port can establish. Value range: 0-4294967295.
     */
    public $SourceConnectLimit;

    /**
     * @var integer Number of new connections the destination port can establish. Value range: 0-4294967295.
     */
    public $DestinationCreateLimit;

    /**
     * @var integer Number of concurrent connections the destination port can establish. Value range: 0-4294967295.
     */
    public $DestinationConnectLimit;

    /**
     * @var integer Number of abnormal connections allowed. Value range: 0-4294967295.
     */
    public $AbnormalConnectNum;

    /**
     * @var integer Specifies the ratio of SYN exceptions to trigger alerts. Value range: 0-100
     */
    public $AbnormalSynRatio;

    /**
     * @var integer Specifies a max number of SYN packets that triggers alarms. Value range: 0-65535
     */
    public $AbnormalSynNum;

    /**
     * @var integer Connection timeout period. Value range: 0-65535.
     */
    public $ConnectTimeout;

    /**
     * @var string Whether to enable null session protection. `0`: Disable; `1`: Enable.
     */
    public $EmptyConnectProtect;

    /**
     * @var string Whether to enable UDP fragmentation. `off`: Disable; `on`: Enable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UdpShard;

    /**
     * @param string $DropTcp Enables TCP protocol blocking. `on` (enable); `off` (disable).
     * @param string $DropUdp Enables UDP protocol blocking. `on` (enable); `off` (disable).
     * @param string $DropIcmp Enables ICMP protocol blocking. `on` (enable); `off` (disable).
     * @param string $DropOther Enables blocking for other protocols. `on` (enable); `off` (disable).
     * @param integer $SourceCreateLimit Number of new connections the source port can establish. Value range: 0-4294967295.
     * @param integer $SourceConnectLimit Number of concurrent connections the source port can establish. Value range: 0-4294967295.
     * @param integer $DestinationCreateLimit Number of new connections the destination port can establish. Value range: 0-4294967295.
     * @param integer $DestinationConnectLimit Number of concurrent connections the destination port can establish. Value range: 0-4294967295.
     * @param integer $AbnormalConnectNum Number of abnormal connections allowed. Value range: 0-4294967295.
     * @param integer $AbnormalSynRatio Specifies the ratio of SYN exceptions to trigger alerts. Value range: 0-100
     * @param integer $AbnormalSynNum Specifies a max number of SYN packets that triggers alarms. Value range: 0-65535
     * @param integer $ConnectTimeout Connection timeout period. Value range: 0-65535.
     * @param string $EmptyConnectProtect Whether to enable null session protection. `0`: Disable; `1`: Enable.
     * @param string $UdpShard Whether to enable UDP fragmentation. `off`: Disable; `on`: Enable.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DropTcp",$param) and $param["DropTcp"] !== null) {
            $this->DropTcp = $param["DropTcp"];
        }

        if (array_key_exists("DropUdp",$param) and $param["DropUdp"] !== null) {
            $this->DropUdp = $param["DropUdp"];
        }

        if (array_key_exists("DropIcmp",$param) and $param["DropIcmp"] !== null) {
            $this->DropIcmp = $param["DropIcmp"];
        }

        if (array_key_exists("DropOther",$param) and $param["DropOther"] !== null) {
            $this->DropOther = $param["DropOther"];
        }

        if (array_key_exists("SourceCreateLimit",$param) and $param["SourceCreateLimit"] !== null) {
            $this->SourceCreateLimit = $param["SourceCreateLimit"];
        }

        if (array_key_exists("SourceConnectLimit",$param) and $param["SourceConnectLimit"] !== null) {
            $this->SourceConnectLimit = $param["SourceConnectLimit"];
        }

        if (array_key_exists("DestinationCreateLimit",$param) and $param["DestinationCreateLimit"] !== null) {
            $this->DestinationCreateLimit = $param["DestinationCreateLimit"];
        }

        if (array_key_exists("DestinationConnectLimit",$param) and $param["DestinationConnectLimit"] !== null) {
            $this->DestinationConnectLimit = $param["DestinationConnectLimit"];
        }

        if (array_key_exists("AbnormalConnectNum",$param) and $param["AbnormalConnectNum"] !== null) {
            $this->AbnormalConnectNum = $param["AbnormalConnectNum"];
        }

        if (array_key_exists("AbnormalSynRatio",$param) and $param["AbnormalSynRatio"] !== null) {
            $this->AbnormalSynRatio = $param["AbnormalSynRatio"];
        }

        if (array_key_exists("AbnormalSynNum",$param) and $param["AbnormalSynNum"] !== null) {
            $this->AbnormalSynNum = $param["AbnormalSynNum"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("EmptyConnectProtect",$param) and $param["EmptyConnectProtect"] !== null) {
            $this->EmptyConnectProtect = $param["EmptyConnectProtect"];
        }

        if (array_key_exists("UdpShard",$param) and $param["UdpShard"] !== null) {
            $this->UdpShard = $param["UdpShard"];
        }
    }
}
