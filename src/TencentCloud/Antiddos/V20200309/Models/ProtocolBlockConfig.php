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
 * Protocol blocking configuration
 *
 * @method integer getDropTcp() Obtain TCP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method void setDropTcp(integer $DropTcp) Set TCP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method integer getDropUdp() Obtain UDP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method void setDropUdp(integer $DropUdp) Set UDP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method integer getDropIcmp() Obtain ICMP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method void setDropIcmp(integer $DropIcmp) Set ICMP blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method integer getDropOther() Obtain Other protocol blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method void setDropOther(integer $DropOther) Set Other protocol blocking. Valid values: `0` (disabled), `1`(enabled).
 * @method integer getCheckExceptNullConnect() Obtain Null connection protection. Valid values: `0` (disabled), `1` (enabled).
 * @method void setCheckExceptNullConnect(integer $CheckExceptNullConnect) Set Null connection protection. Valid values: `0` (disabled), `1` (enabled).
 * @method integer getPingOfDeath() Obtain PoD protection. Values: `0` (disable), `1` (enable).
 * @method void setPingOfDeath(integer $PingOfDeath) Set PoD protection. Values: `0` (disable), `1` (enable).
 * @method integer getTearDrop() Obtain Teardrop protection. Values: `0` (disable), `1` (enable).
 * @method void setTearDrop(integer $TearDrop) Set Teardrop protection. Values: `0` (disable), `1` (enable).
 */
class ProtocolBlockConfig extends AbstractModel
{
    /**
     * @var integer TCP blocking. Valid values: `0` (disabled), `1`(enabled).
     */
    public $DropTcp;

    /**
     * @var integer UDP blocking. Valid values: `0` (disabled), `1`(enabled).
     */
    public $DropUdp;

    /**
     * @var integer ICMP blocking. Valid values: `0` (disabled), `1`(enabled).
     */
    public $DropIcmp;

    /**
     * @var integer Other protocol blocking. Valid values: `0` (disabled), `1`(enabled).
     */
    public $DropOther;

    /**
     * @var integer Null connection protection. Valid values: `0` (disabled), `1` (enabled).
     */
    public $CheckExceptNullConnect;

    /**
     * @var integer PoD protection. Values: `0` (disable), `1` (enable).
     */
    public $PingOfDeath;

    /**
     * @var integer Teardrop protection. Values: `0` (disable), `1` (enable).
     */
    public $TearDrop;

    /**
     * @param integer $DropTcp TCP blocking. Valid values: `0` (disabled), `1`(enabled).
     * @param integer $DropUdp UDP blocking. Valid values: `0` (disabled), `1`(enabled).
     * @param integer $DropIcmp ICMP blocking. Valid values: `0` (disabled), `1`(enabled).
     * @param integer $DropOther Other protocol blocking. Valid values: `0` (disabled), `1`(enabled).
     * @param integer $CheckExceptNullConnect Null connection protection. Valid values: `0` (disabled), `1` (enabled).
     * @param integer $PingOfDeath PoD protection. Values: `0` (disable), `1` (enable).
     * @param integer $TearDrop Teardrop protection. Values: `0` (disable), `1` (enable).
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

        if (array_key_exists("CheckExceptNullConnect",$param) and $param["CheckExceptNullConnect"] !== null) {
            $this->CheckExceptNullConnect = $param["CheckExceptNullConnect"];
        }

        if (array_key_exists("PingOfDeath",$param) and $param["PingOfDeath"] !== null) {
            $this->PingOfDeath = $param["PingOfDeath"];
        }

        if (array_key_exists("TearDrop",$param) and $param["TearDrop"] !== null) {
            $this->TearDrop = $param["TearDrop"];
        }
    }
}
