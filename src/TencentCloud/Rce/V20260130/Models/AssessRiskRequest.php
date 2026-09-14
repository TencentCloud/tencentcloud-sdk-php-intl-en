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
 * AssessRisk request structure.
 *
 * @method string getEventCode() Obtain <p>Event code. Used to specify the scenario node for business access.</p><p>Standard events under the account protection product include:</p><ul><li> login: Log in<p></p></li> <li>register: Register </li><li>sms: SMS </li><li>logout: Log out </li><li>modify_account: Modify account </li><li>modify_password: Modify password </li><li>security_verification: Security verification</li></ul><p>Standard events under the payment protection product include:</p><ul><li>create_order: Create an order </li><li>transaction: Transaction</li><li>charge_back: Chargeback</li></ul><p>Standard events under the promotion protection product include:</p><ul><li>add_promotion: Participate in promotions</li><li>redeem: Redeem a prize </li><li>withdraw: Withdraw</li><li>cust_event: Custom event, cust_xxx </li><li>scan_code: Scan a code </li><li>lucky_draw: Lucky draw </li><li>task: Complete a task </li><li>invitation: Invitation </li><li>claim_red_packet: Receive a red packet </li><li>browse: Browse</li></ul><p>Custom events can be evaluated for risk based on an agreement with RCE</p>
 * @method void setEventCode(string $EventCode) Set <p>Event code. Used to specify the scenario node for business access.</p><p>Standard events under the account protection product include:</p><ul><li> login: Log in<p></p></li> <li>register: Register </li><li>sms: SMS </li><li>logout: Log out </li><li>modify_account: Modify account </li><li>modify_password: Modify password </li><li>security_verification: Security verification</li></ul><p>Standard events under the payment protection product include:</p><ul><li>create_order: Create an order </li><li>transaction: Transaction</li><li>charge_back: Chargeback</li></ul><p>Standard events under the promotion protection product include:</p><ul><li>add_promotion: Participate in promotions</li><li>redeem: Redeem a prize </li><li>withdraw: Withdraw</li><li>cust_event: Custom event, cust_xxx </li><li>scan_code: Scan a code </li><li>lucky_draw: Lucky draw </li><li>task: Complete a task </li><li>invitation: Invitation </li><li>claim_red_packet: Receive a red packet </li><li>browse: Browse</li></ul><p>Custom events can be evaluated for risk based on an agreement with RCE</p>
 * @method string getEventTime() Obtain <p>The time when the event occurred</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with the ISO 8601 standard</p>
 * @method void setEventTime(string $EventTime) Set <p>The time when the event occurred</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with the ISO 8601 standard</p>
 * @method string getSessionId() Obtain <p>The user's current session ID used to associate with the actions before and after logging in. If UserId is not passed, SessionId is required. If missing, an empty string can be filled.</p>
 * @method void setSessionId(string $SessionId) Set <p>The user's current session ID used to associate with the actions before and after logging in. If UserId is not passed, SessionId is required. If missing, an empty string can be filled.</p>
 * @method string getDeviceToken() Obtain <p>Device fingerprint token, obtained after integration of the device fingerprint SDK into your website or application</p>
 * @method void setDeviceToken(string $DeviceToken) Set <p>Device fingerprint token, obtained after integration of the device fingerprint SDK into your website or application</p>
 * @method string getUserIp() Obtain <p>Client IP address (IPv4 or IPv6)</p>
 * @method void setUserIp(string $UserIp) Set <p>Client IP address (IPv4 or IPv6)</p>
 * @method EventDetail getEventDetail() Obtain <p>Event details. The event information is imported based on the event code you input.</p>
 * @method void setEventDetail(EventDetail $EventDetail) Set <p>Event details. The event information is imported based on the event code you input.</p>
 * @method string getUserId() Obtain <p>The user's account ID in your system</p>
 * @method void setUserId(string $UserId) Set <p>The user's account ID in your system</p>
 * @method string getUserEmail() Obtain <p>Email of the user</p>
 * @method void setUserEmail(string $UserEmail) Set <p>Email of the user</p>
 * @method string getUserPhone() Obtain <p>Phone number of the user.</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number</p>
 * @method void setUserPhone(string $UserPhone) Set <p>Phone number of the user.</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number</p>
 * @method Browser getBrowser() Obtain <p>The details of the browser. If you've already integrated our device SDK, this field is not required</p>
 * @method void setBrowser(Browser $Browser) Set <p>The details of the browser. If you've already integrated our device SDK, this field is not required</p>
 * @method App getApp() Obtain <p>The details of the app, os and device.If you've already integrated our device SDK, this field is not required</p>
 * @method void setApp(App $App) Set <p>The details of the app, os and device.If you've already integrated our device SDK, this field is not required</p>
 */
class AssessRiskRequest extends AbstractModel
{
    /**
     * @var string <p>Event code. Used to specify the scenario node for business access.</p><p>Standard events under the account protection product include:</p><ul><li> login: Log in<p></p></li> <li>register: Register </li><li>sms: SMS </li><li>logout: Log out </li><li>modify_account: Modify account </li><li>modify_password: Modify password </li><li>security_verification: Security verification</li></ul><p>Standard events under the payment protection product include:</p><ul><li>create_order: Create an order </li><li>transaction: Transaction</li><li>charge_back: Chargeback</li></ul><p>Standard events under the promotion protection product include:</p><ul><li>add_promotion: Participate in promotions</li><li>redeem: Redeem a prize </li><li>withdraw: Withdraw</li><li>cust_event: Custom event, cust_xxx </li><li>scan_code: Scan a code </li><li>lucky_draw: Lucky draw </li><li>task: Complete a task </li><li>invitation: Invitation </li><li>claim_red_packet: Receive a red packet </li><li>browse: Browse</li></ul><p>Custom events can be evaluated for risk based on an agreement with RCE</p>
     */
    public $EventCode;

    /**
     * @var string <p>The time when the event occurred</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with the ISO 8601 standard</p>
     */
    public $EventTime;

    /**
     * @var string <p>The user's current session ID used to associate with the actions before and after logging in. If UserId is not passed, SessionId is required. If missing, an empty string can be filled.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Device fingerprint token, obtained after integration of the device fingerprint SDK into your website or application</p>
     */
    public $DeviceToken;

    /**
     * @var string <p>Client IP address (IPv4 or IPv6)</p>
     */
    public $UserIp;

    /**
     * @var EventDetail <p>Event details. The event information is imported based on the event code you input.</p>
     */
    public $EventDetail;

    /**
     * @var string <p>The user's account ID in your system</p>
     */
    public $UserId;

    /**
     * @var string <p>Email of the user</p>
     */
    public $UserEmail;

    /**
     * @var string <p>Phone number of the user.</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number</p>
     */
    public $UserPhone;

    /**
     * @var Browser <p>The details of the browser. If you've already integrated our device SDK, this field is not required</p>
     */
    public $Browser;

    /**
     * @var App <p>The details of the app, os and device.If you've already integrated our device SDK, this field is not required</p>
     */
    public $App;

    /**
     * @param string $EventCode <p>Event code. Used to specify the scenario node for business access.</p><p>Standard events under the account protection product include:</p><ul><li> login: Log in<p></p></li> <li>register: Register </li><li>sms: SMS </li><li>logout: Log out </li><li>modify_account: Modify account </li><li>modify_password: Modify password </li><li>security_verification: Security verification</li></ul><p>Standard events under the payment protection product include:</p><ul><li>create_order: Create an order </li><li>transaction: Transaction</li><li>charge_back: Chargeback</li></ul><p>Standard events under the promotion protection product include:</p><ul><li>add_promotion: Participate in promotions</li><li>redeem: Redeem a prize </li><li>withdraw: Withdraw</li><li>cust_event: Custom event, cust_xxx </li><li>scan_code: Scan a code </li><li>lucky_draw: Lucky draw </li><li>task: Complete a task </li><li>invitation: Invitation </li><li>claim_red_packet: Receive a red packet </li><li>browse: Browse</li></ul><p>Custom events can be evaluated for risk based on an agreement with RCE</p>
     * @param string $EventTime <p>The time when the event occurred</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with the ISO 8601 standard</p>
     * @param string $SessionId <p>The user's current session ID used to associate with the actions before and after logging in. If UserId is not passed, SessionId is required. If missing, an empty string can be filled.</p>
     * @param string $DeviceToken <p>Device fingerprint token, obtained after integration of the device fingerprint SDK into your website or application</p>
     * @param string $UserIp <p>Client IP address (IPv4 or IPv6)</p>
     * @param EventDetail $EventDetail <p>Event details. The event information is imported based on the event code you input.</p>
     * @param string $UserId <p>The user's account ID in your system</p>
     * @param string $UserEmail <p>Email of the user</p>
     * @param string $UserPhone <p>Phone number of the user.</p><p>Parameter format: Complies with the E.164 standard format, which includes "+", region code, and number</p>
     * @param Browser $Browser <p>The details of the browser. If you've already integrated our device SDK, this field is not required</p>
     * @param App $App <p>The details of the app, os and device.If you've already integrated our device SDK, this field is not required</p>
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
        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = new EventDetail();
            $this->EventDetail->deserialize($param["EventDetail"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserEmail",$param) and $param["UserEmail"] !== null) {
            $this->UserEmail = $param["UserEmail"];
        }

        if (array_key_exists("UserPhone",$param) and $param["UserPhone"] !== null) {
            $this->UserPhone = $param["UserPhone"];
        }

        if (array_key_exists("Browser",$param) and $param["Browser"] !== null) {
            $this->Browser = new Browser();
            $this->Browser->deserialize($param["Browser"]);
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = new App();
            $this->App->deserialize($param["App"]);
        }
    }
}
