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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Migration task type
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method string getMigrationType() Obtain Migration type
 * @method void setMigrationType(string $MigrationType) Set Migration type
 * @method string getStatus() Obtain Migration status
 * @method void setStatus(string $Status) Set Migration status
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method SrcInfo getSrcInfo() Obtain Migration source information
 * @method void setSrcInfo(SrcInfo $SrcInfo) Set Migration source information
 * @method TimeObj getMigrationTimeLine() Obtain Migration time information
 * @method void setMigrationTimeLine(TimeObj $MigrationTimeLine) Set Migration time information
 * @method string getUpdated() Obtain Status update time
 * @method void setUpdated(string $Updated) Set Status update time
 * @method DstInfo getDstInfo() Obtain Migration destination information
 * @method void setDstInfo(DstInfo $DstInfo) Set Migration destination information
 */
class Task extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var string Migration type
     */
    public $MigrationType;

    /**
     * @var string Migration status
     */
    public $Status;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var SrcInfo Migration source information
     */
    public $SrcInfo;

    /**
     * @var TimeObj Migration time information
     */
    public $MigrationTimeLine;

    /**
     * @var string Status update time
     */
    public $Updated;

    /**
     * @var DstInfo Migration destination information
     */
    public $DstInfo;

    /**
     * @param string $TaskId Task ID
     * @param string $TaskName Task name
     * @param string $MigrationType Migration type
     * @param string $Status Migration status
     * @param integer $ProjectId Project ID
     * @param string $ProjectName Project name
     * @param SrcInfo $SrcInfo Migration source information
     * @param TimeObj $MigrationTimeLine Migration time information
     * @param string $Updated Status update time
     * @param DstInfo $DstInfo Migration destination information
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("MigrationTimeLine",$param) and $param["MigrationTimeLine"] !== null) {
            $this->MigrationTimeLine = new TimeObj();
            $this->MigrationTimeLine->deserialize($param["MigrationTimeLine"]);
        }

        if (array_key_exists("Updated",$param) and $param["Updated"] !== null) {
            $this->Updated = $param["Updated"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }
    }
}
