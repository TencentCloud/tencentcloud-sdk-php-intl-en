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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeData response structure.
 *
 * @method ReportOverviewData getOverviewData() Obtain Matchmaking statistics overview
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOverviewData(ReportOverviewData $OverviewData) Set Matchmaking statistics overview
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method ReportTrendData getTrendData() Obtain Trend data of the number of matchmaking requests
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTrendData(ReportTrendData $TrendData) Set Trend data of the number of matchmaking requests
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDataResponse extends AbstractModel
{
    /**
     * @var ReportOverviewData Matchmaking statistics overview
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $OverviewData;

    /**
     * @var ReportTrendData Trend data of the number of matchmaking requests
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $TrendData;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ReportOverviewData $OverviewData Matchmaking statistics overview
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param ReportTrendData $TrendData Trend data of the number of matchmaking requests
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("OverviewData",$param) and $param["OverviewData"] !== null) {
            $this->OverviewData = new ReportOverviewData();
            $this->OverviewData->deserialize($param["OverviewData"]);
        }

        if (array_key_exists("TrendData",$param) and $param["TrendData"] !== null) {
            $this->TrendData = new ReportTrendData();
            $this->TrendData->deserialize($param["TrendData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
