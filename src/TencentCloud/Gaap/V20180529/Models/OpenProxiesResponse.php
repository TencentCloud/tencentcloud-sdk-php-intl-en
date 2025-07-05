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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenProxies response structure.
 *
 * @method array getInvalidStatusInstanceSet() Obtain The connection instance ID list cannot be enabled if it's not disabled.
 * @method void setInvalidStatusInstanceSet(array $InvalidStatusInstanceSet) Set The connection instance ID list cannot be enabled if it's not disabled.
 * @method array getOperationFailedInstanceSet() Obtain ID list of connection instances failed to be enabled.
 * @method void setOperationFailedInstanceSet(array $OperationFailedInstanceSet) Set ID list of connection instances failed to be enabled.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class OpenProxiesResponse extends AbstractModel
{
    /**
     * @var array The connection instance ID list cannot be enabled if it's not disabled.
     */
    public $InvalidStatusInstanceSet;

    /**
     * @var array ID list of connection instances failed to be enabled.
     */
    public $OperationFailedInstanceSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InvalidStatusInstanceSet The connection instance ID list cannot be enabled if it's not disabled.
     * @param array $OperationFailedInstanceSet ID list of connection instances failed to be enabled.
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
        if (array_key_exists("InvalidStatusInstanceSet",$param) and $param["InvalidStatusInstanceSet"] !== null) {
            $this->InvalidStatusInstanceSet = $param["InvalidStatusInstanceSet"];
        }

        if (array_key_exists("OperationFailedInstanceSet",$param) and $param["OperationFailedInstanceSet"] !== null) {
            $this->OperationFailedInstanceSet = $param["OperationFailedInstanceSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
