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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogSwitches request structure.
 *
 * @method array getClusterIds() Obtain List of cluster IDs
 * @method void setClusterIds(array $ClusterIds) Set List of cluster IDs
 * @method string getClusterType() Obtain Cluster Type, TKE or EKS
 * @method void setClusterType(string $ClusterType) Set Cluster Type, TKE or EKS
 */
class DescribeLogSwitchesRequest extends AbstractModel
{
    /**
     * @var array List of cluster IDs
     */
    public $ClusterIds;

    /**
     * @var string Cluster Type, TKE or EKS
     */
    public $ClusterType;

    /**
     * @param array $ClusterIds List of cluster IDs
     * @param string $ClusterType Cluster Type, TKE or EKS
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
