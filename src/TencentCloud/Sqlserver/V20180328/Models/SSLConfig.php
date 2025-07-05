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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getEncryption() Obtain 
 * @method void setEncryption(string $Encryption) Set 
 * @method string getSSLValidityPeriod() Obtain 
 * @method void setSSLValidityPeriod(string $SSLValidityPeriod) Set 
 * @method integer getSSLValidity() Obtain 
 * @method void setSSLValidity(integer $SSLValidity) Set 
 */
class SSLConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Encryption;

    /**
     * @var string 
     */
    public $SSLValidityPeriod;

    /**
     * @var integer 
     */
    public $SSLValidity;

    /**
     * @param string $Encryption 
     * @param string $SSLValidityPeriod 
     * @param integer $SSLValidity 
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
        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("SSLValidityPeriod",$param) and $param["SSLValidityPeriod"] !== null) {
            $this->SSLValidityPeriod = $param["SSLValidityPeriod"];
        }

        if (array_key_exists("SSLValidity",$param) and $param["SSLValidity"] !== null) {
            $this->SSLValidity = $param["SSLValidity"];
        }
    }
}
