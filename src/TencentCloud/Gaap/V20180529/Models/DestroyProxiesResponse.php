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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyProxies response structure.
 *
 * @method array getInvalidStatusInstanceSet() Obtain ID list of connection instances that cannot be terminated.
 * @method void setInvalidStatusInstanceSet(array $InvalidStatusInstanceSet) Set ID list of connection instances that cannot be terminated.
 * @method array getOperationFailedInstanceSet() Obtain ID list of connection instances that failed to be terminated.
 * @method void setOperationFailedInstanceSet(array $OperationFailedInstanceSet) Set ID list of connection instances that failed to be terminated.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DestroyProxiesResponse extends AbstractModel
{
    /**
     * @var array ID list of connection instances that cannot be terminated.
     */
    public $InvalidStatusInstanceSet;

    /**
     * @var array ID list of connection instances that failed to be terminated.
     */
    public $OperationFailedInstanceSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $InvalidStatusInstanceSet ID list of connection instances that cannot be terminated.
     * @param array $OperationFailedInstanceSet ID list of connection instances that failed to be terminated.
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
