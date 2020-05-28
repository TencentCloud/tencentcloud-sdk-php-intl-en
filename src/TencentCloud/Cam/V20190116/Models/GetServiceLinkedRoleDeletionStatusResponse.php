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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceLinkedRoleDeletionStatus response structure.
 *
 * @method string getStatus() Obtain Status: NOT_STARTED, IN_PROGRESS, SUCCEEDED, FAILED
 * @method void setStatus(string $Status) Set Status: NOT_STARTED, IN_PROGRESS, SUCCEEDED, FAILED
 * @method string getReason() Obtain Reasons why the deletion failed.
 * @method void setReason(string $Reason) Set Reasons why the deletion failed.
 * @method string getServiceType() Obtain Service type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceType(string $ServiceType) Set Service type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Service name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Service name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetServiceLinkedRoleDeletionStatusResponse extends AbstractModel
{
    /**
     * @var string Status: NOT_STARTED, IN_PROGRESS, SUCCEEDED, FAILED
     */
    public $Status;

    /**
     * @var string Reasons why the deletion failed.
     */
    public $Reason;

    /**
     * @var string Service type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceType;

    /**
     * @var string Service name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Status Status: NOT_STARTED, IN_PROGRESS, SUCCEEDED, FAILED
     * @param string $Reason Reasons why the deletion failed.
     * @param string $ServiceType Service type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Service name
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
