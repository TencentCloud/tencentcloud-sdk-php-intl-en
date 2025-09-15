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
 * SetNodeResourceConfigDefault request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method integer getResourceConfigId() Obtain Configuration ID.
 * @method void setResourceConfigId(integer $ResourceConfigId) Set Configuration ID.
 * @method string getResourceType() Obtain Specification node type, with the valid values of CORE, TASK, and ROUTER.
 * @method void setResourceType(string $ResourceType) Set Specification node type, with the valid values of CORE, TASK, and ROUTER.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 * @method string getHardwareResourceType() Obtain Hardware type.
 * @method void setHardwareResourceType(string $HardwareResourceType) Set Hardware type.
 */
class SetNodeResourceConfigDefaultRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Configuration ID.
     */
    public $ResourceConfigId;

    /**
     * @var string Specification node type, with the valid values of CORE, TASK, and ROUTER.
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
     * @var string Hardware type.
     */
    public $HardwareResourceType;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param integer $ResourceConfigId Configuration ID.
     * @param string $ResourceType Specification node type, with the valid values of CORE, TASK, and ROUTER.
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

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }
    }
}
