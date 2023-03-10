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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCompareTask request structure.
 *
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getCompareTaskId() Obtain Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
 * @method void setCompareTaskId(string $CompareTaskId) Set Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method string getObjectMode() Obtain Data comparison object mode. Valid values: `sameAsMigrate` (All migration objects), `custom` (Custom mode. The custom comparison objects must be a subset of the migration objects). Default value: `sameAsMigrate`.
 * @method void setObjectMode(string $ObjectMode) Set Data comparison object mode. Valid values: `sameAsMigrate` (All migration objects), `custom` (Custom mode. The custom comparison objects must be a subset of the migration objects). Default value: `sameAsMigrate`.
 * @method CompareObject getObjects() Obtain Compared object, which is required if `CompareObjectMode` is `custom`.
 * @method void setObjects(CompareObject $Objects) Set Compared object, which is required if `CompareObjectMode` is `custom`.
 * @method CompareOptions getOptions() Obtain Consistency check options
 * @method void setOptions(CompareOptions $Options) Set Consistency check options
 */
class ModifyCompareTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
     */
    public $CompareTaskId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var string Data comparison object mode. Valid values: `sameAsMigrate` (All migration objects), `custom` (Custom mode. The custom comparison objects must be a subset of the migration objects). Default value: `sameAsMigrate`.
     */
    public $ObjectMode;

    /**
     * @var CompareObject Compared object, which is required if `CompareObjectMode` is `custom`.
     */
    public $Objects;

    /**
     * @var CompareOptions Consistency check options
     */
    public $Options;

    /**
     * @param string $JobId Task ID
     * @param string $CompareTaskId Data consistency check task ID in the format of `dts-8yv4w2i1-cmp-37skmii9`
     * @param string $TaskName Task name
     * @param string $ObjectMode Data comparison object mode. Valid values: `sameAsMigrate` (All migration objects), `custom` (Custom mode. The custom comparison objects must be a subset of the migration objects). Default value: `sameAsMigrate`.
     * @param CompareObject $Objects Compared object, which is required if `CompareObjectMode` is `custom`.
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

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
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
