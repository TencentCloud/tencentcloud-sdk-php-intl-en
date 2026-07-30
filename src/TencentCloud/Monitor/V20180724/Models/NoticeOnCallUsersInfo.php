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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification template configuration sending user's message
 *
 * @method string getNoticeId() Obtain <p>Notification template id</p><p>Parameter format: notice-xxxxxxxx</p>
 * @method void setNoticeId(string $NoticeId) Set <p>Notification template id</p><p>Parameter format: notice-xxxxxxxx</p>
 * @method array getSendGroups() Obtain <p>Send group information, corresponding to each configuration in the notification template</p>
 * @method void setSendGroups(array $SendGroups) Set <p>Send group information, corresponding to each configuration in the notification template</p>
 */
class NoticeOnCallUsersInfo extends AbstractModel
{
    /**
     * @var string <p>Notification template id</p><p>Parameter format: notice-xxxxxxxx</p>
     */
    public $NoticeId;

    /**
     * @var array <p>Send group information, corresponding to each configuration in the notification template</p>
     */
    public $SendGroups;

    /**
     * @param string $NoticeId <p>Notification template id</p><p>Parameter format: notice-xxxxxxxx</p>
     * @param array $SendGroups <p>Send group information, corresponding to each configuration in the notification template</p>
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

        if (array_key_exists("SendGroups",$param) and $param["SendGroups"] !== null) {
            $this->SendGroups = [];
            foreach ($param["SendGroups"] as $key => $value){
                $obj = new NoticeSendGroup();
                $obj->deserialize($value);
                array_push($this->SendGroups, $obj);
            }
        }
    }
}
