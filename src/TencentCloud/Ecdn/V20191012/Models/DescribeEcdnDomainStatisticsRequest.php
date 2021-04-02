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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEcdnDomainStatistics request structure.
 *
 * @method string getStartTime() Obtain Query start time, such as 2019-12-13 00:00:00.
The time span cannot exceed 90 days.
 * @method void setStartTime(string $StartTime) Set Query start time, such as 2019-12-13 00:00:00.
The time span cannot exceed 90 days.
 * @method string getEndTime() Obtain Query end time, such as 2019-12-13 23:59:59.
The time span cannot exceed 90 days.
 * @method void setEndTime(string $EndTime) Set Query end time, such as 2019-12-13 23:59:59.
The time span cannot exceed 90 days.
 * @method array getMetrics() Obtain Statistical metric names:
flux: traffic (in bytes)
bandwidth: bandwidth (in bps)
request: number of requests
 * @method void setMetrics(array $Metrics) Set Statistical metric names:
flux: traffic (in bytes)
bandwidth: bandwidth (in bps)
request: number of requests
 * @method array getDomains() Obtain Specifies the list of domain names to be queried
 * @method void setDomains(array $Domains) Set Specifies the list of domain names to be queried
 * @method array getProjects() Obtain Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
 * @method void setProjects(array $Projects) Set Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of entries per page. Default value: 1000. Maximum value: 3,000.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 1000. Maximum value: 3,000.
 * @method string getArea() Obtain Statistical areas:
mainland: Chinese mainland
oversea: outside the Chinese mainland
global: global
Default value: global
 * @method void setArea(string $Area) Set Statistical areas:
mainland: Chinese mainland
oversea: outside the Chinese mainland
global: global
Default value: global
 */
class DescribeEcdnDomainStatisticsRequest extends AbstractModel
{
    /**
     * @var string Query start time, such as 2019-12-13 00:00:00.
The time span cannot exceed 90 days.
     */
    public $StartTime;

    /**
     * @var string Query end time, such as 2019-12-13 23:59:59.
The time span cannot exceed 90 days.
     */
    public $EndTime;

    /**
     * @var array Statistical metric names:
flux: traffic (in bytes)
bandwidth: bandwidth (in bps)
request: number of requests
     */
    public $Metrics;

    /**
     * @var array Specifies the list of domain names to be queried
     */
    public $Domains;

    /**
     * @var array Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
     */
    public $Projects;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 1000. Maximum value: 3,000.
     */
    public $Limit;

    /**
     * @var string Statistical areas:
mainland: Chinese mainland
oversea: outside the Chinese mainland
global: global
Default value: global
     */
    public $Area;

    /**
     * @param string $StartTime Query start time, such as 2019-12-13 00:00:00.
The time span cannot exceed 90 days.
     * @param string $EndTime Query end time, such as 2019-12-13 23:59:59.
The time span cannot exceed 90 days.
     * @param array $Metrics Statistical metric names:
flux: traffic (in bytes)
bandwidth: bandwidth (in bps)
request: number of requests
     * @param array $Domains Specifies the list of domain names to be queried
     * @param array $Projects Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
If no domain name is entered, the specified project will be queried; otherwise, the domain name will prevail
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of entries per page. Default value: 1000. Maximum value: 3,000.
     * @param string $Area Statistical areas:
mainland: Chinese mainland
oversea: outside the Chinese mainland
global: global
Default value: global
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

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
            $this->Projects = $param["Projects"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
