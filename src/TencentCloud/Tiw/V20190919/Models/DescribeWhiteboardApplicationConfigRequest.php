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
 * DescribeWhiteboardApplicationConfig request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method array getTaskTypes() Obtain Task types to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 * @method void setTaskTypes(array $TaskTypes) Set Task types to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 * @method array getSdkAppIds() Obtain SdkAppIds to be used to query configurations.
 * @method void setSdkAppIds(array $SdkAppIds) Set SdkAppIds to be used to query configurations.
 */
class DescribeWhiteboardApplicationConfigRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var array Task types to be queried.
recording: Real-time recording.
transcode: Document transcoding.
     */
    public $TaskTypes;

    /**
     * @var array SdkAppIds to be used to query configurations.
     */
    public $SdkAppIds;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param array $TaskTypes Task types to be queried.
recording: Real-time recording.
transcode: Document transcoding.
     * @param array $SdkAppIds SdkAppIds to be used to query configurations.
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

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("SdkAppIds",$param) and $param["SdkAppIds"] !== null) {
            $this->SdkAppIds = $param["SdkAppIds"];
        }
    }
}
