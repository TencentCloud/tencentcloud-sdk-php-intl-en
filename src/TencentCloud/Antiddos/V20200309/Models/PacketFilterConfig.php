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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Feature filtering configuration
 *
 * @method string getProtocol() Obtain Protocol. Valid values: `tcp`, `udp`, `icmp`, `all`.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: `tcp`, `udp`, `icmp`, `all`.
 * @method integer getSportStart() Obtain Start source port. Value range: 0–65535.
 * @method void setSportStart(integer $SportStart) Set Start source port. Value range: 0–65535.
 * @method integer getSportEnd() Obtain End source port. Value range: 0–65535. The value also should be greater than or equal to that of the start source port.
 * @method void setSportEnd(integer $SportEnd) Set End source port. Value range: 0–65535. The value also should be greater than or equal to that of the start source port.
 * @method integer getDportStart() Obtain Start destination port
 * @method void setDportStart(integer $DportStart) Set Start destination port
 * @method integer getDportEnd() Obtain End destination port. Value range: 1–65535. The value also should be greater than or equal to that of the start source port.
 * @method void setDportEnd(integer $DportEnd) Set End destination port. Value range: 1–65535. The value also should be greater than or equal to that of the start source port.
 * @method integer getPktlenMin() Obtain Minimum message length. Value range: 1–1500.
 * @method void setPktlenMin(integer $PktlenMin) Set Minimum message length. Value range: 1–1500.
 * @method integer getPktlenMax() Obtain Maximum message length. Value range: 1–1500. The value also should be greater than or equal to that of the minimum message length.
 * @method void setPktlenMax(integer $PktlenMax) Set Maximum message length. Value range: 1–1500. The value also should be greater than or equal to that of the minimum message length.
 * @method string getAction() Obtain Action. Valid values:
`drop`: discards the request.
`transmit`: allows the request.
`drop_black`: discards the request and adds the IP to blocklist.
`drop_rst`: blocks the request.
`drop_black_rst`: blocks the request and adds the IP to blocklist.
`forward`: continues protection.
]
 * @method void setAction(string $Action) Set Action. Valid values:
`drop`: discards the request.
`transmit`: allows the request.
`drop_black`: discards the request and adds the IP to blocklist.
`drop_rst`: blocks the request.
`drop_black_rst`: blocks the request and adds the IP to blocklist.
`forward`: continues protection.
]
 * @method string getMatchBegin() Obtain Detection location:
`begin_l3`: IP header
`begin_l4`: TCP/UDP header
`begin_l5`: T load
`no_match`: no match
]
 * @method void setMatchBegin(string $MatchBegin) Set Detection location:
`begin_l3`: IP header
`begin_l4`: TCP/UDP header
`begin_l5`: T load
`no_match`: no match
]
 * @method string getMatchType() Obtain Detection type:
`sunday`: keyword
`pcre`: regular expression
]
 * @method void setMatchType(string $MatchType) Set Detection type:
`sunday`: keyword
`pcre`: regular expression
]
 * @method string getStr() Obtain Detection value. Should be in key string or regular expression. 
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
 * @method void setStr(string $Str) Set Detection value. Should be in key string or regular expression. 
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
 * @method integer getDepth() Obtain Detection depth starting from the detection position. Value range: [0, 1500].
 * @method void setDepth(integer $Depth) Set Detection depth starting from the detection position. Value range: [0, 1500].
 * @method integer getOffset() Obtain Offset starting from the detection position. Value range: [0, Depth].
 * @method void setOffset(integer $Offset) Set Offset starting from the detection position. Value range: [0, Depth].
 * @method integer getIsNot() Obtain Whether the detection value is included:
`0`: included
`1`: excluded
]
 * @method void setIsNot(integer $IsNot) Set Whether the detection value is included:
`0`: included
`1`: excluded
]
 * @method string getMatchLogic() Obtain Relationship between the first and second detection conditions:
`and`: under both the first and second detection conditions
`none`: under only the first detection condition
]
 * @method void setMatchLogic(string $MatchLogic) Set Relationship between the first and second detection conditions:
`and`: under both the first and second detection conditions
`none`: under only the first detection condition
]
 * @method string getMatchBegin2() Obtain The second detection position:
`begin_l5`: load
`no_match`: no match
]
 * @method void setMatchBegin2(string $MatchBegin2) Set The second detection position:
`begin_l5`: load
`no_match`: no match
]
 * @method string getMatchType2() Obtain The second detection type:
`sunday`: keyword
`pcre`: regular expression
]
 * @method void setMatchType2(string $MatchType2) Set The second detection type:
`sunday`: keyword
`pcre`: regular expression
]
 * @method string getStr2() Obtain The second detection value. Should be in key string or regular expression.
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
 * @method void setStr2(string $Str2) Set The second detection value. Should be in key string or regular expression.
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
 * @method integer getDepth2() Obtain Detection depth starting from the second detection position. Value range: [0, 1500].
 * @method void setDepth2(integer $Depth2) Set Detection depth starting from the second detection position. Value range: [0, 1500].
 * @method integer getOffset2() Obtain Offset starting from the second detection position. Value range: [0, Depth2].
 * @method void setOffset2(integer $Offset2) Set Offset starting from the second detection position. Value range: [0, Depth2].
 * @method integer getIsNot2() Obtain Whether the second detection value is included:
`0`: included
`1`: excluded
]
 * @method void setIsNot2(integer $IsNot2) Set Whether the second detection value is included:
`0`: included
`1`: excluded
]
 * @method string getId() Obtain A rule ID is generated after a feature filtering configuration is added successfully. Leave this field empty when adding a new feature filtering configuration.
 * @method void setId(string $Id) Set A rule ID is generated after a feature filtering configuration is added successfully. Leave this field empty when adding a new feature filtering configuration.
 * @method integer getPktLenGT() Obtain Byte threshold of the packet. Packets larger than the specified size are not returned. It must be an integer larger than 1.
 * @method void setPktLenGT(integer $PktLenGT) Set Byte threshold of the packet. Packets larger than the specified size are not returned. It must be an integer larger than 1.
 */
class PacketFilterConfig extends AbstractModel
{
    /**
     * @var string Protocol. Valid values: `tcp`, `udp`, `icmp`, `all`.
     */
    public $Protocol;

    /**
     * @var integer Start source port. Value range: 0–65535.
     */
    public $SportStart;

    /**
     * @var integer End source port. Value range: 0–65535. The value also should be greater than or equal to that of the start source port.
     */
    public $SportEnd;

    /**
     * @var integer Start destination port
     */
    public $DportStart;

    /**
     * @var integer End destination port. Value range: 1–65535. The value also should be greater than or equal to that of the start source port.
     */
    public $DportEnd;

    /**
     * @var integer Minimum message length. Value range: 1–1500.
     */
    public $PktlenMin;

    /**
     * @var integer Maximum message length. Value range: 1–1500. The value also should be greater than or equal to that of the minimum message length.
     */
    public $PktlenMax;

    /**
     * @var string Action. Valid values:
`drop`: discards the request.
`transmit`: allows the request.
`drop_black`: discards the request and adds the IP to blocklist.
`drop_rst`: blocks the request.
`drop_black_rst`: blocks the request and adds the IP to blocklist.
`forward`: continues protection.
]
     */
    public $Action;

    /**
     * @var string Detection location:
`begin_l3`: IP header
`begin_l4`: TCP/UDP header
`begin_l5`: T load
`no_match`: no match
]
     */
    public $MatchBegin;

    /**
     * @var string Detection type:
`sunday`: keyword
`pcre`: regular expression
]
     */
    public $MatchType;

    /**
     * @var string Detection value. Should be in key string or regular expression. 
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
     */
    public $Str;

    /**
     * @var integer Detection depth starting from the detection position. Value range: [0, 1500].
     */
    public $Depth;

    /**
     * @var integer Offset starting from the detection position. Value range: [0, Depth].
     */
    public $Offset;

    /**
     * @var integer Whether the detection value is included:
`0`: included
`1`: excluded
]
     */
    public $IsNot;

    /**
     * @var string Relationship between the first and second detection conditions:
`and`: under both the first and second detection conditions
`none`: under only the first detection condition
]
     */
    public $MatchLogic;

    /**
     * @var string The second detection position:
`begin_l5`: load
`no_match`: no match
]
     */
    public $MatchBegin2;

    /**
     * @var string The second detection type:
`sunday`: keyword
`pcre`: regular expression
]
     */
    public $MatchType2;

    /**
     * @var string The second detection value. Should be in key string or regular expression.
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
     */
    public $Str2;

    /**
     * @var integer Detection depth starting from the second detection position. Value range: [0, 1500].
     */
    public $Depth2;

    /**
     * @var integer Offset starting from the second detection position. Value range: [0, Depth2].
     */
    public $Offset2;

    /**
     * @var integer Whether the second detection value is included:
`0`: included
`1`: excluded
]
     */
    public $IsNot2;

    /**
     * @var string A rule ID is generated after a feature filtering configuration is added successfully. Leave this field empty when adding a new feature filtering configuration.
     */
    public $Id;

    /**
     * @var integer Byte threshold of the packet. Packets larger than the specified size are not returned. It must be an integer larger than 1.
     */
    public $PktLenGT;

    /**
     * @param string $Protocol Protocol. Valid values: `tcp`, `udp`, `icmp`, `all`.
     * @param integer $SportStart Start source port. Value range: 0–65535.
     * @param integer $SportEnd End source port. Value range: 0–65535. The value also should be greater than or equal to that of the start source port.
     * @param integer $DportStart Start destination port
     * @param integer $DportEnd End destination port. Value range: 1–65535. The value also should be greater than or equal to that of the start source port.
     * @param integer $PktlenMin Minimum message length. Value range: 1–1500.
     * @param integer $PktlenMax Maximum message length. Value range: 1–1500. The value also should be greater than or equal to that of the minimum message length.
     * @param string $Action Action. Valid values:
`drop`: discards the request.
`transmit`: allows the request.
`drop_black`: discards the request and adds the IP to blocklist.
`drop_rst`: blocks the request.
`drop_black_rst`: blocks the request and adds the IP to blocklist.
`forward`: continues protection.
]
     * @param string $MatchBegin Detection location:
`begin_l3`: IP header
`begin_l4`: TCP/UDP header
`begin_l5`: T load
`no_match`: no match
]
     * @param string $MatchType Detection type:
`sunday`: keyword
`pcre`: regular expression
]
     * @param string $Str Detection value. Should be in key string or regular expression. 
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
     * @param integer $Depth Detection depth starting from the detection position. Value range: [0, 1500].
     * @param integer $Offset Offset starting from the detection position. Value range: [0, Depth].
     * @param integer $IsNot Whether the detection value is included:
`0`: included
`1`: excluded
]
     * @param string $MatchLogic Relationship between the first and second detection conditions:
`and`: under both the first and second detection conditions
`none`: under only the first detection condition
]
     * @param string $MatchBegin2 The second detection position:
`begin_l5`: load
`no_match`: no match
]
     * @param string $MatchType2 The second detection type:
`sunday`: keyword
`pcre`: regular expression
]
     * @param string $Str2 The second detection value. Should be in key string or regular expression.
When the `MatchType` is `sunday`, enter a string or a string in hexadecimal byte code representation. For example, a string "123" corresponds to the hexadecimal byte code "\x313233".
When the `MatchType` is `pcre`, enter a regular expression.
]
     * @param integer $Depth2 Detection depth starting from the second detection position. Value range: [0, 1500].
     * @param integer $Offset2 Offset starting from the second detection position. Value range: [0, Depth2].
     * @param integer $IsNot2 Whether the second detection value is included:
`0`: included
`1`: excluded
]
     * @param string $Id A rule ID is generated after a feature filtering configuration is added successfully. Leave this field empty when adding a new feature filtering configuration.
     * @param integer $PktLenGT Byte threshold of the packet. Packets larger than the specified size are not returned. It must be an integer larger than 1.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
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

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PktLenGT",$param) and $param["PktLenGT"] !== null) {
            $this->PktLenGT = $param["PktLenGT"];
        }
    }
}
