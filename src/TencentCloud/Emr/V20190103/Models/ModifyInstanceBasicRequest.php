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
 * ModifyInstanceBasic request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getResourceBaseType() Obtain Used to label computing resources that need to be modified.
 * @method void setResourceBaseType(string $ResourceBaseType) Set Used to label computing resources that need to be modified.
 * @method string getComputeResourceId() Obtain Computing resource ID that needs to be modified, and can be used together with ResourceBaseType.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID that needs to be modified, and can be used together with ResourceBaseType.
 */
class ModifyInstanceBasicRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Used to label computing resources that need to be modified.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID that needs to be modified, and can be used together with ResourceBaseType.
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param string $ClusterName Cluster name.
     * @param string $ResourceBaseType Used to label computing resources that need to be modified.
     * @param string $ComputeResourceId Computing resource ID that needs to be modified, and can be used together with ResourceBaseType.
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
