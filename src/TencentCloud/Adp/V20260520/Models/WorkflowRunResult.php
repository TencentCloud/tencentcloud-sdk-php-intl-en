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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow running instance status information
 *
 * @method integer getStatus() Obtain Running state. 1: Queuing; 2: running; 3: run successfully; 4: fail to run; 5: canceled
 * @method void setStatus(integer $Status) Set Running state. 1: Queuing; 2: running; 3: run successfully; 4: fail to run; 5: canceled
 * @method string getFailMessage() Obtain Error message
 * @method void setFailMessage(string $FailMessage) Set Error message
 * @method integer getTotalTokens() Obtain Total number of tokens consumed
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens consumed
 */
class WorkflowRunResult extends AbstractModel
{
    /**
     * @var integer Running state. 1: Queuing; 2: running; 3: run successfully; 4: fail to run; 5: canceled
     */
    public $Status;

    /**
     * @var string Error message
     */
    public $FailMessage;

    /**
     * @var integer Total number of tokens consumed
     */
    public $TotalTokens;

    /**
     * @param integer $Status Running state. 1: Queuing; 2: running; 3: run successfully; 4: fail to run; 5: canceled
     * @param string $FailMessage Error message
     * @param integer $TotalTokens Total number of tokens consumed
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
