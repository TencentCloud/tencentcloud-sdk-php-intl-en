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
 * Returned object for route information
 *
 * @method array getRouters() Obtain Route Information List
 * @method void setRouters(array $Routers) Set Route Information List
 */
class RouteResponse extends AbstractModel
{
    /**
     * @var array Route Information List
     */
    public $Routers;

    /**
     * @param array $Routers Route Information List
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
        if (array_key_exists("Routers",$param) and $param["Routers"] !== null) {
            $this->Routers = [];
            foreach ($param["Routers"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->Routers, $obj);
            }
        }
    }
}
