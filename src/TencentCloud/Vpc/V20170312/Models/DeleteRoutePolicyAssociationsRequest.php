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
 * DeleteRoutePolicyAssociations request structure.
 *
 * @method array getRoutePolicyAssociationSet() Obtain Routing policy binding object list. during routing policy unbinding, use the RouteTableId and RoutePolicyId fields of RoutePolicyAssociation (you do not need to fill in the Priority field).
 * @method void setRoutePolicyAssociationSet(array $RoutePolicyAssociationSet) Set Routing policy binding object list. during routing policy unbinding, use the RouteTableId and RoutePolicyId fields of RoutePolicyAssociation (you do not need to fill in the Priority field).
 */
class DeleteRoutePolicyAssociationsRequest extends AbstractModel
{
    /**
     * @var array Routing policy binding object list. during routing policy unbinding, use the RouteTableId and RoutePolicyId fields of RoutePolicyAssociation (you do not need to fill in the Priority field).
     */
    public $RoutePolicyAssociationSet;

    /**
     * @param array $RoutePolicyAssociationSet Routing policy binding object list. during routing policy unbinding, use the RouteTableId and RoutePolicyId fields of RoutePolicyAssociation (you do not need to fill in the Priority field).
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
        if (array_key_exists("RoutePolicyAssociationSet",$param) and $param["RoutePolicyAssociationSet"] !== null) {
            $this->RoutePolicyAssociationSet = [];
            foreach ($param["RoutePolicyAssociationSet"] as $key => $value){
                $obj = new RoutePolicyAssociation();
                $obj->deserialize($value);
                array_push($this->RoutePolicyAssociationSet, $obj);
            }
        }
    }
}
