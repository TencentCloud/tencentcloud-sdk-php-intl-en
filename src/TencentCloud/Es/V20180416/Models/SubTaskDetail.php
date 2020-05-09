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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of subtask in workflow task in the instance operation history (such as each check item in a upgrade check task)
 *
 * @method string getName() Obtain Subtask name
 * @method void setName(string $Name) Set Subtask name
 * @method boolean getResult() Obtain Subtask result
 * @method void setResult(boolean $Result) Set Subtask result
 * @method string getErrMsg() Obtain Subtask error message
 * @method void setErrMsg(string $ErrMsg) Set Subtask error message
 * @method string getType() Obtain Subtask type
 * @method void setType(string $Type) Set Subtask type
 * @method integer getStatus() Obtain Subtask status. 0: processing, 1: succeeded, -1: failed
 * @method void setStatus(integer $Status) Set Subtask status. 0: processing, 1: succeeded, -1: failed
 * @method array getFailedIndices() Obtain Name of the index for which the check for upgrade failed
 * @method void setFailedIndices(array $FailedIndices) Set Name of the index for which the check for upgrade failed
 * @method string getFinishTime() Obtain Subtask end time
 * @method void setFinishTime(string $FinishTime) Set Subtask end time
 * @method integer getLevel() Obtain Subtask level. 1: warning, 2: failed
 * @method void setLevel(integer $Level) Set Subtask level. 1: warning, 2: failed
 */
class SubTaskDetail extends AbstractModel
{
    /**
     * @var string Subtask name
     */
    public $Name;

    /**
     * @var boolean Subtask result
     */
    public $Result;

    /**
     * @var string Subtask error message
     */
    public $ErrMsg;

    /**
     * @var string Subtask type
     */
    public $Type;

    /**
     * @var integer Subtask status. 0: processing, 1: succeeded, -1: failed
     */
    public $Status;

    /**
     * @var array Name of the index for which the check for upgrade failed
     */
    public $FailedIndices;

    /**
     * @var string Subtask end time
     */
    public $FinishTime;

    /**
     * @var integer Subtask level. 1: warning, 2: failed
     */
    public $Level;

    /**
     * @param string $Name Subtask name
     * @param boolean $Result Subtask result
     * @param string $ErrMsg Subtask error message
     * @param string $Type Subtask type
     * @param integer $Status Subtask status. 0: processing, 1: succeeded, -1: failed
     * @param array $FailedIndices Name of the index for which the check for upgrade failed
     * @param string $FinishTime Subtask end time
     * @param integer $Level Subtask level. 1: warning, 2: failed
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedIndices",$param) and $param["FailedIndices"] !== null) {
            $this->FailedIndices = $param["FailedIndices"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
