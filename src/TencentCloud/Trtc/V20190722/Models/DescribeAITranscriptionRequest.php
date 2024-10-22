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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAITranscription request structure.
 *
 * @method string getTaskId() Obtain Query the task status. If not in use, pass in an empty string. There are two query methods: 1. Fill in only TaskId. This method uses TaskId to query tasks. 2. TaskId is an empty string. Fill in SdkAppId and SessionId. This method does not require TaskId to query tasks.
 * @method void setTaskId(string $TaskId) Set Query the task status. If not in use, pass in an empty string. There are two query methods: 1. Fill in only TaskId. This method uses TaskId to query tasks. 2. TaskId is an empty string. Fill in SdkAppId and SessionId. This method does not require TaskId to query tasks.
 * @method integer getSdkAppId() Obtain TRTC's SdkAppId is used together with SessionId.
 * @method void setSdkAppId(integer $SdkAppId) Set TRTC's SdkAppId is used together with SessionId.
 * @method string getSessionId() Obtain The SessionId passed in when starting the transcription task is used together with the SdkAppId.
 * @method void setSessionId(string $SessionId) Set The SessionId passed in when starting the transcription task is used together with the SdkAppId.
 */
class DescribeAITranscriptionRequest extends AbstractModel
{
    /**
     * @var string Query the task status. If not in use, pass in an empty string. There are two query methods: 1. Fill in only TaskId. This method uses TaskId to query tasks. 2. TaskId is an empty string. Fill in SdkAppId and SessionId. This method does not require TaskId to query tasks.
     */
    public $TaskId;

    /**
     * @var integer TRTC's SdkAppId is used together with SessionId.
     */
    public $SdkAppId;

    /**
     * @var string The SessionId passed in when starting the transcription task is used together with the SdkAppId.
     */
    public $SessionId;

    /**
     * @param string $TaskId Query the task status. If not in use, pass in an empty string. There are two query methods: 1. Fill in only TaskId. This method uses TaskId to query tasks. 2. TaskId is an empty string. Fill in SdkAppId and SessionId. This method does not require TaskId to query tasks.
     * @param integer $SdkAppId TRTC's SdkAppId is used together with SessionId.
     * @param string $SessionId The SessionId passed in when starting the transcription task is used together with the SdkAppId.
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
