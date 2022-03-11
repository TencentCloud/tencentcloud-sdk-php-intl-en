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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePeakNetworkOverview request structure.
 *
 * @method string getStartTime() Obtain Start time (xxxx-xx-xx), such as `2019-08-14`. It is 7 days ago by default and should not be more than 30 days ago.
 * @method void setStartTime(string $StartTime) Set Start time (xxxx-xx-xx), such as `2019-08-14`. It is 7 days ago by default and should not be more than 30 days ago.
 * @method string getEndTime() Obtain End time (xxxx-xx-xx), such as `2019-08-14`. It is yesterday by default and should not be more than 30 days ago. When the time period between the start time and end time is within 1 day, data at the 1-minute granularity will be returned; when the time period is within 7 days, data at the 5-minute granularity will be returned; otherwise, data at the 1-hour granularity will be returned.
 * @method void setEndTime(string $EndTime) Set End time (xxxx-xx-xx), such as `2019-08-14`. It is yesterday by default and should not be more than 30 days ago. When the time period between the start time and end time is within 1 day, data at the 1-minute granularity will be returned; when the time period is within 7 days, data at the 5-minute granularity will be returned; otherwise, data at the 1-hour granularity will be returned.
 * @method array getFilters() Obtain Filter.

region    String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Note: you need to enter the ECM region to be queried before data can be returned.
area       String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Regions include `china-central`, `china-east`, etc. You can call `DescribeNode` to get the information of all regions. You can also use `ALL_REGION` to indicate all regions.
isp         String      Required: no     (Filter) Filter region traffic by ISP. ISPs include CTCC, CUCC, and CMCC. This parameter must be used together with `area`, and you can specify only one ISP at a time.

You can specify either `region` or `area`.
 * @method void setFilters(array $Filters) Set Filter.

region    String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Note: you need to enter the ECM region to be queried before data can be returned.
area       String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Regions include `china-central`, `china-east`, etc. You can call `DescribeNode` to get the information of all regions. You can also use `ALL_REGION` to indicate all regions.
isp         String      Required: no     (Filter) Filter region traffic by ISP. ISPs include CTCC, CUCC, and CMCC. This parameter must be used together with `area`, and you can specify only one ISP at a time.

You can specify either `region` or `area`.
 * @method integer getPeriod() Obtain Statistical period in seconds. Valid values: 60, 300.
 * @method void setPeriod(integer $Period) Set Statistical period in seconds. Valid values: 60, 300.
 */
class DescribePeakNetworkOverviewRequest extends AbstractModel
{
    /**
     * @var string Start time (xxxx-xx-xx), such as `2019-08-14`. It is 7 days ago by default and should not be more than 30 days ago.
     */
    public $StartTime;

    /**
     * @var string End time (xxxx-xx-xx), such as `2019-08-14`. It is yesterday by default and should not be more than 30 days ago. When the time period between the start time and end time is within 1 day, data at the 1-minute granularity will be returned; when the time period is within 7 days, data at the 5-minute granularity will be returned; otherwise, data at the 1-hour granularity will be returned.
     */
    public $EndTime;

    /**
     * @var array Filter.

region    String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Note: you need to enter the ECM region to be queried before data can be returned.
area       String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Regions include `china-central`, `china-east`, etc. You can call `DescribeNode` to get the information of all regions. You can also use `ALL_REGION` to indicate all regions.
isp         String      Required: no     (Filter) Filter region traffic by ISP. ISPs include CTCC, CUCC, and CMCC. This parameter must be used together with `area`, and you can specify only one ISP at a time.

You can specify either `region` or `area`.
     */
    public $Filters;

    /**
     * @var integer Statistical period in seconds. Valid values: 60, 300.
     */
    public $Period;

    /**
     * @param string $StartTime Start time (xxxx-xx-xx), such as `2019-08-14`. It is 7 days ago by default and should not be more than 30 days ago.
     * @param string $EndTime End time (xxxx-xx-xx), such as `2019-08-14`. It is yesterday by default and should not be more than 30 days ago. When the time period between the start time and end time is within 1 day, data at the 1-minute granularity will be returned; when the time period is within 7 days, data at the 5-minute granularity will be returned; otherwise, data at the 1-hour granularity will be returned.
     * @param array $Filters Filter.

region    String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Note: you need to enter the ECM region to be queried before data can be returned.
area       String      Required: no     (Filter) Filter by region. Fuzzy match is not supported. Regions include `china-central`, `china-east`, etc. You can call `DescribeNode` to get the information of all regions. You can also use `ALL_REGION` to indicate all regions.
isp         String      Required: no     (Filter) Filter region traffic by ISP. ISPs include CTCC, CUCC, and CMCC. This parameter must be used together with `area`, and you can specify only one ISP at a time.

You can specify either `region` or `area`.
     * @param integer $Period Statistical period in seconds. Valid values: 60, 300.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
