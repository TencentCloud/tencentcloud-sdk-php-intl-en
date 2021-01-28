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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the email sending status.
 *
 * @method string getMessageId() Obtain `MessageId` field returned by the `SendEmail` API
 * @method void setMessageId(string $MessageId) Set `MessageId` field returned by the `SendEmail` API
 * @method string getToEmailAddress() Obtain Recipient email address
 * @method void setToEmailAddress(string $ToEmailAddress) Set Recipient email address
 * @method string getFromEmailAddress() Obtain Sender email address
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender email address
 * @method integer getSendStatus() Obtain Tencent Cloud processing status:
0: successful.
1001: internal system exception.
1002: internal system exception.
1003: internal system exception.
1003: internal system exception.
1004: email sending timeout.
1005: internal system exception.
1006: you have sent too many emails to the same address in a short period.
1007: the email address is in the blocklist.
1009: internal system exception.
1010: daily email sending limit exceeded.
1011: no permission to send custom content. Use a template.
2001: no results found.
3007: invalid template ID or unavailable template.
3008: template status exception.
3009: no permission to use this template.
3010: the format of the `TemplateData` field is incorrect. 
3014: unable to send the email because the sender domain is not verified.
3020: the recipient email address is in the blocklist.
3024: failed to pre-check the email address format.
3030: email sending is restricted temporarily due to high bounce rate.
3033: the account has insufficient balance or overdue payment.
 * @method void setSendStatus(integer $SendStatus) Set Tencent Cloud processing status:
0: successful.
1001: internal system exception.
1002: internal system exception.
1003: internal system exception.
1003: internal system exception.
1004: email sending timeout.
1005: internal system exception.
1006: you have sent too many emails to the same address in a short period.
1007: the email address is in the blocklist.
1009: internal system exception.
1010: daily email sending limit exceeded.
1011: no permission to send custom content. Use a template.
2001: no results found.
3007: invalid template ID or unavailable template.
3008: template status exception.
3009: no permission to use this template.
3010: the format of the `TemplateData` field is incorrect. 
3014: unable to send the email because the sender domain is not verified.
3020: the recipient email address is in the blocklist.
3024: failed to pre-check the email address format.
3030: email sending is restricted temporarily due to high bounce rate.
3033: the account has insufficient balance or overdue payment.
 * @method integer getDeliverStatus() Obtain Recipient processing status:
0: Tencent Cloud has accepted the request and added it to the send queue.
1: the email is delivered successfully, `DeliverTime` indicates the time when the email is delivered successfully.
2: the email is discarded. `DeliverMessage` indicates the reason for discarding.
3: the recipient's ESP rejects the email, probably because the email address does not exist or due to other reasons.
8: the email is delayed by the ESP. `DeliverMessage` indicates the reason for delay.
 * @method void setDeliverStatus(integer $DeliverStatus) Set Recipient processing status:
0: Tencent Cloud has accepted the request and added it to the send queue.
1: the email is delivered successfully, `DeliverTime` indicates the time when the email is delivered successfully.
2: the email is discarded. `DeliverMessage` indicates the reason for discarding.
3: the recipient's ESP rejects the email, probably because the email address does not exist or due to other reasons.
8: the email is delayed by the ESP. `DeliverMessage` indicates the reason for delay.
 * @method string getDeliverMessage() Obtain Description of the recipient processing status
 * @method void setDeliverMessage(string $DeliverMessage) Set Description of the recipient processing status
 * @method integer getRequestTime() Obtain Timestamp when the request arrives at Tencent Cloud
 * @method void setRequestTime(integer $RequestTime) Set Timestamp when the request arrives at Tencent Cloud
 * @method integer getDeliverTime() Obtain Timestamp when Tencent Cloud delivers the email
 * @method void setDeliverTime(integer $DeliverTime) Set Timestamp when Tencent Cloud delivers the email
 * @method boolean getUserOpened() Obtain Whether the recipient has opened the email
 * @method void setUserOpened(boolean $UserOpened) Set Whether the recipient has opened the email
 * @method boolean getUserClicked() Obtain Whether the recipient has clicked the links in the email
 * @method void setUserClicked(boolean $UserClicked) Set Whether the recipient has clicked the links in the email
 * @method boolean getUserUnsubscribed() Obtain Whether the recipient has unsubscribed from emails sent by the sender
 * @method void setUserUnsubscribed(boolean $UserUnsubscribed) Set Whether the recipient has unsubscribed from emails sent by the sender
 * @method boolean getUserComplainted() Obtain Whether the recipient has reported the sender
 * @method void setUserComplainted(boolean $UserComplainted) Set Whether the recipient has reported the sender
 */
class SendEmailStatus extends AbstractModel
{
    /**
     * @var string `MessageId` field returned by the `SendEmail` API
     */
    public $MessageId;

    /**
     * @var string Recipient email address
     */
    public $ToEmailAddress;

    /**
     * @var string Sender email address
     */
    public $FromEmailAddress;

    /**
     * @var integer Tencent Cloud processing status:
0: successful.
1001: internal system exception.
1002: internal system exception.
1003: internal system exception.
1003: internal system exception.
1004: email sending timeout.
1005: internal system exception.
1006: you have sent too many emails to the same address in a short period.
1007: the email address is in the blocklist.
1009: internal system exception.
1010: daily email sending limit exceeded.
1011: no permission to send custom content. Use a template.
2001: no results found.
3007: invalid template ID or unavailable template.
3008: template status exception.
3009: no permission to use this template.
3010: the format of the `TemplateData` field is incorrect. 
3014: unable to send the email because the sender domain is not verified.
3020: the recipient email address is in the blocklist.
3024: failed to pre-check the email address format.
3030: email sending is restricted temporarily due to high bounce rate.
3033: the account has insufficient balance or overdue payment.
     */
    public $SendStatus;

    /**
     * @var integer Recipient processing status:
0: Tencent Cloud has accepted the request and added it to the send queue.
1: the email is delivered successfully, `DeliverTime` indicates the time when the email is delivered successfully.
2: the email is discarded. `DeliverMessage` indicates the reason for discarding.
3: the recipient's ESP rejects the email, probably because the email address does not exist or due to other reasons.
8: the email is delayed by the ESP. `DeliverMessage` indicates the reason for delay.
     */
    public $DeliverStatus;

    /**
     * @var string Description of the recipient processing status
     */
    public $DeliverMessage;

    /**
     * @var integer Timestamp when the request arrives at Tencent Cloud
     */
    public $RequestTime;

    /**
     * @var integer Timestamp when Tencent Cloud delivers the email
     */
    public $DeliverTime;

    /**
     * @var boolean Whether the recipient has opened the email
     */
    public $UserOpened;

    /**
     * @var boolean Whether the recipient has clicked the links in the email
     */
    public $UserClicked;

    /**
     * @var boolean Whether the recipient has unsubscribed from emails sent by the sender
     */
    public $UserUnsubscribed;

    /**
     * @var boolean Whether the recipient has reported the sender
     */
    public $UserComplainted;

    /**
     * @param string $MessageId `MessageId` field returned by the `SendEmail` API
     * @param string $ToEmailAddress Recipient email address
     * @param string $FromEmailAddress Sender email address
     * @param integer $SendStatus Tencent Cloud processing status:
0: successful.
1001: internal system exception.
1002: internal system exception.
1003: internal system exception.
1003: internal system exception.
1004: email sending timeout.
1005: internal system exception.
1006: you have sent too many emails to the same address in a short period.
1007: the email address is in the blocklist.
1009: internal system exception.
1010: daily email sending limit exceeded.
1011: no permission to send custom content. Use a template.
2001: no results found.
3007: invalid template ID or unavailable template.
3008: template status exception.
3009: no permission to use this template.
3010: the format of the `TemplateData` field is incorrect. 
3014: unable to send the email because the sender domain is not verified.
3020: the recipient email address is in the blocklist.
3024: failed to pre-check the email address format.
3030: email sending is restricted temporarily due to high bounce rate.
3033: the account has insufficient balance or overdue payment.
     * @param integer $DeliverStatus Recipient processing status:
0: Tencent Cloud has accepted the request and added it to the send queue.
1: the email is delivered successfully, `DeliverTime` indicates the time when the email is delivered successfully.
2: the email is discarded. `DeliverMessage` indicates the reason for discarding.
3: the recipient's ESP rejects the email, probably because the email address does not exist or due to other reasons.
8: the email is delayed by the ESP. `DeliverMessage` indicates the reason for delay.
     * @param string $DeliverMessage Description of the recipient processing status
     * @param integer $RequestTime Timestamp when the request arrives at Tencent Cloud
     * @param integer $DeliverTime Timestamp when Tencent Cloud delivers the email
     * @param boolean $UserOpened Whether the recipient has opened the email
     * @param boolean $UserClicked Whether the recipient has clicked the links in the email
     * @param boolean $UserUnsubscribed Whether the recipient has unsubscribed from emails sent by the sender
     * @param boolean $UserComplainted Whether the recipient has reported the sender
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ToEmailAddress",$param) and $param["ToEmailAddress"] !== null) {
            $this->ToEmailAddress = $param["ToEmailAddress"];
        }

        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("SendStatus",$param) and $param["SendStatus"] !== null) {
            $this->SendStatus = $param["SendStatus"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverMessage",$param) and $param["DeliverMessage"] !== null) {
            $this->DeliverMessage = $param["DeliverMessage"];
        }

        if (array_key_exists("RequestTime",$param) and $param["RequestTime"] !== null) {
            $this->RequestTime = $param["RequestTime"];
        }

        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("UserOpened",$param) and $param["UserOpened"] !== null) {
            $this->UserOpened = $param["UserOpened"];
        }

        if (array_key_exists("UserClicked",$param) and $param["UserClicked"] !== null) {
            $this->UserClicked = $param["UserClicked"];
        }

        if (array_key_exists("UserUnsubscribed",$param) and $param["UserUnsubscribed"] !== null) {
            $this->UserUnsubscribed = $param["UserUnsubscribed"];
        }

        if (array_key_exists("UserComplainted",$param) and $param["UserComplainted"] !== null) {
            $this->UserComplainted = $param["UserComplainted"];
        }
    }
}
