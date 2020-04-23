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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBResourceUsageDetails response structure.
 *
 * @method ResourceUsageMonitorSet getMaster() Obtain Master node resource usage monitoring node
 * @method void setMaster(ResourceUsageMonitorSet $Master) Set Master node resource usage monitoring node
 * @method ResourceUsageMonitorSet getSlave1() Obtain Slave 1 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSlave1(ResourceUsageMonitorSet $Slave1) Set Slave 1 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ResourceUsageMonitorSet getSlave2() Obtain Slave 2 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSlave2(ResourceUsageMonitorSet $Slave2) Set Slave 2 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBResourceUsageDetailsResponse extends AbstractModel
{
    /**
     * @var ResourceUsageMonitorSet Master node resource usage monitoring node
     */
    public $Master;

    /**
     * @var ResourceUsageMonitorSet Slave 1 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Slave1;

    /**
     * @var ResourceUsageMonitorSet Slave 2 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Slave2;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ResourceUsageMonitorSet $Master Master node resource usage monitoring node
     * @param ResourceUsageMonitorSet $Slave1 Slave 1 resource usage monitoring node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ResourceUsageMonitorSet $Slave2 Slave 2 resource usage monitoring node
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
        if (array_key_exists("Master",$param) and $param["Master"] !== null) {
            $this->Master = new ResourceUsageMonitorSet();
            $this->Master->deserialize($param["Master"]);
        }

        if (array_key_exists("Slave1",$param) and $param["Slave1"] !== null) {
            $this->Slave1 = new ResourceUsageMonitorSet();
            $this->Slave1->deserialize($param["Slave1"]);
        }

        if (array_key_exists("Slave2",$param) and $param["Slave2"] !== null) {
            $this->Slave2 = new ResourceUsageMonitorSet();
            $this->Slave2->deserialize($param["Slave2"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
