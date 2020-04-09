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
 * @method string getStartTime() Obtain Query start date. Example: 2018-09-09.
Only supports data query at daily granularity. The date in the input parameter is used as the start date.
Data generated at or after 00:00:00 on the start date will be returned.
Only data from the last 90 days will be queried.
 * @method void setStartTime(string $StartTime) Set Query start date. Example: 2018-09-09.
Only supports data query at daily granularity. The date in the input parameter is used as the start date.
Data generated at or after 00:00:00 on the start date will be returned.
Only data from the last 90 days will be queried.
 * @method string getEndTime() Obtain Query end date. Example: 2018-09-10
Only supports data query at daily granularity. The date in the input parameter is used as the end date.
Data generated before or at 23:59:59 on the end date will be returned.
EndTime must be greater than or equal to StartTime
 * @method void setEndTime(string $EndTime) Set Query end date. Example: 2018-09-10
Only supports data query at daily granularity. The date in the input parameter is used as the end date.
Data generated before or at 23:59:59 on the end date will be returned.
EndTime must be greater than or equal to StartTime
 * @method string getMetric() Obtain Objects to be sorted. Valid values:
`url`: sorts access URLs with query string parameters included. Supported filters are `flux` and `request`.
`path`: sorts access URLs with query string parameters excluded. Supported filters are `flux` and `request`. You need to be whitelisted before using this feature.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: sorts domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, `2XX`, `3XX`, `4XX`, `5XX` and `statusCode`.
`originHost`: sorts by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, `origin_2XX`, `origin_3XX`, `oringin_4XX`, `origin_5XX` and `OriginStatusCode`
 * @method void setMetric(string $Metric) Set Objects to be sorted. Valid values:
`url`: sorts access URLs with query string parameters included. Supported filters are `flux` and `request`.
`path`: sorts access URLs with query string parameters excluded. Supported filters are `flux` and `request`. You need to be whitelisted before using this feature.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: sorts domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, `2XX`, `3XX`, `4XX`, `5XX` and `statusCode`.
`originHost`: sorts by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, `origin_2XX`, `origin_3XX`, `oringin_4XX`, `origin_5XX` and `OriginStatusCode`
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
 * @method boolean getDetail() Obtain Default value: `false`, indicating that results for all domain names are returned together when you query multiple domain names.
If `Metric` is `Url`, `Path`, `District`, or `Isp` and `Filter` is `flux` or `request`, you can set this parameter to `true`, indicating that results for each domain name are returned.
 * @method void setDetail(boolean $Detail) Set Default value: `false`, indicating that results for all domain names are returned together when you query multiple domain names.
If `Metric` is `Url`, `Path`, `District`, or `Isp` and `Filter` is `flux` or `request`, you can set this parameter to `true`, indicating that results for each domain name are returned.
 * @method string getCode() Obtain When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
 * @method void setCode(string $Code) Set When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
 * @method string getArea() Obtain Specifies a service region for the query. If it is left blank, CDN data within Mainland China will be queried.
`mainland`: specifies to query CDN data within Mainland China;
`overseas`: specifies to query CDN data outside Mainland China. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method void setArea(string $Area) Set Specifies a service region for the query. If it is left blank, CDN data within Mainland China will be queried.
`mainland`: specifies to query CDN data within Mainland China;
`overseas`: specifies to query CDN data outside Mainland China. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method string getAreaType() Obtain Specifies a region type for the query. If it is left blank, data on the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `District` or `Host`.
`server`: specifies to query data on the service region where Tencent Cloud CDN nodes are located;
`client`: specifies to query data on the client region where the request devices are located; if `Metric` is `Host`, supported filters are `flux`, `request`, and `bandwidth`.
 * @method void setAreaType(string $AreaType) Set Specifies a region type for the query. If it is left blank, data on the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `District` or `Host`.
`server`: specifies to query data on the service region where Tencent Cloud CDN nodes are located;
`client`: specifies to query data on the client region where the request devices are located; if `Metric` is `Host`, supported filters are `flux`, `request`, and `bandwidth`.
 */
class ListTopDataRequest extends AbstractModel
{
    /**
     * @var string Query start date. Example: 2018-09-09.
Only supports data query at daily granularity. The date in the input parameter is used as the start date.
Data generated at or after 00:00:00 on the start date will be returned.
Only data from the last 90 days will be queried.
     */
    public $StartTime;

    /**
     * @var string Query end date. Example: 2018-09-10
Only supports data query at daily granularity. The date in the input parameter is used as the end date.
Data generated before or at 23:59:59 on the end date will be returned.
EndTime must be greater than or equal to StartTime
     */
    public $EndTime;

    /**
     * @var string Objects to be sorted. Valid values:
`url`: sorts access URLs with query string parameters included. Supported filters are `flux` and `request`.
`path`: sorts access URLs with query string parameters excluded. Supported filters are `flux` and `request`. You need to be whitelisted before using this feature.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: sorts domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, `2XX`, `3XX`, `4XX`, `5XX` and `statusCode`.
`originHost`: sorts by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, `origin_2XX`, `origin_3XX`, `oringin_4XX`, `origin_5XX` and `OriginStatusCode`
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
     * @var boolean Default value: `false`, indicating that results for all domain names are returned together when you query multiple domain names.
If `Metric` is `Url`, `Path`, `District`, or `Isp` and `Filter` is `flux` or `request`, you can set this parameter to `true`, indicating that results for each domain name are returned.
     */
    public $Detail;

    /**
     * @var string When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
     */
    public $Code;

    /**
     * @var string Specifies a service region for the query. If it is left blank, CDN data within Mainland China will be queried.
`mainland`: specifies to query CDN data within Mainland China;
`overseas`: specifies to query CDN data outside Mainland China. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
     */
    public $Area;

    /**
     * @var string Specifies a region type for the query. If it is left blank, data on the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `District` or `Host`.
`server`: specifies to query data on the service region where Tencent Cloud CDN nodes are located;
`client`: specifies to query data on the client region where the request devices are located; if `Metric` is `Host`, supported filters are `flux`, `request`, and `bandwidth`.
     */
    public $AreaType;

    /**
     * @param string $StartTime Query start date. Example: 2018-09-09.
Only supports data query at daily granularity. The date in the input parameter is used as the start date.
Data generated at or after 00:00:00 on the start date will be returned.
Only data from the last 90 days will be queried.
     * @param string $EndTime Query end date. Example: 2018-09-10
Only supports data query at daily granularity. The date in the input parameter is used as the end date.
Data generated before or at 23:59:59 on the end date will be returned.
EndTime must be greater than or equal to StartTime
     * @param string $Metric Objects to be sorted. Valid values:
`url`: sorts access URLs with query string parameters included. Supported filters are `flux` and `request`.
`path`: sorts access URLs with query string parameters excluded. Supported filters are `flux` and `request`. You need to be whitelisted before using this feature.
`district`: sorts provinces or countries/regions. Supported filters are `flux` and `request`.
`isp`: sorts ISPs. Supported filters are `flux` and `request`.
`host`: sorts domain name access data. Supported filters are `flux`, `request`, `bandwidth`, `fluxHitRate`, `2XX`, `3XX`, `4XX`, `5XX` and `statusCode`.
`originHost`: sorts by domain name origin-pull data. Supported filters are `flux`, `request`, `bandwidth`, `origin_2XX`, `origin_3XX`, `oringin_4XX`, `origin_5XX` and `OriginStatusCode`
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
     * @param boolean $Detail Default value: `false`, indicating that results for all domain names are returned together when you query multiple domain names.
If `Metric` is `Url`, `Path`, `District`, or `Isp` and `Filter` is `flux` or `request`, you can set this parameter to `true`, indicating that results for each domain name are returned.
     * @param string $Code When Filter is `statusCode` or `OriginStatusCode`, enter a code to query and sort results.
     * @param string $Area Specifies a service region for the query. If it is left blank, CDN data within Mainland China will be queried.
`mainland`: specifies to query CDN data within Mainland China;
`overseas`: specifies to query CDN data outside Mainland China. Supported metrics are `url`, `district`, `host`, and `originHost`. If `Metric` is `originHost`, supported filters are `flux`, `request`, and `bandwidth`.
     * @param string $AreaType Specifies a region type for the query. If it is left blank, data on the service region will be queried. This parameter is only valid when `Area` is `overseas` and `Metric` is `District` or `Host`.
`server`: specifies to query data on the service region where Tencent Cloud CDN nodes are located;
`client`: specifies to query data on the client region where the request devices are located; if `Metric` is `Host`, supported filters are `flux`, `request`, and `bandwidth`.
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
    }
}
