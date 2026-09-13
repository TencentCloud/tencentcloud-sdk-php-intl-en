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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccount event details
 *
 * @method User getUserInfo() Obtain <p>The detail information of the user</p>
 * @method void setUserInfo(User $UserInfo) Set <p>The detail information of the user</p>
 * @method Person getPerson() Obtain <p>The personal information of the account when registered</p>
 * @method void setPerson(Person $Person) Set <p>The personal information of the account when registered</p>
 * @method Address getBillingAddress() Obtain <p>The billing address the user provided when registered</p>
 * @method void setBillingAddress(Address $BillingAddress) Set <p>The billing address the user provided when registered</p>
 * @method Address getDeliveryAddress() Obtain <p>The delivery address the user provided when registered</p>
 * @method void setDeliveryAddress(Address $DeliveryAddress) Set <p>The delivery address the user provided when registered</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class ModifyAccountEvent extends AbstractModel
{
    /**
     * @var User <p>The detail information of the user</p>
     */
    public $UserInfo;

    /**
     * @var Person <p>The personal information of the account when registered</p>
     */
    public $Person;

    /**
     * @var Address <p>The billing address the user provided when registered</p>
     */
    public $BillingAddress;

    /**
     * @var Address <p>The delivery address the user provided when registered</p>
     */
    public $DeliveryAddress;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param User $UserInfo <p>The detail information of the user</p>
     * @param Person $Person <p>The personal information of the account when registered</p>
     * @param Address $BillingAddress <p>The billing address the user provided when registered</p>
     * @param Address $DeliveryAddress <p>The delivery address the user provided when registered</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new Person();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("BillingAddress",$param) and $param["BillingAddress"] !== null) {
            $this->BillingAddress = new Address();
            $this->BillingAddress->deserialize($param["BillingAddress"]);
        }

        if (array_key_exists("DeliveryAddress",$param) and $param["DeliveryAddress"] !== null) {
            $this->DeliveryAddress = new Address();
            $this->DeliveryAddress->deserialize($param["DeliveryAddress"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
