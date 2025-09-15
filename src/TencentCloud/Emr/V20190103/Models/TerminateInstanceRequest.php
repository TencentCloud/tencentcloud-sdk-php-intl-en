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
 * TerminateInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getResourceIds() Obtain ID of terminated node. This parameter is reserved and does not need to be configured.
 * @method void setResourceIds(array $ResourceIds) Set ID of terminated node. This parameter is reserved and does not need to be configured.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId is effective. When the type is ComputeResource, ComputeResourceId is used.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId is effective. When the type is ComputeResource, ComputeResourceId is used.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 */
class TerminateInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array ID of terminated node. This parameter is reserved and does not need to be configured.
     */
    public $ResourceIds;

    /**
     * @var string The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId is effective. When the type is ComputeResource, ComputeResourceId is used.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $ResourceIds ID of terminated node. This parameter is reserved and does not need to be configured.
     * @param string $ResourceBaseType The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId is effective. When the type is ComputeResource, ComputeResourceId is used.
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
