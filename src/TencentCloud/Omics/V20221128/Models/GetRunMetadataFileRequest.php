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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRunMetadataFile request structure.
 *
 * @method string getRunUuid() Obtain Run UUID
 * @method void setRunUuid(string $RunUuid) Set Run UUID
 * @method string getProjectId() Obtain Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method void setProjectId(string $ProjectId) Set Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method string getKey() Obtain File names to be get

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 * @method void setKey(string $Key) Set File names to be get

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 * @method array getKeys() Obtain File names to be get in batch

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 * @method void setKeys(array $Keys) Set File names to be get in batch

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
 */
class GetRunMetadataFileRequest extends AbstractModel
{
    /**
     * @var string Run UUID
     */
    public $RunUuid;

    /**
     * @var string Project ID
(If you leave it blank, the default item in the specified region will be used.)
     */
    public $ProjectId;

    /**
     * @var string File names to be get

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
     */
    public $Key;

    /**
     * @var array File names to be get in batch

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
     */
    public $Keys;

    /**
     * @param string $RunUuid Run UUID
     * @param string $ProjectId Project ID
(If you leave it blank, the default item in the specified region will be used.)
     * @param string $Key File names to be get

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
     * @param array $Keys File names to be get in batch

The following files are supported by default:
- nextflow.log

When report is specified as true in NFOption during submission, the following files are additionally supported:
- execution_report.html
- execution_timeline.html
- execution_trace.txt
- pipeline_dag.html
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
        if (array_key_exists("RunUuid",$param) and $param["RunUuid"] !== null) {
            $this->RunUuid = $param["RunUuid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }
    }
}
