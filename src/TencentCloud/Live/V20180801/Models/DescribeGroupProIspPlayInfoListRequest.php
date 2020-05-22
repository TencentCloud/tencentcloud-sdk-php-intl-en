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
 * DescribeGroupProIspPlayInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method void setStartTime(string $StartTime) Set Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
 * @method string getEndTime() Obtain End time point in the format of `yyyy-mm-dd HH:MM:SS`
The time span is (0,3 hours]. Data for the last month can be queried.
 * @method void setEndTime(string $EndTime) Set End time point in the format of `yyyy-mm-dd HH:MM:SS`
The time span is (0,3 hours]. Data for the last month can be queried.
 * @method array getPlayDomains() Obtain Playback domain name. If this parameter is left empty, full data will be queried.
 * @method void setPlayDomains(array $PlayDomains) Set Playback domain name. If this parameter is left empty, full data will be queried.
 * @method array getProvinceNames() Obtain District list. If this parameter is left empty, data for all districts will be returned.
 * @method void setProvinceNames(array $ProvinceNames) Set District list. If this parameter is left empty, data for all districts will be returned.
 * @method array getIspNames() Obtain ISP list. If this parameter is left empty, data of all ISPs will be returned.
 * @method void setIspNames(array $IspNames) Set ISP list. If this parameter is left empty, data of all ISPs will be returned.
 * @method string getMainlandOrOversea() Obtain Within or outside Mainland China. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set Within or outside Mainland China. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
 */
class DescribeGroupProIspPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
     */
    public $StartTime;

    /**
     * @var string End time point in the format of `yyyy-mm-dd HH:MM:SS`
The time span is (0,3 hours]. Data for the last month can be queried.
     */
    public $EndTime;

    /**
     * @var array Playback domain name. If this parameter is left empty, full data will be queried.
     */
    public $PlayDomains;

    /**
     * @var array District list. If this parameter is left empty, data for all districts will be returned.
     */
    public $ProvinceNames;

    /**
     * @var array ISP list. If this parameter is left empty, data of all ISPs will be returned.
     */
    public $IspNames;

    /**
     * @var string Within or outside Mainland China. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime Start time point in the format of `yyyy-mm-dd HH:MM:SS`.
     * @param string $EndTime End time point in the format of `yyyy-mm-dd HH:MM:SS`
The time span is (0,3 hours]. Data for the last month can be queried.
     * @param array $PlayDomains Playback domain name. If this parameter is left empty, full data will be queried.
     * @param array $ProvinceNames District list. If this parameter is left empty, data for all districts will be returned.
     * @param array $IspNames ISP list. If this parameter is left empty, data of all ISPs will be returned.
     * @param string $MainlandOrOversea Within or outside Mainland China. Valid values: Mainland (data for Mainland China), Oversea (data for regions outside Mainland China). If this parameter is left empty, data for all regions will be queried.
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

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("ProvinceNames",$param) and $param["ProvinceNames"] !== null) {
            $this->ProvinceNames = $param["ProvinceNames"];
        }

        if (array_key_exists("IspNames",$param) and $param["IspNames"] !== null) {
            $this->IspNames = $param["IspNames"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
