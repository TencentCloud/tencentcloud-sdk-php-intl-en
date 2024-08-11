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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compilation task
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWSUrl() Obtain WS address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWSUrl(string $WSUrl) Set WS address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRoomId() Obtain Room ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoomId(string $RoomId) Set Room ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateMNPVersionCompileTaskResp extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string WS address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WSUrl;

    /**
     * @var string Room ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoomId;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WSUrl WS address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RoomId Room ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WSUrl",$param) and $param["WSUrl"] !== null) {
            $this->WSUrl = $param["WSUrl"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
