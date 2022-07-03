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
 * DescribeCdnData request structure.
 *
 * @method string getStartTime() Obtain Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method void setStartTime(string $StartTime) Set Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method string getEndTime() Obtain End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method void setEndTime(string $EndTime) Set End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method string getMetric() Obtain Specifies the metric to query, which can be:
`flux`: Traffic (in bytes)
`fluxIn`: Upstream traffic (in bytes), only used for the `ecdn` product
`fluxOut`: Downstream traffic (in bytes), only used for the `ecdn` product
`bandwidth`: Bandwidth (in bps)
`bandwidthIn`: Upstream bandwidth (in bps), only used for the `ecdn` product
`bandwidthOut`: Downstream bandwidth (in bps), only used for the `ecdn` product
`request`: Number of requests
`hitRequest`: Number of hit requests
`requestHitRate`: Request hit rate (in % with two decimal digits)
`hitFlux`: Hit traffic (in bytes)
`fluxHitRate`: Traffic hit rate (in % with two decimal digits)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2xx`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3xx`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4xx`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5xx`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
Specifies the status code to query. The return will be empty if the status code has never been generated.
 * @method void setMetric(string $Metric) Set Specifies the metric to query, which can be:
`flux`: Traffic (in bytes)
`fluxIn`: Upstream traffic (in bytes), only used for the `ecdn` product
`fluxOut`: Downstream traffic (in bytes), only used for the `ecdn` product
`bandwidth`: Bandwidth (in bps)
`bandwidthIn`: Upstream bandwidth (in bps), only used for the `ecdn` product
`bandwidthOut`: Downstream bandwidth (in bps), only used for the `ecdn` product
`request`: Number of requests
`hitRequest`: Number of hit requests
`requestHitRate`: Request hit rate (in % with two decimal digits)
`hitFlux`: Hit traffic (in bytes)
`fluxHitRate`: Traffic hit rate (in % with two decimal digits)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2xx`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3xx`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4xx`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5xx`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
Specifies the status code to query. The return will be empty if the status code has never been generated.
 * @method array getDomains() Obtain Specifies the list of domain names to be queried
You can specify one or more domain names.
Up to 30 domain names can be queried in one request.
If this parameter is not specified, it means to query all domain names under the current account.
 * @method void setDomains(array $Domains) Set Specifies the list of domain names to be queried
You can specify one or more domain names.
Up to 30 domain names can be queried in one request.
If this parameter is not specified, it means to query all domain names under the current account.
 * @method integer getProject() Obtain Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
Note that `Project` will be ignored if `Domains` is specified.
 * @method void setProject(integer $Project) Set Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
Note that `Project` will be ignored if `Domains` is specified.
 * @method string getInterval() Obtain Sampling interval. The available options vary for different query period. See below: 
`min`: Return data with 1-minute granularity. It’s available when the query period is  within 24 hours and `Area` is `mainland`.
`5min`: Return data with 5-minute granularity. It’s available when the query period is within 31 days.
`hour`: Return data with 1-hour granularity. It’s available when the query period is within 31 days.
`day`: Return data with 1-day granularity. It’s available when the query period is longer than 31 days.
 * @method void setInterval(string $Interval) Set Sampling interval. The available options vary for different query period. See below: 
`min`: Return data with 1-minute granularity. It’s available when the query period is  within 24 hours and `Area` is `mainland`.
`5min`: Return data with 5-minute granularity. It’s available when the query period is within 31 days.
`hour`: Return data with 1-hour granularity. It’s available when the query period is within 31 days.
`day`: Return data with 1-day granularity. It’s available when the query period is longer than 31 days.
 * @method boolean getDetail() Obtain The aggregate data for multiple domain names is returned by default (false) during a multi-domain-name query.
You can set it to true to return the details for each Domain (the statusCode metric is currently not supported).
 * @method void setDetail(boolean $Detail) Set The aggregate data for multiple domain names is returned by default (false) during a multi-domain-name query.
You can set it to true to return the details for each Domain (the statusCode metric is currently not supported).
 * @method integer getIsp() Obtain Specifies an ISP when you query the CDN data within the Chinese mainland. If this is left blank, all ISPs will be queried.
To view ISP codes, see [ISP Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8)
Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
 * @method void setIsp(integer $Isp) Set Specifies an ISP when you query the CDN data within the Chinese mainland. If this is left blank, all ISPs will be queried.
To view ISP codes, see [ISP Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8)
Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
 * @method integer getDistrict() Obtain Specifies a province when you query the CDN data within the Chinese mainland. If this is left blank, all provinces will be queried.
Specifies a country/region when you query the CDN data outside the Chinese mainland. If this is left blank, all countries/regions will be queried.
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8).
When `Area` is `mainland`, you can query by the province. Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
 * @method void setDistrict(integer $District) Set Specifies a province when you query the CDN data within the Chinese mainland. If this is left blank, all provinces will be queried.
Specifies a country/region when you query the CDN data outside the Chinese mainland. If this is left blank, all countries/regions will be queried.
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8).
When `Area` is `mainland`, you can query by the province. Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
 * @method string getProtocol() Obtain Specifies the protocol to be queried; if you leave it blank, all protocols will be queried.
`all`: All protocols
`http`: Query HTTP data
`https`: Query HTTPS data
 * @method void setProtocol(string $Protocol) Set Specifies the protocol to be queried; if you leave it blank, all protocols will be queried.
`all`: All protocols
`http`: Query HTTP data
`https`: Query HTTPS data
 * @method string getDataSource() Obtain Specifies the data source to be queried. It’s only open to beta users now. 
 * @method void setDataSource(string $DataSource) Set Specifies the data source to be queried. It’s only open to beta users now. 
 * @method string getIpProtocol() Obtain Specifies the IP protocol to be queried. If it’s not specified, data of all IP protocols are returned.
`all`: All protocols
`ipv4`: Query IPv4 data
`ipv6`: Query IPv6 data
If `IpProtocol` is specified, `District` parameter can not be specified at the same time.
Note: `ipv4` and `ipv6` are only available to beta users. 
 * @method void setIpProtocol(string $IpProtocol) Set Specifies the IP protocol to be queried. If it’s not specified, data of all IP protocols are returned.
`all`: All protocols
`ipv4`: Query IPv4 data
`ipv6`: Query IPv6 data
If `IpProtocol` is specified, `District` parameter can not be specified at the same time.
Note: `ipv4` and `ipv6` are only available to beta users. 
 * @method string getArea() Obtain Specifies the service area. If it’s not specified, CDN data of the Chinese mainland are returned.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland.
 * @method void setArea(string $Area) Set Specifies the service area. If it’s not specified, CDN data of the Chinese mainland are returned.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland.
 * @method string getAreaType() Obtain Specify whether to query by the region of the server or client. This parameter is valid only when `Area` is `overseas`.
`server`: Query by the location of server (Tencent Cloud CDN nodes)
`client`: Query by the location of the client (where the request devices are located)
 * @method void setAreaType(string $AreaType) Set Specify whether to query by the region of the server or client. This parameter is valid only when `Area` is `overseas`.
`server`: Query by the location of server (Tencent Cloud CDN nodes)
`client`: Query by the location of the client (where the request devices are located)
 * @method string getProduct() Obtain Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method string getTimeZone() Obtain Specifies a time zone to query. The default time zone is UTC+08:00.
 * @method void setTimeZone(string $TimeZone) Set Specifies a time zone to query. The default time zone is UTC+08:00.
 */
class DescribeCdnDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     */
    public $StartTime;

    /**
     * @var string End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     */
    public $EndTime;

    /**
     * @var string Specifies the metric to query, which can be:
`flux`: Traffic (in bytes)
`fluxIn`: Upstream traffic (in bytes), only used for the `ecdn` product
`fluxOut`: Downstream traffic (in bytes), only used for the `ecdn` product
`bandwidth`: Bandwidth (in bps)
`bandwidthIn`: Upstream bandwidth (in bps), only used for the `ecdn` product
`bandwidthOut`: Downstream bandwidth (in bps), only used for the `ecdn` product
`request`: Number of requests
`hitRequest`: Number of hit requests
`requestHitRate`: Request hit rate (in % with two decimal digits)
`hitFlux`: Hit traffic (in bytes)
`fluxHitRate`: Traffic hit rate (in % with two decimal digits)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2xx`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3xx`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4xx`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5xx`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
Specifies the status code to query. The return will be empty if the status code has never been generated.
     */
    public $Metric;

    /**
     * @var array Specifies the list of domain names to be queried
You can specify one or more domain names.
Up to 30 domain names can be queried in one request.
If this parameter is not specified, it means to query all domain names under the current account.
     */
    public $Domains;

    /**
     * @var integer Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
Note that `Project` will be ignored if `Domains` is specified.
     */
    public $Project;

    /**
     * @var string Sampling interval. The available options vary for different query period. See below: 
`min`: Return data with 1-minute granularity. It’s available when the query period is  within 24 hours and `Area` is `mainland`.
`5min`: Return data with 5-minute granularity. It’s available when the query period is within 31 days.
`hour`: Return data with 1-hour granularity. It’s available when the query period is within 31 days.
`day`: Return data with 1-day granularity. It’s available when the query period is longer than 31 days.
     */
    public $Interval;

    /**
     * @var boolean The aggregate data for multiple domain names is returned by default (false) during a multi-domain-name query.
You can set it to true to return the details for each Domain (the statusCode metric is currently not supported).
     */
    public $Detail;

    /**
     * @var integer Specifies an ISP when you query the CDN data within the Chinese mainland. If this is left blank, all ISPs will be queried.
To view ISP codes, see [ISP Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8)
Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
     */
    public $Isp;

    /**
     * @var integer Specifies a province when you query the CDN data within the Chinese mainland. If this is left blank, all provinces will be queried.
Specifies a country/region when you query the CDN data outside the Chinese mainland. If this is left blank, all countries/regions will be queried.
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8).
When `Area` is `mainland`, you can query by the province. Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
     */
    public $District;

    /**
     * @var string Specifies the protocol to be queried; if you leave it blank, all protocols will be queried.
`all`: All protocols
`http`: Query HTTP data
`https`: Query HTTPS data
     */
    public $Protocol;

    /**
     * @var string Specifies the data source to be queried. It’s only open to beta users now. 
     */
    public $DataSource;

    /**
     * @var string Specifies the IP protocol to be queried. If it’s not specified, data of all IP protocols are returned.
`all`: All protocols
`ipv4`: Query IPv4 data
`ipv6`: Query IPv6 data
If `IpProtocol` is specified, `District` parameter can not be specified at the same time.
Note: `ipv4` and `ipv6` are only available to beta users. 
     */
    public $IpProtocol;

    /**
     * @var string Specifies the service area. If it’s not specified, CDN data of the Chinese mainland are returned.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland.
     */
    public $Area;

    /**
     * @var string Specify whether to query by the region of the server or client. This parameter is valid only when `Area` is `overseas`.
`server`: Query by the location of server (Tencent Cloud CDN nodes)
`client`: Query by the location of the client (where the request devices are located)
     */
    public $AreaType;

    /**
     * @var string Specifies the product to query, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @var string Specifies a time zone to query. The default time zone is UTC+08:00.
     */
    public $TimeZone;

    /**
     * @param string $StartTime Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     * @param string $EndTime End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     * @param string $Metric Specifies the metric to query, which can be:
`flux`: Traffic (in bytes)
`fluxIn`: Upstream traffic (in bytes), only used for the `ecdn` product
`fluxOut`: Downstream traffic (in bytes), only used for the `ecdn` product
`bandwidth`: Bandwidth (in bps)
`bandwidthIn`: Upstream bandwidth (in bps), only used for the `ecdn` product
`bandwidthOut`: Downstream bandwidth (in bps), only used for the `ecdn` product
`request`: Number of requests
`hitRequest`: Number of hit requests
`requestHitRate`: Request hit rate (in % with two decimal digits)
`hitFlux`: Hit traffic (in bytes)
`fluxHitRate`: Traffic hit rate (in % with two decimal digits)
`statusCode`: Status code. The aggregate data for 2xx, 3xx, 4xx, and 5xx status codes will be returned (in entries)
`2xx`: Returns the aggregate list of 2xx status codes and the data for status codes starting with 2 (in entries)
`3xx`: Returns the aggregate list of 3xx status codes and the data for status codes starting with 3 (in entries)
`4xx`: Returns the aggregate list of 4xx status codes and the data for status codes starting with 4 (in entries)
`5xx`: Returns the aggregate list of 5xx status codes and the data for status codes starting with 5 (in entries)
Specifies the status code to query. The return will be empty if the status code has never been generated.
     * @param array $Domains Specifies the list of domain names to be queried
You can specify one or more domain names.
Up to 30 domain names can be queried in one request.
If this parameter is not specified, it means to query all domain names under the current account.
     * @param integer $Project Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
Note that `Project` will be ignored if `Domains` is specified.
     * @param string $Interval Sampling interval. The available options vary for different query period. See below: 
`min`: Return data with 1-minute granularity. It’s available when the query period is  within 24 hours and `Area` is `mainland`.
`5min`: Return data with 5-minute granularity. It’s available when the query period is within 31 days.
`hour`: Return data with 1-hour granularity. It’s available when the query period is within 31 days.
`day`: Return data with 1-day granularity. It’s available when the query period is longer than 31 days.
     * @param boolean $Detail The aggregate data for multiple domain names is returned by default (false) during a multi-domain-name query.
You can set it to true to return the details for each Domain (the statusCode metric is currently not supported).
     * @param integer $Isp Specifies an ISP when you query the CDN data within the Chinese mainland. If this is left blank, all ISPs will be queried.
To view ISP codes, see [ISP Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8)
Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
     * @param integer $District Specifies a province when you query the CDN data within the Chinese mainland. If this is left blank, all provinces will be queried.
Specifies a country/region when you query the CDN data outside the Chinese mainland. If this is left blank, all countries/regions will be queried.
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8).
When `Area` is `mainland`, you can query by the province. Note that only one of `District`, `Isp` and `IpProtocol` can be specified.
     * @param string $Protocol Specifies the protocol to be queried; if you leave it blank, all protocols will be queried.
`all`: All protocols
`http`: Query HTTP data
`https`: Query HTTPS data
     * @param string $DataSource Specifies the data source to be queried. It’s only open to beta users now. 
     * @param string $IpProtocol Specifies the IP protocol to be queried. If it’s not specified, data of all IP protocols are returned.
`all`: All protocols
`ipv4`: Query IPv4 data
`ipv6`: Query IPv6 data
If `IpProtocol` is specified, `District` parameter can not be specified at the same time.
Note: `ipv4` and `ipv6` are only available to beta users. 
     * @param string $Area Specifies the service area. If it’s not specified, CDN data of the Chinese mainland are returned.
`mainland`: Query CDN data in the Chinese mainland.
`overseas`: Query CDN data outside the Chinese mainland.
     * @param string $AreaType Specify whether to query by the region of the server or client. This parameter is valid only when `Area` is `overseas`.
`server`: Query by the location of server (Tencent Cloud CDN nodes)
`client`: Query by the location of the client (where the request devices are located)
     * @param string $Product Specifies the product to query, either `cdn` (default) or `ecdn`.
     * @param string $TimeZone Specifies a time zone to query. The default time zone is UTC+08:00.
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
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

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
