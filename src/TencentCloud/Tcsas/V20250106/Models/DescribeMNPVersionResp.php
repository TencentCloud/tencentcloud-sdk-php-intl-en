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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the task to create a mini program version
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getTaskStatus() Obtain 1: Pending; 20: Running; 30: Failed; 60: Succeeded
 * @method void setTaskStatus(integer $TaskStatus) Set 1: Pending; 20: Running; 30: Failed; 60: Succeeded
 * @method string getTaskMsg() Obtain Task status message
 * @method void setTaskMsg(string $TaskMsg) Set Task status message
 * @method integer getMNPVersionId() Obtain Mini program version ID (returned when compilation succeeds)
 * @method void setMNPVersionId(integer $MNPVersionId) Set Mini program version ID (returned when compilation succeeds)
 */
class DescribeMNPVersionResp extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer 1: Pending; 20: Running; 30: Failed; 60: Succeeded
     */
    public $TaskStatus;

    /**
     * @var string Task status message
     */
    public $TaskMsg;

    /**
     * @var integer Mini program version ID (returned when compilation succeeds)
     */
    public $MNPVersionId;

    /**
     * @param string $MNPId Mini program ID
     * @param string $TaskId Task ID
     * @param integer $TaskStatus 1: Pending; 20: Running; 30: Failed; 60: Succeeded
     * @param string $TaskMsg Task status message
     * @param integer $MNPVersionId Mini program version ID (returned when compilation succeeds)
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMsg",$param) and $param["TaskMsg"] !== null) {
            $this->TaskMsg = $param["TaskMsg"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }
    }
}
