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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRotationHistory response structure.
 *
 * @method array getVersionIDs() Obtain List of version numbers.
 * @method void setVersionIDs(array $VersionIDs) Set List of version numbers.
 * @method integer getTotalCount() Obtain Number of version numbers. The maximum number of version numbers that can be shown to users is 10.
 * @method void setTotalCount(integer $TotalCount) Set Number of version numbers. The maximum number of version numbers that can be shown to users is 10.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRotationHistoryResponse extends AbstractModel
{
    /**
     * @var array List of version numbers.
     */
    public $VersionIDs;

    /**
     * @var integer Number of version numbers. The maximum number of version numbers that can be shown to users is 10.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $VersionIDs List of version numbers.
     * @param integer $TotalCount Number of version numbers. The maximum number of version numbers that can be shown to users is 10.
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
        if (array_key_exists("VersionIDs",$param) and $param["VersionIDs"] !== null) {
            $this->VersionIDs = $param["VersionIDs"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
