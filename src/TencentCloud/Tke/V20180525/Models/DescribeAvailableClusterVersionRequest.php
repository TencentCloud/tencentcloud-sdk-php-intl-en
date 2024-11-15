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
 * DescribeAvailableClusterVersion request structure.
 *
 * @method string getClusterId() Obtain Cluster ID. If you need to query the upgradable version of a specific cluster, this field is required.
 * @method void setClusterId(string $ClusterId) Set Cluster ID. If you need to query the upgradable version of a specific cluster, this field is required.
 * @method array getClusterIds() Obtain Cluster ID list. If you need to query the upgradable versions of multiple clusters, this field is required.
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID list. If you need to query the upgradable versions of multiple clusters, this field is required.
 */
class DescribeAvailableClusterVersionRequest extends AbstractModel
{
    /**
     * @var string Cluster ID. If you need to query the upgradable version of a specific cluster, this field is required.
     */
    public $ClusterId;

    /**
     * @var array Cluster ID list. If you need to query the upgradable versions of multiple clusters, this field is required.
     */
    public $ClusterIds;

    /**
     * @param string $ClusterId Cluster ID. If you need to query the upgradable version of a specific cluster, this field is required.
     * @param array $ClusterIds Cluster ID list. If you need to query the upgradable versions of multiple clusters, this field is required.
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }
    }
}
