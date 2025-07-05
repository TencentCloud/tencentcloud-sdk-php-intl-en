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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudRecording request structure.
 *
 * @method integer getSdkAppId() Obtain The `SDKAppID` of the room whose streams are recorded.
 * @method void setSdkAppId(integer $SdkAppId) Set The `SDKAppID` of the room whose streams are recorded.
 * @method string getTaskId() Obtain The unique ID of the recording task, which is returned after recording starts successfully.
 * @method void setTaskId(string $TaskId) Set The unique ID of the recording task, which is returned after recording starts successfully.
 */
class DescribeCloudRecordingRequest extends AbstractModel
{
    /**
     * @var integer The `SDKAppID` of the room whose streams are recorded.
     */
    public $SdkAppId;

    /**
     * @var string The unique ID of the recording task, which is returned after recording starts successfully.
     */
    public $TaskId;

    /**
     * @param integer $SdkAppId The `SDKAppID` of the room whose streams are recorded.
     * @param string $TaskId The unique ID of the recording task, which is returned after recording starts successfully.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
