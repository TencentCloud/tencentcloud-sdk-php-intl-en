<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Static configurations of the reserved instance.
 *
 * @method string getType() Obtain Abbreviation name of the instance type.
 * @method void setType(string $Type) Set Abbreviation name of the instance type.
 * @method string getTypeName() Obtain Full name of the instance type.
 * @method void setTypeName(string $TypeName) Set Full name of the instance type.
 * @method integer getOrder() Obtain Priority.
 * @method void setOrder(integer $Order) Set Priority.
 * @method array getInstanceFamilies() Obtain List of instance families.
 * @method void setInstanceFamilies(array $InstanceFamilies) Set List of instance families.
 */
class ReservedInstanceConfigInfoItem extends AbstractModel
{
    /**
     * @var string Abbreviation name of the instance type.
     */
    public $Type;

    /**
     * @var string Full name of the instance type.
     */
    public $TypeName;

    /**
     * @var integer Priority.
     */
    public $Order;

    /**
     * @var array List of instance families.
     */
    public $InstanceFamilies;

    /**
     * @param string $Type Abbreviation name of the instance type.
     * @param string $TypeName Full name of the instance type.
     * @param integer $Order Priority.
     * @param array $InstanceFamilies List of instance families.
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
                $obj = new ReservedInstanceFamilyItem();
                $obj->deserialize($value);
                array_push($this->InstanceFamilies, $obj);
            }
        }
    }
}
