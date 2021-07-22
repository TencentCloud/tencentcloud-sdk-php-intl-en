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
 * Anti-DDoS Pro instance usage statistics
 *
 * @method integer getProtectCountUsage() Obtain Number of used protection chances
 * @method void setProtectCountUsage(integer $ProtectCountUsage) Set Number of used protection chances
 * @method integer getProtectIPNumberUsage() Obtain Number of protected IPs
 * @method void setProtectIPNumberUsage(integer $ProtectIPNumberUsage) Set Number of protected IPs
 * @method integer getLast7DayAttackCount() Obtain Number of attack times in the last 7 days
 * @method void setLast7DayAttackCount(integer $Last7DayAttackCount) Set Number of attack times in the last 7 days
 */
class BGPInstanceUsages extends AbstractModel
{
    /**
     * @var integer Number of used protection chances
     */
    public $ProtectCountUsage;

    /**
     * @var integer Number of protected IPs
     */
    public $ProtectIPNumberUsage;

    /**
     * @var integer Number of attack times in the last 7 days
     */
    public $Last7DayAttackCount;

    /**
     * @param integer $ProtectCountUsage Number of used protection chances
     * @param integer $ProtectIPNumberUsage Number of protected IPs
     * @param integer $Last7DayAttackCount Number of attack times in the last 7 days
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
        if (array_key_exists("ProtectCountUsage",$param) and $param["ProtectCountUsage"] !== null) {
            $this->ProtectCountUsage = $param["ProtectCountUsage"];
        }

        if (array_key_exists("ProtectIPNumberUsage",$param) and $param["ProtectIPNumberUsage"] !== null) {
            $this->ProtectIPNumberUsage = $param["ProtectIPNumberUsage"];
        }

        if (array_key_exists("Last7DayAttackCount",$param) and $param["Last7DayAttackCount"] !== null) {
            $this->Last7DayAttackCount = $param["Last7DayAttackCount"];
        }
    }
}
