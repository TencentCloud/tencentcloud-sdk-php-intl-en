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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubscribe request structure.
 *
 * @method string getProduct() Obtain Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, and tdsqlpercona are supported.
 * @method void setProduct(string $Product) Set Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, and tdsqlpercona are supported.
 * @method integer getPayType() Obtain Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method void setPayType(integer $PayType) Set Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method integer getDuration() Obtain Purchase duration. This field needs to be filled in when the payType is monthly subscription. The unit is month. Value range: 1-120. Default value: 1.
 * @method void setDuration(integer $Duration) Set Purchase duration. This field needs to be filled in when the payType is monthly subscription. The unit is month. Value range: 1-120. Default value: 1.
 * @method integer getAutoRenew() Obtain Whether to renew automatically. This field needs to be filled in when the payType is monthly subscription. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled). Automatic renewal is not performed by default. This flag is invalid for pay-as-you-go.
 * @method void setAutoRenew(integer $AutoRenew) Set Whether to renew automatically. This field needs to be filled in when the payType is monthly subscription. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled). Automatic renewal is not performed by default. This flag is invalid for pay-as-you-go.
 * @method integer getCount() Obtain Quantity. Default value: 1. Maximum value: 10.
 * @method void setCount(integer $Count) Set Quantity. Default value: 1. Maximum value: 10.
 * @method array getTags() Obtain Instance resource tags
 * @method void setTags(array $Tags) Set Instance resource tags
 * @method string getName() Obtain Custom task name
 * @method void setName(string $Name) Set Custom task name
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, and tdsqlpercona are supported.
     */
    public $Product;

    /**
     * @var integer Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     */
    public $PayType;

    /**
     * @var integer Purchase duration. This field needs to be filled in when the payType is monthly subscription. The unit is month. Value range: 1-120. Default value: 1.
     */
    public $Duration;

    /**
     * @var integer Whether to renew automatically. This field needs to be filled in when the payType is monthly subscription. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled). Automatic renewal is not performed by default. This flag is invalid for pay-as-you-go.
     */
    public $AutoRenew;

    /**
     * @var integer Quantity. Default value: 1. Maximum value: 10.
     */
    public $Count;

    /**
     * @var array Instance resource tags
     */
    public $Tags;

    /**
     * @var string Custom task name
     */
    public $Name;

    /**
     * @param string $Product Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, and tdsqlpercona are supported.
     * @param integer $PayType Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     * @param integer $Duration Purchase duration. This field needs to be filled in when the payType is monthly subscription. The unit is month. Value range: 1-120. Default value: 1.
     * @param integer $AutoRenew Whether to renew automatically. This field needs to be filled in when the payType is monthly subscription. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled). Automatic renewal is not performed by default. This flag is invalid for pay-as-you-go.
     * @param integer $Count Quantity. Default value: 1. Maximum value: 10.
     * @param array $Tags Instance resource tags
     * @param string $Name Custom task name
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

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
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
