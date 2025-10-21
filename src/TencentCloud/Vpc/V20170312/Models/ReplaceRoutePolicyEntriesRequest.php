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
 * ReplaceRoutePolicyEntries request structure.
 *
 * @method string getRoutePolicyId() Obtain Instance ID of the routing strategy, such as rrp-azd4dt1c.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Instance ID of the routing strategy, such as rrp-azd4dt1c.
 * @method array getRoutePolicyEntrySet() Obtain Rule list of the routing strategy. requires specifying the policy rule ID (RoutePolicyEntryId).
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) Set Rule list of the routing strategy. requires specifying the policy rule ID (RoutePolicyEntryId).
 */
class ReplaceRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the routing strategy, such as rrp-azd4dt1c.
     */
    public $RoutePolicyId;

    /**
     * @var array Rule list of the routing strategy. requires specifying the policy rule ID (RoutePolicyEntryId).
     */
    public $RoutePolicyEntrySet;

    /**
     * @param string $RoutePolicyId Instance ID of the routing strategy, such as rrp-azd4dt1c.
     * @param array $RoutePolicyEntrySet Rule list of the routing strategy. requires specifying the policy rule ID (RoutePolicyEntryId).
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
