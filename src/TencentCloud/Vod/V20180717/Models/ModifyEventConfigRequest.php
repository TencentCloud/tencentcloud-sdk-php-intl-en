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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEventConfig request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
 * @method string getMode() Obtain <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
 * @method void setMode(string $Mode) Set <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
 * @method string getNotificationUrl() Obtain <p>Address for receiving 3.0 format callbacks when using <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> as the receiving channel.<br>Note: If the NotificationUrl parameter is included and its value is an empty string, the 3.0 format callback address will be cleared.</p>
 * @method void setNotificationUrl(string $NotificationUrl) Set <p>Address for receiving 3.0 format callbacks when using <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> as the receiving channel.<br>Note: If the NotificationUrl parameter is included and its value is an empty string, the 3.0 format callback address will be cleared.</p>
 * @method string getUploadMediaCompleteEventSwitch() Obtain <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completed</a> event notifications. Default "OFF" means the event notification is ignored, and "ON" means event notifications are received.</p>
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) Set <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completed</a> event notifications. Default "OFF" means the event notification is ignored, and "ON" means event notifications are received.</p>
 * @method string getDeleteMediaCompleteEventSwitch() Obtain <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completed</a> event notifications. Default "OFF" ignores the event notification, and "ON" receives event notifications.</p>
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) Set <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completed</a> event notifications. Default "OFF" ignores the event notification, and "ON" receives event notifications.</p>
 * @method string getPersistenceCompleteEventSwitch() Obtain <p>Whether to receive event notifications for clip solidification completion. Default "OFF" means the event notification is ignored, and "ON" means it is received.</p>
 * @method void setPersistenceCompleteEventSwitch(string $PersistenceCompleteEventSwitch) Set <p>Whether to receive event notifications for clip solidification completion. Default "OFF" means the event notification is ignored, and "ON" means it is received.</p>
 * @method string getSignKey() Obtain <p>Callback key, consisting of upper- and lower-case letters and numbers, up to 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5 (SignKey + T). Description: Tencent Cloud concatenates the encrypted SignKey and T, calculates the Sign value through MD5, and places it in the notification message. Upon receiving the notification message, your backend server can verify whether Sign is correct based on the same algorithm, and furthermore confirm whether the message indeed comes from Tencent Cloud Backend.</li><li><code>T</code>: int64 type. Expiration time, UNIX timestamp of event notification signature expiration. The default expiration time for message notifications from Tencent is 10 minutes. If the time specified by the T value in a message notification has expired, the notification can be deemed invalid, thereby preventing network replay attacks. T is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
 * @method void setSignKey(string $SignKey) Set <p>Callback key, consisting of upper- and lower-case letters and numbers, up to 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5 (SignKey + T). Description: Tencent Cloud concatenates the encrypted SignKey and T, calculates the Sign value through MD5, and places it in the notification message. Upon receiving the notification message, your backend server can verify whether Sign is correct based on the same algorithm, and furthermore confirm whether the message indeed comes from Tencent Cloud Backend.</li><li><code>T</code>: int64 type. Expiration time, UNIX timestamp of event notification signature expiration. The default expiration time for message notifications from Tencent is 10 minutes. If the time specified by the T value in a message notification has expired, the notification can be deemed invalid, thereby preventing network replay attacks. T is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
 */
class ModifyEventConfigRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
     */
    public $Mode;

    /**
     * @var string <p>Address for receiving 3.0 format callbacks when using <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> as the receiving channel.<br>Note: If the NotificationUrl parameter is included and its value is an empty string, the 3.0 format callback address will be cleared.</p>
     */
    public $NotificationUrl;

    /**
     * @var string <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completed</a> event notifications. Default "OFF" means the event notification is ignored, and "ON" means event notifications are received.</p>
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completed</a> event notifications. Default "OFF" ignores the event notification, and "ON" receives event notifications.</p>
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var string <p>Whether to receive event notifications for clip solidification completion. Default "OFF" means the event notification is ignored, and "ON" means it is received.</p>
     */
    public $PersistenceCompleteEventSwitch;

    /**
     * @var string <p>Callback key, consisting of upper- and lower-case letters and numbers, up to 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5 (SignKey + T). Description: Tencent Cloud concatenates the encrypted SignKey and T, calculates the Sign value through MD5, and places it in the notification message. Upon receiving the notification message, your backend server can verify whether Sign is correct based on the same algorithm, and furthermore confirm whether the message indeed comes from Tencent Cloud Backend.</li><li><code>T</code>: int64 type. Expiration time, UNIX timestamp of event notification signature expiration. The default expiration time for message notifications from Tencent is 10 minutes. If the time specified by the T value in a message notification has expired, the notification can be deemed invalid, thereby preventing network replay attacks. T is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
     */
    public $SignKey;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, when accessing resources in VOD applications (whether the default application or a newly created application), this field must be filled with the application ID.</b></p>
     * @param string $Mode <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
     * @param string $NotificationUrl <p>Address for receiving 3.0 format callbacks when using <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> as the receiving channel.<br>Note: If the NotificationUrl parameter is included and its value is an empty string, the 3.0 format callback address will be cleared.</p>
     * @param string $UploadMediaCompleteEventSwitch <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completed</a> event notifications. Default "OFF" means the event notification is ignored, and "ON" means event notifications are received.</p>
     * @param string $DeleteMediaCompleteEventSwitch <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completed</a> event notifications. Default "OFF" ignores the event notification, and "ON" receives event notifications.</p>
     * @param string $PersistenceCompleteEventSwitch <p>Whether to receive event notifications for clip solidification completion. Default "OFF" means the event notification is ignored, and "ON" means it is received.</p>
     * @param string $SignKey <p>Callback key, consisting of upper- and lower-case letters and numbers, up to 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5 (SignKey + T). Description: Tencent Cloud concatenates the encrypted SignKey and T, calculates the Sign value through MD5, and places it in the notification message. Upon receiving the notification message, your backend server can verify whether Sign is correct based on the same algorithm, and furthermore confirm whether the message indeed comes from Tencent Cloud Backend.</li><li><code>T</code>: int64 type. Expiration time, UNIX timestamp of event notification signature expiration. The default expiration time for message notifications from Tencent is 10 minutes. If the time specified by the T value in a message notification has expired, the notification can be deemed invalid, thereby preventing network replay attacks. T is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrl",$param) and $param["NotificationUrl"] !== null) {
            $this->NotificationUrl = $param["NotificationUrl"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("PersistenceCompleteEventSwitch",$param) and $param["PersistenceCompleteEventSwitch"] !== null) {
            $this->PersistenceCompleteEventSwitch = $param["PersistenceCompleteEventSwitch"];
        }

        if (array_key_exists("SignKey",$param) and $param["SignKey"] !== null) {
            $this->SignKey = $param["SignKey"];
        }
    }
}
