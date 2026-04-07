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
 * DescribeCloudTranscription request structure.
 *
 * @method integer getSdkAppId() Obtain SDKAppId of TRTC, which is the same as the SDKAppId of the room being transcribed.
 * @method void setSdkAppId(integer $SdkAppId) Set SDKAppId of TRTC, which is the same as the SDKAppId of the room being transcribed.
 * @method string getTaskId() Obtain The unique Id of the transcription task will be returned upon successful startup.
 * @method void setTaskId(string $TaskId) Set The unique Id of the transcription task will be returned upon successful startup.
 */
class DescribeCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer SDKAppId of TRTC, which is the same as the SDKAppId of the room being transcribed.
     */
    public $SdkAppId;

    /**
     * @var string The unique Id of the transcription task will be returned upon successful startup.
     */
    public $TaskId;

    /**
     * @param integer $SdkAppId SDKAppId of TRTC, which is the same as the SDKAppId of the room being transcribed.
     * @param string $TaskId The unique Id of the transcription task will be returned upon successful startup.
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
