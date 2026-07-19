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
 * UnbindMNPPaymentMerchant request structure.
 *
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getTeamId() Obtain <p>Mini program team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Mini program team ID.</p>
 * @method string getID() Obtain <p>Primary key ID, obtained from the API response of approving the merchant binding of a mini program team.</p>
 * @method void setID(string $ID) Set <p>Primary key ID, obtained from the API response of approving the merchant binding of a mini program team.</p>
 */
class UnbindMNPPaymentMerchantRequest extends AbstractModel
{
    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Mini program team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Primary key ID, obtained from the API response of approving the merchant binding of a mini program team.</p>
     */
    public $ID;

    /**
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $TeamId <p>Mini program team ID.</p>
     * @param string $ID <p>Primary key ID, obtained from the API response of approving the merchant binding of a mini program team.</p>
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
