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
 * Node instance type.
 *
 * @method string getType() Obtain Instance type series.
 * @method void setType(string $Type) Set Instance type series.
 * @method string getTypeName() Obtain Instance type series name.
 * @method void setTypeName(string $TypeName) Set Instance type series name.
 * @method integer getOrder() Obtain Sorting order.
 * @method void setOrder(integer $Order) Set Sorting order.
 * @method array getInstanceFamilies() Obtain Array of instance families.
 * @method void setInstanceFamilies(array $InstanceFamilies) Set Array of instance families.
 */
class NodeSpecType extends AbstractModel
{
    /**
     * @var string Instance type series.
     */
    public $Type;

    /**
     * @var string Instance type series name.
     */
    public $TypeName;

    /**
     * @var integer Sorting order.
     */
    public $Order;

    /**
     * @var array Array of instance families.
     */
    public $InstanceFamilies;

    /**
     * @param string $Type Instance type series.
     * @param string $TypeName Instance type series name.
     * @param integer $Order Sorting order.
     * @param array $InstanceFamilies Array of instance families.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = [];
            foreach ($param["InstanceFamilies"] as $key => $value){
                $obj = new NodeSpecFamily();
                $obj->deserialize($value);
                array_push($this->InstanceFamilies, $obj);
            }
        }
    }
}
