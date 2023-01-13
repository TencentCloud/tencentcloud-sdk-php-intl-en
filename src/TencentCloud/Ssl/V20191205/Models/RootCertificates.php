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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Root certificate
 *
 * @method string getSign() Obtain Chinese SM signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSign(string $Sign) Set Chinese SM signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncrypt() Obtain Chinese SM encryption certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncrypt(string $Encrypt) Set Chinese SM encryption certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStandard() Obtain Standard certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandard(string $Standard) Set Standard certificate
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RootCertificates extends AbstractModel
{
    /**
     * @var string Chinese SM signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sign;

    /**
     * @var string Chinese SM encryption certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Encrypt;

    /**
     * @var string Standard certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Standard;

    /**
     * @param string $Sign Chinese SM signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Encrypt Chinese SM encryption certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Standard Standard certificate
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }
    }
}
