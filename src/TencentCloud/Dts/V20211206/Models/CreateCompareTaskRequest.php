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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCompareTask request structure.
 *
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getTaskName() Obtain Data consistency check task name. If this parameter is left empty, the value of `CompareTaskId` will be assigned to it.
 * @method void setTaskName(string $TaskName) Set Data consistency check task name. If this parameter is left empty, the value of `CompareTaskId` will be assigned to it.
 * @method string getObjectMode() Obtain Data comparison object mode. Valid values: `sameAsMigrate` (all migration objects); `custom` (custom mode). Default value: `sameAsMigrate`.
 * @method void setObjectMode(string $ObjectMode) Set Data comparison object mode. Valid values: `sameAsMigrate` (all migration objects); `custom` (custom mode). Default value: `sameAsMigrate`.
 * @method CompareObject getObjects() Obtain Configuration of the data consistency check object
 * @method void setObjects(CompareObject $Objects) Set Configuration of the data consistency check object
 * @method CompareOptions getOptions() Obtain Consistency check options
 * @method void setOptions(CompareOptions $Options) Set Consistency check options
 */
class CreateCompareTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Data consistency check task name. If this parameter is left empty, the value of `CompareTaskId` will be assigned to it.
     */
    public $TaskName;

    /**
     * @var string Data comparison object mode. Valid values: `sameAsMigrate` (all migration objects); `custom` (custom mode). Default value: `sameAsMigrate`.
     */
    public $ObjectMode;

    /**
     * @var CompareObject Configuration of the data consistency check object
     */
    public $Objects;

    /**
     * @var CompareOptions Consistency check options
     */
    public $Options;

    /**
     * @param string $JobId Task ID
     * @param string $TaskName Data consistency check task name. If this parameter is left empty, the value of `CompareTaskId` will be assigned to it.
     * @param string $ObjectMode Data comparison object mode. Valid values: `sameAsMigrate` (all migration objects); `custom` (custom mode). Default value: `sameAsMigrate`.
     * @param CompareObject $Objects Configuration of the data consistency check object
     * @param CompareOptions $Options Consistency check options
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ObjectMode",$param) and $param["ObjectMode"] !== null) {
            $this->ObjectMode = $param["ObjectMode"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new CompareObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }
    }
}
