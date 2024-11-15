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
 * DeleteLogConfigs request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getLogConfigNames() Obtain Name of the collection rule to be deleted. For multiple collection rules, they are separated by ",".
 * @method void setLogConfigNames(string $LogConfigNames) Set Name of the collection rule to be deleted. For multiple collection rules, they are separated by ",".
 * @method string getClusterType() Obtain Cluster type: tke/eks. The default is tke cluster.
 * @method void setClusterType(string $ClusterType) Set Cluster type: tke/eks. The default is tke cluster.
 */
class DeleteLogConfigsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Name of the collection rule to be deleted. For multiple collection rules, they are separated by ",".
     */
    public $LogConfigNames;

    /**
     * @var string Cluster type: tke/eks. The default is tke cluster.
     */
    public $ClusterType;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $LogConfigNames Name of the collection rule to be deleted. For multiple collection rules, they are separated by ",".
     * @param string $ClusterType Cluster type: tke/eks. The default is tke cluster.
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

        if (array_key_exists("LogConfigNames",$param) and $param["LogConfigNames"] !== null) {
            $this->LogConfigNames = $param["LogConfigNames"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
