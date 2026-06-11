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
 * Tencent Cloud observability platform notification channel group info
 *
 * @method string getNoticeId() Obtain <p>Tencent Cloud observability platform notification template ID</p>
 * @method void setNoticeId(string $NoticeId) Set <p>Tencent Cloud observability platform notification template ID</p>
 * @method string getContentTmplId() Obtain <p>ID of the Tencent Cloud observability platform content template. The default content template is used when empty.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContentTmplId(string $ContentTmplId) Set <p>ID of the Tencent Cloud observability platform content template. The default content template is used when empty.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlarmLevels() Obtain <p>Alarm level. 0: Warn; 1: Information; 2: Critical</p>
 * @method void setAlarmLevels(array $AlarmLevels) Set <p>Alarm level. 0: Warn; 1: Information; 2: Critical</p>
 */
class MonitorNoticeRule extends AbstractModel
{
    /**
     * @var string <p>Tencent Cloud observability platform notification template ID</p>
     */
    public $NoticeId;

    /**
     * @var string <p>ID of the Tencent Cloud observability platform content template. The default content template is used when empty.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContentTmplId;

    /**
     * @var array <p>Alarm level. 0: Warn; 1: Information; 2: Critical</p>
     */
    public $AlarmLevels;

    /**
     * @param string $NoticeId <p>Tencent Cloud observability platform notification template ID</p>
     * @param string $ContentTmplId <p>ID of the Tencent Cloud observability platform content template. The default content template is used when empty.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlarmLevels <p>Alarm level. 0: Warn; 1: Information; 2: Critical</p>
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

        if (array_key_exists("ContentTmplId",$param) and $param["ContentTmplId"] !== null) {
            $this->ContentTmplId = $param["ContentTmplId"];
        }

        if (array_key_exists("AlarmLevels",$param) and $param["AlarmLevels"] !== null) {
            $this->AlarmLevels = $param["AlarmLevels"];
        }
    }
}
