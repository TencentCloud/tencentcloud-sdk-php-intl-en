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
 * DescribeIntegrationVersionNodesInfo request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskVersionPath() Obtain The selected version's storage path for the task:
The value of Base64.encode($region | $bucket | $ftp.file.name) under TaskInfo.TaskExt.Properties returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
 * @method void setTaskVersionPath(string $TaskVersionPath) Set The selected version's storage path for the task:
The value of Base64.encode($region | $bucket | $ftp.file.name) under TaskInfo.TaskExt.Properties returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
 * @method string getTaskVersion() Obtain The selected version ID for the task:
The value of VersionId returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
 * @method void setTaskVersion(string $TaskVersion) Set The selected version ID for the task:
The value of VersionId returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
 */
class DescribeIntegrationVersionNodesInfoRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string The selected version's storage path for the task:
The value of Base64.encode($region | $bucket | $ftp.file.name) under TaskInfo.TaskExt.Properties returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
     */
    public $TaskVersionPath;

    /**
     * @var string The selected version ID for the task:
The value of VersionId returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
     */
    public $TaskVersion;

    /**
     * @param string $TaskId Task ID
     * @param string $ProjectId Project ID
     * @param string $TaskVersionPath The selected version's storage path for the task:
The value of Base64.encode($region | $bucket | $ftp.file.name) under TaskInfo.TaskExt.Properties returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
     * @param string $TaskVersion The selected version ID for the task:
The value of VersionId returned by DescribeDsTaskVersionList or DescribeDsTaskVersionInfo
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskVersionPath",$param) and $param["TaskVersionPath"] !== null) {
            $this->TaskVersionPath = $param["TaskVersionPath"];
        }

        if (array_key_exists("TaskVersion",$param) and $param["TaskVersion"] !== null) {
            $this->TaskVersion = $param["TaskVersion"];
        }
    }
}
