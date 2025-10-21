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
 * DeleteRoutePolicyEntries request structure.
 *
 * @method string getRoutePolicyId() Obtain Specifies the instance ID of the route reception policy.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Specifies the instance ID of the route reception policy.
 * @method array getRoutePolicyEntrySet() Obtain Route reception policy entry list. when deleting a routing policy rule, use the routepolicyentryid field of RoutePolicyEntry.
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) Set Route reception policy entry list. when deleting a routing policy rule, use the routepolicyentryid field of RoutePolicyEntry.
 */
class DeleteRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID of the route reception policy.
     */
    public $RoutePolicyId;

    /**
     * @var array Route reception policy entry list. when deleting a routing policy rule, use the routepolicyentryid field of RoutePolicyEntry.
     */
    public $RoutePolicyEntrySet;

    /**
     * @param string $RoutePolicyId Specifies the instance ID of the route reception policy.
     * @param array $RoutePolicyEntrySet Route reception policy entry list. when deleting a routing policy rule, use the routepolicyentryid field of RoutePolicyEntry.
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
