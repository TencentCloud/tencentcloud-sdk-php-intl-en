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
 * ListTopData request structure.
 *
 * @method string getStartTime() Obtain Query start time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of minutes are supported. The start time is truncated to minutes. For example, if the value of `StartTime` is 2018-09-04 10:40:23, the start time of the data returned is 2018-09-04 10:40:00.
Only data for the last 90 days can be queried.
 * @method void setStartTime(string $StartTime) Set Query start time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of minutes are supported. The start time is truncated to minutes. For example, if the value of `StartTime` is 2018-09-04 10:40:23, the start time of the data returned is 2018-09-04 10:40:00.
Only data for the last 90 days can be queried.
 * @method string getEndTime() Obtain Query end time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of days are supported. Take the day in the input parameter as the end date, and the data generated on or before 23:59:59 on the end date is returned. For example, if the value of `EndTime` is 2018-09-05 22:40:00, the end time of the data returned is 2018-09-05 23:59:59.
`EndTime` must be later than or equal to `StartTime`.
 * @method void setEndTime(string $EndTime) Set Query end time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of days are supported. Take the day in the input parameter as the end date, and the data generated on or before 23:59:59 on the end date is returned. For example, if the value of `EndTime` is 2018-09-05 22:40:00, the end time of the data returned is 2018-09-05 23:59:59.
`EndTime` must be later than or equal to `StartTime`.
 * @method string getMetric() Obtain Objects to be sorted. Valid values:
`url`: Sort by access URL (URLs carrying no parameters). Supported filters are `flux` and `request`.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: Sort by domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, and `statusCode` (2XX, 3XX, 4XX, 5XX).
`originHost`: Sort by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, and `OriginStatusCode` (origin_2XX, origin_3XX, origin_4XX, origin_5XX).
 * @method void setMetric(string $Metric) Set Objects to be sorted. Valid values:
`url`: Sort by access URL (URLs carrying no parameters). Supported filters are `flux` and `request`.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: Sort by domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, and `statusCode` (2XX, 3XX, 4XX, 5XX).
`originHost`: Sort by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, and `OriginStatusCode` (origin_2XX, origin_3XX, origin_4XX, origin_5XX).
 * @method string getFilter() Obtain Metric name used for sorting:
flux: If Metric is `host`, it indicates the access traffic; if Metric is `originHost`, it indicates the origin-pull traffic.
bandwidth: If Metric is `host`, it indicates the access bandwidth; if Metric is `originHost`, it indicates the origin-pull bandwidth.
request: If Metric is `host`, it indicates the number of access requests; if Metric is `originHost`, it indicates the number of origin-pull requests.
fluxHitRate: Average traffic hit rate
2XX: access 2XX status code
3XX: access 3XX status code
4XX: access 4XX status code
5XX: access 5XX status code
origin_2XX: origin-pull 2XX status code
origin_3XX: origin-pull 3XX status code
origin_4XX: origin-pull 4XX status code
origin_5XX: origin-pull 5XX status code
statusCode: statistics of a specific access status code which is specified in the `Code` parameter.
OriginStatusCode: statistics of a specific origin-pull status code which is specified in the `Code` parameter.
 * @method void setFilter(string $Filter) Set Metric name used for sorting:
flux: If Metric is `host`, it indicates the access traffic; if Metric is `originHost`, it indicates the origin-pull traffic.
bandwidth: If Metric is `host`, it indicates the access bandwidth; if Metric is `originHost`, it indicates the origin-pull bandwidth.
request: If Metric is `host`, it indicates the number of access requests; if Metric is `originHost`, it indicates the number of origin-pull requests.
fluxHitRate: Average traffic hit rate
2XX: access 2XX status code
3XX: access 3XX status code
4XX: access 4XX status code
5XX: access 5XX status code
origin_2XX: origin-pull 2XX status code
origin_3XX: origin-pull 3XX status code
origin_4XX: origin-pull 4XX status code
origin_5XX: origin-pull 5XX status code
statusCode: statistics of a specific access status code which is specified in the `Code` parameter.
OriginStatusCode: statistics of a specific origin-pull status code which is specified in the `Code` parameter.
 * @method array getDomains() Obtain Specifies the list of domain names to be queried; up to 30 domain names can be queried at a time.
 * @method void setDomains(array $Domains) Set Specifies the list of domain names to be queried; up to 30 domain names can be queried at a time.
 * @method integer getProject() Obtain Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
Please note that if domain names are specified, this parameter will be ignored.
 * @method void setProject(integer $Project) Set Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
Please note that if domain names are specified, this parameter will be ignored.
 * @method boolean getDetail() Obtain The sorted results of all domain names are returned by default (false) during a multi-domain-name query
If `Metric` is `url`, `path`, `district`, or `isp` and `Filter` is `flux` or `request`, it can be set to `true` to return the sorted results of each domain.
 * @method void setDetail(boolean $Detail) Set The sorted results of all domain names are returned by default (false) during a multi-domain-name query
If `Metric` is `url`, `path`, `district`, or `isp` and `Filter` is `flux` or `request`, it can be set to `true` to return the sorted results of each domain.
 * @method string getCode() Obtain When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
 * @method void setCode(string $Code) Set When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
 * @method string getArea() Obtain Specifies the service region. If this value is left blank, it means to query CDN data within the Chinese mainland.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method void setArea(string $Area) Set Specifies the service region. If this value is left blank, it means to query CDN data within the Chinese mainland.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method string getAreaType() Obtain Specifies a region type for the query. If it is left blank, data of the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `district` or `host`.
`server`: Query by the location of server (Tencent Cloud CDN nodes).
`client`: Query data of the client region where the request devices are located; if `Metric` is `host`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method void setAreaType(string $AreaType) Set Specifies a region type for the query. If it is left blank, data of the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `district` or `host`.
`server`: Query by the location of server (Tencent Cloud CDN nodes).
`client`: Query data of the client region where the request devices are located; if `Metric` is `host`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method string getProduct() Obtain Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method integer getLimit() Obtain Returns the first N data entries. The default value is 100 if this parameter is not specified, whereas 1000 if `Metric` is `url`.
 * @method void setLimit(integer $Limit) Set Returns the first N data entries. The default value is 100 if this parameter is not specified, whereas 1000 if `Metric` is `url`.
 */
class ListTopDataRequest extends AbstractModel
{
    /**
     * @var string Query start time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of minutes are supported. The start time is truncated to minutes. For example, if the value of `StartTime` is 2018-09-04 10:40:23, the start time of the data returned is 2018-09-04 10:40:00.
Only data for the last 90 days can be queried.
     */
    public $StartTime;

    /**
     * @var string Query end time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of days are supported. Take the day in the input parameter as the end date, and the data generated on or before 23:59:59 on the end date is returned. For example, if the value of `EndTime` is 2018-09-05 22:40:00, the end time of the data returned is 2018-09-05 23:59:59.
`EndTime` must be later than or equal to `StartTime`.
     */
    public $EndTime;

    /**
     * @var string Objects to be sorted. Valid values:
`url`: Sort by access URL (URLs carrying no parameters). Supported filters are `flux` and `request`.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: Sort by domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, and `statusCode` (2XX, 3XX, 4XX, 5XX).
`originHost`: Sort by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, and `OriginStatusCode` (origin_2XX, origin_3XX, origin_4XX, origin_5XX).
     */
    public $Metric;

    /**
     * @var string Metric name used for sorting:
flux: If Metric is `host`, it indicates the access traffic; if Metric is `originHost`, it indicates the origin-pull traffic.
bandwidth: If Metric is `host`, it indicates the access bandwidth; if Metric is `originHost`, it indicates the origin-pull bandwidth.
request: If Metric is `host`, it indicates the number of access requests; if Metric is `originHost`, it indicates the number of origin-pull requests.
fluxHitRate: Average traffic hit rate
2XX: access 2XX status code
3XX: access 3XX status code
4XX: access 4XX status code
5XX: access 5XX status code
origin_2XX: origin-pull 2XX status code
origin_3XX: origin-pull 3XX status code
origin_4XX: origin-pull 4XX status code
origin_5XX: origin-pull 5XX status code
statusCode: statistics of a specific access status code which is specified in the `Code` parameter.
OriginStatusCode: statistics of a specific origin-pull status code which is specified in the `Code` parameter.
     */
    public $Filter;

    /**
     * @var array Specifies the list of domain names to be queried; up to 30 domain names can be queried at a time.
     */
    public $Domains;

    /**
     * @var integer Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
Please note that if domain names are specified, this parameter will be ignored.
     */
    public $Project;

    /**
     * @var boolean The sorted results of all domain names are returned by default (false) during a multi-domain-name query
If `Metric` is `url`, `path`, `district`, or `isp` and `Filter` is `flux` or `request`, it can be set to `true` to return the sorted results of each domain.
     */
    public $Detail;

    /**
     * @var string When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
     */
    public $Code;

    /**
     * @var string Specifies the service region. If this value is left blank, it means to query CDN data within the Chinese mainland.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
     */
    public $Area;

    /**
     * @var string Specifies a region type for the query. If it is left blank, data of the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `district` or `host`.
`server`: Query by the location of server (Tencent Cloud CDN nodes).
`client`: Query data of the client region where the request devices are located; if `Metric` is `host`, supported filters are `flux`, `request`, and `bandwidth`.
     */
    public $AreaType;

    /**
     * @var string Specifies the product to query, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @var integer Returns the first N data entries. The default value is 100 if this parameter is not specified, whereas 1000 if `Metric` is `url`.
     */
    public $Limit;

    /**
     * @param string $StartTime Query start time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of minutes are supported. The start time is truncated to minutes. For example, if the value of `StartTime` is 2018-09-04 10:40:23, the start time of the data returned is 2018-09-04 10:40:00.
Only data for the last 90 days can be queried.
     * @param string $EndTime Query end time in the format of `yyyy-MM-dd HH:mm:ss`
Only data queries at the granularity of days are supported. Take the day in the input parameter as the end date, and the data generated on or before 23:59:59 on the end date is returned. For example, if the value of `EndTime` is 2018-09-05 22:40:00, the end time of the data returned is 2018-09-05 23:59:59.
`EndTime` must be later than or equal to `StartTime`.
     * @param string $Metric Objects to be sorted. Valid values:
`url`: Sort by access URL (URLs carrying no parameters). Supported filters are `flux` and `request`.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: Sort by domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, and `statusCode` (2XX, 3XX, 4XX, 5XX).
`originHost`: Sort by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, and `OriginStatusCode` (origin_2XX, origin_3XX, origin_4XX, origin_5XX).
     * @param string $Filter Metric name used for sorting:
flux: If Metric is `host`, it indicates the access traffic; if Metric is `originHost`, it indicates the origin-pull traffic.
bandwidth: If Metric is `host`, it indicates the access bandwidth; if Metric is `originHost`, it indicates the origin-pull bandwidth.
request: If Metric is `host`, it indicates the number of access requests; if Metric is `originHost`, it indicates the number of origin-pull requests.
fluxHitRate: Average traffic hit rate
2XX: access 2XX status code
3XX: access 3XX status code
4XX: access 4XX status code
5XX: access 5XX status code
origin_2XX: origin-pull 2XX status code
origin_3XX: origin-pull 3XX status code
origin_4XX: origin-pull 4XX status code
origin_5XX: origin-pull 5XX status code
statusCode: statistics of a specific access status code which is specified in the `Code` parameter.
OriginStatusCode: statistics of a specific origin-pull status code which is specified in the `Code` parameter.
     * @param array $Domains Specifies the list of domain names to be queried; up to 30 domain names can be queried at a time.
     * @param integer $Project Specifies the project ID to be queried, which can be viewed [here](https://console.cloud.tencent.com/project)
Please note that if domain names are specified, this parameter will be ignored.
     * @param boolean $Detail The sorted results of all domain names are returned by default (false) during a multi-domain-name query
If `Metric` is `url`, `path`, `district`, or `isp` and `Filter` is `flux` or `request`, it can be set to `true` to return the sorted results of each domain.
     * @param string $Code When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
     * @param string $Area Specifies the service region. If this value is left blank, it means to query CDN data within the Chinese mainland.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
     * @param string $AreaType Specifies a region type for the query. If it is left blank, data of the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `district` or `host`.
`server`: Query by the location of server (Tencent Cloud CDN nodes).
`client`: Query data of the client region where the request devices are located; if `Metric` is `host`, supported filters are `flux`, `request`, and `bandwidth`.
     * @param string $Product Specifies the product to query, either `cdn` (default) or `ecdn`.
     * @param integer $Limit Returns the first N data entries. The default value is 100 if this parameter is not specified, whereas 1000 if `Metric` is `url`.
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

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AreaType",$param) and $param["AreaType"] !== null) {
            $this->AreaType = $param["AreaType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
