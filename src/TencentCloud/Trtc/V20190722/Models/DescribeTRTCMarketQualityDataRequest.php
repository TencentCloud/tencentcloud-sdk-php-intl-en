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
 * @method string getSdkAppId() Obtain User SDKAppId (e.g., 1400xxxxxx)
 * @method void setSdkAppId(string $SdkAppId) Set User SDKAppId (e.g., 1400xxxxxx)
 * @method string getStartTime() Obtain Query start time, format is YYYY-MM-DD. (The query time range depends on the monitoring dashboard function version, the premium edition can query up to 30 days)
 * @method void setStartTime(string $StartTime) Set Query start time, format is YYYY-MM-DD. (The query time range depends on the monitoring dashboard function version, the premium edition can query up to 30 days)
 * @method string getEndTime() Obtain Query end time, format is YYYY-MM-DD.
 * @method void setEndTime(string $EndTime) Set Query end time, format is YYYY-MM-DD.
 * @method string getPeriod() Obtain The granularity of the returned data, which can be set to the following values:
d: by day. This returns data for the entire UTC day of the query time range. 
h: by hour. This returns data for the entire UTC hour of the query time range.
 * @method void setPeriod(string $Period) Set The granularity of the returned data, which can be set to the following values:
d: by day. This returns data for the entire UTC day of the query time range. 
h: by hour. This returns data for the entire UTC hour of the query time range.
 */
class DescribeTRTCMarketQualityDataRequest extends AbstractModel
{
    /**
     * @var string User SDKAppId (e.g., 1400xxxxxx)
     */
    public $SdkAppId;

    /**
     * @var string Query start time, format is YYYY-MM-DD. (The query time range depends on the monitoring dashboard function version, the premium edition can query up to 30 days)
     */
    public $StartTime;

    /**
     * @var string Query end time, format is YYYY-MM-DD.
     */
    public $EndTime;

    /**
     * @var string The granularity of the returned data, which can be set to the following values:
d: by day. This returns data for the entire UTC day of the query time range. 
h: by hour. This returns data for the entire UTC hour of the query time range.
     */
    public $Period;

    /**
     * @param string $SdkAppId User SDKAppId (e.g., 1400xxxxxx)
     * @param string $StartTime Query start time, format is YYYY-MM-DD. (The query time range depends on the monitoring dashboard function version, the premium edition can query up to 30 days)
     * @param string $EndTime Query end time, format is YYYY-MM-DD.
     * @param string $Period The granularity of the returned data, which can be set to the following values:
d: by day. This returns data for the entire UTC day of the query time range. 
h: by hour. This returns data for the entire UTC hour of the query time range.
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
    }
}
