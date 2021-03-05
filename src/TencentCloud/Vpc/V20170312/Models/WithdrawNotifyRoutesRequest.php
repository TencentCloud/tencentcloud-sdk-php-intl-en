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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WithdrawNotifyRoutes request structure.
 *
 * @method string getRouteTableId() Obtain The unique ID of the route table
 * @method void setRouteTableId(string $RouteTableId) Set The unique ID of the route table
 * @method array getRouteItemIds() Obtain The unique ID of the routing policy
 * @method void setRouteItemIds(array $RouteItemIds) Set The unique ID of the routing policy
 */
class WithdrawNotifyRoutesRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the route table
     */
    public $RouteTableId;

    /**
     * @var array The unique ID of the routing policy
     */
    public $RouteItemIds;

    /**
     * @param string $RouteTableId The unique ID of the route table
     * @param array $RouteItemIds The unique ID of the routing policy
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteItemIds",$param) and $param["RouteItemIds"] !== null) {
            $this->RouteItemIds = $param["RouteItemIds"];
        }
    }
}
