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
 * Subtask information of image repository scanning
 *
 * @method string getJobID() Obtain <p>Export task id</p>
 * @method void setJobID(string $JobID) Set <p>Export task id</p>
 * @method string getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>SUCCESS: Task successful</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>SUCCESS: Task successful</li></ul>
 * @method integer getOwnerAppId() Obtain <p>appid of the account to which the task belongs</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account to which the task belongs</p>
 * @method string getExportType() Obtain <p>Export type</p>
 * @method void setExportType(string $ExportType) Set <p>Export type</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method string getExportCreateTime() Obtain <p>Export time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setExportCreateTime(string $ExportCreateTime) Set <p>Export time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 */
class ImageRegistryExportJobInfo extends AbstractModel
{
    /**
     * @var string <p>Export task id</p>
     */
    public $JobID;

    /**
     * @var string <p>Task status.</p><p>Enumeration values: </p><ul><li>SUCCESS: Task successful</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>appid of the account to which the task belongs</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Export type</p>
     */
    public $ExportType;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var string <p>Export time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $ExportCreateTime;

    /**
     * @param string $JobID <p>Export task id</p>
     * @param string $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>SUCCESS: Task successful</li></ul>
     * @param integer $OwnerAppId <p>appid of the account to which the task belongs</p>
     * @param string $ExportType <p>Export type</p>
     * @param string $Name <p>Task name</p>
     * @param string $ExportCreateTime <p>Export time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExportCreateTime",$param) and $param["ExportCreateTime"] !== null) {
            $this->ExportCreateTime = $param["ExportCreateTime"];
        }
    }
}
