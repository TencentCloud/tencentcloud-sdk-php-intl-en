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
 * ResetRoutePolicyEntries request structure.
 *
 * @method string getRoutePolicyId() Obtain Specifies the instance ID of the route reception policy, such as rrp-azd4dt1c.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Specifies the instance ID of the route reception policy, such as rrp-azd4dt1c.
 * @method array getRoutePolicyEntrySet() Obtain Route reception policy entry list. requires specifying the routing strategy entry ID (RoutePolicyEntryId).
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) Set Route reception policy entry list. requires specifying the routing strategy entry ID (RoutePolicyEntryId).
 * @method string getRoutePolicyDescription() Obtain Describes the route reception policy.
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) Set Describes the route reception policy.
 * @method string getRoutePolicyName() Obtain Specifies the route reception policy name.
 * @method void setRoutePolicyName(string $RoutePolicyName) Set Specifies the route reception policy name.
 */
class ResetRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID of the route reception policy, such as rrp-azd4dt1c.
     */
    public $RoutePolicyId;

    /**
     * @var array Route reception policy entry list. requires specifying the routing strategy entry ID (RoutePolicyEntryId).
     */
    public $RoutePolicyEntrySet;

    /**
     * @var string Describes the route reception policy.
     */
    public $RoutePolicyDescription;

    /**
     * @var string Specifies the route reception policy name.
     */
    public $RoutePolicyName;

    /**
     * @param string $RoutePolicyId Specifies the instance ID of the route reception policy, such as rrp-azd4dt1c.
     * @param array $RoutePolicyEntrySet Route reception policy entry list. requires specifying the routing strategy entry ID (RoutePolicyEntryId).
     * @param string $RoutePolicyDescription Describes the route reception policy.
     * @param string $RoutePolicyName Specifies the route reception policy name.
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

        if (array_key_exists("RoutePolicyDescription",$param) and $param["RoutePolicyDescription"] !== null) {
            $this->RoutePolicyDescription = $param["RoutePolicyDescription"];
        }

        if (array_key_exists("RoutePolicyName",$param) and $param["RoutePolicyName"] !== null) {
            $this->RoutePolicyName = $param["RoutePolicyName"];
        }
    }
}
