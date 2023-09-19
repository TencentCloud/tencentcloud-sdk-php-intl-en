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
 * TDE u200dconfiguration
 *
 * @method string getEncryption() Obtain TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method void setEncryption(string $Encryption) Set TDE status. Valid values: `enable` (enabled), `disable` (disabled).
 * @method string getCertificateAttribution() Obtain Certificate u200downership. Valid values: `self` (u200dcertificate of the this account), `others` (u200dcertificate of the other account), `none` (no certificate).
 * @method void setCertificateAttribution(string $CertificateAttribution) Set Certificate u200downership. Valid values: `self` (u200dcertificate of the this account), `others` (u200dcertificate of the other account), `none` (no certificate).
 * @method string getQuoteUin() Obtain ID of the u200dother referenced root account when enabling TDE
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 * @method void setQuoteUin(string $QuoteUin) Set ID of the u200dother referenced root account when enabling TDE
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
 */
class TDEConfigAttribute extends AbstractModel
{
    /**
     * @var string TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     */
    public $Encryption;

    /**
     * @var string Certificate u200downership. Valid values: `self` (u200dcertificate of the this account), `others` (u200dcertificate of the other account), `none` (no certificate).
     */
    public $CertificateAttribution;

    /**
     * @var string ID of the u200dother referenced root account when enabling TDE
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
     */
    public $QuoteUin;

    /**
     * @param string $Encryption TDE status. Valid values: `enable` (enabled), `disable` (disabled).
     * @param string $CertificateAttribution Certificate u200downership. Valid values: `self` (u200dcertificate of the this account), `others` (u200dcertificate of the other account), `none` (no certificate).
     * @param string $QuoteUin ID of the u200dother referenced root account when enabling TDE
Note: u200dThis field may returnu200d·nullu200d, indicating that no valid values can be obtained.
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
