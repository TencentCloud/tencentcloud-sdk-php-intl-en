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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters structure for the superapp approving the merchant binding of a mini program team.
 *
 * @method boolean getResult() Obtain <p>API response result. A value of true indicates that the operation succeeded.</p>
 * @method void setResult(boolean $Result) Set <p>API response result. A value of true indicates that the operation succeeded.</p>
 * @method integer getID() Obtain <p>The unique merchant binding ID of the mini program team, used for the superapp to unbind the merchant.</p>
 * @method void setID(integer $ID) Set <p>The unique merchant binding ID of the mini program team, used for the superapp to unbind the merchant.</p>
 */
class ApprovalPaymentV2MerchantBindRes extends AbstractModel
{
    /**
     * @var boolean <p>API response result. A value of true indicates that the operation succeeded.</p>
     */
    public $Result;

    /**
     * @var integer <p>The unique merchant binding ID of the mini program team, used for the superapp to unbind the merchant.</p>
     */
    public $ID;

    /**
     * @param boolean $Result <p>API response result. A value of true indicates that the operation succeeded.</p>
     * @param integer $ID <p>The unique merchant binding ID of the mini program team, used for the superapp to unbind the merchant.</p>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
