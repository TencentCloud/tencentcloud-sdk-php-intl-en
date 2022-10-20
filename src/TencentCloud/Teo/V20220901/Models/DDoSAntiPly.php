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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS protection against protocol and connection attacks
 *
 * @method string getDropTcp() Obtain Whether to enable TCP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setDropTcp(string $DropTcp) Set Whether to enable TCP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method string getDropUdp() Obtain Whether to enable UDP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setDropUdp(string $DropUdp) Set Whether to enable UDP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method string getDropIcmp() Obtain Whether to enable ICMP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setDropIcmp(string $DropIcmp) Set Whether to enable ICMP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method string getDropOther() Obtain Whether to enable blocking of other protocols. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setDropOther(string $DropOther) Set Whether to enable blocking of other protocols. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method integer getSourceCreateLimit() Obtain Maximum number of new connections to the origin per second. Value range: 0–4294967295.
 * @method void setSourceCreateLimit(integer $SourceCreateLimit) Set Maximum number of new connections to the origin per second. Value range: 0–4294967295.
 * @method integer getSourceConnectLimit() Obtain Maximum number of concurrent connections to the origin. Value range: 0–4294967295.
 * @method void setSourceConnectLimit(integer $SourceConnectLimit) Set Maximum number of concurrent connections to the origin. Value range: 0–4294967295.
 * @method integer getDestinationCreateLimit() Obtain Maximum number of new connections to the destination port per second. Value range: 0–4294967295.
 * @method void setDestinationCreateLimit(integer $DestinationCreateLimit) Set Maximum number of new connections to the destination port per second. Value range: 0–4294967295.
 * @method integer getDestinationConnectLimit() Obtain Maximum number of concurrent connections to the destination port. Value range: 0–4294967295.
 * @method void setDestinationConnectLimit(integer $DestinationConnectLimit) Set Maximum number of concurrent connections to the destination port. Value range: 0–4294967295.
 * @method integer getAbnormalConnectNum() Obtain Maximum number of abnormal connections per second. Value range: 0–4294967295.
 * @method void setAbnormalConnectNum(integer $AbnormalConnectNum) Set Maximum number of abnormal connections per second. Value range: 0–4294967295.
 * @method integer getAbnormalSynRatio() Obtain Maximum percentage of abnormal SYN packets. Value range: 0–100.
 * @method void setAbnormalSynRatio(integer $AbnormalSynRatio) Set Maximum percentage of abnormal SYN packets. Value range: 0–100.
 * @method integer getAbnormalSynNum() Obtain Maximum number of abnormal SYN packets. Value range: 0–65535.
 * @method void setAbnormalSynNum(integer $AbnormalSynNum) Set Maximum number of abnormal SYN packets. Value range: 0–65535.
 * @method integer getConnectTimeout() Obtain Maximum number of detected connections timed out per second. Value range: 0–65535.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Maximum number of detected connections timed out per second. Value range: 0–65535.
 * @method string getEmptyConnectProtect() Obtain Whether to enable null session protection. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setEmptyConnectProtect(string $EmptyConnectProtect) Set Whether to enable null session protection. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method string getUdpShard() Obtain Whether to enable UDP fragmentation. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 * @method void setUdpShard(string $UdpShard) Set Whether to enable UDP fragmentation. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
 */
class DDoSAntiPly extends AbstractModel
{
    /**
     * @var string Whether to enable TCP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $DropTcp;

    /**
     * @var string Whether to enable UDP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $DropUdp;

    /**
     * @var string Whether to enable ICMP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $DropIcmp;

    /**
     * @var string Whether to enable blocking of other protocols. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $DropOther;

    /**
     * @var integer Maximum number of new connections to the origin per second. Value range: 0–4294967295.
     */
    public $SourceCreateLimit;

    /**
     * @var integer Maximum number of concurrent connections to the origin. Value range: 0–4294967295.
     */
    public $SourceConnectLimit;

    /**
     * @var integer Maximum number of new connections to the destination port per second. Value range: 0–4294967295.
     */
    public $DestinationCreateLimit;

    /**
     * @var integer Maximum number of concurrent connections to the destination port. Value range: 0–4294967295.
     */
    public $DestinationConnectLimit;

    /**
     * @var integer Maximum number of abnormal connections per second. Value range: 0–4294967295.
     */
    public $AbnormalConnectNum;

    /**
     * @var integer Maximum percentage of abnormal SYN packets. Value range: 0–100.
     */
    public $AbnormalSynRatio;

    /**
     * @var integer Maximum number of abnormal SYN packets. Value range: 0–65535.
     */
    public $AbnormalSynNum;

    /**
     * @var integer Maximum number of detected connections timed out per second. Value range: 0–65535.
     */
    public $ConnectTimeout;

    /**
     * @var string Whether to enable null session protection. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $EmptyConnectProtect;

    /**
     * @var string Whether to enable UDP fragmentation. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     */
    public $UdpShard;

    /**
     * @param string $DropTcp Whether to enable TCP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param string $DropUdp Whether to enable UDP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param string $DropIcmp Whether to enable ICMP protocol blocking. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param string $DropOther Whether to enable blocking of other protocols. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param integer $SourceCreateLimit Maximum number of new connections to the origin per second. Value range: 0–4294967295.
     * @param integer $SourceConnectLimit Maximum number of concurrent connections to the origin. Value range: 0–4294967295.
     * @param integer $DestinationCreateLimit Maximum number of new connections to the destination port per second. Value range: 0–4294967295.
     * @param integer $DestinationConnectLimit Maximum number of concurrent connections to the destination port. Value range: 0–4294967295.
     * @param integer $AbnormalConnectNum Maximum number of abnormal connections per second. Value range: 0–4294967295.
     * @param integer $AbnormalSynRatio Maximum percentage of abnormal SYN packets. Value range: 0–100.
     * @param integer $AbnormalSynNum Maximum number of abnormal SYN packets. Value range: 0–65535.
     * @param integer $ConnectTimeout Maximum number of detected connections timed out per second. Value range: 0–65535.
     * @param string $EmptyConnectProtect Whether to enable null session protection. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
     * @param string $UdpShard Whether to enable UDP fragmentation. Values:
<li>`off`: Disable</li>
<li>`on`: Enable</li>
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
