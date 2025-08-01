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
 * DescribeCostSummaryByProduct response structure.
 *
 * @method integer getReady() Obtain Data readiness, 0 for not ready, 1 for ready
 * @method void setReady(integer $Ready) Set Data readiness, 0 for not ready, 1 for ready
 * @method ConsumptionSummaryTotal getTotal() Obtain Consumption details
 * @method void setTotal(ConsumptionSummaryTotal $Total) Set Consumption details
 * @method array getData() Obtain Consumption details summarized by productNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set Consumption details summarized by productNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordNum() Obtain Record count. The system returns null when NeedRecordNum is 0.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordNum(integer $RecordNum) Set Record count. The system returns null when NeedRecordNum is 0.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCostSummaryByProductResponse extends AbstractModel
{
    /**
     * @var integer Data readiness, 0 for not ready, 1 for ready
     */
    public $Ready;

    /**
     * @var ConsumptionSummaryTotal Consumption details
     */
    public $Total;

    /**
     * @var array Consumption details summarized by productNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Record count. The system returns null when NeedRecordNum is 0.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordNum;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Ready Data readiness, 0 for not ready, 1 for ready
     * @param ConsumptionSummaryTotal $Total Consumption details
     * @param array $Data Consumption details summarized by productNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordNum Record count. The system returns null when NeedRecordNum is 0.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = new ConsumptionSummaryTotal();
            $this->Total->deserialize($param["Total"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ConsumptionBusinessSummaryDataItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RecordNum",$param) and $param["RecordNum"] !== null) {
            $this->RecordNum = $param["RecordNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
