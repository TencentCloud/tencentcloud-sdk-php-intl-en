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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByProduct response structure.
 *
 * @method integer getReady() Obtain Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
 * @method void setReady(integer $Ready) Set Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
 * @method BusinessSummaryTotal getSummaryTotal() Obtain Total cost details
Note: This field may return null, indicating that no valid value was found.
 * @method void setSummaryTotal(BusinessSummaryTotal $SummaryTotal) Set Total cost details
Note: This field may return null, indicating that no valid value was found.
 * @method array getSummaryOverview() Obtain Cost distribution of all products
Note: This field may return null, indicating that no valid value was found.
 * @method void setSummaryOverview(array $SummaryOverview) Set Cost distribution of all products
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBillSummaryByProductResponse extends AbstractModel
{
    /**
     * @var integer Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
     */
    public $Ready;

    /**
     * @var BusinessSummaryTotal Total cost details
Note: This field may return null, indicating that no valid value was found.
     */
    public $SummaryTotal;

    /**
     * @var array Cost distribution of all products
Note: This field may return null, indicating that no valid value was found.
     */
    public $SummaryOverview;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Ready Indicates whether the data is ready. `0`: Not ready. `1`: Ready. If `Ready` is `0`, it indicates that the current UIN is initializing billing for the first time. Wait for 5-10 minutes and try again.
     * @param BusinessSummaryTotal $SummaryTotal Total cost details
Note: This field may return null, indicating that no valid value was found.
     * @param array $SummaryOverview Cost distribution of all products
Note: This field may return null, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("SummaryTotal",$param) and $param["SummaryTotal"] !== null) {
            $this->SummaryTotal = new BusinessSummaryTotal();
            $this->SummaryTotal->deserialize($param["SummaryTotal"]);
        }

        if (array_key_exists("SummaryOverview",$param) and $param["SummaryOverview"] !== null) {
            $this->SummaryOverview = [];
            foreach ($param["SummaryOverview"] as $key => $value){
                $obj = new BusinessSummaryOverviewItem();
                $obj->deserialize($value);
                array_push($this->SummaryOverview, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
