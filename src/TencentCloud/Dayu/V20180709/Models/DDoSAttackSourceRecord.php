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
 * Attack source information
 *
 * @method string getSrcIp() Obtain Attack source IP
 * @method void setSrcIp(string $SrcIp) Set Attack source IP
 * @method string getProvince() Obtain Province (valid for Mainland China)
 * @method void setProvince(string $Province) Set Province (valid for Mainland China)
 * @method string getNation() Obtain Country/region
 * @method void setNation(string $Nation) Set Country/region
 * @method integer getPacketSum() Obtain Total number of attack packets
 * @method void setPacketSum(integer $PacketSum) Set Total number of attack packets
 * @method integer getPacketLen() Obtain Total attack traffic
 * @method void setPacketLen(integer $PacketLen) Set Total attack traffic
 */
class DDoSAttackSourceRecord extends AbstractModel
{
    /**
     * @var string Attack source IP
     */
    public $SrcIp;

    /**
     * @var string Province (valid for Mainland China)
     */
    public $Province;

    /**
     * @var string Country/region
     */
    public $Nation;

    /**
     * @var integer Total number of attack packets
     */
    public $PacketSum;

    /**
     * @var integer Total attack traffic
     */
    public $PacketLen;

    /**
     * @param string $SrcIp Attack source IP
     * @param string $Province Province (valid for Mainland China)
     * @param string $Nation Country/region
     * @param integer $PacketSum Total number of attack packets
     * @param integer $PacketLen Total attack traffic
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
        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("PacketSum",$param) and $param["PacketSum"] !== null) {
            $this->PacketSum = $param["PacketSum"];
        }

        if (array_key_exists("PacketLen",$param) and $param["PacketLen"] !== null) {
            $this->PacketLen = $param["PacketLen"];
        }
    }
}
