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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFailedInstanceIds() Obtain IDs of failed nodes
 * @method void setFailedInstanceIds(array $FailedInstanceIds) Set IDs of failed nodes
 * @method array getSuccInstanceIds() Obtain IDs of successful nodes
 * @method void setSuccInstanceIds(array $SuccInstanceIds) Set IDs of successful nodes
 * @method array getTimeoutInstanceIds() Obtain IDs of (successful or failed) nodes that timed out
 * @method void setTimeoutInstanceIds(array $TimeoutInstanceIds) Set IDs of (successful or failed) nodes that timed out
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *AddExistedInstances response structure.
 */
class AddExistedInstancesResponse extends AbstractModel
{
    /**
     * @var array IDs of failed nodes
     */
    public $FailedInstanceIds;

    /**
     * @var array IDs of successful nodes
     */
    public $SuccInstanceIds;

    /**
     * @var array IDs of (successful or failed) nodes that timed out
     */
    public $TimeoutInstanceIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $FailedInstanceIds IDs of failed nodes
     * @param array $SuccInstanceIds IDs of successful nodes
     * @param array $TimeoutInstanceIds IDs of (successful or failed) nodes that timed out
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
        if (array_key_exists("FailedInstanceIds",$param) and $param["FailedInstanceIds"] !== null) {
            $this->FailedInstanceIds = $param["FailedInstanceIds"];
        }

        if (array_key_exists("SuccInstanceIds",$param) and $param["SuccInstanceIds"] !== null) {
            $this->SuccInstanceIds = $param["SuccInstanceIds"];
        }

        if (array_key_exists("TimeoutInstanceIds",$param) and $param["TimeoutInstanceIds"] !== null) {
            $this->TimeoutInstanceIds = $param["TimeoutInstanceIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
