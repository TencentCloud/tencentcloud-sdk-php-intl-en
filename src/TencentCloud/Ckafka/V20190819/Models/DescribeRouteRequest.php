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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoute request structure.
 *
 * @method string getInstanceId() Obtain Unique instance ID
 * @method void setInstanceId(string $InstanceId) Set Unique instance ID
 * @method integer getRouteId() Obtain Route ID
 * @method void setRouteId(integer $RouteId) Set Route ID
 */
class DescribeRouteRequest extends AbstractModel
{
    /**
     * @var string Unique instance ID
     */
    public $InstanceId;

    /**
     * @var integer Route ID
     */
    public $RouteId;

    /**
     * @param string $InstanceId Unique instance ID
     * @param integer $RouteId Route ID
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

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }
    }
}
