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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteScheduledSql request structure.
 *
 * @method string getTaskId() Obtain Task ID, which can be obtained through [Scheduled SQL Analysis Task List](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 * @method void setTaskId(string $TaskId) Set Task ID, which can be obtained through [Scheduled SQL Analysis Task List](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 * @method string getSrcTopicId() Obtain Source log topic ID. Search the scheduled SQL analysis task list (https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
 * @method void setSrcTopicId(string $SrcTopicId) Set Source log topic ID. Search the scheduled SQL analysis task list (https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
 */
class DeleteScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string Task ID, which can be obtained through [Scheduled SQL Analysis Task List](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
     */
    public $TaskId;

    /**
     * @var string Source log topic ID. Search the scheduled SQL analysis task list (https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
     */
    public $SrcTopicId;

    /**
     * @param string $TaskId Task ID, which can be obtained through [Scheduled SQL Analysis Task List](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
     * @param string $SrcTopicId Source log topic ID. Search the scheduled SQL analysis task list (https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1) to obtain it.
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

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }
    }
}
