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
 * CreateRoutePolicy request structure.
 *
 * @method string getRoutePolicyDescription() Obtain Routing policy description.
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) Set Routing policy description.
 * @method string getRoutePolicyName() Obtain Specifies the routing strategy name.
 * @method void setRoutePolicyName(string $RoutePolicyName) Set Specifies the routing strategy name.
 * @method array getRoutePolicyEntrySet() Obtain Routing policy entry list.
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) Set Routing policy entry list.
 */
class CreateRoutePolicyRequest extends AbstractModel
{
    /**
     * @var string Routing policy description.
     */
    public $RoutePolicyDescription;

    /**
     * @var string Specifies the routing strategy name.
     */
    public $RoutePolicyName;

    /**
     * @var array Routing policy entry list.
     */
    public $RoutePolicyEntrySet;

    /**
     * @param string $RoutePolicyDescription Routing policy description.
     * @param string $RoutePolicyName Specifies the routing strategy name.
     * @param array $RoutePolicyEntrySet Routing policy entry list.
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
        if (array_key_exists("RoutePolicyDescription",$param) and $param["RoutePolicyDescription"] !== null) {
            $this->RoutePolicyDescription = $param["RoutePolicyDescription"];
        }

        if (array_key_exists("RoutePolicyName",$param) and $param["RoutePolicyName"] !== null) {
            $this->RoutePolicyName = $param["RoutePolicyName"];
        }

        if (array_key_exists("RoutePolicyEntrySet",$param) and $param["RoutePolicyEntrySet"] !== null) {
            $this->RoutePolicyEntrySet = [];
            foreach ($param["RoutePolicyEntrySet"] as $key => $value){
                $obj = new RoutePolicyEntry();
                $obj->deserialize($value);
                array_push($this->RoutePolicyEntrySet, $obj);
            }
        }
    }
}
