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
 * DescribeOnlineRecord request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the customer
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the customer
 * @method string getTaskId() Obtain ID of the real-time recording task
 * @method void setTaskId(string $TaskId) Set ID of the real-time recording task
 */
class DescribeOnlineRecordRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the customer
     */
    public $SdkAppId;

    /**
     * @var string ID of the real-time recording task
     */
    public $TaskId;

    /**
     * @param integer $SdkAppId SdkAppId of the customer
     * @param string $TaskId ID of the real-time recording task
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
