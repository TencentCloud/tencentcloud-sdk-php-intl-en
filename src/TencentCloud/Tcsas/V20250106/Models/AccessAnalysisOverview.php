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
 * Overview of mini game visit analysis data
 *
 * @method AccessAnalysisDetail getBaseData() Obtain Overview of visit analysis data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBaseData(AccessAnalysisDetail $BaseData) Set Overview of visit analysis data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Overview getOverview() Obtain This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOverview(Overview $Overview) Set This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AccessAnalysisDetail getPageData() Obtain This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageData(AccessAnalysisDetail $PageData) Set This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AccessAnalysisDetail getPayment() Obtain This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayment(AccessAnalysisDetail $Payment) Set This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AccessAnalysisOverview extends AbstractModel
{
    /**
     * @var AccessAnalysisDetail Overview of visit analysis data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BaseData;

    /**
     * @var Overview This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Overview;

    /**
     * @var AccessAnalysisDetail This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageData;

    /**
     * @var AccessAnalysisDetail This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Payment;

    /**
     * @param AccessAnalysisDetail $BaseData Overview of visit analysis data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Overview $Overview This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AccessAnalysisDetail $PageData This API does not respond.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AccessAnalysisDetail $Payment This API does not respond.
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
            $this->BaseData = new AccessAnalysisDetail();
            $this->BaseData->deserialize($param["BaseData"]);
        }

        if (array_key_exists("Overview",$param) and $param["Overview"] !== null) {
            $this->Overview = new Overview();
            $this->Overview->deserialize($param["Overview"]);
        }

        if (array_key_exists("PageData",$param) and $param["PageData"] !== null) {
            $this->PageData = new AccessAnalysisDetail();
            $this->PageData->deserialize($param["PageData"]);
        }

        if (array_key_exists("Payment",$param) and $param["Payment"] !== null) {
            $this->Payment = new AccessAnalysisDetail();
            $this->Payment->deserialize($param["Payment"]);
        }
    }
}
