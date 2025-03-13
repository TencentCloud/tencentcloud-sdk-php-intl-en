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
 * RI-related instance family.
 *
 * @method string getInstanceFamily() Obtain Instance family.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance family.
 * @method integer getOrder() Obtain Priority.
 * @method void setOrder(integer $Order) Set Priority.
 * @method array getInstanceTypes() Obtain List of instance types.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance types.
 */
class ReservedInstanceFamilyItem extends AbstractModel
{
    /**
     * @var string Instance family.
     */
    public $InstanceFamily;

    /**
     * @var integer Priority.
     */
    public $Order;

    /**
     * @var array List of instance types.
     */
    public $InstanceTypes;

    /**
     * @param string $InstanceFamily Instance family.
     * @param integer $Order Priority.
     * @param array $InstanceTypes List of instance types.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = [];
            foreach ($param["InstanceTypes"] as $key => $value){
                $obj = new ReservedInstanceTypeItem();
                $obj->deserialize($value);
                array_push($this->InstanceTypes, $obj);
            }
        }
    }
}
