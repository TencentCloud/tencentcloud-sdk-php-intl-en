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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncJobs request structure.
 *
 * @method integer getMaxResults() Obtain Number of entries displayed each time during a batch query. Value range: 1–100. Default value: 20.
 * @method void setMaxResults(integer $MaxResults) Set Number of entries displayed each time during a batch query. Value range: 1–100. Default value: 20.
 * @method string getNextToken() Obtain Whether there is a token for the next query. Value: not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
 * @method void setNextToken(string $NextToken) Set Whether there is a token for the next query. Value: not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
 * @method array getRequestIds() Obtain List of RequestIds returned for async requests
 * @method void setRequestIds(array $RequestIds) Set List of RequestIds returned for async requests
 */
class DescribeAsyncJobsRequest extends AbstractModel
{
    /**
     * @var integer Number of entries displayed each time during a batch query. Value range: 1–100. Default value: 20.
     */
    public $MaxResults;

    /**
     * @var string Whether there is a token for the next query. Value: not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
     */
    public $NextToken;

    /**
     * @var array List of RequestIds returned for async requests
     */
    public $RequestIds;

    /**
     * @param integer $MaxResults Number of entries displayed each time during a batch query. Value range: 1–100. Default value: 20.
     * @param string $NextToken Whether there is a token for the next query. Value: not required for the first query or when there is no next query. If there is a next query, the value is the NextToken returned from the last API call.
     * @param array $RequestIds List of RequestIds returned for async requests
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RequestIds",$param) and $param["RequestIds"] !== null) {
            $this->RequestIds = $param["RequestIds"];
        }
    }
}
