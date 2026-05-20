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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain validation result of the certificate
 *
 * @method string getDomain() Obtain Domain names bound to the certificate.
 * @method void setDomain(string $Domain) Set Domain names bound to the certificate.
 * @method string getVerifyType() Obtain Domain name validation type. Value is DNS, FILE, DNS_AUTO, DNS_PROXY, or FILE_PROXY.
 * @method void setVerifyType(string $VerifyType) Set Domain name validation type. Value is DNS, FILE, DNS_AUTO, DNS_PROXY, or FILE_PROXY.
 * @method integer getLocalCheck() Obtain Tencent Cloud detection result, Value: 1 (verified); -1 (rate limited or txt record not found); -2 (txt record not match); -3 (ns record not found); -4 (file not found); -5 (file not match); -6 (cname record not found); -7 (cname record not match); -8 (ns record not found); -9 (file not found); -10 (file not match).

 * @method void setLocalCheck(integer $LocalCheck) Set Tencent Cloud detection result, Value: 1 (verified); -1 (rate limited or txt record not found); -2 (txt record not match); -3 (ns record not found); -4 (file not found); -5 (file not match); -6 (cname record not found); -7 (cname record not match); -8 (ns record not found); -9 (file not found); -10 (file not match).

 * @method integer getCaCheck() Obtain CA check result. Value: -1 (detection failed); 2 (detection passed).
 * @method void setCaCheck(integer $CaCheck) Set CA check result. Value: -1 (detection failed); 2 (detection passed).
 * @method string getLocalCheckFailReason() Obtain Check failure reasons. Description of the LocalCheck status.
 * @method void setLocalCheckFailReason(string $LocalCheckFailReason) Set Check failure reasons. Description of the LocalCheck status.
 * @method array getCheckValue() Obtain Detected value.
 * @method void setCheckValue(array $CheckValue) Set Detected value.
 * @method boolean getFrequently() Obtain Whether the request is rate-limited. Valid values: false (not rate-limited); true (rate-limited).
 * @method void setFrequently(boolean $Frequently) Set Whether the request is rate-limited. Valid values: false (not rate-limited); true (rate-limited).
 * @method boolean getIssued() Obtain Whether the certificate has been issued. Value: false (not issued); true (issued).
 * @method void setIssued(boolean $Issued) Set Whether the certificate has been issued. Value: false (not issued); true (issued).
 */
class DomainValidationResult extends AbstractModel
{
    /**
     * @var string Domain names bound to the certificate.
     */
    public $Domain;

    /**
     * @var string Domain name validation type. Value is DNS, FILE, DNS_AUTO, DNS_PROXY, or FILE_PROXY.
     */
    public $VerifyType;

    /**
     * @var integer Tencent Cloud detection result, Value: 1 (verified); -1 (rate limited or txt record not found); -2 (txt record not match); -3 (ns record not found); -4 (file not found); -5 (file not match); -6 (cname record not found); -7 (cname record not match); -8 (ns record not found); -9 (file not found); -10 (file not match).

     */
    public $LocalCheck;

    /**
     * @var integer CA check result. Value: -1 (detection failed); 2 (detection passed).
     */
    public $CaCheck;

    /**
     * @var string Check failure reasons. Description of the LocalCheck status.
     */
    public $LocalCheckFailReason;

    /**
     * @var array Detected value.
     */
    public $CheckValue;

    /**
     * @var boolean Whether the request is rate-limited. Valid values: false (not rate-limited); true (rate-limited).
     */
    public $Frequently;

    /**
     * @var boolean Whether the certificate has been issued. Value: false (not issued); true (issued).
     */
    public $Issued;

    /**
     * @param string $Domain Domain names bound to the certificate.
     * @param string $VerifyType Domain name validation type. Value is DNS, FILE, DNS_AUTO, DNS_PROXY, or FILE_PROXY.
     * @param integer $LocalCheck Tencent Cloud detection result, Value: 1 (verified); -1 (rate limited or txt record not found); -2 (txt record not match); -3 (ns record not found); -4 (file not found); -5 (file not match); -6 (cname record not found); -7 (cname record not match); -8 (ns record not found); -9 (file not found); -10 (file not match).

     * @param integer $CaCheck CA check result. Value: -1 (detection failed); 2 (detection passed).
     * @param string $LocalCheckFailReason Check failure reasons. Description of the LocalCheck status.
     * @param array $CheckValue Detected value.
     * @param boolean $Frequently Whether the request is rate-limited. Valid values: false (not rate-limited); true (rate-limited).
     * @param boolean $Issued Whether the certificate has been issued. Value: false (not issued); true (issued).
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("LocalCheck",$param) and $param["LocalCheck"] !== null) {
            $this->LocalCheck = $param["LocalCheck"];
        }

        if (array_key_exists("CaCheck",$param) and $param["CaCheck"] !== null) {
            $this->CaCheck = $param["CaCheck"];
        }

        if (array_key_exists("LocalCheckFailReason",$param) and $param["LocalCheckFailReason"] !== null) {
            $this->LocalCheckFailReason = $param["LocalCheckFailReason"];
        }

        if (array_key_exists("CheckValue",$param) and $param["CheckValue"] !== null) {
            $this->CheckValue = $param["CheckValue"];
        }

        if (array_key_exists("Frequently",$param) and $param["Frequently"] !== null) {
            $this->Frequently = $param["Frequently"];
        }

        if (array_key_exists("Issued",$param) and $param["Issued"] !== null) {
            $this->Issued = $param["Issued"];
        }
    }
}
