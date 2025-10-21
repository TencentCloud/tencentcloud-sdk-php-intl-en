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
 * Route reception policy binding. used to bind the route table and route reception policy and specify the binding priority.
 *
 * @method string getRouteTableId() Obtain Unique route table ID.
 * @method void setRouteTableId(string $RouteTableId) Set Unique route table ID.
 * @method string getRoutePolicyId() Obtain Specifies the unique ID of the route reception policy.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Specifies the unique ID of the route reception policy.
 * @method integer getPriority() Obtain Priority.
 * @method void setPriority(integer $Priority) Set Priority.
 */
class RoutePolicyAssociation extends AbstractModel
{
    /**
     * @var string Unique route table ID.
     */
    public $RouteTableId;

    /**
     * @var string Specifies the unique ID of the route reception policy.
     */
    public $RoutePolicyId;

    /**
     * @var integer Priority.
     */
    public $Priority;

    /**
     * @param string $RouteTableId Unique route table ID.
     * @param string $RoutePolicyId Specifies the unique ID of the route reception policy.
     * @param integer $Priority Priority.
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

        if (array_key_exists("RoutePolicyId",$param) and $param["RoutePolicyId"] !== null) {
            $this->RoutePolicyId = $param["RoutePolicyId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
