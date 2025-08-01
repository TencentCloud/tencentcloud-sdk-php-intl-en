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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordInfo request structure.
 *
 * @method integer getTaskId() Obtain ID of the ongoing task, which is returned from the `StartRecord` API.
 * @method void setTaskId(integer $TaskId) Set ID of the ongoing task, which is returned from the `StartRecord` API.
 * @method integer getBizId() Obtain Application ID.
 * @method void setBizId(integer $BizId) Set Application ID.
 */
class DescribeRecordInfoRequest extends AbstractModel
{
    /**
     * @var integer ID of the ongoing task, which is returned from the `StartRecord` API.
     */
    public $TaskId;

    /**
     * @var integer Application ID.
     */
    public $BizId;

    /**
     * @param integer $TaskId ID of the ongoing task, which is returned from the `StartRecord` API.
     * @param integer $BizId Application ID.
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

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }
    }
}
