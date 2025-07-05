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
 * DescribeSnapshotTask request structure.
 *
 * @method string getTaskID() Obtain ID of the query task.
 * @method void setTaskID(string $TaskID) Set ID of the query task.
 * @method integer getSdkAppId() Obtain SdkAppId of the task.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the task.
 */
class DescribeSnapshotTaskRequest extends AbstractModel
{
    /**
     * @var string ID of the query task.
     */
    public $TaskID;

    /**
     * @var integer SdkAppId of the task.
     */
    public $SdkAppId;

    /**
     * @param string $TaskID ID of the query task.
     * @param integer $SdkAppId SdkAppId of the task.
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
