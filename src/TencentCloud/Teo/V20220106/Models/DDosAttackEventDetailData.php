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
 * DDoS attack event details
 *
 * @method integer getAttackStatus() Obtain Attack status
 * @method void setAttackStatus(integer $AttackStatus) Set Attack status
 * @method string getAttackType() Obtain Attack type
 * @method void setAttackType(string $AttackType) Set Attack type
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method integer getMaxBandWidth() Obtain Maximum bandwidth
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Maximum bandwidth
 * @method integer getPacketMaxRate() Obtain Maximum packet rate
 * @method void setPacketMaxRate(integer $PacketMaxRate) Set Maximum packet rate
 * @method string getEventId() Obtain Event ID
 * @method void setEventId(string $EventId) Set Event ID
 * @method integer getPolicyId() Obtain DDoS policy group ID
 * @method void setPolicyId(integer $PolicyId) Set DDoS policy group ID
 */
class DDosAttackEventDetailData extends AbstractModel
{
    /**
     * @var integer Attack status
     */
    public $AttackStatus;

    /**
     * @var string Attack type
     */
    public $AttackType;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var integer Maximum bandwidth
     */
    public $MaxBandWidth;

    /**
     * @var integer Maximum packet rate
     */
    public $PacketMaxRate;

    /**
     * @var string Event ID
     */
    public $EventId;

    /**
     * @var integer DDoS policy group ID
     */
    public $PolicyId;

    /**
     * @param integer $AttackStatus Attack status
     * @param string $AttackType Attack type
     * @param integer $EndTime End time
     * @param integer $StartTime Start time
     * @param integer $MaxBandWidth Maximum bandwidth
     * @param integer $PacketMaxRate Maximum packet rate
     * @param string $EventId Event ID
     * @param integer $PolicyId DDoS policy group ID
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
        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("PacketMaxRate",$param) and $param["PacketMaxRate"] !== null) {
            $this->PacketMaxRate = $param["PacketMaxRate"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
