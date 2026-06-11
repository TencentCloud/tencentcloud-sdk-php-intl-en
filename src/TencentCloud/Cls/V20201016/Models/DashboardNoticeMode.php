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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dashboard subscription notification method
 *
 * @method string getReceiverType() Obtain Dashboard notification method.

-Uin: Tencent Cloud user
-Group: Tencent Cloud user group
-WeCom: wecom callback
-Email: Custom email
-DingTalk
-Lark
 * @method void setReceiverType(string $ReceiverType) Set Dashboard notification method.

-Uin: Tencent Cloud user
-Group: Tencent Cloud user group
-WeCom: wecom callback
-Email: Custom email
-DingTalk
-Lark
 * @method array getValues() Obtain Value of the known method.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, Values must be empty and the Url field is required.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Values field is required and the Url field must be empty.
-When ReceiverType is `Uin`, Values is the user id. Obtain the sub-user UID by [querying sub-users](https://www.tencentcloud.com/document/product/598/34587?from_cn_redirect=1).
-When ReceiverType is `Group`, Values is the user Group id. Obtain user Group id by querying the user Group list (https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1).
-When ReceiverType is `Email`, Values is the user email info.
 * @method void setValues(array $Values) Set Value of the known method.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, Values must be empty and the Url field is required.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Values field is required and the Url field must be empty.
-When ReceiverType is `Uin`, Values is the user id. Obtain the sub-user UID by [querying sub-users](https://www.tencentcloud.com/document/product/598/34587?from_cn_redirect=1).
-When ReceiverType is `Group`, Values is the user Group id. Obtain user Group id by querying the user Group list (https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1).
-When ReceiverType is `Email`, Values is the user email info.
 * @method array getReceiverChannels() Obtain Dashboard notification channel.

-Support: ["Email","Sms","WeChat","Phone"].
-When ReceiverType is `Email` or `WeCom`, ReceiverChannels is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverChannels(array $ReceiverChannels) Set Dashboard notification channel.

-Support: ["Email","Sms","WeChat","Phone"].
-When ReceiverType is `Email` or `WeCom`, ReceiverChannels is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Subscription method - Callback URL.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, the Url field is required as the callback URL of each channel.
-When the value is `WeCom`, the Url is the enterprise wechat callback address.
-When the value is `DingTalk`, Url is the chatbot Webhook address.
-When `Lark`, Url is the chatbot Webhook address.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Url field must be empty.
 * @method void setUrl(string $Url) Set Subscription method - Callback URL.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, the Url field is required as the callback URL of each channel.
-When the value is `WeCom`, the Url is the enterprise wechat callback address.
-When the value is `DingTalk`, Url is the chatbot Webhook address.
-When `Lark`, Url is the chatbot Webhook address.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Url field must be empty.
 */
class DashboardNoticeMode extends AbstractModel
{
    /**
     * @var string Dashboard notification method.

-Uin: Tencent Cloud user
-Group: Tencent Cloud user group
-WeCom: wecom callback
-Email: Custom email
-DingTalk
-Lark
     */
    public $ReceiverType;

    /**
     * @var array Value of the known method.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, Values must be empty and the Url field is required.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Values field is required and the Url field must be empty.
-When ReceiverType is `Uin`, Values is the user id. Obtain the sub-user UID by [querying sub-users](https://www.tencentcloud.com/document/product/598/34587?from_cn_redirect=1).
-When ReceiverType is `Group`, Values is the user Group id. Obtain user Group id by querying the user Group list (https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1).
-When ReceiverType is `Email`, Values is the user email info.
     */
    public $Values;

    /**
     * @var array Dashboard notification channel.

-Support: ["Email","Sms","WeChat","Phone"].
-When ReceiverType is `Email` or `WeCom`, ReceiverChannels is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverChannels;

    /**
     * @var string Subscription method - Callback URL.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, the Url field is required as the callback URL of each channel.
-When the value is `WeCom`, the Url is the enterprise wechat callback address.
-When the value is `DingTalk`, Url is the chatbot Webhook address.
-When `Lark`, Url is the chatbot Webhook address.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Url field must be empty.
     */
    public $Url;

    /**
     * @param string $ReceiverType Dashboard notification method.

-Uin: Tencent Cloud user
-Group: Tencent Cloud user group
-WeCom: wecom callback
-Email: Custom email
-DingTalk
-Lark
     * @param array $Values Value of the known method.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, Values must be empty and the Url field is required.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Values field is required and the Url field must be empty.
-When ReceiverType is `Uin`, Values is the user id. Obtain the sub-user UID by [querying sub-users](https://www.tencentcloud.com/document/product/598/34587?from_cn_redirect=1).
-When ReceiverType is `Group`, Values is the user Group id. Obtain user Group id by querying the user Group list (https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1).
-When ReceiverType is `Email`, Values is the user email info.
     * @param array $ReceiverChannels Dashboard notification channel.

-Support: ["Email","Sms","WeChat","Phone"].
-When ReceiverType is `Email` or `WeCom`, ReceiverChannels is invalid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Subscription method - Callback URL.
-When ReceiverType is `WeCom`, `DingTalk`, or `Lark`, the Url field is required as the callback URL of each channel.
-When the value is `WeCom`, the Url is the enterprise wechat callback address.
-When the value is `DingTalk`, Url is the chatbot Webhook address.
-When `Lark`, Url is the chatbot Webhook address.
-When ReceiverType is `Uin`, `Group`, or `Email`, the Url field must be empty.
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
