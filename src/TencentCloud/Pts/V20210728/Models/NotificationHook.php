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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event notification callback.
 *
 * @method array getEvents() Obtain Event.

Note: This field may return null, indicating that no valid value is found.
 * @method void setEvents(array $Events) Set Event.

Note: This field may return null, indicating that no valid value is found.
 * @method string getURL() Obtain Callback URL.

Note: This field may return null, indicating that no valid value is found.
 * @method void setURL(string $URL) Set Callback URL.

Note: This field may return null, indicating that no valid value is found.
 */
class NotificationHook extends AbstractModel
{
    /**
     * @var array Event.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Events;

    /**
     * @var string Callback URL.

Note: This field may return null, indicating that no valid value is found.
     */
    public $URL;

    /**
     * @param array $Events Event.

Note: This field may return null, indicating that no valid value is found.
     * @param string $URL Callback URL.

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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
