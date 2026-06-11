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
 * Detailed configuration of a notification content template.
 *
 * @method string getType() Obtain Channel type

Email: mail; Sms: Sms; WeChat: WeChat; Phone: call; WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback
 * @method void setType(string $Type) Set Channel type

Email: mail; Sms: Sms; WeChat: WeChat; Phone: call; WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback
 * @method NoticeContentInfo getTriggerContent() Obtain Alarm trigger notification content template.
 * @method void setTriggerContent(NoticeContentInfo $TriggerContent) Set Alarm trigger notification content template.
 * @method NoticeContentInfo getRecoveryContent() Obtain Alarm clearing notification content template.
 * @method void setRecoveryContent(NoticeContentInfo $RecoveryContent) Set Alarm clearing notification content template.
 */
class NoticeContent extends AbstractModel
{
    /**
     * @var string Channel type

Email: mail; Sms: Sms; WeChat: WeChat; Phone: call; WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback
     */
    public $Type;

    /**
     * @var NoticeContentInfo Alarm trigger notification content template.
     */
    public $TriggerContent;

    /**
     * @var NoticeContentInfo Alarm clearing notification content template.
     */
    public $RecoveryContent;

    /**
     * @param string $Type Channel type

Email: mail; Sms: Sms; WeChat: WeChat; Phone: call; WeCom: WeCom; DingTalk: DingTalk; Lark: Lark; Http: Custom Callback
     * @param NoticeContentInfo $TriggerContent Alarm trigger notification content template.
     * @param NoticeContentInfo $RecoveryContent Alarm clearing notification content template.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerContent",$param) and $param["TriggerContent"] !== null) {
            $this->TriggerContent = new NoticeContentInfo();
            $this->TriggerContent->deserialize($param["TriggerContent"]);
        }

        if (array_key_exists("RecoveryContent",$param) and $param["RecoveryContent"] !== null) {
            $this->RecoveryContent = new NoticeContentInfo();
            $this->RecoveryContent->deserialize($param["RecoveryContent"]);
        }
    }
}
