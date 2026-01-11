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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceRoutesWithRoutePolicy request structure.
 *
 * @method string getRouteTableId() Obtain Route Table Instance ID
 * @method void setRouteTableId(string $RouteTableId) Set Route Table Instance ID
 * @method array getRoutes() Obtain Routing policy object. requires specifying the unique ID of routing policy (RouteItemId).
 * @method void setRoutes(array $Routes) Set Routing policy object. requires specifying the unique ID of routing policy (RouteItemId).
 */
class ReplaceRoutesWithRoutePolicyRequest extends AbstractModel
{
    /**
     * @var string Route Table Instance ID
     */
    public $RouteTableId;

    /**
     * @var array Routing policy object. requires specifying the unique ID of routing policy (RouteItemId).
     */
    public $Routes;

    /**
     * @param string $RouteTableId Route Table Instance ID
     * @param array $Routes Routing policy object. requires specifying the unique ID of routing policy (RouteItemId).
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

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new ReplaceRoutesWithRoutePolicyRoute();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
