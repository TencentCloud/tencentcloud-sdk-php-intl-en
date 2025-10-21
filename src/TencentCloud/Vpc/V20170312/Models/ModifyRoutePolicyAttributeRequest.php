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
 * ModifyRoutePolicyAttribute request structure.
 *
 * @method string getRoutePolicyId() Obtain Instance ID of the route reception policy, such as rrp-dz0219jq.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Instance ID of the route reception policy, such as rrp-dz0219jq.
 * @method string getRoutePolicyName() Obtain Specifies the route reception policy name.
 * @method void setRoutePolicyName(string $RoutePolicyName) Set Specifies the route reception policy name.
 * @method string getRoutePolicyDescription() Obtain Describes the route reception policy.
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) Set Describes the route reception policy.
 */
class ModifyRoutePolicyAttributeRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the route reception policy, such as rrp-dz0219jq.
     */
    public $RoutePolicyId;

    /**
     * @var string Specifies the route reception policy name.
     */
    public $RoutePolicyName;

    /**
     * @var string Describes the route reception policy.
     */
    public $RoutePolicyDescription;

    /**
     * @param string $RoutePolicyId Instance ID of the route reception policy, such as rrp-dz0219jq.
     * @param string $RoutePolicyName Specifies the route reception policy name.
     * @param string $RoutePolicyDescription Describes the route reception policy.
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
        if (array_key_exists("RoutePolicyId",$param) and $param["RoutePolicyId"] !== null) {
            $this->RoutePolicyId = $param["RoutePolicyId"];
        }

        if (array_key_exists("RoutePolicyName",$param) and $param["RoutePolicyName"] !== null) {
            $this->RoutePolicyName = $param["RoutePolicyName"];
        }

        if (array_key_exists("RoutePolicyDescription",$param) and $param["RoutePolicyDescription"] !== null) {
            $this->RoutePolicyDescription = $param["RoutePolicyDescription"];
        }
    }
}
