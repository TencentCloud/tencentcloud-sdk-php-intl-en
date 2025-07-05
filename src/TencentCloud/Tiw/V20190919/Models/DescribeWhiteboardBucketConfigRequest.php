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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteboardBucketConfig request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getTaskType() Obtain Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 * @method void setTaskType(string $TaskType) Set Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 */
class DescribeWhiteboardBucketConfigRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
     */
    public $TaskType;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $TaskType Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
