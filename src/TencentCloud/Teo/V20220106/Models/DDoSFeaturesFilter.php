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
 * DDoS feature filtering
 *
 * @method string getAction() Obtain Action. `drop`: Drop the request; `transmit`: Allow the request; `drop_block`: Drop the request and block it; `forward`: Continue to offer protection.
 * @method void setAction(string $Action) Set Action. `drop`: Drop the request; `transmit`: Allow the request; `drop_block`: Drop the request and block it; `forward`: Continue to offer protection.
 * @method integer getDepth() Obtain Sets how far from the first search position
 * @method void setDepth(integer $Depth) Set Sets how far from the first search position
 * @method integer getDepth2() Obtain Sets how far from the second search position
 * @method void setDepth2(integer $Depth2) Set Sets how far from the second search position
 * @method integer getDportEnd() Obtain End of the destination port
 * @method void setDportEnd(integer $DportEnd) Set End of the destination port
 * @method integer getDportStart() Obtain Start of the destination port
 * @method void setDportStart(integer $DportStart) Set Start of the destination port
 * @method integer getIsNot() Obtain Whether to match string 1 that does not contain all the specified elements
 * @method void setIsNot(integer $IsNot) Set Whether to match string 1 that does not contain all the specified elements
 * @method integer getIsNot2() Obtain Whether to match string 2 that does not contain all the specified elements
 * @method void setIsNot2(integer $IsNot2) Set Whether to match string 2 that does not contain all the specified elements
 * @method string getMatchLogic() Obtain Logical operator that combines two conditions. Values: `none`, `and` and `or`. If there is only one condition, pass in `none` for this condition only.
 * @method void setMatchLogic(string $MatchLogic) Set Logical operator that combines two conditions. Values: `none`, `and` and `or`. If there is only one condition, pass in `none` for this condition only.
 * @method string getMatchType() Obtain Matching method of the first condition. `pcre`: Regex match; `sunday`: String match.
 * @method void setMatchType(string $MatchType) Set Matching method of the first condition. `pcre`: Regex match; `sunday`: String match.
 * @method string getMatchType2() Obtain Matching method of the second condition. `pcre`: Regex match; `sunday`: String match.
 * @method void setMatchType2(string $MatchType2) Set Matching method of the second condition. `pcre`: Regex match; `sunday`: String match.
 * @method integer getOffset() Obtain Offset from the first search position
 * @method void setOffset(integer $Offset) Set Offset from the first search position
 * @method integer getOffset2() Obtain Offset from the second search position
 * @method void setOffset2(integer $Offset2) Set Offset from the second search position
 * @method integer getPacketMax() Obtain Maximum packet length
 * @method void setPacketMax(integer $PacketMax) Set Maximum packet length
 * @method integer getPacketMin() Obtain Minimum packet length
 * @method void setPacketMin(integer $PacketMin) Set Minimum packet length
 * @method string getProtocol() Obtain Protocol. Values: `tcp`, `udp`, `icmp` and `all`.
 * @method void setProtocol(string $Protocol) Set Protocol. Values: `tcp`, `udp`, `icmp` and `all`.
 * @method integer getSportEnd() Obtain End of the source port
 * @method void setSportEnd(integer $SportEnd) Set End of the source port
 * @method integer getSportStart() Obtain Start of the source port
 * @method void setSportStart(integer $SportStart) Set Start of the source port
 * @method string getStr() Obtain String in the first condition
 * @method void setStr(string $Str) Set String in the first condition
 * @method string getStr2() Obtain String in the second condition
 * @method void setStr2(string $Str2) Set String in the second condition
 * @method string getMatchBegin() Obtain Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
 * @method void setMatchBegin(string $MatchBegin) Set Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
 * @method string getMatchBegin2() Obtain Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
 * @method void setMatchBegin2(string $MatchBegin2) Set Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
 */
class DDoSFeaturesFilter extends AbstractModel
{
    /**
     * @var string Action. `drop`: Drop the request; `transmit`: Allow the request; `drop_block`: Drop the request and block it; `forward`: Continue to offer protection.
     */
    public $Action;

    /**
     * @var integer Sets how far from the first search position
     */
    public $Depth;

    /**
     * @var integer Sets how far from the second search position
     */
    public $Depth2;

    /**
     * @var integer End of the destination port
     */
    public $DportEnd;

    /**
     * @var integer Start of the destination port
     */
    public $DportStart;

    /**
     * @var integer Whether to match string 1 that does not contain all the specified elements
     */
    public $IsNot;

    /**
     * @var integer Whether to match string 2 that does not contain all the specified elements
     */
    public $IsNot2;

    /**
     * @var string Logical operator that combines two conditions. Values: `none`, `and` and `or`. If there is only one condition, pass in `none` for this condition only.
     */
    public $MatchLogic;

    /**
     * @var string Matching method of the first condition. `pcre`: Regex match; `sunday`: String match.
     */
    public $MatchType;

    /**
     * @var string Matching method of the second condition. `pcre`: Regex match; `sunday`: String match.
     */
    public $MatchType2;

    /**
     * @var integer Offset from the first search position
     */
    public $Offset;

    /**
     * @var integer Offset from the second search position
     */
    public $Offset2;

    /**
     * @var integer Maximum packet length
     */
    public $PacketMax;

    /**
     * @var integer Minimum packet length
     */
    public $PacketMin;

    /**
     * @var string Protocol. Values: `tcp`, `udp`, `icmp` and `all`.
     */
    public $Protocol;

    /**
     * @var integer End of the source port
     */
    public $SportEnd;

    /**
     * @var integer Start of the source port
     */
    public $SportStart;

    /**
     * @var string String in the first condition
     */
    public $Str;

    /**
     * @var string String in the second condition
     */
    public $Str2;

    /**
     * @var string Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
     */
    public $MatchBegin;

    /**
     * @var string Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
     */
    public $MatchBegin2;

    /**
     * @param string $Action Action. `drop`: Drop the request; `transmit`: Allow the request; `drop_block`: Drop the request and block it; `forward`: Continue to offer protection.
     * @param integer $Depth Sets how far from the first search position
     * @param integer $Depth2 Sets how far from the second search position
     * @param integer $DportEnd End of the destination port
     * @param integer $DportStart Start of the destination port
     * @param integer $IsNot Whether to match string 1 that does not contain all the specified elements
     * @param integer $IsNot2 Whether to match string 2 that does not contain all the specified elements
     * @param string $MatchLogic Logical operator that combines two conditions. Values: `none`, `and` and `or`. If there is only one condition, pass in `none` for this condition only.
     * @param string $MatchType Matching method of the first condition. `pcre`: Regex match; `sunday`: String match.
     * @param string $MatchType2 Matching method of the second condition. `pcre`: Regex match; `sunday`: String match.
     * @param integer $Offset Offset from the first search position
     * @param integer $Offset2 Offset from the second search position
     * @param integer $PacketMax Maximum packet length
     * @param integer $PacketMin Minimum packet length
     * @param string $Protocol Protocol. Values: `tcp`, `udp`, `icmp` and `all`.
     * @param integer $SportEnd End of the source port
     * @param integer $SportStart Start of the source port
     * @param string $Str String in the first condition
     * @param string $Str2 String in the second condition
     * @param string $MatchBegin Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
     * @param string $MatchBegin2 Layer at which each match starts. Values: `begin_l5`, `no_match`, `begin_l3` and `begin_l4`.
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

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("PacketMax",$param) and $param["PacketMax"] !== null) {
            $this->PacketMax = $param["PacketMax"];
        }

        if (array_key_exists("PacketMin",$param) and $param["PacketMin"] !== null) {
            $this->PacketMin = $param["PacketMin"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }
    }
}
