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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlBatchOperationLogs response structure.
 *
 * @method integer getTotalCount() Obtain The total count.
 * @method void setTotalCount(integer $TotalCount) Set The total count.
 * @method array getDomainBatchLogSet() Obtain The log list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainBatchLogSet(array $DomainBatchLogSet) Set The log list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeIntlBatchOperationLogsResponse extends AbstractModel
{
    /**
     * @var integer The total count.
     */
    public $TotalCount;

    /**
     * @var array The log list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainBatchLogSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total count.
     * @param array $DomainBatchLogSet The log list.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DomainBatchLogSet",$param) and $param["DomainBatchLogSet"] !== null) {
            $this->DomainBatchLogSet = [];
            foreach ($param["DomainBatchLogSet"] as $key => $value){
                $obj = new BatchDomainBuyLog();
                $obj->deserialize($value);
                array_push($this->DomainBatchLogSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
