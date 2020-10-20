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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain List of Instance IDs
 * @method void setInstanceIds(array $InstanceIds) Set List of Instance IDs
 * @method string getInstanceDeleteMode() Obtain Policy used to delete an instance in the cluster: `terminate` (terminates the instance. Only available for pay-as-you-go CVMs); `retain` (only removes it from the cluster. The instance will be retained.)
 * @method void setInstanceDeleteMode(string $InstanceDeleteMode) Set Policy used to delete an instance in the cluster: `terminate` (terminates the instance. Only available for pay-as-you-go CVMs); `retain` (only removes it from the cluster. The instance will be retained.)
 * @method boolean getForceDelete() Obtain Whether or not there is forced deletion (when a node is initialized, the parameters can be specified as TRUE)
 * @method void setForceDelete(boolean $ForceDelete) Set Whether or not there is forced deletion (when a node is initialized, the parameters can be specified as TRUE)
 */
class DeleteClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array List of Instance IDs
     */
    public $InstanceIds;

    /**
     * @var string Policy used to delete an instance in the cluster: `terminate` (terminates the instance. Only available for pay-as-you-go CVMs); `retain` (only removes it from the cluster. The instance will be retained.)
     */
    public $InstanceDeleteMode;

    /**
     * @var boolean Whether or not there is forced deletion (when a node is initialized, the parameters can be specified as TRUE)
     */
    public $ForceDelete;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds List of Instance IDs
     * @param string $InstanceDeleteMode Policy used to delete an instance in the cluster: `terminate` (terminates the instance. Only available for pay-as-you-go CVMs); `retain` (only removes it from the cluster. The instance will be retained.)
     * @param boolean $ForceDelete Whether or not there is forced deletion (when a node is initialized, the parameters can be specified as TRUE)
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceDeleteMode",$param) and $param["InstanceDeleteMode"] !== null) {
            $this->InstanceDeleteMode = $param["InstanceDeleteMode"];
        }

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}
