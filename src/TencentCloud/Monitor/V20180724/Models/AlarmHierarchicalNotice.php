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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification template ID and the list of alarm notification levels. The values `Remind` and `Serious` indicate that the notification template only sends alarms at the `Remind` and `Serious` levels.
 *
 * @method string getNoticeId() Obtain Notification template ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeId(string $NoticeId) Set Notification template ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getClassification() Obtain The list of alarm notification levels. The values `Remind` and `Serious` indicate that the notification template only sends alarms at the `Remind` and `Serious` levels.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClassification(array $Classification) Set The list of alarm notification levels. The values `Remind` and `Serious` indicate that the notification template only sends alarms at the `Remind` and `Serious` levels.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmHierarchicalNotice extends AbstractModel
{
    /**
     * @var string Notification template ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeId;

    /**
     * @var array The list of alarm notification levels. The values `Remind` and `Serious` indicate that the notification template only sends alarms at the `Remind` and `Serious` levels.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Classification;

    /**
     * @param string $NoticeId Notification template ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Classification The list of alarm notification levels. The values `Remind` and `Serious` indicate that the notification template only sends alarms at the `Remind` and `Serious` levels.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }
    }
}
