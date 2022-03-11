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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateAddresses response structure.
 *
 * @method array getAddressSet() Obtain List of unique IDs of the EIPs applied for.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddressSet(array $AddressSet) Set List of unique IDs of the EIPs applied for.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Async task ID (TaskId). You can use the `DescribeTaskResult` API to query the task status.
 * @method void setTaskId(string $TaskId) Set Async task ID (TaskId). You can use the `DescribeTaskResult` API to query the task status.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AllocateAddressesResponse extends AbstractModel
{
    /**
     * @var array List of unique IDs of the EIPs applied for.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddressSet;

    /**
     * @var string Async task ID (TaskId). You can use the `DescribeTaskResult` API to query the task status.
     */
    public $TaskId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AddressSet List of unique IDs of the EIPs applied for.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Async task ID (TaskId). You can use the `DescribeTaskResult` API to query the task status.
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
        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = $param["AddressSet"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
