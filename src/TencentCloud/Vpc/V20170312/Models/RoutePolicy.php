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
 * Route reception policy. when CCN or other services add routes to a VPC custom route table, you can drop or enable appropriate route entries.
 *
 * @method string getRoutePolicyId() Obtain Unique ID of the routing policy.

Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyId(string $RoutePolicyId) Set Unique ID of the routing policy.

Note: This field may return null, indicating that no valid value was found.
 * @method string getRoutePolicyName() Obtain Specifies the routing strategy name.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyName(string $RoutePolicyName) Set Specifies the routing strategy name.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRoutePolicyDescription() Obtain Routing policy description.

Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyDescription(string $RoutePolicyDescription) Set Routing policy description.

Note: This field may return null, indicating that no valid value was found.
 * @method array getRoutePolicyEntrySet() Obtain Routing policy rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyEntrySet(array $RoutePolicyEntrySet) Set Routing policy rule list.
Note: This field may return null, indicating that no valid value was found.
 * @method array getRoutePolicyAssociationSet() Obtain Specifies the routing strategy binding.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyAssociationSet(array $RoutePolicyAssociationSet) Set Specifies the routing strategy binding.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCreatedTime() Obtain Creation time.

Note: This field may return null, indicating that no valid value was found.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.

Note: This field may return null, indicating that no valid value was found.
 * @method array getTagSet() Obtain Tag key-value pair.
 * @method void setTagSet(array $TagSet) Set Tag key-value pair.
 */
class RoutePolicy extends AbstractModel
{
    /**
     * @var string Unique ID of the routing policy.

Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyId;

    /**
     * @var string Specifies the routing strategy name.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyName;

    /**
     * @var string Routing policy description.

Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyDescription;

    /**
     * @var array Routing policy rule list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyEntrySet;

    /**
     * @var array Specifies the routing strategy binding.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyAssociationSet;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid value was found.
     */
    public $CreatedTime;

    /**
     * @var array Tag key-value pair.
     */
    public $TagSet;

    /**
     * @param string $RoutePolicyId Unique ID of the routing policy.

Note: This field may return null, indicating that no valid value was found.
     * @param string $RoutePolicyName Specifies the routing strategy name.
Note: This field may return null, indicating that no valid value was found.
     * @param string $RoutePolicyDescription Routing policy description.

Note: This field may return null, indicating that no valid value was found.
     * @param array $RoutePolicyEntrySet Routing policy rule list.
Note: This field may return null, indicating that no valid value was found.
     * @param array $RoutePolicyAssociationSet Specifies the routing strategy binding.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CreatedTime Creation time.

Note: This field may return null, indicating that no valid value was found.
     * @param array $TagSet Tag key-value pair.
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

        if (array_key_exists("RoutePolicyEntrySet",$param) and $param["RoutePolicyEntrySet"] !== null) {
            $this->RoutePolicyEntrySet = [];
            foreach ($param["RoutePolicyEntrySet"] as $key => $value){
                $obj = new RoutePolicyEntry();
                $obj->deserialize($value);
                array_push($this->RoutePolicyEntrySet, $obj);
            }
        }

        if (array_key_exists("RoutePolicyAssociationSet",$param) and $param["RoutePolicyAssociationSet"] !== null) {
            $this->RoutePolicyAssociationSet = [];
            foreach ($param["RoutePolicyAssociationSet"] as $key => $value){
                $obj = new RoutePolicyAssociation();
                $obj->deserialize($value);
                array_push($this->RoutePolicyAssociationSet, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
