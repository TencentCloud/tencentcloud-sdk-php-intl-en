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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmShield request structure.
 *
 * @method string getTaskId() Obtain Blocking rule ID.
 * @method void setTaskId(string $TaskId) Set Blocking rule ID.
 * @method string getAlarmNoticeId() Obtain Notification channel group ID.
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification channel group ID.
 */
class DeleteAlarmShieldRequest extends AbstractModel
{
    /**
     * @var string Blocking rule ID.
     */
    public $TaskId;

    /**
     * @var string Notification channel group ID.
     */
    public $AlarmNoticeId;

    /**
     * @param string $TaskId Blocking rule ID.
     * @param string $AlarmNoticeId Notification channel group ID.
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
