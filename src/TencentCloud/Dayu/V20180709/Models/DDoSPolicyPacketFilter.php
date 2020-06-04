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
 * Packet filter in advanced DDoS policy
 *
 * @method string getProtocol() Obtain Protocol. Valid values: [tcp, udp, icmp, all]
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: [tcp, udp, icmp, all]
 * @method integer getSportStart() Obtain Start source port. Value range: [0,65535]
 * @method void setSportStart(integer $SportStart) Set Start source port. Value range: [0,65535]
 * @method integer getSportEnd() Obtain End source port. Value range: [0,65535]
 * @method void setSportEnd(integer $SportEnd) Set End source port. Value range: [0,65535]
 * @method integer getDportStart() Obtain Start destination port. Value range: [0,65535]
 * @method void setDportStart(integer $DportStart) Set Start destination port. Value range: [0,65535]
 * @method integer getDportEnd() Obtain End destination port. Value range: [0,65535]
 * @method void setDportEnd(integer $DportEnd) Set End destination port. Value range: [0,65535]
 * @method integer getPktlenMin() Obtain Minimum packet length. Value range: [0,1500]
 * @method void setPktlenMin(integer $PktlenMin) Set Minimum packet length. Value range: [0,1500]
 * @method integer getPktlenMax() Obtain Maximum packet length. Value range: [0,1500]
 * @method void setPktlenMax(integer $PktlenMax) Set Maximum packet length. Value range: [0,1500]
 * @method string getMatchBegin() Obtain Whether to detect the payload. Valid values: [
begin_l3 (IP header)
begin_l4 (TCP header)
begin_l5 (payload)
no_match (no check)
]
 * @method void setMatchBegin(string $MatchBegin) Set Whether to detect the payload. Valid values: [
begin_l3 (IP header)
begin_l4 (TCP header)
begin_l5 (payload)
no_match (no check)
]
 * @method string getMatchType() Obtain Whether it is a regular expression. Valid values: [sunday (keyword), pcre (regular expression)]
 * @method void setMatchType(string $MatchType) Set Whether it is a regular expression. Valid values: [sunday (keyword), pcre (regular expression)]
 * @method string getStr() Obtain Keyword or regular expression
 * @method void setStr(string $Str) Set Keyword or regular expression
 * @method integer getDepth() Obtain Detection depth. Value range: [0,1500]
 * @method void setDepth(integer $Depth) Set Detection depth. Value range: [0,1500]
 * @method integer getOffset() Obtain Detection offset. Value range: [0,1500]
 * @method void setOffset(integer $Offset) Set Detection offset. Value range: [0,1500]
 * @method integer getIsNot() Obtain Whether to include. Valid values: [0 (no), 1 (yes)]
 * @method void setIsNot(integer $IsNot) Set Whether to include. Valid values: [0 (no), 1 (yes)]
 * @method string getAction() Obtain Policy action. Valid values: [drop, drop_black, drop_rst, drop_black_rst, transmit]
 * @method void setAction(string $Action) Set Policy action. Valid values: [drop, drop_black, drop_rst, drop_black_rst, transmit]
 */
class DDoSPolicyPacketFilter extends AbstractModel
{
    /**
     * @var string Protocol. Valid values: [tcp, udp, icmp, all]
     */
    public $Protocol;

    /**
     * @var integer Start source port. Value range: [0,65535]
     */
    public $SportStart;

    /**
     * @var integer End source port. Value range: [0,65535]
     */
    public $SportEnd;

    /**
     * @var integer Start destination port. Value range: [0,65535]
     */
    public $DportStart;

    /**
     * @var integer End destination port. Value range: [0,65535]
     */
    public $DportEnd;

    /**
     * @var integer Minimum packet length. Value range: [0,1500]
     */
    public $PktlenMin;

    /**
     * @var integer Maximum packet length. Value range: [0,1500]
     */
    public $PktlenMax;

    /**
     * @var string Whether to detect the payload. Valid values: [
begin_l3 (IP header)
begin_l4 (TCP header)
begin_l5 (payload)
no_match (no check)
]
     */
    public $MatchBegin;

    /**
     * @var string Whether it is a regular expression. Valid values: [sunday (keyword), pcre (regular expression)]
     */
    public $MatchType;

    /**
     * @var string Keyword or regular expression
     */
    public $Str;

    /**
     * @var integer Detection depth. Value range: [0,1500]
     */
    public $Depth;

    /**
     * @var integer Detection offset. Value range: [0,1500]
     */
    public $Offset;

    /**
     * @var integer Whether to include. Valid values: [0 (no), 1 (yes)]
     */
    public $IsNot;

    /**
     * @var string Policy action. Valid values: [drop, drop_black, drop_rst, drop_black_rst, transmit]
     */
    public $Action;

    /**
     * @param string $Protocol Protocol. Valid values: [tcp, udp, icmp, all]
     * @param integer $SportStart Start source port. Value range: [0,65535]
     * @param integer $SportEnd End source port. Value range: [0,65535]
     * @param integer $DportStart Start destination port. Value range: [0,65535]
     * @param integer $DportEnd End destination port. Value range: [0,65535]
     * @param integer $PktlenMin Minimum packet length. Value range: [0,1500]
     * @param integer $PktlenMax Maximum packet length. Value range: [0,1500]
     * @param string $MatchBegin Whether to detect the payload. Valid values: [
begin_l3 (IP header)
begin_l4 (TCP header)
begin_l5 (payload)
no_match (no check)
]
     * @param string $MatchType Whether it is a regular expression. Valid values: [sunday (keyword), pcre (regular expression)]
     * @param string $Str Keyword or regular expression
     * @param integer $Depth Detection depth. Value range: [0,1500]
     * @param integer $Offset Detection offset. Value range: [0,1500]
     * @param integer $IsNot Whether to include. Valid values: [0 (no), 1 (yes)]
     * @param string $Action Policy action. Valid values: [drop, drop_black, drop_rst, drop_black_rst, transmit]
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("PktlenMin",$param) and $param["PktlenMin"] !== null) {
            $this->PktlenMin = $param["PktlenMin"];
        }

        if (array_key_exists("PktlenMax",$param) and $param["PktlenMax"] !== null) {
            $this->PktlenMax = $param["PktlenMax"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
