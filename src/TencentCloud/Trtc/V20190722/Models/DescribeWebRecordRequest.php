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
 * DescribeWebRecord request structure.
 *
 * @method string getTaskId() Obtain The task ID returned when starting web-page recording
 * @method void setTaskId(string $TaskId) Set The task ID returned when starting web-page recording
 * @method integer getSdkAppId() Obtain SdkAppId passed when initiating web-page recording
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId passed when initiating web-page recording
 * @method string getRecordId() Obtain RecordId passed when initiating recording. When passing this value, you need to pass SdkAppId
 * @method void setRecordId(string $RecordId) Set RecordId passed when initiating recording. When passing this value, you need to pass SdkAppId
 */
class DescribeWebRecordRequest extends AbstractModel
{
    /**
     * @var string The task ID returned when starting web-page recording
     */
    public $TaskId;

    /**
     * @var integer SdkAppId passed when initiating web-page recording
     */
    public $SdkAppId;

    /**
     * @var string RecordId passed when initiating recording. When passing this value, you need to pass SdkAppId
     */
    public $RecordId;

    /**
     * @param string $TaskId The task ID returned when starting web-page recording
     * @param integer $SdkAppId SdkAppId passed when initiating web-page recording
     * @param string $RecordId RecordId passed when initiating recording. When passing this value, you need to pass SdkAppId
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
