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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned information for querying the credit allocation records of reseller’s customer
 *
 * @method string getAllocatedTime() Obtain Allocation time
 * @method void setAllocatedTime(string $AllocatedTime) Set Allocation time
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method float getCredit() Obtain Allocated credit value
 * @method void setCredit(float $Credit) Set Allocated credit value
 * @method float getAllocatedCredit() Obtain The allocated total credit
 * @method void setAllocatedCredit(float $AllocatedCredit) Set The allocated total credit
 */
class QueryCreditAllocationHistoryData extends AbstractModel
{
    /**
     * @var string Allocation time
     */
    public $AllocatedTime;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var float Allocated credit value
     */
    public $Credit;

    /**
     * @var float The allocated total credit
     */
    public $AllocatedCredit;

    /**
     * @param string $AllocatedTime Allocation time
     * @param string $Operator Operator
     * @param float $Credit Allocated credit value
     * @param float $AllocatedCredit The allocated total credit
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
        if (array_key_exists("AllocatedTime",$param) and $param["AllocatedTime"] !== null) {
            $this->AllocatedTime = $param["AllocatedTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("AllocatedCredit",$param) and $param["AllocatedCredit"] !== null) {
            $this->AllocatedCredit = $param["AllocatedCredit"];
        }
    }
}
