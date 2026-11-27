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
 * DoDirectoryOperation request structure.
 *
 * @method string getFileSystemId() Obtain <p>File system ID. Currently, only Turbo file systems support this API. General-purpose file systems (including enhanced ones) do not support this API.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID. Currently, only Turbo file systems support this API. General-purpose file systems (including enhanced ones) do not support this API.</p>
 * @method string getOpetationType() Obtain <p>create: creates a directory, equivalent to mkdir.<br>check: checks whether a directory exists, equivalent to stat.<br>move: renames a file or directory, equivalent to mv.</p>
 * @method void setOpetationType(string $OpetationType) Set <p>create: creates a directory, equivalent to mkdir.<br>check: checks whether a directory exists, equivalent to stat.<br>move: renames a file or directory, equivalent to mv.</p>
 * @method string getDirectoryPath() Obtain <p>The system recursively creates all parent directories in the path by default. The path must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li><p>If the operation is create/check</p><ul><li>If the CFS root directory / is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/subdir/test1/test2</li></ul></li><li><p>If the operation is move</p><ul><li>If the CFS root directory / is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/subdir/test1/test2</li></ul></li></ul>
 * @method void setDirectoryPath(string $DirectoryPath) Set <p>The system recursively creates all parent directories in the path by default. The path must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li><p>If the operation is create/check</p><ul><li>If the CFS root directory / is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/subdir/test1/test2</li></ul></li><li><p>If the operation is move</p><ul><li>If the CFS root directory / is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/subdir/test1/test2</li></ul></li></ul>
 * @method string getMode() Obtain <p>Permission for creating the directory. If not specified, the default value is 0755. If OperationType is check, this value is meaningless.</p>
 * @method void setMode(string $Mode) Set <p>Permission for creating the directory. If not specified, the default value is 0755. If OperationType is check, this value is meaningless.</p>
 * @method string getDestPath() Obtain <p>Target directory path for the mv operation. It must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/test3/test4</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/subdir/test3/test4</li></ul>
 * @method void setDestPath(string $DestPath) Set <p>Target directory path for the mv operation. It must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/test3/test4</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/subdir/test3/test4</li></ul>
 */
class DoDirectoryOperationRequest extends AbstractModel
{
    /**
     * @var string <p>File system ID. Currently, only Turbo file systems support this API. General-purpose file systems (including enhanced ones) do not support this API.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>create: creates a directory, equivalent to mkdir.<br>check: checks whether a directory exists, equivalent to stat.<br>move: renames a file or directory, equivalent to mv.</p>
     */
    public $OpetationType;

    /**
     * @var string <p>The system recursively creates all parent directories in the path by default. The path must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li><p>If the operation is create/check</p><ul><li>If the CFS root directory / is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/subdir/test1/test2</li></ul></li><li><p>If the operation is move</p><ul><li>If the CFS root directory / is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/subdir/test1/test2</li></ul></li></ul>
     */
    public $DirectoryPath;

    /**
     * @var string <p>Permission for creating the directory. If not specified, the default value is 0755. If OperationType is check, this value is meaningless.</p>
     */
    public $Mode;

    /**
     * @var string <p>Target directory path for the mv operation. It must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/test3/test4</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/subdir/test3/test4</li></ul>
     */
    public $DestPath;

    /**
     * @param string $FileSystemId <p>File system ID. Currently, only Turbo file systems support this API. General-purpose file systems (including enhanced ones) do not support this API.</p>
     * @param string $OpetationType <p>create: creates a directory, equivalent to mkdir.<br>check: checks whether a directory exists, equivalent to stat.<br>move: renames a file or directory, equivalent to mv.</p>
     * @param string $DirectoryPath <p>The system recursively creates all parent directories in the path by default. The path must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li><p>If the operation is create/check</p><ul><li>If the CFS root directory / is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to create/check whether test1/test2 exists under the mount path, the input value is /cfs/subdir/test1/test2</li></ul></li><li><p>If the operation is move</p><ul><li>If the CFS root directory / is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/test1/test2</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under test1/test2 to DestPath, the input value is /cfs/subdir/test1/test2</li></ul></li></ul>
     * @param string $Mode <p>Permission for creating the directory. If not specified, the default value is 0755. If OperationType is check, this value is meaningless.</p>
     * @param string $DestPath <p>Target directory path for the mv operation. It must start with /cfs/, which represents the logical path inside the file storage instance, not the local mount point path.<br>Example:</p><ul><li>If the CFS root directory / is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/test3/test4</li><li>If the CFS subdirectory /subdir is mounted, and you need to move files under DirectoryPath to test3/test4 under the mount path, the input value is /cfs/subdir/test3/test4</li></ul>
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

        if (array_key_exists("OpetationType",$param) and $param["OpetationType"] !== null) {
            $this->OpetationType = $param["OpetationType"];
        }

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DestPath",$param) and $param["DestPath"] !== null) {
            $this->DestPath = $param["DestPath"];
        }
    }
}
