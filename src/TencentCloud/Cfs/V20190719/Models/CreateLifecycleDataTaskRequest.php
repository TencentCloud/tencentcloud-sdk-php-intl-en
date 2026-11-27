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
 * @method string getFileSystemId() Obtain <p>Unique file system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>Unique file system ID.</p>
 * @method string getType() Obtain <p>Lifecycle task type. archive: archiving; restore: preheating; release: data release; metaload: metadata loading.</p>
 * @method void setType(string $Type) Set <p>Lifecycle task type. archive: archiving; restore: preheating; release: data release; metaload: metadata loading.</p>
 * @method string getTaskName() Obtain <p>Task name.</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name.</p>
 * @method string getTaskPath() Obtain <p>Path or file to be archived. Only one path is supported and it cannot be empty.</p>
 * @method void setTaskPath(string $TaskPath) Set <p>Path or file to be archived. Only one path is supported and it cannot be empty.</p>
 * @method string getDataFlowId() Obtain <p>Data flow ID. It can be queried through DescribeDataFlow.</p>
 * @method void setDataFlowId(string $DataFlowId) Set <p>Data flow ID. It can be queried through DescribeDataFlow.</p>
 * @method boolean getIsOverwrite() Obtain <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage. true: overwrite; false: do not overwrite (and hot storage data will not be released). If this parameter is left empty, the default value is false.</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) Set <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage. true: overwrite; false: do not overwrite (and hot storage data will not be released). If this parameter is left empty, the default value is false.</p>
 * @method string getListPath() Obtain <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. Specify either this parameter or TaskPath.<br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
 * @method void setListPath(string $ListPath) Set <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. Specify either this parameter or TaskPath.<br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
 */
class CreateLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Unique file system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Lifecycle task type. archive: archiving; restore: preheating; release: data release; metaload: metadata loading.</p>
     */
    public $Type;

    /**
     * @var string <p>Task name.</p>
     */
    public $TaskName;

    /**
     * @var string <p>Path or file to be archived. Only one path is supported and it cannot be empty.</p>
     */
    public $TaskPath;

    /**
     * @var string <p>Data flow ID. It can be queried through DescribeDataFlow.</p>
     */
    public $DataFlowId;

    /**
     * @var boolean <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage. true: overwrite; false: do not overwrite (and hot storage data will not be released). If this parameter is left empty, the default value is false.</p>
     */
    public $IsOverwrite;

    /**
     * @var string <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. Specify either this parameter or TaskPath.<br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
     */
    public $ListPath;

    /**
     * @param string $FileSystemId <p>Unique file system ID.</p>
     * @param string $Type <p>Lifecycle task type. archive: archiving; restore: preheating; release: data release; metaload: metadata loading.</p>
     * @param string $TaskName <p>Task name.</p>
     * @param string $TaskPath <p>Path or file to be archived. Only one path is supported and it cannot be empty.</p>
     * @param string $DataFlowId <p>Data flow ID. It can be queried through DescribeDataFlow.</p>
     * @param boolean $IsOverwrite <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage. true: overwrite; false: do not overwrite (and hot storage data will not be released). If this parameter is left empty, the default value is false.</p>
     * @param string $ListPath <p>Path of the data manifest file. Each line in the manifest file is the full path of a file to be processed. All paths (including the manifest file path and the paths of files to be processed in each line of the manifest file) must start with /cfs and point to existing files in the CFS file system. Specify either this parameter or TaskPath.<br>Example:</p><ul><li>If the CFS root directory / is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/lists/archive_list.txt.</li><li>If the CFS subdirectory /subdir is mounted and the manifest file is located at lists/archive_list.txt under the mount path, set this parameter to /cfs/subdir/lists/archive_list.txt.</li></ul>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("ListPath",$param) and $param["ListPath"] !== null) {
            $this->ListPath = $param["ListPath"];
        }
    }
}
