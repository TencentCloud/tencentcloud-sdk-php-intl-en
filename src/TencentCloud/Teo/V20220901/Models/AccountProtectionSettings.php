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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Account protection configuration.
 *
 * @method string getEnabled() Obtain <p>Account protection feature switch.</p><p>Enumeration values: </p><ul><li>on: Enable;</li><li>off: Disable.</li></ul><p>Default value: off.</p>
 * @method void setEnabled(string $Enabled) Set <p>Account protection feature switch.</p><p>Enumeration values: </p><ul><li>on: Enable;</li><li>off: Disable.</li></ul><p>Default value: off.</p>
 * @method string getRequestPurpose() Obtain <p>Request target. Used to identify the business operation scenario the request belongs to.</p> <p>Enumeration values:</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD: request to change the password when the original password is known;</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION: request to modify the account security question;</li> <li>ACCOUNT.CHECK_EXISTENCE: request to verify whether the account exists, commonly used for pre-verification after entering an email or phone number on the login or registration page;</li> <li>ACCOUNT.LOGIN: request to log in to an account;</li> <li>ACCOUNT.REGISTER: request to sign up for a new account;</li> <li>ACCOUNT.RESET_PASSWORD: request to reset the password, usually by verifying identity through email or SMS and then setting a new password;</li> <li>ACCOUNT.UPDATE: request to modify account association information, such as phone number, email, payment card number, shipping address, etc.;</li> <li>ASSET.CHECK_GIFTCARD_BALANCE: request to query the gift card balance by card number and other information;</li> <li>ASSET.CHECK_LOYALTY_POINTS: request to query the account point balance;</li> <li>ASSET.REDEEM_CODE: request to exchange rights and interests using a redemption code;</li> <li>BROWSE.QUERY: request for in-site search of products or services;</li> <li>PAYMENT.ADD_TO_CART: request to add merchandise to the shopping cart;</li> <li>PAYMENT.GET_METHODS: request to obtain the list of payment methods bound to the account;</li> <li>PAYMENT.MAKE_PAYMENT: request to submit a payment, settlement, or fund transfer.</li> </ul>
 * @method void setRequestPurpose(string $RequestPurpose) Set <p>Request target. Used to identify the business operation scenario the request belongs to.</p> <p>Enumeration values:</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD: request to change the password when the original password is known;</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION: request to modify the account security question;</li> <li>ACCOUNT.CHECK_EXISTENCE: request to verify whether the account exists, commonly used for pre-verification after entering an email or phone number on the login or registration page;</li> <li>ACCOUNT.LOGIN: request to log in to an account;</li> <li>ACCOUNT.REGISTER: request to sign up for a new account;</li> <li>ACCOUNT.RESET_PASSWORD: request to reset the password, usually by verifying identity through email or SMS and then setting a new password;</li> <li>ACCOUNT.UPDATE: request to modify account association information, such as phone number, email, payment card number, shipping address, etc.;</li> <li>ASSET.CHECK_GIFTCARD_BALANCE: request to query the gift card balance by card number and other information;</li> <li>ASSET.CHECK_LOYALTY_POINTS: request to query the account point balance;</li> <li>ASSET.REDEEM_CODE: request to exchange rights and interests using a redemption code;</li> <li>BROWSE.QUERY: request for in-site search of products or services;</li> <li>PAYMENT.ADD_TO_CART: request to add merchandise to the shopping cart;</li> <li>PAYMENT.GET_METHODS: request to obtain the list of payment methods bound to the account;</li> <li>PAYMENT.MAKE_PAYMENT: request to submit a payment, settlement, or fund transfer.</li> </ul>
 * @method string getUserIDSource() Obtain <p>The location of the user identity in the request source, where key is replaced with the actual parameter name.</p><p>Valid values:</p><ul><li>http.request.cookies["key"]: Obtain the Cookie value named key from the Cookie;</li><li>http.request.headers["key"]: Obtain the header value named key from the request header;</li><li>http.request.uri.args["key"]: Obtain the parameter value named key from the URL query parameter.</li></ul>
 * @method void setUserIDSource(string $UserIDSource) Set <p>The location of the user identity in the request source, where key is replaced with the actual parameter name.</p><p>Valid values:</p><ul><li>http.request.cookies["key"]: Obtain the Cookie value named key from the Cookie;</li><li>http.request.headers["key"]: Obtain the header value named key from the request header;</li><li>http.request.uri.args["key"]: Obtain the parameter value named key from the URL query parameter.</li></ul>
 * @method UserRiskProfile getUserRiskProfile() Obtain <p>User Risk Level configuration.</p>
 * @method void setUserRiskProfile(UserRiskProfile $UserRiskProfile) Set <p>User Risk Level configuration.</p>
 */
class AccountProtectionSettings extends AbstractModel
{
    /**
     * @var string <p>Account protection feature switch.</p><p>Enumeration values: </p><ul><li>on: Enable;</li><li>off: Disable.</li></ul><p>Default value: off.</p>
     */
    public $Enabled;

    /**
     * @var string <p>Request target. Used to identify the business operation scenario the request belongs to.</p> <p>Enumeration values:</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD: request to change the password when the original password is known;</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION: request to modify the account security question;</li> <li>ACCOUNT.CHECK_EXISTENCE: request to verify whether the account exists, commonly used for pre-verification after entering an email or phone number on the login or registration page;</li> <li>ACCOUNT.LOGIN: request to log in to an account;</li> <li>ACCOUNT.REGISTER: request to sign up for a new account;</li> <li>ACCOUNT.RESET_PASSWORD: request to reset the password, usually by verifying identity through email or SMS and then setting a new password;</li> <li>ACCOUNT.UPDATE: request to modify account association information, such as phone number, email, payment card number, shipping address, etc.;</li> <li>ASSET.CHECK_GIFTCARD_BALANCE: request to query the gift card balance by card number and other information;</li> <li>ASSET.CHECK_LOYALTY_POINTS: request to query the account point balance;</li> <li>ASSET.REDEEM_CODE: request to exchange rights and interests using a redemption code;</li> <li>BROWSE.QUERY: request for in-site search of products or services;</li> <li>PAYMENT.ADD_TO_CART: request to add merchandise to the shopping cart;</li> <li>PAYMENT.GET_METHODS: request to obtain the list of payment methods bound to the account;</li> <li>PAYMENT.MAKE_PAYMENT: request to submit a payment, settlement, or fund transfer.</li> </ul>
     */
    public $RequestPurpose;

    /**
     * @var string <p>The location of the user identity in the request source, where key is replaced with the actual parameter name.</p><p>Valid values:</p><ul><li>http.request.cookies["key"]: Obtain the Cookie value named key from the Cookie;</li><li>http.request.headers["key"]: Obtain the header value named key from the request header;</li><li>http.request.uri.args["key"]: Obtain the parameter value named key from the URL query parameter.</li></ul>
     */
    public $UserIDSource;

    /**
     * @var UserRiskProfile <p>User Risk Level configuration.</p>
     */
    public $UserRiskProfile;

    /**
     * @param string $Enabled <p>Account protection feature switch.</p><p>Enumeration values: </p><ul><li>on: Enable;</li><li>off: Disable.</li></ul><p>Default value: off.</p>
     * @param string $RequestPurpose <p>Request target. Used to identify the business operation scenario the request belongs to.</p> <p>Enumeration values:</p> <ul> <li>ACCOUNT.CHANGE_PASSWORD: request to change the password when the original password is known;</li> <li>ACCOUNT.CHANGE_SECURITY_QUESTION: request to modify the account security question;</li> <li>ACCOUNT.CHECK_EXISTENCE: request to verify whether the account exists, commonly used for pre-verification after entering an email or phone number on the login or registration page;</li> <li>ACCOUNT.LOGIN: request to log in to an account;</li> <li>ACCOUNT.REGISTER: request to sign up for a new account;</li> <li>ACCOUNT.RESET_PASSWORD: request to reset the password, usually by verifying identity through email or SMS and then setting a new password;</li> <li>ACCOUNT.UPDATE: request to modify account association information, such as phone number, email, payment card number, shipping address, etc.;</li> <li>ASSET.CHECK_GIFTCARD_BALANCE: request to query the gift card balance by card number and other information;</li> <li>ASSET.CHECK_LOYALTY_POINTS: request to query the account point balance;</li> <li>ASSET.REDEEM_CODE: request to exchange rights and interests using a redemption code;</li> <li>BROWSE.QUERY: request for in-site search of products or services;</li> <li>PAYMENT.ADD_TO_CART: request to add merchandise to the shopping cart;</li> <li>PAYMENT.GET_METHODS: request to obtain the list of payment methods bound to the account;</li> <li>PAYMENT.MAKE_PAYMENT: request to submit a payment, settlement, or fund transfer.</li> </ul>
     * @param string $UserIDSource <p>The location of the user identity in the request source, where key is replaced with the actual parameter name.</p><p>Valid values:</p><ul><li>http.request.cookies["key"]: Obtain the Cookie value named key from the Cookie;</li><li>http.request.headers["key"]: Obtain the header value named key from the request header;</li><li>http.request.uri.args["key"]: Obtain the parameter value named key from the URL query parameter.</li></ul>
     * @param UserRiskProfile $UserRiskProfile <p>User Risk Level configuration.</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RequestPurpose",$param) and $param["RequestPurpose"] !== null) {
            $this->RequestPurpose = $param["RequestPurpose"];
        }

        if (array_key_exists("UserIDSource",$param) and $param["UserIDSource"] !== null) {
            $this->UserIDSource = $param["UserIDSource"];
        }

        if (array_key_exists("UserRiskProfile",$param) and $param["UserRiskProfile"] !== null) {
            $this->UserRiskProfile = new UserRiskProfile();
            $this->UserRiskProfile->deserialize($param["UserRiskProfile"]);
        }
    }
}
