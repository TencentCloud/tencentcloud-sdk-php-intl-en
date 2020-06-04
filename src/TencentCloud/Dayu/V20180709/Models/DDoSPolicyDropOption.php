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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disabled protocol in advanced DDoS policy
 *
 * @method integer getDropTcp() Obtain Blocks all TCP traffic. Valid values: [0,1]
 * @method void setDropTcp(integer $DropTcp) Set Blocks all TCP traffic. Valid values: [0,1]
 * @method integer getDropUdp() Obtain Blocks all UDP traffic. Valid values: [0,1]
 * @method void setDropUdp(integer $DropUdp) Set Blocks all UDP traffic. Valid values: [0,1]
 * @method integer getDropIcmp() Obtain Blocks all ICMP traffic. Valid values: [0,1]
 * @method void setDropIcmp(integer $DropIcmp) Set Blocks all ICMP traffic. Valid values: [0,1]
 * @method integer getDropOther() Obtain Blocks traffic of other protocols. Valid values: [0,1]
 * @method void setDropOther(integer $DropOther) Set Blocks traffic of other protocols. Valid values: [0,1]
 * @method integer getDropAbroad() Obtain Rejects traffic from outside Mainland China. Valid values: [0,1]
 * @method void setDropAbroad(integer $DropAbroad) Set Rejects traffic from outside Mainland China. Valid values: [0,1]
 * @method integer getCheckSyncConn() Obtain Null session protection. Valid values: [0,1]
 * @method void setCheckSyncConn(integer $CheckSyncConn) Set Null session protection. Valid values: [0,1]
 * @method integer getSdNewLimit() Obtain New connection suppression based on source IP and destination IP. Value range: [0,4294967295]
 * @method void setSdNewLimit(integer $SdNewLimit) Set New connection suppression based on source IP and destination IP. Value range: [0,4294967295]
 * @method integer getDstNewLimit() Obtain New connection suppression based on destination IP. Value range: [0,4294967295]
 * @method void setDstNewLimit(integer $DstNewLimit) Set New connection suppression based on destination IP. Value range: [0,4294967295]
 * @method integer getSdConnLimit() Obtain Concurrent connection suppression based on source IP and destination IP. Value range: [0,4294967295]
 * @method void setSdConnLimit(integer $SdConnLimit) Set Concurrent connection suppression based on source IP and destination IP. Value range: [0,4294967295]
 * @method integer getDstConnLimit() Obtain Concurrent connection suppression based on destination IP. Value range: [0,4294967295]
 * @method void setDstConnLimit(integer $DstConnLimit) Set Concurrent connection suppression based on destination IP. Value range: [0,4294967295]
 * @method integer getBadConnThreshold() Obtain Threshold for triggering connection suppression. Value range: [0,4294967295]
 * @method void setBadConnThreshold(integer $BadConnThreshold) Set Threshold for triggering connection suppression. Value range: [0,4294967295]
 * @method integer getNullConnEnable() Obtain Exceptional connection detection condition: null session protection status. Valid values: [0,1]
 * @method void setNullConnEnable(integer $NullConnEnable) Set Exceptional connection detection condition: null session protection status. Valid values: [0,1]
 * @method integer getConnTimeout() Obtain Exceptional connection detection condition: connection timeout. Valid values: [0,65535]
 * @method void setConnTimeout(integer $ConnTimeout) Set Exceptional connection detection condition: connection timeout. Valid values: [0,65535]
 * @method integer getSynRate() Obtain Exceptional connection detection condition: percentage of SYN out of ACK. Valid values: [0,100]
 * @method void setSynRate(integer $SynRate) Set Exceptional connection detection condition: percentage of SYN out of ACK. Valid values: [0,100]
 * @method integer getSynLimit() Obtain Exceptional connection detection condition: SYN threshold. Valid values: [0,100]
 * @method void setSynLimit(integer $SynLimit) Set Exceptional connection detection condition: SYN threshold. Valid values: [0,100]
 * @method integer getDTcpMbpsLimit() Obtain TCP speed limit. Value range: [0,4294967295]
 * @method void setDTcpMbpsLimit(integer $DTcpMbpsLimit) Set TCP speed limit. Value range: [0,4294967295]
 * @method integer getDUdpMbpsLimit() Obtain UDP speed limit. Value range: [0,4294967295]
 * @method void setDUdpMbpsLimit(integer $DUdpMbpsLimit) Set UDP speed limit. Value range: [0,4294967295]
 * @method integer getDIcmpMbpsLimit() Obtain ICMP speed limit. Value range: [0,4294967295]
 * @method void setDIcmpMbpsLimit(integer $DIcmpMbpsLimit) Set ICMP speed limit. Value range: [0,4294967295]
 * @method integer getDOtherMbpsLimit() Obtain Other protocol speed limit. Value range: [0,4294967295]
 * @method void setDOtherMbpsLimit(integer $DOtherMbpsLimit) Set Other protocol speed limit. Value range: [0,4294967295]
 */
class DDoSPolicyDropOption extends AbstractModel
{
    /**
     * @var integer Blocks all TCP traffic. Valid values: [0,1]
     */
    public $DropTcp;

    /**
     * @var integer Blocks all UDP traffic. Valid values: [0,1]
     */
    public $DropUdp;

    /**
     * @var integer Blocks all ICMP traffic. Valid values: [0,1]
     */
    public $DropIcmp;

    /**
     * @var integer Blocks traffic of other protocols. Valid values: [0,1]
     */
    public $DropOther;

    /**
     * @var integer Rejects traffic from outside Mainland China. Valid values: [0,1]
     */
    public $DropAbroad;

    /**
     * @var integer Null session protection. Valid values: [0,1]
     */
    public $CheckSyncConn;

    /**
     * @var integer New connection suppression based on source IP and destination IP. Value range: [0,4294967295]
     */
    public $SdNewLimit;

    /**
     * @var integer New connection suppression based on destination IP. Value range: [0,4294967295]
     */
    public $DstNewLimit;

    /**
     * @var integer Concurrent connection suppression based on source IP and destination IP. Value range: [0,4294967295]
     */
    public $SdConnLimit;

    /**
     * @var integer Concurrent connection suppression based on destination IP. Value range: [0,4294967295]
     */
    public $DstConnLimit;

    /**
     * @var integer Threshold for triggering connection suppression. Value range: [0,4294967295]
     */
    public $BadConnThreshold;

    /**
     * @var integer Exceptional connection detection condition: null session protection status. Valid values: [0,1]
     */
    public $NullConnEnable;

    /**
     * @var integer Exceptional connection detection condition: connection timeout. Valid values: [0,65535]
     */
    public $ConnTimeout;

    /**
     * @var integer Exceptional connection detection condition: percentage of SYN out of ACK. Valid values: [0,100]
     */
    public $SynRate;

    /**
     * @var integer Exceptional connection detection condition: SYN threshold. Valid values: [0,100]
     */
    public $SynLimit;

    /**
     * @var integer TCP speed limit. Value range: [0,4294967295]
     */
    public $DTcpMbpsLimit;

    /**
     * @var integer UDP speed limit. Value range: [0,4294967295]
     */
    public $DUdpMbpsLimit;

    /**
     * @var integer ICMP speed limit. Value range: [0,4294967295]
     */
    public $DIcmpMbpsLimit;

    /**
     * @var integer Other protocol speed limit. Value range: [0,4294967295]
     */
    public $DOtherMbpsLimit;

    /**
     * @param integer $DropTcp Blocks all TCP traffic. Valid values: [0,1]
     * @param integer $DropUdp Blocks all UDP traffic. Valid values: [0,1]
     * @param integer $DropIcmp Blocks all ICMP traffic. Valid values: [0,1]
     * @param integer $DropOther Blocks traffic of other protocols. Valid values: [0,1]
     * @param integer $DropAbroad Rejects traffic from outside Mainland China. Valid values: [0,1]
     * @param integer $CheckSyncConn Null session protection. Valid values: [0,1]
     * @param integer $SdNewLimit New connection suppression based on source IP and destination IP. Value range: [0,4294967295]
     * @param integer $DstNewLimit New connection suppression based on destination IP. Value range: [0,4294967295]
     * @param integer $SdConnLimit Concurrent connection suppression based on source IP and destination IP. Value range: [0,4294967295]
     * @param integer $DstConnLimit Concurrent connection suppression based on destination IP. Value range: [0,4294967295]
     * @param integer $BadConnThreshold Threshold for triggering connection suppression. Value range: [0,4294967295]
     * @param integer $NullConnEnable Exceptional connection detection condition: null session protection status. Valid values: [0,1]
     * @param integer $ConnTimeout Exceptional connection detection condition: connection timeout. Valid values: [0,65535]
     * @param integer $SynRate Exceptional connection detection condition: percentage of SYN out of ACK. Valid values: [0,100]
     * @param integer $SynLimit Exceptional connection detection condition: SYN threshold. Valid values: [0,100]
     * @param integer $DTcpMbpsLimit TCP speed limit. Value range: [0,4294967295]
     * @param integer $DUdpMbpsLimit UDP speed limit. Value range: [0,4294967295]
     * @param integer $DIcmpMbpsLimit ICMP speed limit. Value range: [0,4294967295]
     * @param integer $DOtherMbpsLimit Other protocol speed limit. Value range: [0,4294967295]
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

        if (array_key_exists("DropAbroad",$param) and $param["DropAbroad"] !== null) {
            $this->DropAbroad = $param["DropAbroad"];
        }

        if (array_key_exists("CheckSyncConn",$param) and $param["CheckSyncConn"] !== null) {
            $this->CheckSyncConn = $param["CheckSyncConn"];
        }

        if (array_key_exists("SdNewLimit",$param) and $param["SdNewLimit"] !== null) {
            $this->SdNewLimit = $param["SdNewLimit"];
        }

        if (array_key_exists("DstNewLimit",$param) and $param["DstNewLimit"] !== null) {
            $this->DstNewLimit = $param["DstNewLimit"];
        }

        if (array_key_exists("SdConnLimit",$param) and $param["SdConnLimit"] !== null) {
            $this->SdConnLimit = $param["SdConnLimit"];
        }

        if (array_key_exists("DstConnLimit",$param) and $param["DstConnLimit"] !== null) {
            $this->DstConnLimit = $param["DstConnLimit"];
        }

        if (array_key_exists("BadConnThreshold",$param) and $param["BadConnThreshold"] !== null) {
            $this->BadConnThreshold = $param["BadConnThreshold"];
        }

        if (array_key_exists("NullConnEnable",$param) and $param["NullConnEnable"] !== null) {
            $this->NullConnEnable = $param["NullConnEnable"];
        }

        if (array_key_exists("ConnTimeout",$param) and $param["ConnTimeout"] !== null) {
            $this->ConnTimeout = $param["ConnTimeout"];
        }

        if (array_key_exists("SynRate",$param) and $param["SynRate"] !== null) {
            $this->SynRate = $param["SynRate"];
        }

        if (array_key_exists("SynLimit",$param) and $param["SynLimit"] !== null) {
            $this->SynLimit = $param["SynLimit"];
        }

        if (array_key_exists("DTcpMbpsLimit",$param) and $param["DTcpMbpsLimit"] !== null) {
            $this->DTcpMbpsLimit = $param["DTcpMbpsLimit"];
        }

        if (array_key_exists("DUdpMbpsLimit",$param) and $param["DUdpMbpsLimit"] !== null) {
            $this->DUdpMbpsLimit = $param["DUdpMbpsLimit"];
        }

        if (array_key_exists("DIcmpMbpsLimit",$param) and $param["DIcmpMbpsLimit"] !== null) {
            $this->DIcmpMbpsLimit = $param["DIcmpMbpsLimit"];
        }

        if (array_key_exists("DOtherMbpsLimit",$param) and $param["DOtherMbpsLimit"] !== null) {
            $this->DOtherMbpsLimit = $param["DOtherMbpsLimit"];
        }
    }
}
