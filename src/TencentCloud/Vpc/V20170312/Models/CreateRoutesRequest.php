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
 * CreateRoutes request structure.
 *
 * @method string getRouteTableId() Obtain Route table instance ID.
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID.
 * @method array getRoutes() Obtain Routing policy object.
 * @method void setRoutes(array $Routes) Set Routing policy object.
 */
class CreateRoutesRequest extends AbstractModel
{
    /**
     * @var string Route table instance ID.
     */
    public $RouteTableId;

    /**
     * @var array Routing policy object.
     */
    public $Routes;

    /**
     * @param string $RouteTableId Route table instance ID.
     * @param array $Routes Routing policy object.
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
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
