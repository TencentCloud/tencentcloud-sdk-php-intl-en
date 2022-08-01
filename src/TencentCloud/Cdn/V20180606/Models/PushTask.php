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
 * Prefetch task details.
 *
 * @method string getTaskId() Obtain Prefetch task ID
 * @method void setTaskId(string $TaskId) Set Prefetch task ID
 * @method string getUrl() Obtain Prefetched URL
 * @method void setUrl(string $Url) Set Prefetched URL
 * @method string getStatus() Obtain Prefetch task status
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
 * @method void setStatus(string $Status) Set Prefetch task status
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
 * @method integer getPercent() Obtain Prefetch progress in percentage
 * @method void setPercent(integer $Percent) Set Prefetch progress in percentage
 * @method string getCreateTime() Obtain Prefetch task submission time
 * @method void setCreateTime(string $CreateTime) Set Prefetch task submission time
 * @method string getArea() Obtain Prefetch region
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
 * @method void setArea(string $Area) Set Prefetch region
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
 * @method string getUpdateTime() Obtain Prefetch task update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Prefetch task update time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class PushTask extends AbstractModel
{
    /**
     * @var string Prefetch task ID
     */
    public $TaskId;

    /**
     * @var string Prefetched URL
     */
    public $Url;

    /**
     * @var string Prefetch task status
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
     */
    public $Status;

    /**
     * @var integer Prefetch progress in percentage
     */
    public $Percent;

    /**
     * @var string Prefetch task submission time
     */
    public $CreateTime;

    /**
     * @var string Prefetch region
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
     */
    public $Area;

    /**
     * @var string Prefetch task update time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $TaskId Prefetch task ID
     * @param string $Url Prefetched URL
     * @param string $Status Prefetch task status
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
     * @param integer $Percent Prefetch progress in percentage
     * @param string $CreateTime Prefetch task submission time
     * @param string $Area Prefetch region
`mainland`: Within the Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
     * @param string $UpdateTime Prefetch task update time
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
