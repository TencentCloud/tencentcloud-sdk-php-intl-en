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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration task information.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getType() Obtain 0 - not specified (existing).
Metadata import.
 * @method void setType(integer $Type) Set 0 - not specified (existing).
Metadata import.
 * @method integer getTopicNum() Obtain Total number of topics.
 * @method void setTopicNum(integer $TopicNum) Set Total number of topics.
 * @method integer getGroupNum() Obtain Total Number of Consumer Groups
 * @method void setGroupNum(integer $GroupNum) Set Total Number of Consumer Groups
 * @method integer getStatus() Obtain Task status. 0: migrating; 1: migration successful; 2: migration completed, with only part of the data migrated.
 * @method void setStatus(integer $Status) Set Task status. 0: migrating; 1: migration successful; 2: migration completed, with only part of the data migrated.
 * @method integer getCreateTime() Obtain Creation time.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
 */
class MigrationTaskItem extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer 0 - not specified (existing).
Metadata import.
     */
    public $Type;

    /**
     * @var integer Total number of topics.
     */
    public $TopicNum;

    /**
     * @var integer Total Number of Consumer Groups
     */
    public $GroupNum;

    /**
     * @var integer Task status. 0: migrating; 1: migration successful; 2: migration completed, with only part of the data migrated.
     */
    public $Status;

    /**
     * @var integer Creation time.
     */
    public $CreateTime;

    /**
     * @param string $TaskId Task ID
     * @param string $InstanceId Instance ID.
     * @param integer $Type 0 - not specified (existing).
Metadata import.
     * @param integer $TopicNum Total number of topics.
     * @param integer $GroupNum Total Number of Consumer Groups
     * @param integer $Status Task status. 0: migrating; 1: migration successful; 2: migration completed, with only part of the data migrated.
     * @param integer $CreateTime Creation time.
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
