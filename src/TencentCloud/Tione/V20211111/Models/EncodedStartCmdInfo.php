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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Encoded startup command information.
 *
 * @method string getStartCmdInfo() Obtain Startup command of the task, which is input in base64 format. Note that the complete input of {"StartCmd":"","PsStartCmd":"","WorkerStartCmd":""} is required for conversion.
 * @method void setStartCmdInfo(string $StartCmdInfo) Set Startup command of the task, which is input in base64 format. Note that the complete input of {"StartCmd":"","PsStartCmd":"","WorkerStartCmd":""} is required for conversion.
 */
class EncodedStartCmdInfo extends AbstractModel
{
    /**
     * @var string Startup command of the task, which is input in base64 format. Note that the complete input of {"StartCmd":"","PsStartCmd":"","WorkerStartCmd":""} is required for conversion.
     */
    public $StartCmdInfo;

    /**
     * @param string $StartCmdInfo Startup command of the task, which is input in base64 format. Note that the complete input of {"StartCmd":"","PsStartCmd":"","WorkerStartCmd":""} is required for conversion.
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
        if (array_key_exists("StartCmdInfo",$param) and $param["StartCmdInfo"] !== null) {
            $this->StartCmdInfo = $param["StartCmdInfo"];
        }
    }
}
