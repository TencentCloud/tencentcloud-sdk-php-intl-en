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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of instance associated with the snapshot policy
 *
 * @method string getInstanceId() Obtain ID of the instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance.
 * @method string getInstanceType() Obtain Type of associated resource. Values: `securitygroup`
 * @method void setInstanceType(string $InstanceType) Set Type of associated resource. Values: `securitygroup`
 * @method string getInstanceRegion() Obtain Instance region
 * @method void setInstanceRegion(string $InstanceRegion) Set Instance region
 * @method string getSnapshotPolicyId() Obtain Snapshot policy IDs
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy IDs
 * @method string getInstanceName() Obtain The instance name.
 * @method void setInstanceName(string $InstanceName) Set The instance name.
 */
class SnapshotInstance extends AbstractModel
{
    /**
     * @var string ID of the instance.
     */
    public $InstanceId;

    /**
     * @var string Type of associated resource. Values: `securitygroup`
     */
    public $InstanceType;

    /**
     * @var string Instance region
     */
    public $InstanceRegion;

    /**
     * @var string Snapshot policy IDs
     */
    public $SnapshotPolicyId;

    /**
     * @var string The instance name.
     */
    public $InstanceName;

    /**
     * @param string $InstanceId ID of the instance.
     * @param string $InstanceType Type of associated resource. Values: `securitygroup`
     * @param string $InstanceRegion Instance region
     * @param string $SnapshotPolicyId Snapshot policy IDs
     * @param string $InstanceName The instance name.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
