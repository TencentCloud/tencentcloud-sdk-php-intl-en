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
 * DDoS attack event object
 *
 * @method string getAttackSourceIp() Obtain Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackSourceIp(string $AttackSourceIp) Set Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackRegion() Obtain Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackRegion(string $AttackRegion) Set Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackFlow() Obtain Accumulative attack traffic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackFlow(integer $AttackFlow) Set Accumulative attack traffic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackPacketNum() Obtain Accumulative number of attack packets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackPacketNum(integer $AttackPacketNum) Set Accumulative number of attack packets
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DDosAttackSourceEvent extends AbstractModel
{
    /**
     * @var string Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackSourceIp;

    /**
     * @var string Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackRegion;

    /**
     * @var integer Accumulative attack traffic
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackFlow;

    /**
     * @var integer Accumulative number of attack packets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackPacketNum;

    /**
     * @param string $AttackSourceIp Attack source IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackRegion Country/Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackFlow Accumulative attack traffic
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackPacketNum Accumulative number of attack packets
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
