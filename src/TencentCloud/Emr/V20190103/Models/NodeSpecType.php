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
 * Node model type.
 *
 * @method string getType() Obtain Model series.
 * @method void setType(string $Type) Set Model series.
 * @method string getTypeName() Obtain Model series name.
 * @method void setTypeName(string $TypeName) Set Model series name.
 * @method integer getOrder() Obtain Order.
 * @method void setOrder(integer $Order) Set Order.
 * @method array getInstanceFamilies() Obtain InstanceFamily array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceFamilies(array $InstanceFamilies) Set InstanceFamily array.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeSpecType extends AbstractModel
{
    /**
     * @var string Model series.
     */
    public $Type;

    /**
     * @var string Model series name.
     */
    public $TypeName;

    /**
     * @var integer Order.
     */
    public $Order;

    /**
     * @var array InstanceFamily array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceFamilies;

    /**
     * @param string $Type Model series.
     * @param string $TypeName Model series name.
     * @param integer $Order Order.
     * @param array $InstanceFamilies InstanceFamily array.
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
