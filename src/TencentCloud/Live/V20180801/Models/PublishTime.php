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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Push time.
 *
 * @method string getPublishTime() Obtain Push time.
In UTC format, such as 2018-06-29T19:00:00Z.
 * @method void setPublishTime(string $PublishTime) Set Push time.
In UTC format, such as 2018-06-29T19:00:00Z.
 */
class PublishTime extends AbstractModel
{
    /**
     * @var string Push time.
In UTC format, such as 2018-06-29T19:00:00Z.
     */
    public $PublishTime;

    /**
     * @param string $PublishTime Push time.
In UTC format, such as 2018-06-29T19:00:00Z.
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
        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
