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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomAccounts response structure.
 *
 * @method array getCustomAccounts() Obtain List of custom accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCustomAccounts(array $CustomAccounts) Set List of custom accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of custom accounts
 * @method void setTotalCount(integer $TotalCount) Set Number of custom accounts
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCustomAccountsResponse extends AbstractModel
{
    /**
     * @var array List of custom accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CustomAccounts;

    /**
     * @var integer Number of custom accounts
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CustomAccounts List of custom accounts
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of custom accounts
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
        if (array_key_exists("CustomAccounts",$param) and $param["CustomAccounts"] !== null) {
            $this->CustomAccounts = [];
            foreach ($param["CustomAccounts"] as $key => $value){
                $obj = new CustomAccount();
                $obj->deserialize($value);
                array_push($this->CustomAccounts, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
