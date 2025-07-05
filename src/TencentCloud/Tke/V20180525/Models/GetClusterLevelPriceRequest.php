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
 * GetClusterLevelPrice request structure.
 *
 * @method string getClusterLevel() Obtain The cluster model. It’s used for price query.
 * @method void setClusterLevel(string $ClusterLevel) Set The cluster model. It’s used for price query.
 */
class GetClusterLevelPriceRequest extends AbstractModel
{
    /**
     * @var string The cluster model. It’s used for price query.
     */
    public $ClusterLevel;

    /**
     * @param string $ClusterLevel The cluster model. It’s used for price query.
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
        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }
    }
}
