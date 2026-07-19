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
 * DisableMNPPayment request structure.
 *
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getApplicationId() Obtain <p>Superapp ID.</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID.</p>
 * @method integer getID() Obtain <p>Primary key ID, obtained from the API response of approving mini program payment activation.</p>
 * @method void setID(integer $ID) Set <p>Primary key ID, obtained from the API response of approving mini program payment activation.</p>
 */
class DisableMNPPaymentRequest extends AbstractModel
{
    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Superapp ID.</p>
     */
    public $ApplicationId;

    /**
     * @var integer <p>Primary key ID, obtained from the API response of approving mini program payment activation.</p>
     */
    public $ID;

    /**
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $ApplicationId <p>Superapp ID.</p>
     * @param integer $ID <p>Primary key ID, obtained from the API response of approving mini program payment activation.</p>
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
