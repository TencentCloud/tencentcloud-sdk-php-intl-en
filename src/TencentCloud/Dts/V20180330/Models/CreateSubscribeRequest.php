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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubscribe request structure.
 *
 * @method string getProduct() Obtain Subscribed database type. Currently, MySQL is supported
 * @method void setProduct(string $Product) Set Subscribed database type. Currently, MySQL is supported
 * @method integer getPayType() Obtain Instance billing mode, which is always 1 (hourly billing),
 * @method void setPayType(integer $PayType) Set Instance billing mode, which is always 1 (hourly billing),
 * @method integer getDuration() Obtain Purchase duration in months, which is required if `PayType` is 0. Maximum value: 120 (this field is not required of global site users and is better to be hidden)
 * @method void setDuration(integer $Duration) Set Purchase duration in months, which is required if `PayType` is 0. Maximum value: 120 (this field is not required of global site users and is better to be hidden)
 * @method integer getCount() Obtain Quantity. Default value: 1. Maximum value: 10
 * @method void setCount(integer $Count) Set Quantity. Default value: 1. Maximum value: 10
 * @method integer getAutoRenew() Obtain Whether to auto-renew. Default value: 0. This flag does not take effect for hourly billed instances (this field should be hidden from global site users)
 * @method void setAutoRenew(integer $AutoRenew) Set Whether to auto-renew. Default value: 0. This flag does not take effect for hourly billed instances (this field should be hidden from global site users)
 * @method array getTags() Obtain Instance resource tags
 * @method void setTags(array $Tags) Set Instance resource tags
 * @method string getName() Obtain A custom instance name.
 * @method void setName(string $Name) Set A custom instance name.
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string Subscribed database type. Currently, MySQL is supported
     */
    public $Product;

    /**
     * @var integer Instance billing mode, which is always 1 (hourly billing),
     */
    public $PayType;

    /**
     * @var integer Purchase duration in months, which is required if `PayType` is 0. Maximum value: 120 (this field is not required of global site users and is better to be hidden)
     */
    public $Duration;

    /**
     * @var integer Quantity. Default value: 1. Maximum value: 10
     */
    public $Count;

    /**
     * @var integer Whether to auto-renew. Default value: 0. This flag does not take effect for hourly billed instances (this field should be hidden from global site users)
     */
    public $AutoRenew;

    /**
     * @var array Instance resource tags
     */
    public $Tags;

    /**
     * @var string A custom instance name.
     */
    public $Name;

    /**
     * @param string $Product Subscribed database type. Currently, MySQL is supported
     * @param integer $PayType Instance billing mode, which is always 1 (hourly billing),
     * @param integer $Duration Purchase duration in months, which is required if `PayType` is 0. Maximum value: 120 (this field is not required of global site users and is better to be hidden)
     * @param integer $Count Quantity. Default value: 1. Maximum value: 10
     * @param integer $AutoRenew Whether to auto-renew. Default value: 0. This flag does not take effect for hourly billed instances (this field should be hidden from global site users)
     * @param array $Tags Instance resource tags
     * @param string $Name A custom instance name.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
