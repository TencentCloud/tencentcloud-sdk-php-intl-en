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
 * The large DDoS attack event
 *
 * @method integer getPolicyId() Obtain The DDoS policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The DDoS policy ID.
 * @method integer getAttackMaxBandWidth() Obtain The maximum attack bandwidth.
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) Set The maximum attack bandwidth.
 * @method integer getAttackTime() Obtain The attack time recorded in seconds using UNIX timestamp.
 * @method void setAttackTime(integer $AttackTime) Set The attack time recorded in seconds using UNIX timestamp.
 */
class DDoSMajorAttackEvent extends AbstractModel
{
    /**
     * @var integer The DDoS policy ID.
     */
    public $PolicyId;

    /**
     * @var integer The maximum attack bandwidth.
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer The attack time recorded in seconds using UNIX timestamp.
     */
    public $AttackTime;

    /**
     * @param integer $PolicyId The DDoS policy ID.
     * @param integer $AttackMaxBandWidth The maximum attack bandwidth.
     * @param integer $AttackTime The attack time recorded in seconds using UNIX timestamp.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AttackMaxBandWidth",$param) and $param["AttackMaxBandWidth"] !== null) {
            $this->AttackMaxBandWidth = $param["AttackMaxBandWidth"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
