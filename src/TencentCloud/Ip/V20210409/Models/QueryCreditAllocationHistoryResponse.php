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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCreditAllocationHistory response structure.
 *
 * @method integer getTotal() Obtain Total number of records
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total number of records
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getHistory() Obtain List of record details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHistory(array $History) Set List of record details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryCreditAllocationHistoryResponse extends AbstractModel
{
    /**
     * @var integer Total number of records
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var array List of record details
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $History;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of records
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $History List of record details
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = [];
            foreach ($param["History"] as $key => $value){
                $obj = new QueryCreditAllocationHistoryData();
                $obj->deserialize($value);
                array_push($this->History, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
