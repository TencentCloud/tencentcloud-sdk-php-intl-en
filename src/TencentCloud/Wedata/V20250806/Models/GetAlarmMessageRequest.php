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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlarmMessage request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getAlarmMessageId() Obtain Alarm message Id.
 * @method void setAlarmMessageId(string $AlarmMessageId) Set Alarm message Id.
 * @method string getTimeZone() Obtain Specifies the time zone of the return date. default UTC+8.
 * @method void setTimeZone(string $TimeZone) Set Specifies the time zone of the return date. default UTC+8.
 */
class GetAlarmMessageRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Alarm message Id.
     */
    public $AlarmMessageId;

    /**
     * @var string Specifies the time zone of the return date. default UTC+8.
     */
    public $TimeZone;

    /**
     * @param string $ProjectId Project ID
     * @param string $AlarmMessageId Alarm message Id.
     * @param string $TimeZone Specifies the time zone of the return date. default UTC+8.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AlarmMessageId",$param) and $param["AlarmMessageId"] !== null) {
            $this->AlarmMessageId = $param["AlarmMessageId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
