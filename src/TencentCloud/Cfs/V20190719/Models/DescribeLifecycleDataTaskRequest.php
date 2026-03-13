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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLifecycleDataTask request structure.
 *
 * @method string getStartTime() Obtain Start time. must be earlier than EndTime. only supports querying task data within the most recent 3 months.
 * @method void setStartTime(string $StartTime) Set Start time. must be earlier than EndTime. only supports querying task data within the most recent 3 months.
 * @method string getEndTime() Obtain End time. must be later than StartTime. only supports querying task data within the most recent 3 months.
 * @method void setEndTime(string $EndTime) Set End time. must be later than StartTime. only supports querying task data within the most recent 3 months.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getOffset() Obtain Offset paging number	
 * @method void setOffset(integer $Offset) Set Offset paging number	
 * @method integer getLimit() Obtain Limit page size	
 * @method void setLimit(integer $Limit) Set Limit page size	
 * @method array getFilters() Obtain Filter conditions, TaskName, FileSystemId, Type.
 * @method void setFilters(array $Filters) Set Filter conditions, TaskName, FileSystemId, Type.
 * @method string getCfsVersion() Obtain File system version; v3.1: pcfs/hifs v4.0: Turbo.
 * @method void setCfsVersion(string $CfsVersion) Set File system version; v3.1: pcfs/hifs v4.0: Turbo.
 */
class DescribeLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string Start time. must be earlier than EndTime. only supports querying task data within the most recent 3 months.
     */
    public $StartTime;

    /**
     * @var string End time. must be later than StartTime. only supports querying task data within the most recent 3 months.
     */
    public $EndTime;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer Offset paging number	
     */
    public $Offset;

    /**
     * @var integer Limit page size	
     */
    public $Limit;

    /**
     * @var array Filter conditions, TaskName, FileSystemId, Type.
     */
    public $Filters;

    /**
     * @var string File system version; v3.1: pcfs/hifs v4.0: Turbo.
     */
    public $CfsVersion;

    /**
     * @param string $StartTime Start time. must be earlier than EndTime. only supports querying task data within the most recent 3 months.
     * @param string $EndTime End time. must be later than StartTime. only supports querying task data within the most recent 3 months.
     * @param string $TaskId Task ID.
     * @param integer $Offset Offset paging number	
     * @param integer $Limit Limit page size	
     * @param array $Filters Filter conditions, TaskName, FileSystemId, Type.
     * @param string $CfsVersion File system version; v3.1: pcfs/hifs v4.0: Turbo.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }
    }
}
