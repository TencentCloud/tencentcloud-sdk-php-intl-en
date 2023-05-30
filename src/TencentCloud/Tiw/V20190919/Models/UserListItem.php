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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whiteboard user data returned for log queries.
 *
 * @method string getUserId() Obtain User ID in the room.
 * @method void setUserId(string $UserId) Set User ID in the room.
 * @method integer getStartTime() Obtain The first time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method void setStartTime(integer $StartTime) Set The first time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method integer getEndTime() Obtain The last time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method void setEndTime(integer $EndTime) Set The last time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 */
class UserListItem extends AbstractModel
{
    /**
     * @var string User ID in the room.
     */
    public $UserId;

    /**
     * @var integer The first time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     */
    public $StartTime;

    /**
     * @var integer The last time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     */
    public $EndTime;

    /**
     * @param string $UserId User ID in the room.
     * @param integer $StartTime The first time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     * @param integer $EndTime The last time when the user ID appeared during the queried period, which is a Unix timestamp in milliseconds.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
