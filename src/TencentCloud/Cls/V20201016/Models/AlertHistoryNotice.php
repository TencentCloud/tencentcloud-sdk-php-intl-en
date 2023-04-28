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
 * Details about an alarm notification group
 *
 * @method string getName() Obtain Notification group name
 * @method void setName(string $Name) Set Notification group name
 * @method string getAlarmNoticeId() Obtain Notification group ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) Set Notification group ID
 */
class AlertHistoryNotice extends AbstractModel
{
    /**
     * @var string Notification group name
     */
    public $Name;

    /**
     * @var string Notification group ID
     */
    public $AlarmNoticeId;

    /**
     * @param string $Name Notification group name
     * @param string $AlarmNoticeId Notification group ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }
    }
}
