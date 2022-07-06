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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePullStreamTasks request structure.
 *
 * @method string getTaskId() Obtain The task ID. 
A task ID is returned by the `CreateLivePullStreamTask` API.
If you do not pass this parameter, all tasks will be returned, sorted by last updated time in descending order.
 * @method void setTaskId(string $TaskId) Set The task ID. 
A task ID is returned by the `CreateLivePullStreamTask` API.
If you do not pass this parameter, all tasks will be returned, sorted by last updated time in descending order.
 * @method integer getPageNum() Obtain The number of page to start from. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set The number of page to start from. Default value: 1.
 * @method integer getPageSize() Obtain The maximum number of records per page. Default value: 10.
Valid values: Any integer between 1 and 20.
 * @method void setPageSize(integer $PageSize) Set The maximum number of records per page. Default value: 10.
Valid values: Any integer between 1 and 20.
 */
class DescribeLivePullStreamTasksRequest extends AbstractModel
{
    /**
     * @var string The task ID. 
A task ID is returned by the `CreateLivePullStreamTask` API.
If you do not pass this parameter, all tasks will be returned, sorted by last updated time in descending order.
     */
    public $TaskId;

    /**
     * @var integer The number of page to start from. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer The maximum number of records per page. Default value: 10.
Valid values: Any integer between 1 and 20.
     */
    public $PageSize;

    /**
     * @param string $TaskId The task ID. 
A task ID is returned by the `CreateLivePullStreamTask` API.
If you do not pass this parameter, all tasks will be returned, sorted by last updated time in descending order.
     * @param integer $PageNum The number of page to start from. Default value: 1.
     * @param integer $PageSize The maximum number of records per page. Default value: 10.
Valid values: Any integer between 1 and 20.
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

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
