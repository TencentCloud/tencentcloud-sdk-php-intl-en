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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subtask records
 *
 * @method integer getId() Obtain Subtask record Id
 * @method void setId(integer $Id) Set Subtask record Id
 * @method string getScriptContent() Obtain Script Content
 * @method void setScriptContent(string $ScriptContent) Set Script Content
 * @method string getStartTime() Obtain Task start time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Task start time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain Task termination time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set Task termination time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Current Task Status
 * @method void setStatus(string $Status) Set Current Task Status
 * @method integer getRecordId() Obtain Submit Task ID
 * @method void setRecordId(integer $RecordId) Set Submit Task ID
 */
class AdhocDetail extends AbstractModel
{
    /**
     * @var integer Subtask record Id
     */
    public $Id;

    /**
     * @var string Script Content
     */
    public $ScriptContent;

    /**
     * @var string Task start time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task termination time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Current Task Status
     */
    public $Status;

    /**
     * @var integer Submit Task ID
     */
    public $RecordId;

    /**
     * @param integer $Id Subtask record Id
     * @param string $ScriptContent Script Content
     * @param string $StartTime Task start time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime Task termination time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Current Task Status
     * @param integer $RecordId Submit Task ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
