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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateCustomerCredit request structure.
 *
 * @method float getAddedCredit() Obtain Specific value of the credit allocated to the customer
 * @method void setAddedCredit(float $AddedCredit) Set Specific value of the credit allocated to the customer
 * @method integer getClientUin() Obtain Customer UIN
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
 */
class AllocateCustomerCreditRequest extends AbstractModel
{
    /**
     * @var float Specific value of the credit allocated to the customer
     */
    public $AddedCredit;

    /**
     * @var integer Customer UIN
     */
    public $ClientUin;

    /**
     * @param float $AddedCredit Specific value of the credit allocated to the customer
     * @param integer $ClientUin Customer UIN
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
        if (array_key_exists("AddedCredit",$param) and $param["AddedCredit"] !== null) {
            $this->AddedCredit = $param["AddedCredit"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }
    }
}
