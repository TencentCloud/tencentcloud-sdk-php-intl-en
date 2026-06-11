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
 * Alarm notification recipient information
 *
 * @method string getReceiverType() Obtain Recipient type. Available values:
-Uin - User ID
-Group - User group ID
Other recipient types are not currently supported.
 * @method void setReceiverType(string $ReceiverType) Set Recipient type. Available values:
-Uin - User ID
-Group - User group ID
Other recipient types are not currently supported.
 * @method array getReceiverIds() Obtain Recipient.
When ReceiverType is Uin, the value of ReceiverIds is the user uid. [Sub-user information query](https://www.tencentcloud.com/document/api/598/53486?from_cn_redirect=1)
When ReceiverType is Group, ReceiverIds is the user Group id. [CAM User Group](https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1)
 * @method void setReceiverIds(array $ReceiverIds) Set Recipient.
When ReceiverType is Uin, the value of ReceiverIds is the user uid. [Sub-user information query](https://www.tencentcloud.com/document/api/598/53486?from_cn_redirect=1)
When ReceiverType is Group, ReceiverIds is the user Group id. [CAM User Group](https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1)
 * @method array getReceiverChannels() Obtain Notification receiving channel
-Mail
-Sms
-WeChat
-Phone - phone
 * @method void setReceiverChannels(array $ReceiverChannels) Set Notification receiving channel
-Mail
-Sms
-WeChat
-Phone - phone
 * @method string getNoticeContentId() Obtain Notification content template ID. Use Default-zh to refer to the Default template (Chinese). Use Default-en to refer to DefaultTemplate (English). Get the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/product/614/111714?from_cn_redirect=1).
 * @method void setNoticeContentId(string $NoticeContentId) Set Notification content template ID. Use Default-zh to refer to the Default template (Chinese). Use Default-en to refer to DefaultTemplate (English). Get the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/product/614/111714?from_cn_redirect=1).
 * @method string getStartTime() Obtain Start time to allow receipt of information. Format: `15:04:05`. Required.
 * @method void setStartTime(string $StartTime) Set Start time to allow receipt of information. Format: `15:04:05`. Required.
 * @method string getEndTime() Obtain Allow receipt of information end time. Format: `15:04:05`. Required
 * @method void setEndTime(string $EndTime) Set Allow receipt of information end time. Format: `15:04:05`. Required
 * @method integer getIndex() Obtain Bit order.

-Invalid when passed as an input parameter.
-Valid at that time.
 * @method void setIndex(integer $Index) Set Bit order.

-Invalid when passed as an input parameter.
-Valid at that time.
 */
class NoticeReceiver extends AbstractModel
{
    /**
     * @var string Recipient type. Available values:
-Uin - User ID
-Group - User group ID
Other recipient types are not currently supported.
     */
    public $ReceiverType;

    /**
     * @var array Recipient.
When ReceiverType is Uin, the value of ReceiverIds is the user uid. [Sub-user information query](https://www.tencentcloud.com/document/api/598/53486?from_cn_redirect=1)
When ReceiverType is Group, ReceiverIds is the user Group id. [CAM User Group](https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1)
     */
    public $ReceiverIds;

    /**
     * @var array Notification receiving channel
-Mail
-Sms
-WeChat
-Phone - phone
     */
    public $ReceiverChannels;

    /**
     * @var string Notification content template ID. Use Default-zh to refer to the Default template (Chinese). Use Default-en to refer to DefaultTemplate (English). Get the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/product/614/111714?from_cn_redirect=1).
     */
    public $NoticeContentId;

    /**
     * @var string Start time to allow receipt of information. Format: `15:04:05`. Required.
     */
    public $StartTime;

    /**
     * @var string Allow receipt of information end time. Format: `15:04:05`. Required
     */
    public $EndTime;

    /**
     * @var integer Bit order.

-Invalid when passed as an input parameter.
-Valid at that time.
     */
    public $Index;

    /**
     * @param string $ReceiverType Recipient type. Available values:
-Uin - User ID
-Group - User group ID
Other recipient types are not currently supported.
     * @param array $ReceiverIds Recipient.
When ReceiverType is Uin, the value of ReceiverIds is the user uid. [Sub-user information query](https://www.tencentcloud.com/document/api/598/53486?from_cn_redirect=1)
When ReceiverType is Group, ReceiverIds is the user Group id. [CAM User Group](https://www.tencentcloud.com/document/product/598/34589?from_cn_redirect=1)
     * @param array $ReceiverChannels Notification receiving channel
-Mail
-Sms
-WeChat
-Phone - phone
     * @param string $NoticeContentId Notification content template ID. Use Default-zh to refer to the Default template (Chinese). Use Default-en to refer to DefaultTemplate (English). Get the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/product/614/111714?from_cn_redirect=1).
     * @param string $StartTime Start time to allow receipt of information. Format: `15:04:05`. Required.
     * @param string $EndTime Allow receipt of information end time. Format: `15:04:05`. Required
     * @param integer $Index Bit order.

-Invalid when passed as an input parameter.
-Valid at that time.
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

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
