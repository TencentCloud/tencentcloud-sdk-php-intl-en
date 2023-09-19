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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSparkAppTask request structure.
 *
 * @method string getJobName() Obtain Spark job name
 * @method void setJobName(string $JobName) Set Spark job name
 * @method string getCmdArgs() Obtain The input parameters of the Spark job, separated by space. They are generally used for periodic calls.
 * @method void setCmdArgs(string $CmdArgs) Set The input parameters of the Spark job, separated by space. They are generally used for periodic calls.
 */
class CreateSparkAppTaskRequest extends AbstractModel
{
    /**
     * @var string Spark job name
     */
    public $JobName;

    /**
     * @var string The input parameters of the Spark job, separated by space. They are generally used for periodic calls.
     */
    public $CmdArgs;

    /**
     * @param string $JobName Spark job name
     * @param string $CmdArgs The input parameters of the Spark job, separated by space. They are generally used for periodic calls.
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }
    }
}
