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
 * RequestPaymentMerchantBinding request structure.
 *
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getTeamId() Obtain <p>Mini program appid.</p>
 * @method void setTeamId(string $TeamId) Set <p>Mini program appid.</p>
 * @method string getMerchantID() Obtain <p>Merchant ID.</p>
 * @method void setMerchantID(string $MerchantID) Set <p>Merchant ID.</p>
 * @method string getMerchantName() Obtain <p>Merchant name.</p>
 * @method void setMerchantName(string $MerchantName) Set <p>Merchant name.</p>
 */
class RequestPaymentMerchantBindingRequest extends AbstractModel
{
    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Mini program appid.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Merchant ID.</p>
     */
    public $MerchantID;

    /**
     * @var string <p>Merchant name.</p>
     */
    public $MerchantName;

    /**
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $TeamId <p>Mini program appid.</p>
     * @param string $MerchantID <p>Merchant ID.</p>
     * @param string $MerchantName <p>Merchant name.</p>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("MerchantID",$param) and $param["MerchantID"] !== null) {
            $this->MerchantID = $param["MerchantID"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }
    }
}
