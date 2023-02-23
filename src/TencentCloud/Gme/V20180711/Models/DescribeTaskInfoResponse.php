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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskInfo response structure.
 *
 * @method integer getTaskId() Obtain ID of the ongoing task, which is returned from the `StartRecord` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set ID of the ongoing task, which is returned from the `StartRecord` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordMode() Obtain Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordMode(integer $RecordMode) Set Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SubscribeRecordUserIds getSubscribeRecordUserIds() Obtain Allowlist or blocklist for stream subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeRecordUserIds(SubscribeRecordUserIds $SubscribeRecordUserIds) Set Allowlist or blocklist for stream subscription.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskInfoResponse extends AbstractModel
{
    /**
     * @var integer ID of the ongoing task, which is returned from the `StartRecord` API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordMode;

    /**
     * @var SubscribeRecordUserIds Allowlist or blocklist for stream subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeRecordUserIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TaskId ID of the ongoing task, which is returned from the `StartRecord` API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordMode Recording mode. Valid values: `1`: single stream; `2`: mixed streams; `3`: single stream and mixed streams.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SubscribeRecordUserIds $SubscribeRecordUserIds Allowlist or blocklist for stream subscription.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("SubscribeRecordUserIds",$param) and $param["SubscribeRecordUserIds"] !== null) {
            $this->SubscribeRecordUserIds = new SubscribeRecordUserIds();
            $this->SubscribeRecordUserIds->deserialize($param["SubscribeRecordUserIds"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
