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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert notification channel
 *
 * @method string getNoticeId() Obtain Notification template ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNoticeId(string $NoticeId) Set Notification template ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getAMPConsumerId() Obtain AMP consumer ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAMPConsumerId(string $AMPConsumerId) Set AMP consumer ID.

Note: This field may return null, indicating that no valid value is found.
 */
class AlertChannel extends AbstractModel
{
    /**
     * @var string Notification template ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NoticeId;

    /**
     * @var string AMP consumer ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AMPConsumerId;

    /**
     * @param string $NoticeId Notification template ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $AMPConsumerId AMP consumer ID.

Note: This field may return null, indicating that no valid value is found.
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

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }
    }
}
