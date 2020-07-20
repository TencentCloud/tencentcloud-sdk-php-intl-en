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
 * ModifyClusterAsGroupAttribute request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method ClusterAsGroupAttribute getClusterAsGroupAttribute() Obtain Cluster-associated scaling group attributes
 * @method void setClusterAsGroupAttribute(ClusterAsGroupAttribute $ClusterAsGroupAttribute) Set Cluster-associated scaling group attributes
 */
class ModifyClusterAsGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var ClusterAsGroupAttribute Cluster-associated scaling group attributes
     */
    public $ClusterAsGroupAttribute;

    /**
     * @param string $ClusterId Cluster ID
     * @param ClusterAsGroupAttribute $ClusterAsGroupAttribute Cluster-associated scaling group attributes
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

        if (array_key_exists("ClusterAsGroupAttribute",$param) and $param["ClusterAsGroupAttribute"] !== null) {
            $this->ClusterAsGroupAttribute = new ClusterAsGroupAttribute();
            $this->ClusterAsGroupAttribute->deserialize($param["ClusterAsGroupAttribute"]);
        }
    }
}
