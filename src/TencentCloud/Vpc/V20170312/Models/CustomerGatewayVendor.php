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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customer gateway vendor information object.
 *
 * @method string getPlatform() Obtain Platform.
 * @method void setPlatform(string $Platform) Set Platform.
 * @method string getSoftwareVersion() Obtain Software version.
 * @method void setSoftwareVersion(string $SoftwareVersion) Set Software version.
 * @method string getVendorName() Obtain Vendor name.
 * @method void setVendorName(string $VendorName) Set Vendor name.
 */
class CustomerGatewayVendor extends AbstractModel
{
    /**
     * @var string Platform.
     */
    public $Platform;

    /**
     * @var string Software version.
     */
    public $SoftwareVersion;

    /**
     * @var string Vendor name.
     */
    public $VendorName;

    /**
     * @param string $Platform Platform.
     * @param string $SoftwareVersion Software version.
     * @param string $VendorName Vendor name.
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SoftwareVersion",$param) and $param["SoftwareVersion"] !== null) {
            $this->SoftwareVersion = $param["SoftwareVersion"];
        }

        if (array_key_exists("VendorName",$param) and $param["VendorName"] !== null) {
            $this->VendorName = $param["VendorName"];
        }
    }
}
