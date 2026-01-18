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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Superapp data overview
 *
 * @method APPOverviewData getBaseData() Obtain No data available
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBaseData(APPOverviewData $BaseData) Set No data available
Note: This field may return null, indicating that no valid values can be obtained.
 * @method APPOverviewData getOverview() Obtain Superapp overview summary data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOverview(APPOverviewData $Overview) Set Superapp overview summary data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method APPOverviewData getPageData() Obtain No data available
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageData(APPOverviewData $PageData) Set No data available
Note: This field may return null, indicating that no valid values can be obtained.
 * @method APPOverviewData getPayment() Obtain No data available
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayment(APPOverviewData $Payment) Set No data available
Note: This field may return null, indicating that no valid values can be obtained.
 */
class APPOverview extends AbstractModel
{
    /**
     * @var APPOverviewData No data available
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BaseData;

    /**
     * @var APPOverviewData Superapp overview summary data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Overview;

    /**
     * @var APPOverviewData No data available
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageData;

    /**
     * @var APPOverviewData No data available
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Payment;

    /**
     * @param APPOverviewData $BaseData No data available
Note: This field may return null, indicating that no valid values can be obtained.
     * @param APPOverviewData $Overview Superapp overview summary data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param APPOverviewData $PageData No data available
Note: This field may return null, indicating that no valid values can be obtained.
     * @param APPOverviewData $Payment No data available
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BaseData",$param) and $param["BaseData"] !== null) {
            $this->BaseData = new APPOverviewData();
            $this->BaseData->deserialize($param["BaseData"]);
        }

        if (array_key_exists("Overview",$param) and $param["Overview"] !== null) {
            $this->Overview = new APPOverviewData();
            $this->Overview->deserialize($param["Overview"]);
        }

        if (array_key_exists("PageData",$param) and $param["PageData"] !== null) {
            $this->PageData = new APPOverviewData();
            $this->PageData->deserialize($param["PageData"]);
        }

        if (array_key_exists("Payment",$param) and $param["Payment"] !== null) {
            $this->Payment = new APPOverviewData();
            $this->Payment->deserialize($param["Payment"]);
        }
    }
}
