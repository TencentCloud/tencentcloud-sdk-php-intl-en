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
 * Anti-DDoS Advanced instance usage statistics
 *
 * @method integer getPortRulesUsage() Obtain Number of used port rules
 * @method void setPortRulesUsage(integer $PortRulesUsage) Set Number of used port rules
 * @method integer getDomainRulesUsage() Obtain Number of used domain name rules
 * @method void setDomainRulesUsage(integer $DomainRulesUsage) Set Number of used domain name rules
 * @method integer getLast7DayAttackCount() Obtain Number of attack times in the last 7 days
 * @method void setLast7DayAttackCount(integer $Last7DayAttackCount) Set Number of attack times in the last 7 days
 */
class BGPIPInstanceUsages extends AbstractModel
{
    /**
     * @var integer Number of used port rules
     */
    public $PortRulesUsage;

    /**
     * @var integer Number of used domain name rules
     */
    public $DomainRulesUsage;

    /**
     * @var integer Number of attack times in the last 7 days
     */
    public $Last7DayAttackCount;

    /**
     * @param integer $PortRulesUsage Number of used port rules
     * @param integer $DomainRulesUsage Number of used domain name rules
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
        if (array_key_exists("PortRulesUsage",$param) and $param["PortRulesUsage"] !== null) {
            $this->PortRulesUsage = $param["PortRulesUsage"];
        }

        if (array_key_exists("DomainRulesUsage",$param) and $param["DomainRulesUsage"] !== null) {
            $this->DomainRulesUsage = $param["DomainRulesUsage"];
        }

        if (array_key_exists("Last7DayAttackCount",$param) and $param["Last7DayAttackCount"] !== null) {
            $this->Last7DayAttackCount = $param["Last7DayAttackCount"];
        }
    }
}
