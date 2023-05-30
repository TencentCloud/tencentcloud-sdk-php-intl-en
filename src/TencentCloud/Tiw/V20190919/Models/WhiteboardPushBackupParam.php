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
 * Backup-related request parameters of the whiteboard push task.
 *
 * @method string getPushUserId() Obtain User ID used by the whiteboard push service for entering a room,
The ID must be an unused ID in the SDK. The whiteboard push service uses the user ID to enter the room for whiteboard push. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the pushing operation.
 * @method void setPushUserId(string $PushUserId) Set User ID used by the whiteboard push service for entering a room,
The ID must be an unused ID in the SDK. The whiteboard push service uses the user ID to enter the room for whiteboard push. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the pushing operation.
 * @method string getPushUserSig() Obtain Signature corresponding to the PushUserId ID.
 * @method void setPushUserSig(string $PushUserSig) Set Signature corresponding to the PushUserId ID.
 */
class WhiteboardPushBackupParam extends AbstractModel
{
    /**
     * @var string User ID used by the whiteboard push service for entering a room,
The ID must be an unused ID in the SDK. The whiteboard push service uses the user ID to enter the room for whiteboard push. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the pushing operation.
     */
    public $PushUserId;

    /**
     * @var string Signature corresponding to the PushUserId ID.
     */
    public $PushUserSig;

    /**
     * @param string $PushUserId User ID used by the whiteboard push service for entering a room,
The ID must be an unused ID in the SDK. The whiteboard push service uses the user ID to enter the room for whiteboard push. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the pushing operation.
     * @param string $PushUserSig Signature corresponding to the PushUserId ID.
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
        if (array_key_exists("PushUserId",$param) and $param["PushUserId"] !== null) {
            $this->PushUserId = $param["PushUserId"];
        }

        if (array_key_exists("PushUserSig",$param) and $param["PushUserSig"] !== null) {
            $this->PushUserSig = $param["PushUserSig"];
        }
    }
}
