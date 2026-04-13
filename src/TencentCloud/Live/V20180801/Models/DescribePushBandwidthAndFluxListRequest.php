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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePushBandwidthAndFluxList request structure.
 *
 * @method string getStartTime() Obtain Query start time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
 * @method void setStartTime(string $StartTime) Set Query start time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
 * @method string getEndTime() Obtain Query end time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
 * @method void setEndTime(string $EndTime) Set Query end time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
 * @method array getPushDomains() Obtain Domain name, you can fill in multiple. If left blank, it represents the overall data.
 * @method void setPushDomains(array $PushDomains) Set Domain name, you can fill in multiple. If left blank, it represents the overall data.
 * @method string getMainlandOrOversea() Obtain Optional values: Mainland: Query data for Mainland China (domestic). Oversea: Query data for international/regions such as Hong Kong, Macao, Taiwan (overseas). If left blank, it defaults to querying global data (domestic + overseas).
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Optional values: Mainland: Query data for Mainland China (domestic). Oversea: Query data for international/regions such as Hong Kong, Macao, Taiwan (overseas). If left blank, it defaults to querying global data (domestic + overseas).
 * @method integer getGranularity() Obtain Data granularity, supports the following granularities: 5: 5-minute granularity (span cannot exceed 1 day), 60: 1-hour granularity (span cannot exceed 1 month), 1440: daily granularity (span cannot exceed 1 month). Default value: 5.
 * @method void setGranularity(integer $Granularity) Set Data granularity, supports the following granularities: 5: 5-minute granularity (span cannot exceed 1 day), 60: 1-hour granularity (span cannot exceed 1 month), 1440: daily granularity (span cannot exceed 1 month). Default value: 5.
 * @method array getRegionNames() Obtain Region, mapping table as follows: China Mainland: Mainland China, Asia Pacific I: Asia Pacific Region 1, Asia Pacific II: Asia Pacific Region 2, Asia Pacific III: Asia Pacific Region 3, Europe: Europe, North America: North America, South America: South America, Middle East: Middle East, Africa: Africa.
 * @method void setRegionNames(array $RegionNames) Set Region, mapping table as follows: China Mainland: Mainland China, Asia Pacific I: Asia Pacific Region 1, Asia Pacific II: Asia Pacific Region 2, Asia Pacific III: Asia Pacific Region 3, Europe: Europe, North America: North America, South America: South America, Middle East: Middle East, Africa: Africa.
 * @method array getCountryNames() Obtain Country, the mapping table is referenced as follows in the document: https://cloud.tencent.com/document/product/267/34019.
 * @method void setCountryNames(array $CountryNames) Set Country, the mapping table is referenced as follows in the document: https://cloud.tencent.com/document/product/267/34019.
 */
class DescribePushBandwidthAndFluxListRequest extends AbstractModel
{
    /**
     * @var string Query start time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
     */
    public $StartTime;

    /**
     * @var string Query end time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
     */
    public $EndTime;

    /**
     * @var array Domain name, you can fill in multiple. If left blank, it represents the overall data.
     */
    public $PushDomains;

    /**
     * @var string Optional values: Mainland: Query data for Mainland China (domestic). Oversea: Query data for international/regions such as Hong Kong, Macao, Taiwan (overseas). If left blank, it defaults to querying global data (domestic + overseas).
     */
    public $MainlandOrOversea;

    /**
     * @var integer Data granularity, supports the following granularities: 5: 5-minute granularity (span cannot exceed 1 day), 60: 1-hour granularity (span cannot exceed 1 month), 1440: daily granularity (span cannot exceed 1 month). Default value: 5.
     */
    public $Granularity;

    /**
     * @var array Region, mapping table as follows: China Mainland: Mainland China, Asia Pacific I: Asia Pacific Region 1, Asia Pacific II: Asia Pacific Region 2, Asia Pacific III: Asia Pacific Region 3, Europe: Europe, North America: North America, South America: South America, Middle East: Middle East, Africa: Africa.
     */
    public $RegionNames;

    /**
     * @var array Country, the mapping table is referenced as follows in the document: https://cloud.tencent.com/document/product/267/34019.
     */
    public $CountryNames;

    /**
     * @param string $StartTime Query start time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
     * @param string $EndTime Query end time point, accurate to minute granularity. The interface query supports two time formats:

YYYY-MM-DDThh:mm:ssZ: UTC time format, refer to ISO date format descriptionfor details.

YYYY-MM-DD hh:mm:ss: When using this format, it represents Beijing time by default.

Queries for the most recent two months are supported. The span between query start and end time cannot exceed 31 days.
     * @param array $PushDomains Domain name, you can fill in multiple. If left blank, it represents the overall data.
     * @param string $MainlandOrOversea Optional values: Mainland: Query data for Mainland China (domestic). Oversea: Query data for international/regions such as Hong Kong, Macao, Taiwan (overseas). If left blank, it defaults to querying global data (domestic + overseas).
     * @param integer $Granularity Data granularity, supports the following granularities: 5: 5-minute granularity (span cannot exceed 1 day), 60: 1-hour granularity (span cannot exceed 1 month), 1440: daily granularity (span cannot exceed 1 month). Default value: 5.
     * @param array $RegionNames Region, mapping table as follows: China Mainland: Mainland China, Asia Pacific I: Asia Pacific Region 1, Asia Pacific II: Asia Pacific Region 2, Asia Pacific III: Asia Pacific Region 3, Europe: Europe, North America: North America, South America: South America, Middle East: Middle East, Africa: Africa.
     * @param array $CountryNames Country, the mapping table is referenced as follows in the document: https://cloud.tencent.com/document/product/267/34019.
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

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("RegionNames",$param) and $param["RegionNames"] !== null) {
            $this->RegionNames = $param["RegionNames"];
        }

        if (array_key_exists("CountryNames",$param) and $param["CountryNames"] !== null) {
            $this->CountryNames = $param["CountryNames"];
        }
    }
}
