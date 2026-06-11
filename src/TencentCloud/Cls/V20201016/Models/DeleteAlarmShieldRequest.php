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
 * DeleteAlarmShield request structure.
 *
 * @method string getTaskId() Obtain Blocking rule id. Retrieve the blocking rule id by [searching for alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
 * @method void setTaskId(string $TaskId) Set Blocking rule id. Retrieve the blocking rule id by [searching for alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
 * @method string getAlarmNoticeId() Obtain Notification channel group id. Retrieve the notification channel group id by [searching alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification channel group id. Retrieve the notification channel group id by [searching alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
 */
class DeleteAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string Blocking rule id. Retrieve the blocking rule id by [searching for alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
     */
    public $TaskId;

    /**
     * @var string Notification channel group id. Retrieve the notification channel group id by [searching alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
     */
    public $AlarmNoticeId;

    /**
     * @param string $TaskId Blocking rule id. Retrieve the blocking rule id by [searching for alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
     * @param string $AlarmNoticeId Notification channel group id. Retrieve the notification channel group id by [searching alert masking configuration rules](https://www.tencentcloud.com/document/api/614/103650?from_cn_redirect=1).
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }
    }
}
