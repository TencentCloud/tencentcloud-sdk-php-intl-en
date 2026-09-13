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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Payment result
 *
 * @method string getStatus() Obtain <p>The status of the payment</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>failure: Failure.</li></ul>
 * @method void setStatus(string $Status) Set <p>The status of the payment</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>failure: Failure.</li></ul>
 * @method string getFailureReason() Obtain <p>The reason why the payment has been declined. e.g.card_declined</p>
 * @method void setFailureReason(string $FailureReason) Set <p>The reason why the payment has been declined. e.g.card_declined</p>
 * @method boolean getThreeDomainSecure() Obtain <p>Whether the 3DS has been used in the payment,  enumeration value:</p><ul><li>Yes: true</li><li>No: false</li></ul>
 * @method void setThreeDomainSecure(boolean $ThreeDomainSecure) Set <p>Whether the 3DS has been used in the payment,  enumeration value:</p><ul><li>Yes: true</li><li>No: false</li></ul>
 * @method string getECICode() Obtain <p>The ECI code returned when 3DS used</p>
 * @method void setECICode(string $ECICode) Set <p>The ECI code returned when 3DS used</p>
 * @method string getAVSCode() Obtain <p>Response code from the AVS used for address verification</p>
 * @method void setAVSCode(string $AVSCode) Set <p>Response code from the AVS used for address verification</p>
 * @method string getCVCCode() Obtain <p>Response code from the CVC used for payment authenticity</p>
 * @method void setCVCCode(string $CVCCode) Set <p>Response code from the CVC used for payment authenticity</p>
 */
class PaymentResult extends AbstractModel
{
    /**
     * @var string <p>The status of the payment</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>failure: Failure.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>The reason why the payment has been declined. e.g.card_declined</p>
     */
    public $FailureReason;

    /**
     * @var boolean <p>Whether the 3DS has been used in the payment,  enumeration value:</p><ul><li>Yes: true</li><li>No: false</li></ul>
     */
    public $ThreeDomainSecure;

    /**
     * @var string <p>The ECI code returned when 3DS used</p>
     */
    public $ECICode;

    /**
     * @var string <p>Response code from the AVS used for address verification</p>
     */
    public $AVSCode;

    /**
     * @var string <p>Response code from the CVC used for payment authenticity</p>
     */
    public $CVCCode;

    /**
     * @param string $Status <p>The status of the payment</p><p>Enumeration values: </p><ul><li>success: Success, </li><li>failure: Failure.</li></ul>
     * @param string $FailureReason <p>The reason why the payment has been declined. e.g.card_declined</p>
     * @param boolean $ThreeDomainSecure <p>Whether the 3DS has been used in the payment,  enumeration value:</p><ul><li>Yes: true</li><li>No: false</li></ul>
     * @param string $ECICode <p>The ECI code returned when 3DS used</p>
     * @param string $AVSCode <p>Response code from the AVS used for address verification</p>
     * @param string $CVCCode <p>Response code from the CVC used for payment authenticity</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("ThreeDomainSecure",$param) and $param["ThreeDomainSecure"] !== null) {
            $this->ThreeDomainSecure = $param["ThreeDomainSecure"];
        }

        if (array_key_exists("ECICode",$param) and $param["ECICode"] !== null) {
            $this->ECICode = $param["ECICode"];
        }

        if (array_key_exists("AVSCode",$param) and $param["AVSCode"] !== null) {
            $this->AVSCode = $param["AVSCode"];
        }

        if (array_key_exists("CVCCode",$param) and $param["CVCCode"] !== null) {
            $this->CVCCode = $param["CVCCode"];
        }
    }
}
