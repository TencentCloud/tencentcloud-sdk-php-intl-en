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
 * DeleteNodeResourceConfig request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method integer getResourceConfigId() Obtain Node configuration ID.
 * @method void setResourceConfigId(integer $ResourceConfigId) Set Node configuration ID.
 * @method string getResourceType() Obtain Node type: CORE, TASK, and ROUTER.
 * @method void setResourceType(string $ResourceType) Set Node type: CORE, TASK, and ROUTER.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 */
class DeleteNodeResourceConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Node configuration ID.
     */
    public $ResourceConfigId;

    /**
     * @var string Node type: CORE, TASK, and ROUTER.
     */
    public $ResourceType;

    /**
     * @var string The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param integer $ResourceConfigId Node configuration ID.
     * @param string $ResourceType Node type: CORE, TASK, and ROUTER.
     * @param string $ResourceBaseType The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     * @param string $ComputeResourceId Computing resource ID.
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

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
