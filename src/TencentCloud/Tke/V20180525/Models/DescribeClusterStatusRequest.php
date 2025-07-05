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
 * DescribeClusterStatus request structure.
 *
 * @method array getClusterIds() Obtain Cluster ID list. All clusters are pulled if it is left empty.
 * @method void setClusterIds(array $ClusterIds) Set Cluster ID list. All clusters are pulled if it is left empty.
 */
class DescribeClusterStatusRequest extends AbstractModel
{
    /**
     * @var array Cluster ID list. All clusters are pulled if it is left empty.
     */
    public $ClusterIds;

    /**
     * @param array $ClusterIds Cluster ID list. All clusters are pulled if it is left empty.
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
    }
}
