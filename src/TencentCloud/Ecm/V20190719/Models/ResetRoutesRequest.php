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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetRoutes request structure.
 *
 * @method string getRouteTableId() Obtain Route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID, such as `rtb-azd4dt1c`.
 * @method string getRouteTableName() Obtain Route table name, which can contain up to 60 bytes.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name, which can contain up to 60 bytes.
 * @method array getRoutes() Obtain Routing policy.
 * @method void setRoutes(array $Routes) Set Routing policy.
 */
class ResetRoutesRequest extends AbstractModel
{
    /**
     * @var string Route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableId;

    /**
     * @var string Route table name, which can contain up to 60 bytes.
     */
    public $RouteTableName;

    /**
     * @var array Routing policy.
     */
    public $Routes;

    /**
     * @param string $RouteTableId Route table instance ID, such as `rtb-azd4dt1c`.
     * @param string $RouteTableName Route table name, which can contain up to 60 bytes.
     * @param array $Routes Routing policy.
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

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
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
