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
 * The DDoS attacker information
 *
 * @method string getAttackSourceIp() Obtain The attacker IP.
 * @method void setAttackSourceIp(string $AttackSourceIp) Set The attacker IP.
 * @method string getAttackRegion() Obtain The country or region.
 * @method void setAttackRegion(string $AttackRegion) Set The country or region.
 * @method integer getAttackFlow() Obtain The accumulative attack traffic.
 * @method void setAttackFlow(integer $AttackFlow) Set The accumulative attack traffic.
 * @method integer getAttackPacketNum() Obtain The accumulative attack packets.
 * @method void setAttackPacketNum(integer $AttackPacketNum) Set The accumulative attack packets.
 */
class DDoSAttackSourceEvent extends AbstractModel
{
    /**
     * @var string The attacker IP.
     */
    public $AttackSourceIp;

    /**
     * @var string The country or region.
     */
    public $AttackRegion;

    /**
     * @var integer The accumulative attack traffic.
     */
    public $AttackFlow;

    /**
     * @var integer The accumulative attack packets.
     */
    public $AttackPacketNum;

    /**
     * @param string $AttackSourceIp The attacker IP.
     * @param string $AttackRegion The country or region.
     * @param integer $AttackFlow The accumulative attack traffic.
     * @param integer $AttackPacketNum The accumulative attack packets.
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
        if (array_key_exists("AttackSourceIp",$param) and $param["AttackSourceIp"] !== null) {
            $this->AttackSourceIp = $param["AttackSourceIp"];
        }

        if (array_key_exists("AttackRegion",$param) and $param["AttackRegion"] !== null) {
            $this->AttackRegion = $param["AttackRegion"];
        }

        if (array_key_exists("AttackFlow",$param) and $param["AttackFlow"] !== null) {
            $this->AttackFlow = $param["AttackFlow"];
        }

        if (array_key_exists("AttackPacketNum",$param) and $param["AttackPacketNum"] !== null) {
            $this->AttackPacketNum = $param["AttackPacketNum"];
        }
    }
}
