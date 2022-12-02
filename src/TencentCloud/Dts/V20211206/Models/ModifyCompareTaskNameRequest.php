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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCompareTaskName request structure.
 *
 * @method string getJobId() Obtain Migration task ID
 * @method void setJobId(string $JobId) Set Migration task ID
 * @method string getCompareTaskId() Obtain Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
 * @method void setCompareTaskId(string $CompareTaskId) Set Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
 * @method string getTaskName() Obtain Data consistency check task name
 * @method void setTaskName(string $TaskName) Set Data consistency check task name
 */
class ModifyCompareTaskNameRequest extends AbstractModel
{
    /**
     * @var string Migration task ID
     */
    public $JobId;

    /**
     * @var string Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
     */
    public $CompareTaskId;

    /**
     * @var string Data consistency check task name
     */
    public $TaskName;

    /**
     * @param string $JobId Migration task ID
     * @param string $CompareTaskId Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
     * @param string $TaskName Data consistency check task name
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
