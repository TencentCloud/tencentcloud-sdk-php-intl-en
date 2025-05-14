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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNStatDetails request structure.
 *
 * @method string getMetric() Obtain Query indicators, the values u200bu200bare:
<li>Traffic: traffic, unit is Byte. </li>
<li>Bandwidth: Bandwidth, unit is Bps. </li>
<li>Requests: Number of requests. </li>
<li>QUICRequests: Number of QUIC requests. </li>
<li>IpVisit: Number of IP visits. </li>
 * @method void setMetric(string $Metric) Set Query indicators, the values u200bu200bare:
<li>Traffic: traffic, unit is Byte. </li>
<li>Bandwidth: Bandwidth, unit is Bps. </li>
<li>Requests: Number of requests. </li>
<li>QUICRequests: Number of QUIC requests. </li>
<li>IpVisit: Number of IP visits. </li>
 * @method string getStartTime() Obtain Start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setStartTime(string $StartTime) Set Start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method string getEndTime() Obtain End time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setEndTime(string $EndTime) Set End time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getDomainNames() Obtain List of domain names. The usage data of up to 20 domain names can be queried at a time. The usage data of all domain names is returned by default.
 * @method void setDomainNames(array $DomainNames) Set List of domain names. The usage data of up to 20 domain names can be queried at a time. The usage data of all domain names is returned by default.
 * @method string getArea() Obtain Service region. Valid values:
<li>Chinese Mainland</li>
<li>Asia Pacific Region 1: Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand</li>
<li>Asia Pacific Region 2: Taiwan (China), Japan, Malaysia, Indonesia, and South Korea</li>
<li>Asia Pacific Region 3: Philippines, India, Australia, and other Asia Pacific countries and regions</li>
<li>Middle East</li>
<li>Europe</li>
<li>North America</li>
<li>South America</li>
<li>Africa</li>
Default value: Chinese Mainland
 * @method void setArea(string $Area) Set Service region. Valid values:
<li>Chinese Mainland</li>
<li>Asia Pacific Region 1: Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand</li>
<li>Asia Pacific Region 2: Taiwan (China), Japan, Malaysia, Indonesia, and South Korea</li>
<li>Asia Pacific Region 3: Philippines, India, Australia, and other Asia Pacific countries and regions</li>
<li>Middle East</li>
<li>Europe</li>
<li>North America</li>
<li>South America</li>
<li>Africa</li>
Default value: Chinese Mainland
 * @method array getDistricts() Obtain District where users are located. When `Area` is `Chinese Mainland`, valid values for `Districts` are as follows. Otherwise, `Districts` can be ignored.
<li>Beijing</li>
<li>Inner Mongolia</li>
<li>Shanxi</li>
<li>Hebei</li>
<li>Tianjin</li>
<li>Ningxia</li>
<li>Shaanxi</li>
<li>Gansu</li>
<li>Qinghai</li>
<li>Xinjiang</li>
<li>Heilongjiang</li>
<li>Jilin</li>
<li>Liaoning</li>
<li>Fujian</li>
<li>Jiangsu</li>
<li>Anhui</li>
<li>Shandong</li>
<li>Shanghai</li>
<li>Zhejiang</li>
<li>Henan</li>
<li>Hubei</li>
<li>Jiangxi</li>
<li>Hunan</li>
<li>Guizhou</li>
<li>Yunnan</li>
<li>Chongqing</li>
<li>Sichuan</li>
<li>Xizang</li>
<li>Guangdong</li>
<li>Guangxi</li>
<li>Hainan</li>
<li>Hong Kong, Macao and Taiwan</li>
<li>Outside Chinese Mainland</li>
<li>Other</li>
 * @method void setDistricts(array $Districts) Set District where users are located. When `Area` is `Chinese Mainland`, valid values for `Districts` are as follows. Otherwise, `Districts` can be ignored.
<li>Beijing</li>
<li>Inner Mongolia</li>
<li>Shanxi</li>
<li>Hebei</li>
<li>Tianjin</li>
<li>Ningxia</li>
<li>Shaanxi</li>
<li>Gansu</li>
<li>Qinghai</li>
<li>Xinjiang</li>
<li>Heilongjiang</li>
<li>Jilin</li>
<li>Liaoning</li>
<li>Fujian</li>
<li>Jiangsu</li>
<li>Anhui</li>
<li>Shandong</li>
<li>Shanghai</li>
<li>Zhejiang</li>
<li>Henan</li>
<li>Hubei</li>
<li>Jiangxi</li>
<li>Hunan</li>
<li>Guizhou</li>
<li>Yunnan</li>
<li>Chongqing</li>
<li>Sichuan</li>
<li>Xizang</li>
<li>Guangdong</li>
<li>Guangxi</li>
<li>Hainan</li>
<li>Hong Kong, Macao and Taiwan</li>
<li>Outside Chinese Mainland</li>
<li>Other</li>
 * @method array getIsps() Obtain ISP of users. When `Area` is `Chinese Mainland`, valid values for `Isps` are as follows. Otherwise, `Isps` can be ignored.
<li>China Telecom</li>
<li>China Unicom</li>
<li>CERNET</li>
<li>Great Wall Broadband Network</li>
<li>China Mobile</li>
<li>China Mobile Tietong</li>
<li>ISPs outside Chinese Mainland</li>
<li>Other ISPs</li>
 * @method void setIsps(array $Isps) Set ISP of users. When `Area` is `Chinese Mainland`, valid values for `Isps` are as follows. Otherwise, `Isps` can be ignored.
<li>China Telecom</li>
<li>China Unicom</li>
<li>CERNET</li>
<li>Great Wall Broadband Network</li>
<li>China Mobile</li>
<li>China Mobile Tietong</li>
<li>ISPs outside Chinese Mainland</li>
<li>Other ISPs</li>
 * @method integer getDataInterval() Obtain Time granularity of every piece of data in minutes. Valid values:
<li>5: 5-minute granularity. The data at 5-minute granularity in the query period will be returned.</li>
<li>1440: 1-day granularity. The data at 1-day granularity in the query period will be returned. If the query period is larger than 24 hours, only data at 1-day granularity can be queried.</li>
If the difference between `StartTime` and `EndTime` is larger than 24 hours, the default value of `DataInterval` is 1440.
 * @method void setDataInterval(integer $DataInterval) Set Time granularity of every piece of data in minutes. Valid values:
<li>5: 5-minute granularity. The data at 5-minute granularity in the query period will be returned.</li>
<li>1440: 1-day granularity. The data at 1-day granularity in the query period will be returned. If the query period is larger than 24 hours, only data at 1-day granularity can be queried.</li>
If the difference between `StartTime` and `EndTime` is larger than 24 hours, the default value of `DataInterval` is 1440.
 */
class DescribeCDNStatDetailsRequest extends AbstractModel
{
    /**
     * @var string Query indicators, the values u200bu200bare:
<li>Traffic: traffic, unit is Byte. </li>
<li>Bandwidth: Bandwidth, unit is Bps. </li>
<li>Requests: Number of requests. </li>
<li>QUICRequests: Number of QUIC requests. </li>
<li>IpVisit: Number of IP visits. </li>
     */
    public $Metric;

    /**
     * @var string Start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $StartTime;

    /**
     * @var string End time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $EndTime;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array List of domain names. The usage data of up to 20 domain names can be queried at a time. The usage data of all domain names is returned by default.
     */
    public $DomainNames;

    /**
     * @var string Service region. Valid values:
<li>Chinese Mainland</li>
<li>Asia Pacific Region 1: Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand</li>
<li>Asia Pacific Region 2: Taiwan (China), Japan, Malaysia, Indonesia, and South Korea</li>
<li>Asia Pacific Region 3: Philippines, India, Australia, and other Asia Pacific countries and regions</li>
<li>Middle East</li>
<li>Europe</li>
<li>North America</li>
<li>South America</li>
<li>Africa</li>
Default value: Chinese Mainland
     */
    public $Area;

    /**
     * @var array District where users are located. When `Area` is `Chinese Mainland`, valid values for `Districts` are as follows. Otherwise, `Districts` can be ignored.
<li>Beijing</li>
<li>Inner Mongolia</li>
<li>Shanxi</li>
<li>Hebei</li>
<li>Tianjin</li>
<li>Ningxia</li>
<li>Shaanxi</li>
<li>Gansu</li>
<li>Qinghai</li>
<li>Xinjiang</li>
<li>Heilongjiang</li>
<li>Jilin</li>
<li>Liaoning</li>
<li>Fujian</li>
<li>Jiangsu</li>
<li>Anhui</li>
<li>Shandong</li>
<li>Shanghai</li>
<li>Zhejiang</li>
<li>Henan</li>
<li>Hubei</li>
<li>Jiangxi</li>
<li>Hunan</li>
<li>Guizhou</li>
<li>Yunnan</li>
<li>Chongqing</li>
<li>Sichuan</li>
<li>Xizang</li>
<li>Guangdong</li>
<li>Guangxi</li>
<li>Hainan</li>
<li>Hong Kong, Macao and Taiwan</li>
<li>Outside Chinese Mainland</li>
<li>Other</li>
     */
    public $Districts;

    /**
     * @var array ISP of users. When `Area` is `Chinese Mainland`, valid values for `Isps` are as follows. Otherwise, `Isps` can be ignored.
<li>China Telecom</li>
<li>China Unicom</li>
<li>CERNET</li>
<li>Great Wall Broadband Network</li>
<li>China Mobile</li>
<li>China Mobile Tietong</li>
<li>ISPs outside Chinese Mainland</li>
<li>Other ISPs</li>
     */
    public $Isps;

    /**
     * @var integer Time granularity of every piece of data in minutes. Valid values:
<li>5: 5-minute granularity. The data at 5-minute granularity in the query period will be returned.</li>
<li>1440: 1-day granularity. The data at 1-day granularity in the query period will be returned. If the query period is larger than 24 hours, only data at 1-day granularity can be queried.</li>
If the difference between `StartTime` and `EndTime` is larger than 24 hours, the default value of `DataInterval` is 1440.
     */
    public $DataInterval;

    /**
     * @param string $Metric Query indicators, the values u200bu200bare:
<li>Traffic: traffic, unit is Byte. </li>
<li>Bandwidth: Bandwidth, unit is Bps. </li>
<li>Requests: Number of requests. </li>
<li>QUICRequests: Number of QUIC requests. </li>
<li>IpVisit: Number of IP visits. </li>
     * @param string $StartTime Start time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param string $EndTime End time in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $DomainNames List of domain names. The usage data of up to 20 domain names can be queried at a time. The usage data of all domain names is returned by default.
     * @param string $Area Service region. Valid values:
<li>Chinese Mainland</li>
<li>Asia Pacific Region 1: Hong Kong (China), Macao (China), Singapore, Vietnam, and Thailand</li>
<li>Asia Pacific Region 2: Taiwan (China), Japan, Malaysia, Indonesia, and South Korea</li>
<li>Asia Pacific Region 3: Philippines, India, Australia, and other Asia Pacific countries and regions</li>
<li>Middle East</li>
<li>Europe</li>
<li>North America</li>
<li>South America</li>
<li>Africa</li>
Default value: Chinese Mainland
     * @param array $Districts District where users are located. When `Area` is `Chinese Mainland`, valid values for `Districts` are as follows. Otherwise, `Districts` can be ignored.
<li>Beijing</li>
<li>Inner Mongolia</li>
<li>Shanxi</li>
<li>Hebei</li>
<li>Tianjin</li>
<li>Ningxia</li>
<li>Shaanxi</li>
<li>Gansu</li>
<li>Qinghai</li>
<li>Xinjiang</li>
<li>Heilongjiang</li>
<li>Jilin</li>
<li>Liaoning</li>
<li>Fujian</li>
<li>Jiangsu</li>
<li>Anhui</li>
<li>Shandong</li>
<li>Shanghai</li>
<li>Zhejiang</li>
<li>Henan</li>
<li>Hubei</li>
<li>Jiangxi</li>
<li>Hunan</li>
<li>Guizhou</li>
<li>Yunnan</li>
<li>Chongqing</li>
<li>Sichuan</li>
<li>Xizang</li>
<li>Guangdong</li>
<li>Guangxi</li>
<li>Hainan</li>
<li>Hong Kong, Macao and Taiwan</li>
<li>Outside Chinese Mainland</li>
<li>Other</li>
     * @param array $Isps ISP of users. When `Area` is `Chinese Mainland`, valid values for `Isps` are as follows. Otherwise, `Isps` can be ignored.
<li>China Telecom</li>
<li>China Unicom</li>
<li>CERNET</li>
<li>Great Wall Broadband Network</li>
<li>China Mobile</li>
<li>China Mobile Tietong</li>
<li>ISPs outside Chinese Mainland</li>
<li>Other ISPs</li>
     * @param integer $DataInterval Time granularity of every piece of data in minutes. Valid values:
<li>5: 5-minute granularity. The data at 5-minute granularity in the query period will be returned.</li>
<li>1440: 1-day granularity. The data at 1-day granularity in the query period will be returned. If the query period is larger than 24 hours, only data at 1-day granularity can be queried.</li>
If the difference between `StartTime` and `EndTime` is larger than 24 hours, the default value of `DataInterval` is 1440.
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
