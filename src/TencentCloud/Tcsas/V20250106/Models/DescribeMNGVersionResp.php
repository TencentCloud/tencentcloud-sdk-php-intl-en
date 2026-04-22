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
 * Queries the mini program version creation results
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getTaskId() Obtain <p>Task ID</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID</p>
 * @method integer getTaskStatus() Obtain <p>Valid values: 1: Pending; 20: Running; 30: Failed; 60: Succeeded</p>
 * @method void setTaskStatus(integer $TaskStatus) Set <p>Valid values: 1: Pending; 20: Running; 30: Failed; 60: Succeeded</p>
 * @method string getTaskMsg() Obtain <p>Task status information</p>
 * @method void setTaskMsg(string $TaskMsg) Set <p>Task status information</p>
 * @method integer getMNPVersionId() Obtain <p>Mini game version ID (returned upon successful compilation)</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Mini game version ID (returned upon successful compilation)</p>
 */
class DescribeMNGVersionResp extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Task ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Valid values: 1: Pending; 20: Running; 30: Failed; 60: Succeeded</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>Task status information</p>
     */
    public $TaskMsg;

    /**
     * @var integer <p>Mini game version ID (returned upon successful compilation)</p>
     */
    public $MNPVersionId;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $TaskId <p>Task ID</p>
     * @param integer $TaskStatus <p>Valid values: 1: Pending; 20: Running; 30: Failed; 60: Succeeded</p>
     * @param string $TaskMsg <p>Task status information</p>
     * @param integer $MNPVersionId <p>Mini game version ID (returned upon successful compilation)</p>
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
