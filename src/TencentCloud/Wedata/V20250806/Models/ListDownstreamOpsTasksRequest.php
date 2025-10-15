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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDownstreamOpsTasks request structure.
 *
 * @method string getTaskId() Obtain Task ID		
 * @method void setTaskId(string $TaskId) Set Task ID		
 * @method string getProjectId() Obtain Project ID.
		
 * @method void setProjectId(string $ProjectId) Set Project ID.
		
 * @method string getPageNumber() Obtain Page number
 * @method void setPageNumber(string $PageNumber) Set Page number
 * @method string getPageSize() Obtain Pagination size.
 * @method void setPageSize(string $PageSize) Set Pagination size.
 */
class ListDownstreamOpsTasksRequest extends AbstractModel
{
    /**
     * @var string Task ID		
     */
    public $TaskId;

    /**
     * @var string Project ID.
		
     */
    public $ProjectId;

    /**
     * @var string Page number
     */
    public $PageNumber;

    /**
     * @var string Pagination size.
     */
    public $PageSize;

    /**
     * @param string $TaskId Task ID		
     * @param string $ProjectId Project ID.
		
     * @param string $PageNumber Page number
     * @param string $PageSize Pagination size.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
