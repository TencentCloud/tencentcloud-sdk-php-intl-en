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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBaselineMainTaskExportJob request structure.
 *
 * @method integer getTaskID() Obtain <p>Baseline main task ID, precisely export the testing items and subtasks of this task; exports as empty if not provided.</p>
 * @method void setTaskID(integer $TaskID) Set <p>Baseline main task ID, precisely export the testing items and subtasks of this task; exports as empty if not provided.</p>
 * @method string getName() Obtain <p>Export task name. If not specified, it will be automatically generated.</p>
 * @method void setName(string $Name) Set <p>Export task name. If not specified, it will be automatically generated.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported fields include: TaskID (exact), TaskType, Status, CheckAssetType.</p>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported fields include: TaskID (exact), TaskType, Status, CheckAssetType.</p>
 */
class CreateBaselineMainTaskExportJobRequest extends AbstractModel
{
    /**
     * @var integer <p>Baseline main task ID, precisely export the testing items and subtasks of this task; exports as empty if not provided.</p>
     */
    public $TaskID;

    /**
     * @var string <p>Export task name. If not specified, it will be automatically generated.</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported fields include: TaskID (exact), TaskType, Status, CheckAssetType.</p>
     */
    public $Filters;

    /**
     * @param integer $TaskID <p>Baseline main task ID, precisely export the testing items and subtasks of this task; exports as empty if not provided.</p>
     * @param string $Name <p>Export task name. If not specified, it will be automatically generated.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported fields include: TaskID (exact), TaskType, Status, CheckAssetType.</p>
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
