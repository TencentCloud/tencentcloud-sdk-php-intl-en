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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDE configuration
 *
 * @method string getEncryption() Obtain TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method void setEncryption(string $Encryption) Set TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method string getCertificateAttribution() Obtain Certificate ownership. Valid values: `self` (certificate of the this account), `others` (certificate of the other account), `none` (no certificate).
 * @method void setCertificateAttribution(string $CertificateAttribution) Set Certificate ownership. Valid values: `self` (certificate of the this account), `others` (certificate of the other account), `none` (no certificate).
 * @method string getQuoteUin() Obtain Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuoteUin(string $QuoteUin) Set Note: This field may return null, indicating that no valid values can be obtained.
 */
class TDEConfigAttribute extends AbstractModel
{
    /**
     * @var string TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     */
    public $Encryption;

    /**
     * @var string Certificate ownership. Valid values: `self` (certificate of the this account), `others` (certificate of the other account), `none` (no certificate).
     */
    public $CertificateAttribution;

    /**
     * @var string Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QuoteUin;

    /**
     * @param string $Encryption TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     * @param string $CertificateAttribution Certificate ownership. Valid values: `self` (certificate of the this account), `others` (certificate of the other account), `none` (no certificate).
     * @param string $QuoteUin Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CertificateAttribution",$param) and $param["CertificateAttribution"] !== null) {
            $this->CertificateAttribution = $param["CertificateAttribution"];
        }

        if (array_key_exists("QuoteUin",$param) and $param["QuoteUin"] !== null) {
            $this->QuoteUin = $param["QuoteUin"];
        }
    }
}
