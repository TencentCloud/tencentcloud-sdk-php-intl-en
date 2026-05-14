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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create Hardware input parameters
 *
 * @method string getSN() Obtain Hardware Serial Number
 * @method void setSN(string $SN) Set Hardware Serial Number
 * @method integer getLicenseChargingMode() Obtain license billing mode:
1. Tenant payment
2: Manufacturer monthly payment
3: Manufacturer permanent license
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) Set license billing mode:
1. Tenant payment
2: Manufacturer monthly payment
3: Manufacturer permanent license
 * @method string getDescription() Obtain Device description
 * @method void setDescription(string $Description) Set Device description
 * @method string getHardwareId() Obtain Hardware ID. No need to pass as an input parameter.
 * @method void setHardwareId(string $HardwareId) Set Hardware ID. No need to pass as an input parameter.
 */
class Hardware extends AbstractModel
{
    /**
     * @var string Hardware Serial Number
     */
    public $SN;

    /**
     * @var integer license billing mode:
1. Tenant payment
2: Manufacturer monthly payment
3: Manufacturer permanent license
     */
    public $LicenseChargingMode;

    /**
     * @var string Device description
     */
    public $Description;

    /**
     * @var string Hardware ID. No need to pass as an input parameter.
     */
    public $HardwareId;

    /**
     * @param string $SN Hardware Serial Number
     * @param integer $LicenseChargingMode license billing mode:
1. Tenant payment
2: Manufacturer monthly payment
3: Manufacturer permanent license
     * @param string $Description Device description
     * @param string $HardwareId Hardware ID. No need to pass as an input parameter.
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
        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }
    }
}
