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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSubTasks request structure.
 *
 * @method string getTaskId() Obtain Complex task ID
 * @method void setTaskId(string $TaskId) Set Complex task ID
 * @method integer getPageNumber() Obtain Page number, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Page number, which is 1 by default.
 * @method integer getPageSize() Obtain Number of items per page. Default: 10.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Default: 10.
 * @method integer getStatus() Obtain Default: no filtering on this field. Otherwise, filter by task status. Status code: 1-NEW, 2-RUNNING, 3-COMPLETED, 4-FAILED.
 * @method void setStatus(integer $Status) Set Default: no filtering on this field. Otherwise, filter by task status. Status code: 1-NEW, 2-RUNNING, 3-COMPLETED, 4-FAILED.
 */
class ListSubTasksRequest extends AbstractModel
{
    /**
     * @var string Complex task ID
     */
    public $TaskId;

    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Default: 10.
     */
    public $PageSize;

    /**
     * @var integer Default: no filtering on this field. Otherwise, filter by task status. Status code: 1-NEW, 2-RUNNING, 3-COMPLETED, 4-FAILED.
     */
    public $Status;

    /**
     * @param string $TaskId Complex task ID
     * @param integer $PageNumber Page number, which is 1 by default.
     * @param integer $PageSize Number of items per page. Default: 10.
     * @param integer $Status Default: no filtering on this field. Otherwise, filter by task status. Status code: 1-NEW, 2-RUNNING, 3-COMPLETED, 4-FAILED.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
