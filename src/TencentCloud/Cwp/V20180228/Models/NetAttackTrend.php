<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attack trend statistics
 *
 * @method string getDateTime() Obtain Time Point, e.g., 2023-05-06
 * @method void setDateTime(string $DateTime) Set Time Point, e.g., 2023-05-06
 * @method integer getAttackCount() Obtain Attack count
 * @method void setAttackCount(integer $AttackCount) Set Attack count
 * @method integer getTryAttackCount() Obtain Attack Attempts
 * @method void setTryAttackCount(integer $TryAttackCount) Set Attack Attempts
 * @method integer getSuccAttackCount() Obtain Attack Success Count
 * @method void setSuccAttackCount(integer $SuccAttackCount) Set Attack Success Count
 */
class NetAttackTrend extends AbstractModel
{
    /**
     * @var string Time Point, e.g., 2023-05-06
     */
    public $DateTime;

    /**
     * @var integer Attack count
     */
    public $AttackCount;

    /**
     * @var integer Attack Attempts
     */
    public $TryAttackCount;

    /**
     * @var integer Attack Success Count
     */
    public $SuccAttackCount;

    /**
     * @param string $DateTime Time Point, e.g., 2023-05-06
     * @param integer $AttackCount Attack count
     * @param integer $TryAttackCount Attack Attempts
     * @param integer $SuccAttackCount Attack Success Count
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
        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("TryAttackCount",$param) and $param["TryAttackCount"] !== null) {
            $this->TryAttackCount = $param["TryAttackCount"];
        }

        if (array_key_exists("SuccAttackCount",$param) and $param["SuccAttackCount"] !== null) {
            $this->SuccAttackCount = $param["SuccAttackCount"];
        }
    }
}
