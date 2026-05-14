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
 * GetHardwareInfo request structure.
 *
 * @method string getVendor() Obtain Vendor name
 * @method void setVendor(string $Vendor) Set Vendor name
 * @method string getSN() Obtain Device SN serial number
 * @method void setSN(string $SN) Set Device SN serial number
 */
class GetHardwareInfoRequest extends AbstractModel
{
    /**
     * @var string Vendor name
     */
    public $Vendor;

    /**
     * @var string Device SN serial number
     */
    public $SN;

    /**
     * @param string $Vendor Vendor name
     * @param string $SN Device SN serial number
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }
    }
}
