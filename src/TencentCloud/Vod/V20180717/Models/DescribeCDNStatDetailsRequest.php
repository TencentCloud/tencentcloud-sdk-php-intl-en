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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNStatDetails request structure.
 *
 * @method string getMetric() Obtain Queried metric. Valid values:
<li>Traffic: Total Traffic, in bytes.</li>
<li>Bandwidth: bandwidth, in Bps.</li>
<li>Requests: request count.</li>
<li>QUICRequests: number of QUIC requests.</li>
<li>IpVisit: number of IP visits.</li>
 * @method void setMetric(string $Metric) Set Queried metric. Valid values:
<li>Traffic: Total Traffic, in bytes.</li>
<li>Bandwidth: bandwidth, in Bps.</li>
<li>Requests: request count.</li>
<li>QUICRequests: number of QUIC requests.</li>
<li>IpVisit: number of IP visits.</li>
 * @method string getStartTime() Obtain Start time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Start time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain End time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set End time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
 * @method array getDomainNames() Obtain Domain name list. Query data for up to 20 domains at a time. Usage data for all domains is overlaid by default.
 * @method void setDomainNames(array $DomainNames) Set Domain name list. Query data for up to 20 domains at a time. Usage data for all domains is overlaid by default.
 * @method string getArea() Obtain Service area. Valid values:
<li>Chinese Mainland: Chinese mainland. </li>
<li>Asia Pacific Region 1: Asia Pacific zone 1, including Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand. </li>
<li>Asia Pacific Region 2: Asia Pacific zone 2, including Taiwan, Japan, Malaysia, Indonesia, and South Korea. </li>
<li>Asia Pacific Region 3: Asia Pacific zone 3, including the Philippines, India, Australia, and other countries and regions in Asia Pacific. </li>
<li>Middle East: Middle East. </li>
<li>Europe: Europe.</li>
<li>North America: North America.</li>
<li>South America: South America.</li>
<li>Africa: Africa.</li>
Default value: Chinese mainland.
 * @method void setArea(string $Area) Set Service area. Valid values:
<li>Chinese Mainland: Chinese mainland. </li>
<li>Asia Pacific Region 1: Asia Pacific zone 1, including Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand. </li>
<li>Asia Pacific Region 2: Asia Pacific zone 2, including Taiwan, Japan, Malaysia, Indonesia, and South Korea. </li>
<li>Asia Pacific Region 3: Asia Pacific zone 3, including the Philippines, India, Australia, and other countries and regions in Asia Pacific. </li>
<li>Middle East: Middle East. </li>
<li>Europe: Europe.</li>
<li>North America: North America.</li>
<li>South America: South America.</li>
<li>Africa: Africa.</li>
Default value: Chinese mainland.
 * @method array getDistricts() Obtain Region where the user is located. If Area is Chinese Mainland, the value is the following region information. If Area is set to other values, ignore the Districts parameter.
<li>Beijing: Beijing.</li>
<li>Inner Mongolia: Inner Mongolia.</li>
<li>Shanxi: Shanxi.</li>
<li>Hebei: Hebei.</li>
<li>Tianjin: Tianjin.</li>
<li>Ningxia: Ningxia.</li>
<li>Shaanxi: Shaanxi.</li>
<li>Gansu: Gansu.</li>
<li>Qinghai: Qinghai.</li>
<li>Xinjiang: Xinjiang.</li>
<li>Heilongjiang: Heilongjiang.</li>
<li>Jilin: Jilin.</li>
<li>Liaoning: Liaoning.</li>
<li>Fujian: Fujian.</li>
<li>Jiangsu: Jiangsu.</li>
<li>Anhui: Anhui.</li>
<li>Shandong: Shandong.</li>
<li>Shanghai: Shanghai.</li>
<li>Zhejiang: Zhejiang.</li>
<li>Henan: Henan.</li>
<li>Hubei: Hubei.</li>
<li>Jiangxi: Jiangxi.</li>
<li>Hu’nan: Hunan.</li>
<li>Guizhou: Guizhou.</li>
<li>Yunnan: Yunnan.</li>
<li>Chongqing: Chongqing.</li>
<li>Sichuan: Sichuan.</li>
<li>Xizang: Tibet.</li>
<li>Guangdong: Guangdong.</li>
<li>Guangxi: Guangxi.</li>
<li>Hainan: Hainan.</li>
<li>Hong Kong (China), Macao (China), and Taiwan (China): Hong Kong, Macao and Taiwan.</li>
<li>Outside Chinese Mainland: overseas.</li>
<li>Other: Other.</li>
 * @method void setDistricts(array $Districts) Set Region where the user is located. If Area is Chinese Mainland, the value is the following region information. If Area is set to other values, ignore the Districts parameter.
<li>Beijing: Beijing.</li>
<li>Inner Mongolia: Inner Mongolia.</li>
<li>Shanxi: Shanxi.</li>
<li>Hebei: Hebei.</li>
<li>Tianjin: Tianjin.</li>
<li>Ningxia: Ningxia.</li>
<li>Shaanxi: Shaanxi.</li>
<li>Gansu: Gansu.</li>
<li>Qinghai: Qinghai.</li>
<li>Xinjiang: Xinjiang.</li>
<li>Heilongjiang: Heilongjiang.</li>
<li>Jilin: Jilin.</li>
<li>Liaoning: Liaoning.</li>
<li>Fujian: Fujian.</li>
<li>Jiangsu: Jiangsu.</li>
<li>Anhui: Anhui.</li>
<li>Shandong: Shandong.</li>
<li>Shanghai: Shanghai.</li>
<li>Zhejiang: Zhejiang.</li>
<li>Henan: Henan.</li>
<li>Hubei: Hubei.</li>
<li>Jiangxi: Jiangxi.</li>
<li>Hu’nan: Hunan.</li>
<li>Guizhou: Guizhou.</li>
<li>Yunnan: Yunnan.</li>
<li>Chongqing: Chongqing.</li>
<li>Sichuan: Sichuan.</li>
<li>Xizang: Tibet.</li>
<li>Guangdong: Guangdong.</li>
<li>Guangxi: Guangxi.</li>
<li>Hainan: Hainan.</li>
<li>Hong Kong (China), Macao (China), and Taiwan (China): Hong Kong, Macao and Taiwan.</li>
<li>Outside Chinese Mainland: overseas.</li>
<li>Other: Other.</li>
 * @method array getIsps() Obtain User's Operator Information. When Area is Chinese Mainland, the value is the following carrier information. When Area is other values, ignore the Isps parameter.
<li>China Telecom: China Telecom.</li>
<li>China Unicom: China Unicom. </li>
<li>CERNET: China Education Network.</li>
<li>Great Wall Broadband Network: Great Wall Broadband.</li>
<li>China Mobile: China Mobile.</li>
<li>China Mobile Tietong: China Tietong.</li>
<li>ISPs outside Chinese Mainland: overseas carriers.</li>
<li>Other ISPs: Other ISPs.</li>
 * @method void setIsps(array $Isps) Set User's Operator Information. When Area is Chinese Mainland, the value is the following carrier information. When Area is other values, ignore the Isps parameter.
<li>China Telecom: China Telecom.</li>
<li>China Unicom: China Unicom. </li>
<li>CERNET: China Education Network.</li>
<li>Great Wall Broadband Network: Great Wall Broadband.</li>
<li>China Mobile: China Mobile.</li>
<li>China Mobile Tietong: China Tietong.</li>
<li>ISPs outside Chinese Mainland: overseas carriers.</li>
<li>Other ISPs: Other ISPs.</li>
 * @method integer getDataInterval() Obtain Time granularity of each data entry. Unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>1440: Day granularity. Return the data at 1-day granularity within the specified query time. If the span between the start time and end time is more than 24 hours, only day granularity data is supported.</li>
When the time span between StartTime and EndTime is more than 24 hours, DataInterval defaults to 1440.
 * @method void setDataInterval(integer $DataInterval) Set Time granularity of each data entry. Unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>1440: Day granularity. Return the data at 1-day granularity within the specified query time. If the span between the start time and end time is more than 24 hours, only day granularity data is supported.</li>
When the time span between StartTime and EndTime is more than 24 hours, DataInterval defaults to 1440.
 */
class DescribeCDNStatDetailsRequest extends AbstractModel
{
    /**
     * @var string Queried metric. Valid values:
<li>Traffic: Total Traffic, in bytes.</li>
<li>Bandwidth: bandwidth, in Bps.</li>
<li>Requests: request count.</li>
<li>QUICRequests: number of QUIC requests.</li>
<li>IpVisit: number of IP visits.</li>
     */
    public $Metric;

    /**
     * @var string Start time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var array Domain name list. Query data for up to 20 domains at a time. Usage data for all domains is overlaid by default.
     */
    public $DomainNames;

    /**
     * @var string Service area. Valid values:
<li>Chinese Mainland: Chinese mainland. </li>
<li>Asia Pacific Region 1: Asia Pacific zone 1, including Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand. </li>
<li>Asia Pacific Region 2: Asia Pacific zone 2, including Taiwan, Japan, Malaysia, Indonesia, and South Korea. </li>
<li>Asia Pacific Region 3: Asia Pacific zone 3, including the Philippines, India, Australia, and other countries and regions in Asia Pacific. </li>
<li>Middle East: Middle East. </li>
<li>Europe: Europe.</li>
<li>North America: North America.</li>
<li>South America: South America.</li>
<li>Africa: Africa.</li>
Default value: Chinese mainland.
     */
    public $Area;

    /**
     * @var array Region where the user is located. If Area is Chinese Mainland, the value is the following region information. If Area is set to other values, ignore the Districts parameter.
<li>Beijing: Beijing.</li>
<li>Inner Mongolia: Inner Mongolia.</li>
<li>Shanxi: Shanxi.</li>
<li>Hebei: Hebei.</li>
<li>Tianjin: Tianjin.</li>
<li>Ningxia: Ningxia.</li>
<li>Shaanxi: Shaanxi.</li>
<li>Gansu: Gansu.</li>
<li>Qinghai: Qinghai.</li>
<li>Xinjiang: Xinjiang.</li>
<li>Heilongjiang: Heilongjiang.</li>
<li>Jilin: Jilin.</li>
<li>Liaoning: Liaoning.</li>
<li>Fujian: Fujian.</li>
<li>Jiangsu: Jiangsu.</li>
<li>Anhui: Anhui.</li>
<li>Shandong: Shandong.</li>
<li>Shanghai: Shanghai.</li>
<li>Zhejiang: Zhejiang.</li>
<li>Henan: Henan.</li>
<li>Hubei: Hubei.</li>
<li>Jiangxi: Jiangxi.</li>
<li>Hu’nan: Hunan.</li>
<li>Guizhou: Guizhou.</li>
<li>Yunnan: Yunnan.</li>
<li>Chongqing: Chongqing.</li>
<li>Sichuan: Sichuan.</li>
<li>Xizang: Tibet.</li>
<li>Guangdong: Guangdong.</li>
<li>Guangxi: Guangxi.</li>
<li>Hainan: Hainan.</li>
<li>Hong Kong (China), Macao (China), and Taiwan (China): Hong Kong, Macao and Taiwan.</li>
<li>Outside Chinese Mainland: overseas.</li>
<li>Other: Other.</li>
     */
    public $Districts;

    /**
     * @var array User's Operator Information. When Area is Chinese Mainland, the value is the following carrier information. When Area is other values, ignore the Isps parameter.
<li>China Telecom: China Telecom.</li>
<li>China Unicom: China Unicom. </li>
<li>CERNET: China Education Network.</li>
<li>Great Wall Broadband Network: Great Wall Broadband.</li>
<li>China Mobile: China Mobile.</li>
<li>China Mobile Tietong: China Tietong.</li>
<li>ISPs outside Chinese Mainland: overseas carriers.</li>
<li>Other ISPs: Other ISPs.</li>
     */
    public $Isps;

    /**
     * @var integer Time granularity of each data entry. Unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>1440: Day granularity. Return the data at 1-day granularity within the specified query time. If the span between the start time and end time is more than 24 hours, only day granularity data is supported.</li>
When the time span between StartTime and EndTime is more than 24 hours, DataInterval defaults to 1440.
     */
    public $DataInterval;

    /**
     * @param string $Metric Queried metric. Valid values:
<li>Traffic: Total Traffic, in bytes.</li>
<li>Bandwidth: bandwidth, in Bps.</li>
<li>Requests: request count.</li>
<li>QUICRequests: number of QUIC requests.</li>
<li>IpVisit: number of IP visits.</li>
     * @param string $StartTime Start time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether it is the default application or a newly created application.</b>
     * @param array $DomainNames Domain name list. Query data for up to 20 domains at a time. Usage data for all domains is overlaid by default.
     * @param string $Area Service area. Valid values:
<li>Chinese Mainland: Chinese mainland. </li>
<li>Asia Pacific Region 1: Asia Pacific zone 1, including Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand. </li>
<li>Asia Pacific Region 2: Asia Pacific zone 2, including Taiwan, Japan, Malaysia, Indonesia, and South Korea. </li>
<li>Asia Pacific Region 3: Asia Pacific zone 3, including the Philippines, India, Australia, and other countries and regions in Asia Pacific. </li>
<li>Middle East: Middle East. </li>
<li>Europe: Europe.</li>
<li>North America: North America.</li>
<li>South America: South America.</li>
<li>Africa: Africa.</li>
Default value: Chinese mainland.
     * @param array $Districts Region where the user is located. If Area is Chinese Mainland, the value is the following region information. If Area is set to other values, ignore the Districts parameter.
<li>Beijing: Beijing.</li>
<li>Inner Mongolia: Inner Mongolia.</li>
<li>Shanxi: Shanxi.</li>
<li>Hebei: Hebei.</li>
<li>Tianjin: Tianjin.</li>
<li>Ningxia: Ningxia.</li>
<li>Shaanxi: Shaanxi.</li>
<li>Gansu: Gansu.</li>
<li>Qinghai: Qinghai.</li>
<li>Xinjiang: Xinjiang.</li>
<li>Heilongjiang: Heilongjiang.</li>
<li>Jilin: Jilin.</li>
<li>Liaoning: Liaoning.</li>
<li>Fujian: Fujian.</li>
<li>Jiangsu: Jiangsu.</li>
<li>Anhui: Anhui.</li>
<li>Shandong: Shandong.</li>
<li>Shanghai: Shanghai.</li>
<li>Zhejiang: Zhejiang.</li>
<li>Henan: Henan.</li>
<li>Hubei: Hubei.</li>
<li>Jiangxi: Jiangxi.</li>
<li>Hu’nan: Hunan.</li>
<li>Guizhou: Guizhou.</li>
<li>Yunnan: Yunnan.</li>
<li>Chongqing: Chongqing.</li>
<li>Sichuan: Sichuan.</li>
<li>Xizang: Tibet.</li>
<li>Guangdong: Guangdong.</li>
<li>Guangxi: Guangxi.</li>
<li>Hainan: Hainan.</li>
<li>Hong Kong (China), Macao (China), and Taiwan (China): Hong Kong, Macao and Taiwan.</li>
<li>Outside Chinese Mainland: overseas.</li>
<li>Other: Other.</li>
     * @param array $Isps User's Operator Information. When Area is Chinese Mainland, the value is the following carrier information. When Area is other values, ignore the Isps parameter.
<li>China Telecom: China Telecom.</li>
<li>China Unicom: China Unicom. </li>
<li>CERNET: China Education Network.</li>
<li>Great Wall Broadband Network: Great Wall Broadband.</li>
<li>China Mobile: China Mobile.</li>
<li>China Mobile Tietong: China Tietong.</li>
<li>ISPs outside Chinese Mainland: overseas carriers.</li>
<li>Other ISPs: Other ISPs.</li>
     * @param integer $DataInterval Time granularity of each data entry. Unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>1440: Day granularity. Return the data at 1-day granularity within the specified query time. If the span between the start time and end time is more than 24 hours, only day granularity data is supported.</li>
When the time span between StartTime and EndTime is more than 24 hours, DataInterval defaults to 1440.
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Districts",$param) and $param["Districts"] !== null) {
            $this->Districts = $param["Districts"];
        }

        if (array_key_exists("Isps",$param) and $param["Isps"] !== null) {
            $this->Isps = $param["Isps"];
        }

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }
    }
}
