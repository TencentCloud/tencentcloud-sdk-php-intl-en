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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDisableRecords request structure.
 *
 * @method string getUrl() Obtain Specifies the URL to be queried
 * @method void setUrl(string $Url) Set Specifies the URL to be queried
 * @method string getStartTime() Obtain Starting time, such as `2018-12-12 10:24:00`
 * @method void setStartTime(string $StartTime) Set Starting time, such as `2018-12-12 10:24:00`
 * @method string getEndTime() Obtain End time, such as `2018-12-14 10:24:00`
 * @method void setEndTime(string $EndTime) Set End time, such as `2018-12-14 10:24:00`
 * @method string getStatus() Obtain Current URL status
disable: The URL remains disabled, and accessing it will return an error 403
enable: The URL is enabled (unblocked) and can be normally accessed
 * @method void setStatus(string $Status) Set Current URL status
disable: The URL remains disabled, and accessing it will return an error 403
enable: The URL is enabled (unblocked) and can be normally accessed
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Pagination limit. Default value: 20.
 * @method void setLimit(integer $Limit) Set Pagination limit. Default value: 20.
 * @method string getTaskId() Obtain Task ID. The task ID and start time cannot be both left empty.
 * @method void setTaskId(string $TaskId) Set Task ID. The task ID and start time cannot be both left empty.
 */
class GetDisableRecordsRequest extends AbstractModel
{
    /**
     * @var string Specifies the URL to be queried
     */
    public $Url;

    /**
     * @var string Starting time, such as `2018-12-12 10:24:00`
     */
    public $StartTime;

    /**
     * @var string End time, such as `2018-12-14 10:24:00`
     */
    public $EndTime;

    /**
     * @var string Current URL status
disable: The URL remains disabled, and accessing it will return an error 403
enable: The URL is enabled (unblocked) and can be normally accessed
     */
    public $Status;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Pagination limit. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Task ID. The task ID and start time cannot be both left empty.
     */
    public $TaskId;

    /**
     * @param string $Url Specifies the URL to be queried
     * @param string $StartTime Starting time, such as `2018-12-12 10:24:00`
     * @param string $EndTime End time, such as `2018-12-14 10:24:00`
     * @param string $Status Current URL status
disable: The URL remains disabled, and accessing it will return an error 403
enable: The URL is enabled (unblocked) and can be normally accessed
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Pagination limit. Default value: 20.
     * @param string $TaskId Task ID. The task ID and start time cannot be both left empty.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
