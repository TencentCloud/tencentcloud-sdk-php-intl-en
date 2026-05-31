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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSpecsByOperationType request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getOperationType() Obtain Operation type.
Add new RO instance
modifyInstance: Modify configuration
 * @method void setOperationType(string $OperationType) Set Operation type.
Add new RO instance
modifyInstance: Modify configuration
 * @method string getInstanceId() Obtain Instance ID, required when querying configuration modification specifications
 * @method void setInstanceId(string $InstanceId) Set Instance ID, required when querying configuration modification specifications
 * @method string getDeviceType() Obtain Instance Machine Type
 * @method void setDeviceType(string $DeviceType) Set Instance Machine Type
 */
class DescribeInstanceSpecsByOperationTypeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Operation type.
Add new RO instance
modifyInstance: Modify configuration
     */
    public $OperationType;

    /**
     * @var string Instance ID, required when querying configuration modification specifications
     */
    public $InstanceId;

    /**
     * @var string Instance Machine Type
     */
    public $DeviceType;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $OperationType Operation type.
Add new RO instance
modifyInstance: Modify configuration
     * @param string $InstanceId Instance ID, required when querying configuration modification specifications
     * @param string $DeviceType Instance Machine Type
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
