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
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method string getMode() Obtain <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
 * @method void setMode(string $Mode) Set <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
 * @method string getNotificationUrl() Obtain <p>When using the <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> reception method, this is the address for receiving format callback 3.0.<br>Note: If the NotificationUrl parameter is included with an empty string, the format callback 3.0 address will be cleared.</p>
 * @method void setNotificationUrl(string $NotificationUrl) Set <p>When using the <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> reception method, this is the address for receiving format callback 3.0.<br>Note: If the NotificationUrl parameter is included with an empty string, the format callback 3.0 address will be cleared.</p>
 * @method string getUploadMediaCompleteEventSwitch() Obtain <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload complete</a> event notifications. The default "OFF" means the event notification is ignored, and "ON" means to receive event notifications.</p>
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) Set <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload complete</a> event notifications. The default "OFF" means the event notification is ignored, and "ON" means to receive event notifications.</p>
 * @method string getDeleteMediaCompleteEventSwitch() Obtain <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completion</a> event notification. Default "OFF" means the event notification is ignored, "ON" means receive event notifications.</p>
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) Set <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completion</a> event notification. Default "OFF" means the event notification is ignored, "ON" means receive event notifications.</p>
 * @method string getPersistenceCompleteEventSwitch() Obtain <p>Whether to receive event notifications for clip solidification completion. Default is "OFF" to ignore the event notification, and "ON" to receive event notifications.</p>
 * @method void setPersistenceCompleteEventSwitch(string $PersistenceCompleteEventSwitch) Set <p>Whether to receive event notifications for clip solidification completion. Default is "OFF" to ignore the event notification, and "ON" to receive event notifications.</p>
 * @method string getSignKey() Obtain <p>Callback key, consisting of upper- and lower-case letters and numbers, with a maximum length of 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5(SignKey + T). Description: Tencent Cloud calculates the Sign value by concatenating the encrypted SignKey and T and performing MD5 encryption, then places it in the notification message. Your backend server can verify whether the Sign is correct upon receiving the notification message using the same algorithm, thereby confirming whether the message is indeed from the Tencent Cloud backend.</li><li><code>T</code>: int64 type. Expiration time, the UNIX timestamp when the event notification signature expires. Notifications from Tencent Cloud default to an expiration time of 10 minutes. If the time specified by the t value in a notification message has expired, the notification can be deemed invalid, preventing network replay attacks. The format of T is a decimal UNIX timestamp, representing the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
 * @method void setSignKey(string $SignKey) Set <p>Callback key, consisting of upper- and lower-case letters and numbers, with a maximum length of 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5(SignKey + T). Description: Tencent Cloud calculates the Sign value by concatenating the encrypted SignKey and T and performing MD5 encryption, then places it in the notification message. Your backend server can verify whether the Sign is correct upon receiving the notification message using the same algorithm, thereby confirming whether the message is indeed from the Tencent Cloud backend.</li><li><code>T</code>: int64 type. Expiration time, the UNIX timestamp when the event notification signature expires. Notifications from Tencent Cloud default to an expiration time of 10 minutes. If the time specified by the t value in a notification message has expired, the notification can be deemed invalid, preventing network replay attacks. The format of T is a decimal UNIX timestamp, representing the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
 */
class ModifyEventConfigRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
     */
    public $Mode;

    /**
     * @var string <p>When using the <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> reception method, this is the address for receiving format callback 3.0.<br>Note: If the NotificationUrl parameter is included with an empty string, the format callback 3.0 address will be cleared.</p>
     */
    public $NotificationUrl;

    /**
     * @var string <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload complete</a> event notifications. The default "OFF" means the event notification is ignored, and "ON" means to receive event notifications.</p>
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completion</a> event notification. Default "OFF" means the event notification is ignored, "ON" means receive event notifications.</p>
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var string <p>Whether to receive event notifications for clip solidification completion. Default is "OFF" to ignore the event notification, and "ON" to receive event notifications.</p>
     */
    public $PersistenceCompleteEventSwitch;

    /**
     * @var string <p>Callback key, consisting of upper- and lower-case letters and numbers, with a maximum length of 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5(SignKey + T). Description: Tencent Cloud calculates the Sign value by concatenating the encrypted SignKey and T and performing MD5 encryption, then places it in the notification message. Your backend server can verify whether the Sign is correct upon receiving the notification message using the same algorithm, thereby confirming whether the message is indeed from the Tencent Cloud backend.</li><li><code>T</code>: int64 type. Expiration time, the UNIX timestamp when the event notification signature expires. Notifications from Tencent Cloud default to an expiration time of 10 minutes. If the time specified by the t value in a notification message has expired, the notification can be deemed invalid, preventing network replay attacks. The format of T is a decimal UNIX timestamp, representing the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
     */
    public $SignKey;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     * @param string $Mode <p>Method of receiving event notifications.</p><li>PUSH: [HTTP callback notification](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1);</li><li>PULL: [Reliable Notification Based on Message Queue](https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1).</li>
     * @param string $NotificationUrl <p>When using the <a href="https://www.tencentcloud.com/document/product/266/33779?from_cn_redirect=1">HTTP callback notification</a> reception method, this is the address for receiving format callback 3.0.<br>Note: If the NotificationUrl parameter is included with an empty string, the format callback 3.0 address will be cleared.</p>
     * @param string $UploadMediaCompleteEventSwitch <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload complete</a> event notifications. The default "OFF" means the event notification is ignored, and "ON" means to receive event notifications.</p>
     * @param string $DeleteMediaCompleteEventSwitch <p>Whether to receive <a href="https://www.tencentcloud.com/document/product/266/13434?from_cn_redirect=1">video deletion completion</a> event notification. Default "OFF" means the event notification is ignored, "ON" means receive event notifications.</p>
     * @param string $PersistenceCompleteEventSwitch <p>Whether to receive event notifications for clip solidification completion. Default is "OFF" to ignore the event notification, and "ON" to receive event notifications.</p>
     * @param string $SignKey <p>Callback key, consisting of upper- and lower-case letters and numbers, with a maximum length of 32 characters. After configuration, the <code>Sign</code> and <code>T</code> fields will be sent in callbacks for authentication.</p><ul><li><code>Sign</code>: string type. Event notification security signature Sign = MD5(SignKey + T). Description: Tencent Cloud calculates the Sign value by concatenating the encrypted SignKey and T and performing MD5 encryption, then places it in the notification message. Your backend server can verify whether the Sign is correct upon receiving the notification message using the same algorithm, thereby confirming whether the message is indeed from the Tencent Cloud backend.</li><li><code>T</code>: int64 type. Expiration time, the UNIX timestamp when the event notification signature expires. Notifications from Tencent Cloud default to an expiration time of 10 minutes. If the time specified by the t value in a notification message has expired, the notification can be deemed invalid, preventing network replay attacks. The format of T is a decimal UNIX timestamp, representing the seconds elapsed since January 1, 1970 (midnight UTC/GMT).</li></ul>
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
