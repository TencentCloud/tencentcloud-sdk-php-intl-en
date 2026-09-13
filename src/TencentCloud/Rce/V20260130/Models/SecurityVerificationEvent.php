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
 * SecurityVerification event details
 *
 * @method string getVerificationEvent() Obtain <p>The event type being verified</p><p>Enumeration values:</p><ul><li>register</li><li>login</li><li>modify_account</li><li>modify_password</li><li>create_order</li><li>transaction</li><li>modify_order</li><li>withdraw</li><li>add_promotion</li><li>redeem</li></ul>
 * @method void setVerificationEvent(string $VerificationEvent) Set <p>The event type being verified</p><p>Enumeration values:</p><ul><li>register</li><li>login</li><li>modify_account</li><li>modify_password</li><li>create_order</li><li>transaction</li><li>modify_order</li><li>withdraw</li><li>add_promotion</li><li>redeem</li></ul>
 * @method string getVerificationType() Obtain <p>The type of security verification: sms, phone call, email, captcha, shared knowledge, human face, fingerprint, etc</p>
 * @method void setVerificationType(string $VerificationType) Set <p>The type of security verification: sms, phone call, email, captcha, shared knowledge, human face, fingerprint, etc</p>
 * @method string getVerificationContent() Obtain <p>The content of the security verifcation.This value should be passed when the verification type is set to sms, phone_call, email captcha or shared_knowledge</p>
 * @method void setVerificationContent(string $VerificationContent) Set <p>The content of the security verifcation.This value should be passed when the verification type is set to sms, phone_call, email captcha or shared_knowledge</p>
 * @method Result getVerificationResult() Obtain <p>The result of security verification</p>
 * @method void setVerificationResult(Result $VerificationResult) Set <p>The result of security verification</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class SecurityVerificationEvent extends AbstractModel
{
    /**
     * @var string <p>The event type being verified</p><p>Enumeration values:</p><ul><li>register</li><li>login</li><li>modify_account</li><li>modify_password</li><li>create_order</li><li>transaction</li><li>modify_order</li><li>withdraw</li><li>add_promotion</li><li>redeem</li></ul>
     */
    public $VerificationEvent;

    /**
     * @var string <p>The type of security verification: sms, phone call, email, captcha, shared knowledge, human face, fingerprint, etc</p>
     */
    public $VerificationType;

    /**
     * @var string <p>The content of the security verifcation.This value should be passed when the verification type is set to sms, phone_call, email captcha or shared_knowledge</p>
     */
    public $VerificationContent;

    /**
     * @var Result <p>The result of security verification</p>
     */
    public $VerificationResult;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $VerificationEvent <p>The event type being verified</p><p>Enumeration values:</p><ul><li>register</li><li>login</li><li>modify_account</li><li>modify_password</li><li>create_order</li><li>transaction</li><li>modify_order</li><li>withdraw</li><li>add_promotion</li><li>redeem</li></ul>
     * @param string $VerificationType <p>The type of security verification: sms, phone call, email, captcha, shared knowledge, human face, fingerprint, etc</p>
     * @param string $VerificationContent <p>The content of the security verifcation.This value should be passed when the verification type is set to sms, phone_call, email captcha or shared_knowledge</p>
     * @param Result $VerificationResult <p>The result of security verification</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("VerificationEvent",$param) and $param["VerificationEvent"] !== null) {
            $this->VerificationEvent = $param["VerificationEvent"];
        }

        if (array_key_exists("VerificationType",$param) and $param["VerificationType"] !== null) {
            $this->VerificationType = $param["VerificationType"];
        }

        if (array_key_exists("VerificationContent",$param) and $param["VerificationContent"] !== null) {
            $this->VerificationContent = $param["VerificationContent"];
        }

        if (array_key_exists("VerificationResult",$param) and $param["VerificationResult"] !== null) {
            $this->VerificationResult = new Result();
            $this->VerificationResult->deserialize($param["VerificationResult"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
