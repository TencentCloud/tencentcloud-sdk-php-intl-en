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
 * Match route reception policy objects.
 *
 * @method string getRouteItemId() Obtain Route unique policy ID.
 * @method void setRouteItemId(string $RouteItemId) Set Route unique policy ID.
 * @method boolean getForceMatchPolicy() Obtain Match the route reception policy tag.
 * @method void setForceMatchPolicy(boolean $ForceMatchPolicy) Set Match the route reception policy tag.
 */
class ReplaceRoutesWithRoutePolicyRoute extends AbstractModel
{
    /**
     * @var string Route unique policy ID.
     */
    public $RouteItemId;

    /**
     * @var boolean Match the route reception policy tag.
     */
    public $ForceMatchPolicy;

    /**
     * @param string $RouteItemId Route unique policy ID.
     * @param boolean $ForceMatchPolicy Match the route reception policy tag.
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
        if (array_key_exists("RouteItemId",$param) and $param["RouteItemId"] !== null) {
            $this->RouteItemId = $param["RouteItemId"];
        }

        if (array_key_exists("ForceMatchPolicy",$param) and $param["ForceMatchPolicy"] !== null) {
            $this->ForceMatchPolicy = $param["ForceMatchPolicy"];
        }
    }
}
