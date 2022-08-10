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
 * Major DDoS attack event
 *
 * @method integer getPolicyId() Obtain DDoS policy group ID
 * @method void setPolicyId(integer $PolicyId) Set DDoS policy group ID
 * @method integer getAttackMaxBandWidth() Obtain Maximum attack bandwidth
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) Set Maximum attack bandwidth
 * @method integer getAttackTime() Obtain Attack time in seconds
 * @method void setAttackTime(integer $AttackTime) Set Attack time in seconds
 */
class DDosMajorAttackEvent extends AbstractModel
{
    /**
     * @var integer DDoS policy group ID
     */
    public $PolicyId;

    /**
     * @var integer Maximum attack bandwidth
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer Attack time in seconds
     */
    public $AttackTime;

    /**
     * @param integer $PolicyId DDoS policy group ID
     * @param integer $AttackMaxBandWidth Maximum attack bandwidth
     * @param integer $AttackTime Attack time in seconds
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
