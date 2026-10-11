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
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method array getResourceIds() Obtain <p>ID of the terminated node. This parameter is reserved and does not need to be configured.</p>
 * @method void setResourceIds(array $ResourceIds) Set <p>ID of the terminated node. This parameter is reserved and does not need to be configured.</p>
 * @method string getResourceBaseType() Obtain <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId takes effect; when the type is ComputeResource, ComputeResourceId is used for identification.</p>
 * @method void setResourceBaseType(string $ResourceBaseType) Set <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId takes effect; when the type is ComputeResource, ComputeResourceId is used for identification.</p>
 * @method string getComputeResourceId() Obtain <p>Computing resource ID.</p>
 * @method void setComputeResourceId(string $ComputeResourceId) Set <p>Computing resource ID.</p>
 * @method boolean getRetainTkeCluster() Obtain <p>Retain the TKE cluster associated with the computing resource.</p>
 * @method void setRetainTkeCluster(boolean $RetainTkeCluster) Set <p>Retain the TKE cluster associated with the computing resource.</p>
 */
class TerminateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>ID of the terminated node. This parameter is reserved and does not need to be configured.</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId takes effect; when the type is ComputeResource, ComputeResourceId is used for identification.</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>Computing resource ID.</p>
     */
    public $ComputeResourceId;

    /**
     * @var boolean <p>Retain the TKE cluster associated with the computing resource.</p>
     */
    public $RetainTkeCluster;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param array $ResourceIds <p>ID of the terminated node. This parameter is reserved and does not need to be configured.</p>
     * @param string $ResourceBaseType <p>The type can be ComputeResource, EMR, or a default value. The default value is EMR. When the type is EMR, InstanceId takes effect; when the type is ComputeResource, ComputeResourceId is used for identification.</p>
     * @param string $ComputeResourceId <p>Computing resource ID.</p>
     * @param boolean $RetainTkeCluster <p>Retain the TKE cluster associated with the computing resource.</p>
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

        if (array_key_exists("RetainTkeCluster",$param) and $param["RetainTkeCluster"] !== null) {
            $this->RetainTkeCluster = $param["RetainTkeCluster"];
        }
    }
}
