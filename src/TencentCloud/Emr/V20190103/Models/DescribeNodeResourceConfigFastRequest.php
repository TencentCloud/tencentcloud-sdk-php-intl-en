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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeResourceConfigFast request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method string getResourceType() Obtain Node type, CORE, TASK, ROUTER or ALL.
 * @method void setResourceType(string $ResourceType) Set Node type, CORE, TASK, ROUTER or ALL.
 * @method integer getPayMode() Obtain Billing type.
 * @method void setPayMode(integer $PayMode) Set Billing type.
 * @method integer getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(integer $ZoneId) Set Availability zone ID.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 * @method string getHardwareResourceType() Obtain Hardware type.
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Hardware type.
 */
class DescribeNodeResourceConfigFastRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var string Node type, CORE, TASK, ROUTER or ALL.
     */
    public $ResourceType;

    /**
     * @var integer Billing type.
     */
    public $PayMode;

    /**
     * @var integer Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var string The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @var string Hardware type.
     */
    public $HardwareResourceType;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param string $ResourceType Node type, CORE, TASK, ROUTER or ALL.
     * @param integer $PayMode Billing type.
     * @param integer $ZoneId Availability zone ID.
     * @param string $ResourceBaseType The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     * @param string $ComputeResourceId Computing resource ID.
     * @param string $HardwareResourceType Hardware type.
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }
    }
}
