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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProIspPlaySumInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
 * @method string getEndTime() Obtain End time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
 * @method string getStatType() Obtain Statistics type. Valid values: Province (district), Isp (ISP), CountryOrArea (country or region).
 * @method void setStatType(string $StatType) Set Statistics type. Valid values: Province (district), Isp (ISP), CountryOrArea (country or region).
 * @method array getPlayDomains() Obtain Playback domain name list. If it is left empty, it refers to all playback domain names.
 * @method void setPlayDomains(array $PlayDomains) Set Playback domain name list. If it is left empty, it refers to all playback domain names.
 * @method integer getPageNum() Obtain Page number. Value range: [1,1000]. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number. Value range: [1,1000]. Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page. Value range: [1,1000]. Default value: 20.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: [1,1000]. Default value: 20.
 * @method string getMainlandOrOversea() Obtain Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
 * @method string getOutLanguage() Obtain Language used in the output field. Valid values: Chinese (default), English. Currently, country/region, district, and ISP parameters support multiple languages.
 * @method void setOutLanguage(string $OutLanguage) Set Language used in the output field. Valid values: Chinese (default), English. Currently, country/region, district, and ISP parameters support multiple languages.
 */
class DescribeProIspPlaySumInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     */
    public $EndTime;

    /**
     * @var string Statistics type. Valid values: Province (district), Isp (ISP), CountryOrArea (country or region).
     */
    public $StatType;

    /**
     * @var array Playback domain name list. If it is left empty, it refers to all playback domain names.
     */
    public $PlayDomains;

    /**
     * @var integer Page number. Value range: [1,1000]. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page. Value range: [1,1000]. Default value: 20.
     */
    public $PageSize;

    /**
     * @var string Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
     */
    public $MainlandOrOversea;

    /**
     * @var string Language used in the output field. Valid values: Chinese (default), English. Currently, country/region, district, and ISP parameters support multiple languages.
     */
    public $OutLanguage;

    /**
     * @param string $StartTime Start time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
     * @param string $EndTime End time (Beijing time).
In the format of `yyyy-mm-dd HH:MM:SS`.
Note: `EndTime` and `StartTime` only support querying data for the last day.
     * @param string $StatType Statistics type. Valid values: Province (district), Isp (ISP), CountryOrArea (country or region).
     * @param array $PlayDomains Playback domain name list. If it is left empty, it refers to all playback domain names.
     * @param integer $PageNum Page number. Value range: [1,1000]. Default value: 1.
     * @param integer $PageSize Number of entries per page. Value range: [1,1000]. Default value: 20.
     * @param string $MainlandOrOversea Region. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China), China (data for China, including Hong Kong, Macao, and Taiwan), Foreign (data for regions outside China, excluding Hong Kong, Macao, and Taiwan), Global (default). If this parameter is left empty, data for all regions will be queried.
     * @param string $OutLanguage Language used in the output field. Valid values: Chinese (default), English. Currently, country/region, district, and ISP parameters support multiple languages.
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

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("OutLanguage",$param) and $param["OutLanguage"] !== null) {
            $this->OutLanguage = $param["OutLanguage"];
        }
    }
}
