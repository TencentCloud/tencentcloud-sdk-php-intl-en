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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePayType response structure.
 *
 * @method string getPayType() Obtain Billing modes:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
When you switch the billing mode for a daily-billing-cycle account, if there is bandwidth usage on the day, this field indicates the billing mode that will take effect on the next day; otherwise, it indicates the billing mode that has already taken effect
 * @method void setPayType(string $PayType) Set Billing modes:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
When you switch the billing mode for a daily-billing-cycle account, if there is bandwidth usage on the day, this field indicates the billing mode that will take effect on the next day; otherwise, it indicates the billing mode that has already taken effect
 * @method string getBillingCycle() Obtain Billing cycle:
day: daily settlement
month: monthly settlement
 * @method void setBillingCycle(string $BillingCycle) Set Billing cycle:
day: daily settlement
month: monthly settlement
 * @method string getStatType() Obtain Billing method:
monthMax: billed by the monthly average of daily peak traffic (monthly settlement)
day95: billed by the daily 95th percentile bandwidth (monthly settlement)
month95: billed by the monthly 95th percentile bandwidth (monthly settlement)
sum: billed by the total traffic (daily or monthly settlement)
max: billed by the peak bandwidth (daily settlement)
 * @method void setStatType(string $StatType) Set Billing method:
monthMax: billed by the monthly average of daily peak traffic (monthly settlement)
day95: billed by the daily 95th percentile bandwidth (monthly settlement)
month95: billed by the monthly 95th percentile bandwidth (monthly settlement)
sum: billed by the total traffic (daily or monthly settlement)
max: billed by the peak bandwidth (daily settlement)
 * @method string getRegionType() Obtain Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
 * @method void setRegionType(string $RegionType) Set Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
 * @method string getCurrentPayType() Obtain Currently billing mode in effect:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
 * @method void setCurrentPayType(string $CurrentPayType) Set Currently billing mode in effect:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePayTypeResponse extends AbstractModel
{
    /**
     * @var string Billing modes:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
When you switch the billing mode for a daily-billing-cycle account, if there is bandwidth usage on the day, this field indicates the billing mode that will take effect on the next day; otherwise, it indicates the billing mode that has already taken effect
     */
    public $PayType;

    /**
     * @var string Billing cycle:
day: daily settlement
month: monthly settlement
     */
    public $BillingCycle;

    /**
     * @var string Billing method:
monthMax: billed by the monthly average of daily peak traffic (monthly settlement)
day95: billed by the daily 95th percentile bandwidth (monthly settlement)
month95: billed by the monthly 95th percentile bandwidth (monthly settlement)
sum: billed by the total traffic (daily or monthly settlement)
max: billed by the peak bandwidth (daily settlement)
     */
    public $StatType;

    /**
     * @var string Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
     */
    public $RegionType;

    /**
     * @var string Currently billing mode in effect:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
     */
    public $CurrentPayType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PayType Billing modes:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
When you switch the billing mode for a daily-billing-cycle account, if there is bandwidth usage on the day, this field indicates the billing mode that will take effect on the next day; otherwise, it indicates the billing mode that has already taken effect
     * @param string $BillingCycle Billing cycle:
day: daily settlement
month: monthly settlement
     * @param string $StatType Billing method:
monthMax: billed by the monthly average of daily peak traffic (monthly settlement)
day95: billed by the daily 95th percentile bandwidth (monthly settlement)
month95: billed by the monthly 95th percentile bandwidth (monthly settlement)
sum: billed by the total traffic (daily or monthly settlement)
max: billed by the peak bandwidth (daily settlement)
     * @param string $RegionType Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
     * @param string $CurrentPayType Currently billing mode in effect:
`flux`: bill-by-traffic
`bandwidth`: bill-by-bandwidth
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BillingCycle",$param) and $param["BillingCycle"] !== null) {
            $this->BillingCycle = $param["BillingCycle"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("CurrentPayType",$param) and $param["CurrentPayType"] !== null) {
            $this->CurrentPayType = $param["CurrentPayType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
