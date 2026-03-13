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
 * CreateLifecycleDataTask request structure.
 *
 * @method string getFileSystemId() Obtain File system unique ID.
 * @method void setFileSystemId(string $FileSystemId) Set File system unique ID.
 * @method string getType() Obtain Lifecycle task type; archive: settlement; restore: preheating; release: data release; metaload: metadata loading.
 * @method void setType(string $Type) Set Lifecycle task type; archive: settlement; restore: preheating; release: data release; metaload: metadata loading.
 * @method string getTaskPath() Obtain The path or file to be settled supports passing only one path and cannot be empty.
 * @method void setTaskPath(string $TaskPath) Set The path or file to be settled supports passing only one path and cannot be empty.
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getDataFlowId() Obtain Data flow ID. this api can be accessed through DescribeDataFlow.
 * @method void setDataFlowId(string $DataFlowId) Set Data flow ID. this api can be accessed through DescribeDataFlow.
 * @method boolean getIsOverwrite() Obtain When a file in CFS Turbo and an external storage have the same name, whether to overwrite. true: overwrite. false: not overwrite (at the same time, data storage will not be released). default false when empty.
 * @method void setIsOverwrite(boolean $IsOverwrite) Set When a file in CFS Turbo and an external storage have the same name, whether to overwrite. true: overwrite. false: not overwrite (at the same time, data storage will not be released). default false when empty.
 */
class CreateLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string File system unique ID.
     */
    public $FileSystemId;

    /**
     * @var string Lifecycle task type; archive: settlement; restore: preheating; release: data release; metaload: metadata loading.
     */
    public $Type;

    /**
     * @var string The path or file to be settled supports passing only one path and cannot be empty.
     */
    public $TaskPath;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Data flow ID. this api can be accessed through DescribeDataFlow.
     */
    public $DataFlowId;

    /**
     * @var boolean When a file in CFS Turbo and an external storage have the same name, whether to overwrite. true: overwrite. false: not overwrite (at the same time, data storage will not be released). default false when empty.
     */
    public $IsOverwrite;

    /**
     * @param string $FileSystemId File system unique ID.
     * @param string $Type Lifecycle task type; archive: settlement; restore: preheating; release: data release; metaload: metadata loading.
     * @param string $TaskPath The path or file to be settled supports passing only one path and cannot be empty.
     * @param string $TaskName Task name.
     * @param string $DataFlowId Data flow ID. this api can be accessed through DescribeDataFlow.
     * @param boolean $IsOverwrite When a file in CFS Turbo and an external storage have the same name, whether to overwrite. true: overwrite. false: not overwrite (at the same time, data storage will not be released). default false when empty.
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }
    }
}
