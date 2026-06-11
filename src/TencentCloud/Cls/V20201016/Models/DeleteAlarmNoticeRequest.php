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
 * DeleteAlarmNotice request structure.
 *
 * @method string getAlarmNoticeId() Obtain Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
 */
class DeleteAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
     */
    public $AlarmNoticeId;

    /**
     * @param string $AlarmNoticeId Notification channel group ID. Obtain the notification channel group ID by searching the notification channel group list (https://www.tencentcloud.com/document/api/614/56462?from_cn_redirect=1).
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }
    }
}
