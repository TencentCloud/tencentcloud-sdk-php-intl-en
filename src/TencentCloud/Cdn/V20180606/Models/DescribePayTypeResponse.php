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
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
When you change a daily billing mode to another, and there is network usage on the day of change, this field shows the new billing mode, which takes effect from the next day. If there is no network usage on the day of change, this field shows the new billing mode directly.
 * @method void setPayType(string $PayType) Set Billing modes:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
When you change a daily billing mode to another, and there is network usage on the day of change, this field shows the new billing mode, which takes effect from the next day. If there is no network usage on the day of change, this field shows the new billing mode directly.
 * @method string getBillingCycle() Obtain Billing cycle:
`day`: Daily
`month`: Monthly 
`hour`: Hourly 
 * @method void setBillingCycle(string $BillingCycle) Set Billing cycle:
`day`: Daily
`month`: Monthly 
`hour`: Hourly 
 * @method string getStatType() Obtain `monthMax`: billed by the monthly average of daily peak traffic (monthly settlement)
`day95`: billed by the daily 95th percentile bandwidth (monthly settlement)
`month95`: billed by the monthly 95th percentile bandwidth (monthly settlement)
`sum`: billed by the total traffic/total requests (daily or monthly settlement)
`max`: billed by the peak bandwidth (daily settlement)
 * @method void setStatType(string $StatType) Set `monthMax`: billed by the monthly average of daily peak traffic (monthly settlement)
`day95`: billed by the daily 95th percentile bandwidth (monthly settlement)
`month95`: billed by the monthly 95th percentile bandwidth (monthly settlement)
`sum`: billed by the total traffic/total requests (daily or monthly settlement)
`max`: billed by the peak bandwidth (daily settlement)
 * @method string getRegionType() Obtain Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
 * @method void setRegionType(string $RegionType) Set Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
 * @method string getCurrentPayType() Obtain The current billing mode in effect:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
 * @method void setCurrentPayType(string $CurrentPayType) Set The current billing mode in effect:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePayTypeResponse extends AbstractModel
{
    /**
     * @var string Billing modes:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
When you change a daily billing mode to another, and there is network usage on the day of change, this field shows the new billing mode, which takes effect from the next day. If there is no network usage on the day of change, this field shows the new billing mode directly.
     */
    public $PayType;

    /**
     * @var string Billing cycle:
`day`: Daily
`month`: Monthly 
`hour`: Hourly 
     */
    public $BillingCycle;

    /**
     * @var string `monthMax`: billed by the monthly average of daily peak traffic (monthly settlement)
`day95`: billed by the daily 95th percentile bandwidth (monthly settlement)
`month95`: billed by the monthly 95th percentile bandwidth (monthly settlement)
`sum`: billed by the total traffic/total requests (daily or monthly settlement)
`max`: billed by the peak bandwidth (daily settlement)
     */
    public $StatType;

    /**
     * @var string Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
     */
    public $RegionType;

    /**
     * @var string The current billing mode in effect:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
     */
    public $CurrentPayType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PayType Billing modes:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
When you change a daily billing mode to another, and there is network usage on the day of change, this field shows the new billing mode, which takes effect from the next day. If there is no network usage on the day of change, this field shows the new billing mode directly.
     * @param string $BillingCycle Billing cycle:
`day`: Daily
`month`: Monthly 
`hour`: Hourly 
     * @param string $StatType `monthMax`: billed by the monthly average of daily peak traffic (monthly settlement)
`day95`: billed by the daily 95th percentile bandwidth (monthly settlement)
`month95`: billed by the monthly 95th percentile bandwidth (monthly settlement)
`sum`: billed by the total traffic/total requests (daily or monthly settlement)
`max`: billed by the peak bandwidth (daily settlement)
     * @param string $RegionType Billing method outside Mainland China:
`all`: unified billing for all regions
`multiple`: separate billing for different regions
     * @param string $CurrentPayType The current billing mode in effect:
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
`request`: Bill by the number of requests
`flux_sep`: Disused field
`bandwidth_sep`: Disused field
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
