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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBClusterAutoMapRule request structure.
 *
 * @method string getClusterId() Obtain Analysis cluster ID
 * @method void setClusterId(string $ClusterId) Set Analysis cluster ID
 * @method string getInstanceId() Obtain Analysis instance ID
 * @method void setInstanceId(string $InstanceId) Set Analysis instance ID
 */
class DescribeLibraDBClusterAutoMapRuleRequest extends AbstractModel
{
    /**
     * @var string Analysis cluster ID
     */
    public $ClusterId;

    /**
     * @var string Analysis instance ID
     */
    public $InstanceId;

    /**
     * @param string $ClusterId Analysis cluster ID
     * @param string $InstanceId Analysis instance ID
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
