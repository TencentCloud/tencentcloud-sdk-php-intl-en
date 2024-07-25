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
 * RetryRuns request structure.
 *
 * @method string getProjectId() Obtain Project ID. (If you leave it blank, the default item in the specified region will be used.)
 * @method void setProjectId(string $ProjectId) Set Project ID. (If you leave it blank, the default item in the specified region will be used.)
 * @method string getRunGroupId() Obtain The run group ID that needs to be retried
 * @method void setRunGroupId(string $RunGroupId) Set The run group ID that needs to be retried
 * @method array getRunUuids() Obtain The run UUID that needs to be retried
 * @method void setRunUuids(array $RunUuids) Set The run UUID that needs to be retried
 * @method RunOption getWDLOption() Obtain WDL running option. If you leave it blank, the retried run group running option will be used.
 * @method void setWDLOption(RunOption $WDLOption) Set WDL running option. If you leave it blank, the retried run group running option will be used.
 * @method NFOption getNFOption() Obtain Nextflow running option. If you leave it blank, the retried run group running option will be used.
 * @method void setNFOption(NFOption $NFOption) Set Nextflow running option. If you leave it blank, the retried run group running option will be used.
 */
class RetryRunsRequest extends AbstractModel
{
    /**
     * @var string Project ID. (If you leave it blank, the default item in the specified region will be used.)
     */
    public $ProjectId;

    /**
     * @var string The run group ID that needs to be retried
     */
    public $RunGroupId;

    /**
     * @var array The run UUID that needs to be retried
     */
    public $RunUuids;

    /**
     * @var RunOption WDL running option. If you leave it blank, the retried run group running option will be used.
     */
    public $WDLOption;

    /**
     * @var NFOption Nextflow running option. If you leave it blank, the retried run group running option will be used.
     */
    public $NFOption;

    /**
     * @param string $ProjectId Project ID. (If you leave it blank, the default item in the specified region will be used.)
     * @param string $RunGroupId The run group ID that needs to be retried
     * @param array $RunUuids The run UUID that needs to be retried
     * @param RunOption $WDLOption WDL running option. If you leave it blank, the retried run group running option will be used.
     * @param NFOption $NFOption Nextflow running option. If you leave it blank, the retried run group running option will be used.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("RunUuids",$param) and $param["RunUuids"] !== null) {
            $this->RunUuids = $param["RunUuids"];
        }

        if (array_key_exists("WDLOption",$param) and $param["WDLOption"] !== null) {
            $this->WDLOption = new RunOption();
            $this->WDLOption->deserialize($param["WDLOption"]);
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }
    }
}
