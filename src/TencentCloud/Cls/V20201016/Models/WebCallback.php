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
 * Callback address
 *
 * @method string getCallbackType() Obtain Callback type. Valid values:
-Http (custom webhook configuration)
-WeCom
-DingTalk
-Lark
 * @method void setCallbackType(string $CallbackType) Set Callback type. Valid values:
-Http (custom webhook configuration)
-WeCom
-DingTalk
-Lark
 * @method string getUrl() Obtain Callback URL, supports a maximum of 1024 bytes.
You can also use WebCallbackId to refer to the URL in the integration configuration. At this point, please enter an empty string for this field.
 * @method void setUrl(string $Url) Set Callback URL, supports a maximum of 1024 bytes.
You can also use WebCallbackId to refer to the URL in the integration configuration. At this point, please enter an empty string for this field.
 * @method string getWebCallbackId() Obtain Integration configuration ID. Obtain the integration configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/product/614/115229?from_cn_redirect=1).
 * @method void setWebCallbackId(string $WebCallbackId) Set Integration configuration ID. Obtain the integration configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/product/614/115229?from_cn_redirect=1).
 * @method string getMethod() Obtain Callback method. Valid values:
-POST (default value)
- PUT

Note:
-Required when CallbackType is Http. No need to specify for other callback methods.
 * @method void setMethod(string $Method) Set Callback method. Valid values:
-POST (default value)
- PUT

Note:
-Required when CallbackType is Http. No need to specify for other callback methods.
 * @method string getNoticeContentId() Obtain Notification content template ID. When Default-zh is used, DefaultTemplate (Chinese) is referenced. When Default-en is used, DefaultTemplate (English) is referenced.
 * @method void setNoticeContentId(string $NoticeContentId) Set Notification content template ID. When Default-zh is used, DefaultTemplate (Chinese) is referenced. When Default-en is used, DefaultTemplate (English) is referenced.
 * @method integer getRemindType() Obtain Reminder type.

0: No reminder; 1: Specified individual; 2: Everyone
 * @method void setRemindType(integer $RemindType) Set Reminder type.

0: No reminder; 1: Specified individual; 2: Everyone
 * @method array getMobiles() Obtain Mobile phone list.
 * @method void setMobiles(array $Mobiles) Set Mobile phone list.
 * @method array getUserIds() Obtain User ID list.
 * @method void setUserIds(array $UserIds) Set User ID list.
 * @method array getHeaders() Obtain This parameter is deprecated. Please use NoticeContentId.
 * @method void setHeaders(array $Headers) Set This parameter is deprecated. Please use NoticeContentId.
 * @method string getBody() Obtain This parameter is deprecated. Please use NoticeContentId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBody(string $Body) Set This parameter is deprecated. Please use NoticeContentId.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIndex() Obtain Serial number.
-Invalid input parameter.
-Output parameter is valid.
 * @method void setIndex(integer $Index) Set Serial number.
-Invalid input parameter.
-Output parameter is valid.
 */
class WebCallback extends AbstractModel
{
    /**
     * @var string Callback type. Valid values:
-Http (custom webhook configuration)
-WeCom
-DingTalk
-Lark
     */
    public $CallbackType;

    /**
     * @var string Callback URL, supports a maximum of 1024 bytes.
You can also use WebCallbackId to refer to the URL in the integration configuration. At this point, please enter an empty string for this field.
     */
    public $Url;

    /**
     * @var string Integration configuration ID. Obtain the integration configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/product/614/115229?from_cn_redirect=1).
     */
    public $WebCallbackId;

    /**
     * @var string Callback method. Valid values:
-POST (default value)
- PUT

Note:
-Required when CallbackType is Http. No need to specify for other callback methods.
     */
    public $Method;

    /**
     * @var string Notification content template ID. When Default-zh is used, DefaultTemplate (Chinese) is referenced. When Default-en is used, DefaultTemplate (English) is referenced.
     */
    public $NoticeContentId;

    /**
     * @var integer Reminder type.

0: No reminder; 1: Specified individual; 2: Everyone
     */
    public $RemindType;

    /**
     * @var array Mobile phone list.
     */
    public $Mobiles;

    /**
     * @var array User ID list.
     */
    public $UserIds;

    /**
     * @var array This parameter is deprecated. Please use NoticeContentId.
     * @deprecated
     */
    public $Headers;

    /**
     * @var string This parameter is deprecated. Please use NoticeContentId.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Body;

    /**
     * @var integer Serial number.
-Invalid input parameter.
-Output parameter is valid.
     */
    public $Index;

    /**
     * @param string $CallbackType Callback type. Valid values:
-Http (custom webhook configuration)
-WeCom
-DingTalk
-Lark
     * @param string $Url Callback URL, supports a maximum of 1024 bytes.
You can also use WebCallbackId to refer to the URL in the integration configuration. At this point, please enter an empty string for this field.
     * @param string $WebCallbackId Integration configuration ID. Obtain the integration configuration ID by searching the alarm channel callback configuration list (https://www.tencentcloud.com/document/product/614/115229?from_cn_redirect=1).
     * @param string $Method Callback method. Valid values:
-POST (default value)
- PUT

Note:
-Required when CallbackType is Http. No need to specify for other callback methods.
     * @param string $NoticeContentId Notification content template ID. When Default-zh is used, DefaultTemplate (Chinese) is referenced. When Default-en is used, DefaultTemplate (English) is referenced.
     * @param integer $RemindType Reminder type.

0: No reminder; 1: Specified individual; 2: Everyone
     * @param array $Mobiles Mobile phone list.
     * @param array $UserIds User ID list.
     * @param array $Headers This parameter is deprecated. Please use NoticeContentId.
     * @param string $Body This parameter is deprecated. Please use NoticeContentId.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Index Serial number.
-Invalid input parameter.
-Output parameter is valid.
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
        if (array_key_exists("CallbackType",$param) and $param["CallbackType"] !== null) {
            $this->CallbackType = $param["CallbackType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("RemindType",$param) and $param["RemindType"] !== null) {
            $this->RemindType = $param["RemindType"];
        }

        if (array_key_exists("Mobiles",$param) and $param["Mobiles"] !== null) {
            $this->Mobiles = $param["Mobiles"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
