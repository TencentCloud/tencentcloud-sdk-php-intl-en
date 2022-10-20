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
 * DDoS feature filtering
 *
 * @method string getAction() Obtain Action to be executed. Valid values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`drop_block`: Discard and block</li>
<li>`forward`: Continue protection</li>
 * @method void setAction(string $Action) Set Action to be executed. Valid values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`drop_block`: Discard and block</li>
<li>`forward`: Continue protection</li>
 * @method string getProtocol() Obtain The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`icmp`: ICMP protocol</li>
<li>`all`: All protocols</li>
 * @method void setProtocol(string $Protocol) Set The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`icmp`: ICMP protocol</li>
<li>`all`: All protocols</li>
 * @method integer getDportStart() Obtain Start of the destination port. Value range: 0–65535.
 * @method void setDportStart(integer $DportStart) Set Start of the destination port. Value range: 0–65535.
 * @method integer getDportEnd() Obtain End of the destination port. Value range: 0–65535.
 * @method void setDportEnd(integer $DportEnd) Set End of the destination port. Value range: 0–65535.
 * @method integer getPacketMin() Obtain Minimum packet length. Value range: 0–1500.
 * @method void setPacketMin(integer $PacketMin) Set Minimum packet length. Value range: 0–1500.
 * @method integer getPacketMax() Obtain Maximum packet length. Value range: 0–1500.
 * @method void setPacketMax(integer $PacketMax) Set Maximum packet length. Value range: 0–1500.
 * @method integer getSportStart() Obtain Start of the source port. Value range: 0–65535.
 * @method void setSportStart(integer $SportStart) Set Start of the source port. Value range: 0–65535.
 * @method integer getSportEnd() Obtain End of the source port. Value range: 0–65535.
 * @method void setSportEnd(integer $SportEnd) Set End of the source port. Value range: 0–65535.
 * @method string getMatchType() Obtain Matching method 1 of **feature 1**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
 * @method void setMatchType(string $MatchType) Set Matching method 1 of **feature 1**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
 * @method integer getIsNot() Obtain Whether the pattern in **feature 1** is matched. This parameter is used together with `MatchType`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
 * @method void setIsNot(integer $IsNot) Set Whether the pattern in **feature 1** is matched. This parameter is used together with `MatchType`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
 * @method integer getOffset() Obtain Offset 1 of **feature 1**. Value range: 0–1500.
 * @method void setOffset(integer $Offset) Set Offset 1 of **feature 1**. Value range: 0–1500.
 * @method integer getDepth() Obtain The depth to inspect **feature 1** in the packet. Value range: 1–1500.
 * @method void setDepth(integer $Depth) Set The depth to inspect **feature 1** in the packet. Value range: 1–1500.
 * @method string getMatchBegin() Obtain The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
 * @method void setMatchBegin(string $MatchBegin) Set The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
 * @method string getStr() Obtain The match content of **feature 1**.
 * @method void setStr(string $Str) Set The match content of **feature 1**.
 * @method string getMatchType2() Obtain Matching method 2 of **feature 2**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
 * @method void setMatchType2(string $MatchType2) Set Matching method 2 of **feature 2**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
 * @method integer getIsNot2() Obtain Whether the pattern in **feature 2** is matched. This parameter is used together with `MatchType2`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
 * @method void setIsNot2(integer $IsNot2) Set Whether the pattern in **feature 2** is matched. This parameter is used together with `MatchType2`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
 * @method integer getOffset2() Obtain Offset 2 of **feature 2**. Value range: 0–1500.
 * @method void setOffset2(integer $Offset2) Set Offset 2 of **feature 2**. Value range: 0–1500.
 * @method integer getDepth2() Obtain The depth to inspect **feature 2** in the packet. Value range: 1–1500.
 * @method void setDepth2(integer $Depth2) Set The depth to inspect **feature 2** in the packet. Value range: 1–1500.
 * @method string getMatchBegin2() Obtain The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
 * @method void setMatchBegin2(string $MatchBegin2) Set The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
 * @method string getStr2() Obtain The match content of **feature 2**.
 * @method void setStr2(string $Str2) Set The match content of **feature 2**.
 * @method string getMatchLogic() Obtain Multi-feature relationship. Enter `none` if only **feature 1** is configured. If **feature 2** exists, you can leave this parameter empty.
 * @method void setMatchLogic(string $MatchLogic) Set Multi-feature relationship. Enter `none` if only **feature 1** is configured. If **feature 2** exists, you can leave this parameter empty.
 */
class DDoSFeaturesFilter extends AbstractModel
{
    /**
     * @var string Action to be executed. Valid values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`drop_block`: Discard and block</li>
<li>`forward`: Continue protection</li>
     */
    public $Action;

    /**
     * @var string The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`icmp`: ICMP protocol</li>
<li>`all`: All protocols</li>
     */
    public $Protocol;

    /**
     * @var integer Start of the destination port. Value range: 0–65535.
     */
    public $DportStart;

    /**
     * @var integer End of the destination port. Value range: 0–65535.
     */
    public $DportEnd;

    /**
     * @var integer Minimum packet length. Value range: 0–1500.
     */
    public $PacketMin;

    /**
     * @var integer Maximum packet length. Value range: 0–1500.
     */
    public $PacketMax;

    /**
     * @var integer Start of the source port. Value range: 0–65535.
     */
    public $SportStart;

    /**
     * @var integer End of the source port. Value range: 0–65535.
     */
    public $SportEnd;

    /**
     * @var string Matching method 1 of **feature 1**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
     */
    public $MatchType;

    /**
     * @var integer Whether the pattern in **feature 1** is matched. This parameter is used together with `MatchType`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
     */
    public $IsNot;

    /**
     * @var integer Offset 1 of **feature 1**. Value range: 0–1500.
     */
    public $Offset;

    /**
     * @var integer The depth to inspect **feature 1** in the packet. Value range: 1–1500.
     */
    public $Depth;

    /**
     * @var string The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
     */
    public $MatchBegin;

    /**
     * @var string The match content of **feature 1**.
     */
    public $Str;

    /**
     * @var string Matching method 2 of **feature 2**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
     */
    public $MatchType2;

    /**
     * @var integer Whether the pattern in **feature 2** is matched. This parameter is used together with `MatchType2`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
     */
    public $IsNot2;

    /**
     * @var integer Offset 2 of **feature 2**. Value range: 0–1500.
     */
    public $Offset2;

    /**
     * @var integer The depth to inspect **feature 2** in the packet. Value range: 1–1500.
     */
    public $Depth2;

    /**
     * @var string The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
     */
    public $MatchBegin2;

    /**
     * @var string The match content of **feature 2**.
     */
    public $Str2;

    /**
     * @var string Multi-feature relationship. Enter `none` if only **feature 1** is configured. If **feature 2** exists, you can leave this parameter empty.
     */
    public $MatchLogic;

    /**
     * @param string $Action Action to be executed. Valid values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`drop_block`: Discard and block</li>
<li>`forward`: Continue protection</li>
     * @param string $Protocol The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`icmp`: ICMP protocol</li>
<li>`all`: All protocols</li>
     * @param integer $DportStart Start of the destination port. Value range: 0–65535.
     * @param integer $DportEnd End of the destination port. Value range: 0–65535.
     * @param integer $PacketMin Minimum packet length. Value range: 0–1500.
     * @param integer $PacketMax Maximum packet length. Value range: 0–1500.
     * @param integer $SportStart Start of the source port. Value range: 0–65535.
     * @param integer $SportEnd End of the source port. Value range: 0–65535.
     * @param string $MatchType Matching method 1 of **feature 1**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
     * @param integer $IsNot Whether the pattern in **feature 1** is matched. This parameter is used together with `MatchType`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
     * @param integer $Offset Offset 1 of **feature 1**. Value range: 0–1500.
     * @param integer $Depth The depth to inspect **feature 1** in the packet. Value range: 1–1500.
     * @param string $MatchBegin The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
     * @param string $Str The match content of **feature 1**.
     * @param string $MatchType2 Matching method 2 of **feature 2**. Values:
<li>`pcre`: Regular expression match</li>
<li>`sunday`: String match</li>An empty string is used by default.
     * @param integer $IsNot2 Whether the pattern in **feature 2** is matched. This parameter is used together with `MatchType2`. Values:
<li>`0`: Matched</li>
<li>`1`: Not matched</li>
     * @param integer $Offset2 Offset 2 of **feature 2**. Value range: 0–1500.
     * @param integer $Depth2 The depth to inspect **feature 2** in the packet. Value range: 1–1500.
     * @param string $MatchBegin2 The layer from which each match starts. Values:
<li>`begin_l5`: Start from the payload.</li>
<li>`begin_l4`: Start from the TCP/UDP header.</li>
<li>`begin_l3`: Start from the IP header.</li>
     * @param string $Str2 The match content of **feature 2**.
     * @param string $MatchLogic Multi-feature relationship. Enter `none` if only **feature 1** is configured. If **feature 2** exists, you can leave this parameter empty.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("PacketMin",$param) and $param["PacketMin"] !== null) {
            $this->PacketMin = $param["PacketMin"];
        }

        if (array_key_exists("PacketMax",$param) and $param["PacketMax"] !== null) {
            $this->PacketMax = $param["PacketMax"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }
    }
}
