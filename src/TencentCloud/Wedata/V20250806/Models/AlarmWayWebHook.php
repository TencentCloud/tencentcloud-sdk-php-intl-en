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
 * Alarm channel specifies the webhook url configuration for wecom group, dingtalk group, or lark group.
 *
 * @method string getAlarmWay() Obtain Specifies the Alarm channel value.
7. wecom group 8. lark group 9. dingtalk group 10. Slack group 11. Teams group.
 * @method void setAlarmWay(string $AlarmWay) Set Specifies the Alarm channel value.
7. wecom group 8. lark group 9. dingtalk group 10. Slack group 11. Teams group.
 * @method array getWebHooks() Obtain webhook url list of the Alarm group.
 * @method void setWebHooks(array $WebHooks) Set webhook url list of the Alarm group.
 */
class AlarmWayWebHook extends AbstractModel
{
    /**
     * @var string Specifies the Alarm channel value.
7. wecom group 8. lark group 9. dingtalk group 10. Slack group 11. Teams group.
     */
    public $AlarmWay;

    /**
     * @var array webhook url list of the Alarm group.
     */
    public $WebHooks;

    /**
     * @param string $AlarmWay Specifies the Alarm channel value.
7. wecom group 8. lark group 9. dingtalk group 10. Slack group 11. Teams group.
     * @param array $WebHooks webhook url list of the Alarm group.
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
        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = $param["WebHooks"];
        }
    }
}
