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
 * Application running option
 *
 * @method string getFailureMode() Obtain Operation failure mode. Valid values:
- ContinueWhilePossible
- NoNewCalls
 * @method void setFailureMode(string $FailureMode) Set Operation failure mode. Valid values:
- ContinueWhilePossible
- NoNewCalls
 * @method boolean getUseCallCache() Obtain Whether to use the Call-Caching feature.
 * @method void setUseCallCache(boolean $UseCallCache) Set Whether to use the Call-Caching feature.
 * @method boolean getUseErrorOnHold() Obtain Whether to use the error suspension feature.
 * @method void setUseErrorOnHold(boolean $UseErrorOnHold) Set Whether to use the error suspension feature.
 * @method string getFinalWorkflowOutputsDir() Obtain Output archive COS path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFinalWorkflowOutputsDir(string $FinalWorkflowOutputsDir) Set Output archive COS path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUseRelativeOutputPaths() Obtain Whether to use the relative directory archive output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUseRelativeOutputPaths(boolean $UseRelativeOutputPaths) Set Whether to use the relative directory archive output.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RunOption extends AbstractModel
{
    /**
     * @var string Operation failure mode. Valid values:
- ContinueWhilePossible
- NoNewCalls
     */
    public $FailureMode;

    /**
     * @var boolean Whether to use the Call-Caching feature.
     */
    public $UseCallCache;

    /**
     * @var boolean Whether to use the error suspension feature.
     */
    public $UseErrorOnHold;

    /**
     * @var string Output archive COS path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FinalWorkflowOutputsDir;

    /**
     * @var boolean Whether to use the relative directory archive output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UseRelativeOutputPaths;

    /**
     * @param string $FailureMode Operation failure mode. Valid values:
- ContinueWhilePossible
- NoNewCalls
     * @param boolean $UseCallCache Whether to use the Call-Caching feature.
     * @param boolean $UseErrorOnHold Whether to use the error suspension feature.
     * @param string $FinalWorkflowOutputsDir Output archive COS path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UseRelativeOutputPaths Whether to use the relative directory archive output.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FailureMode",$param) and $param["FailureMode"] !== null) {
            $this->FailureMode = $param["FailureMode"];
        }

        if (array_key_exists("UseCallCache",$param) and $param["UseCallCache"] !== null) {
            $this->UseCallCache = $param["UseCallCache"];
        }

        if (array_key_exists("UseErrorOnHold",$param) and $param["UseErrorOnHold"] !== null) {
            $this->UseErrorOnHold = $param["UseErrorOnHold"];
        }

        if (array_key_exists("FinalWorkflowOutputsDir",$param) and $param["FinalWorkflowOutputsDir"] !== null) {
            $this->FinalWorkflowOutputsDir = $param["FinalWorkflowOutputsDir"];
        }

        if (array_key_exists("UseRelativeOutputPaths",$param) and $param["UseRelativeOutputPaths"] !== null) {
            $this->UseRelativeOutputPaths = $param["UseRelativeOutputPaths"];
        }
    }
}
