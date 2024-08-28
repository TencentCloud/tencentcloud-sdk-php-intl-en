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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attack trend statistics
 *
 * @method string getDateTime() Obtain Time Point, e.g., 2023-05-06
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateTime(string $DateTime) Set Time Point, e.g., 2023-05-06
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackCount() Obtain Number of attacks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackCount(integer $AttackCount) Set Number of attacks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTryAttackCount() Obtain Attack Attempts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTryAttackCount(integer $TryAttackCount) Set Attack Attempts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSuccAttackCount() Obtain Attack Success Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuccAttackCount(integer $SuccAttackCount) Set Attack Success Count
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetAttackTrend extends AbstractModel
{
    /**
     * @var string Time Point, e.g., 2023-05-06
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateTime;

    /**
     * @var integer Number of attacks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackCount;

    /**
     * @var integer Attack Attempts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TryAttackCount;

    /**
     * @var integer Attack Success Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuccAttackCount;

    /**
     * @param string $DateTime Time Point, e.g., 2023-05-06
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackCount Number of attacks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TryAttackCount Attack Attempts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SuccAttackCount Attack Success Count
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
