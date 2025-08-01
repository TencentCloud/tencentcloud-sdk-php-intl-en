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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSupportFeature request structure.
 *
 * @method string getInstanceId() Obtain Specify the instance ID.
 For example: crs-xjhsdj****. Please log in to the [Redis Console] (https://console.cloud.tencent.com/redis#/) and copy the instance ID from the instance list.
Sample value: crs-asdasdas.
 * @method void setInstanceId(string $InstanceId) Set Specify the instance ID.
 For example: crs-xjhsdj****. Please log in to the [Redis Console] (https://console.cloud.tencent.com/redis#/) and copy the instance ID from the instance list.
Sample value: crs-asdasdas.
 * @method string getFeatureName() Obtain Feature names.
- Read-local-node-only: Proximity access feature.- multi-account: Multiple accounts feature.
 * @method void setFeatureName(string $FeatureName) Set Feature names.
- Read-local-node-only: Proximity access feature.- multi-account: Multiple accounts feature.
 */
class DescribeInstanceSupportFeatureRequest extends AbstractModel
{
    /**
     * @var string Specify the instance ID.
 For example: crs-xjhsdj****. Please log in to the [Redis Console] (https://console.cloud.tencent.com/redis#/) and copy the instance ID from the instance list.
Sample value: crs-asdasdas.
     */
    public $InstanceId;

    /**
     * @var string Feature names.
- Read-local-node-only: Proximity access feature.- multi-account: Multiple accounts feature.
     */
    public $FeatureName;

    /**
     * @param string $InstanceId Specify the instance ID.
 For example: crs-xjhsdj****. Please log in to the [Redis Console] (https://console.cloud.tencent.com/redis#/) and copy the instance ID from the instance list.
Sample value: crs-asdasdas.
     * @param string $FeatureName Feature names.
- Read-local-node-only: Proximity access feature.- multi-account: Multiple accounts feature.
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

        if (array_key_exists("FeatureName",$param) and $param["FeatureName"] !== null) {
            $this->FeatureName = $param["FeatureName"];
        }
    }
}
