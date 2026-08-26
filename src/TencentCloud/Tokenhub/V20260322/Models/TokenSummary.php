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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Main package Token summary
 *
 * @method integer getCycleSeq() Obtain Package serial number of the current billing cycle
 * @method void setCycleSeq(integer $CycleSeq) Set Package serial number of the current billing cycle
 * @method string getCycleStartTime() Obtain Package billing cycle start time (RFC3339)
 * @method void setCycleStartTime(string $CycleStartTime) Set Package billing cycle start time (RFC3339)
 * @method string getCycleEndTime() Obtain Package billing cycle end time (RFC3339)
 * @method void setCycleEndTime(string $CycleEndTime) Set Package billing cycle end time (RFC3339)
 * @method array getBillingItems() Obtain Summary list of tokens grouped by billing item
 * @method void setBillingItems(array $BillingItems) Set Summary list of tokens grouped by billing item
 */
class TokenSummary extends AbstractModel
{
    /**
     * @var integer Package serial number of the current billing cycle
     */
    public $CycleSeq;

    /**
     * @var string Package billing cycle start time (RFC3339)
     */
    public $CycleStartTime;

    /**
     * @var string Package billing cycle end time (RFC3339)
     */
    public $CycleEndTime;

    /**
     * @var array Summary list of tokens grouped by billing item
     */
    public $BillingItems;

    /**
     * @param integer $CycleSeq Package serial number of the current billing cycle
     * @param string $CycleStartTime Package billing cycle start time (RFC3339)
     * @param string $CycleEndTime Package billing cycle end time (RFC3339)
     * @param array $BillingItems Summary list of tokens grouped by billing item
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
        if (array_key_exists("CycleSeq",$param) and $param["CycleSeq"] !== null) {
            $this->CycleSeq = $param["CycleSeq"];
        }

        if (array_key_exists("CycleStartTime",$param) and $param["CycleStartTime"] !== null) {
            $this->CycleStartTime = $param["CycleStartTime"];
        }

        if (array_key_exists("CycleEndTime",$param) and $param["CycleEndTime"] !== null) {
            $this->CycleEndTime = $param["CycleEndTime"];
        }

        if (array_key_exists("BillingItems",$param) and $param["BillingItems"] !== null) {
            $this->BillingItems = [];
            foreach ($param["BillingItems"] as $key => $value){
                $obj = new TokenSummaryBillingItem();
                $obj->deserialize($value);
                array_push($this->BillingItems, $obj);
            }
        }
    }
}
