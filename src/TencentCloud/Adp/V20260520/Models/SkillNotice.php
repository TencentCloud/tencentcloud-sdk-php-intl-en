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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill exception notification.
 *
 * @method integer getLevel() Obtain Notification level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Success, string literal: "success" |
| 2 | Warning, string literal: "warning" |
| 3 | Error, string literal: "error" |
 * @method void setLevel(integer $Level) Set Notification level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Success, string literal: "success" |
| 2 | Warning, string literal: "warning" |
| 3 | Error, string literal: "error" |
 * @method string getNoticeContent() Obtain Copywriting (post-i18n string)
 * @method void setNoticeContent(string $NoticeContent) Set Copywriting (post-i18n string)
 * @method string getTriggerVersionId() Obtain Version ID of the Skill that triggers this notice
 * @method void setTriggerVersionId(string $TriggerVersionId) Set Version ID of the Skill that triggers this notice
 * @method integer getType() Obtain Notification type 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Release failure |
| 2 | Shared approval rejected |
 * @method void setType(integer $Type) Set Notification type 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Release failure |
| 2 | Shared approval rejected |
 */
class SkillNotice extends AbstractModel
{
    /**
     * @var integer Notification level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Success, string literal: "success" |
| 2 | Warning, string literal: "warning" |
| 3 | Error, string literal: "error" |
     */
    public $Level;

    /**
     * @var string Copywriting (post-i18n string)
     */
    public $NoticeContent;

    /**
     * @var string Version ID of the Skill that triggers this notice
     */
    public $TriggerVersionId;

    /**
     * @var integer Notification type 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Release failure |
| 2 | Shared approval rejected |
     */
    public $Type;

    /**
     * @param integer $Level Notification level

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Success, string literal: "success" |
| 2 | Warning, string literal: "warning" |
| 3 | Error, string literal: "error" |
     * @param string $NoticeContent Copywriting (post-i18n string)
     * @param string $TriggerVersionId Version ID of the Skill that triggers this notice
     * @param integer $Type Notification type 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Placeholder |
| 1 | Release failure |
| 2 | Shared approval rejected |
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("NoticeContent",$param) and $param["NoticeContent"] !== null) {
            $this->NoticeContent = $param["NoticeContent"];
        }

        if (array_key_exists("TriggerVersionId",$param) and $param["TriggerVersionId"] !== null) {
            $this->TriggerVersionId = $param["TriggerVersionId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
