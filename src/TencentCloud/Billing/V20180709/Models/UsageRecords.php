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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The usage records.
 *
 * @method integer getUsedAmount() Obtain The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setUsedAmount(integer $UsedAmount) Set The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method string getUsedTime() Obtain The time when the voucher was used.
 * @method void setUsedTime(string $UsedTime) Set The time when the voucher was used.
 * @method array getUsageDetails() Obtain The details of the product purchased.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUsageDetails(array $UsageDetails) Set The details of the product purchased.
Note: This field may return `null`, indicating that no valid value was found.
 */
class UsageRecords extends AbstractModel
{
    /**
     * @var integer The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $UsedAmount;

    /**
     * @var string The time when the voucher was used.
     */
    public $UsedTime;

    /**
     * @var array The details of the product purchased.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UsageDetails;

    /**
     * @param integer $UsedAmount The amount used. The value of this parameter is the amount used (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param string $UsedTime The time when the voucher was used.
     * @param array $UsageDetails The details of the product purchased.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("UsageDetails",$param) and $param["UsageDetails"] !== null) {
            $this->UsageDetails = [];
            foreach ($param["UsageDetails"] as $key => $value){
                $obj = new UsageDetails();
                $obj->deserialize($value);
                array_push($this->UsageDetails, $obj);
            }
        }
    }
}
