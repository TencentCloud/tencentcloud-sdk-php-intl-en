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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node model list.
 *
 * @method string getInstanceFamily() Obtain Model.
 * @method void setInstanceFamily(string $InstanceFamily) Set Model.
 * @method string getFamilyName() Obtain Model name.
 * @method void setFamilyName(string $FamilyName) Set Model name.
 * @method integer getOrder() Obtain Order.
 * @method void setOrder(integer $Order) Set Order.
 * @method array getInstanceTypes() Obtain InstanceType List.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTypes(array $InstanceTypes) Set InstanceType List.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeSpecFamily extends AbstractModel
{
    /**
     * @var string Model.
     */
    public $InstanceFamily;

    /**
     * @var string Model name.
     */
    public $FamilyName;

    /**
     * @var integer Order.
     */
    public $Order;

    /**
     * @var array InstanceType List.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTypes;

    /**
     * @param string $InstanceFamily Model.
     * @param string $FamilyName Model name.
     * @param integer $Order Order.
     * @param array $InstanceTypes InstanceType List.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = [];
            foreach ($param["InstanceTypes"] as $key => $value){
                $obj = new NodeSpecInstanceType();
                $obj->deserialize($value);
                array_push($this->InstanceTypes, $obj);
            }
        }
    }
}
