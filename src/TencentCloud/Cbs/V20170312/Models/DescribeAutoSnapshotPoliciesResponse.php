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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoSnapshotPolicies response structure.
 *
 * @method integer getTotalCount() Obtain The quantity of valid scheduled snapshot policies.
 * @method void setTotalCount(integer $TotalCount) Set The quantity of valid scheduled snapshot policies.
 * @method array getAutoSnapshotPolicySet() Obtain List of scheduled snapshot policies.
 * @method void setAutoSnapshotPolicySet(array $AutoSnapshotPolicySet) Set List of scheduled snapshot policies.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAutoSnapshotPoliciesResponse extends AbstractModel
{
    /**
     * @var integer The quantity of valid scheduled snapshot policies.
     */
    public $TotalCount;

    /**
     * @var array List of scheduled snapshot policies.
     */
    public $AutoSnapshotPolicySet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The quantity of valid scheduled snapshot policies.
     * @param array $AutoSnapshotPolicySet List of scheduled snapshot policies.
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

        if (array_key_exists("AutoSnapshotPolicySet",$param) and $param["AutoSnapshotPolicySet"] !== null) {
            $this->AutoSnapshotPolicySet = [];
            foreach ($param["AutoSnapshotPolicySet"] as $key => $value){
                $obj = new AutoSnapshotPolicy();
                $obj->deserialize($value);
                array_push($this->AutoSnapshotPolicySet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
