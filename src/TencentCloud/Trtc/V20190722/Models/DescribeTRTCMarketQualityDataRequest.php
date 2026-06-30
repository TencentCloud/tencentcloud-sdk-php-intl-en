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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTRTCMarketQualityData request structure.
 *
 * @method string getSdkAppId() Obtain User SdkAppId (for example: 1400xxxxxx).
 * @method void setSdkAppId(string $SdkAppId) Set User SdkAppId (for example: 1400xxxxxx).
 * @method string getStartTime() Obtain Query start time, and the format is YYYY-MM-DD. (query time range is based on the monitoring dashboard feature version. the basic version supports querying the last 30 days, and the advanced version supports querying the last 60 days).
 * @method void setStartTime(string $StartTime) Set Query start time, and the format is YYYY-MM-DD. (query time range is based on the monitoring dashboard feature version. the basic version supports querying the last 30 days, and the advanced version supports querying the last 60 days).
 * @method string getEndTime() Obtain Query end time in YYYY-MM-DD format.
 * @method void setEndTime(string $EndTime) Set Query end time in YYYY-MM-DD format.
 * @method string getPeriod() Obtain The granularity of returned data supports the following values:.
d: day. at this time, return the data of UTC time at zero point within a specified time range.
h: billed hourly. at this point, return the data of full hour UTC time within a specified time range.
 * @method void setPeriod(string $Period) Set The granularity of returned data supports the following values:.
d: day. at this time, return the data of UTC time at zero point within a specified time range.
h: billed hourly. at this point, return the data of full hour UTC time within a specified time range.
 * @method boolean getIsFloat() Obtain Whether the returned data is a decimal.
 * @method void setIsFloat(boolean $IsFloat) Set Whether the returned data is a decimal.
 */
class DescribeTRTCMarketQualityDataRequest extends AbstractModel
{
    /**
     * @var string User SdkAppId (for example: 1400xxxxxx).
     */
    public $SdkAppId;

    /**
     * @var string Query start time, and the format is YYYY-MM-DD. (query time range is based on the monitoring dashboard feature version. the basic version supports querying the last 30 days, and the advanced version supports querying the last 60 days).
     */
    public $StartTime;

    /**
     * @var string Query end time in YYYY-MM-DD format.
     */
    public $EndTime;

    /**
     * @var string The granularity of returned data supports the following values:.
d: day. at this time, return the data of UTC time at zero point within a specified time range.
h: billed hourly. at this point, return the data of full hour UTC time within a specified time range.
     */
    public $Period;

    /**
     * @var boolean Whether the returned data is a decimal.
     */
    public $IsFloat;

    /**
     * @param string $SdkAppId User SdkAppId (for example: 1400xxxxxx).
     * @param string $StartTime Query start time, and the format is YYYY-MM-DD. (query time range is based on the monitoring dashboard feature version. the basic version supports querying the last 30 days, and the advanced version supports querying the last 60 days).
     * @param string $EndTime Query end time in YYYY-MM-DD format.
     * @param string $Period The granularity of returned data supports the following values:.
d: day. at this time, return the data of UTC time at zero point within a specified time range.
h: billed hourly. at this point, return the data of full hour UTC time within a specified time range.
     * @param boolean $IsFloat Whether the returned data is a decimal.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("IsFloat",$param) and $param["IsFloat"] !== null) {
            $this->IsFloat = $param["IsFloat"];
        }
    }
}
