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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot operation log
 *
 * @method string getAction() Obtain Operation type
CreateCfsSnapshot: create a snapshot.
DeleteCfsSnapshot: delete snapshot.
CreateCfsFileSystem: create a file system.
UpdateCfsSnapshotAttribute: update snapshot.
 * @method void setAction(string $Action) Set Operation type
CreateCfsSnapshot: create a snapshot.
DeleteCfsSnapshot: delete snapshot.
CreateCfsFileSystem: create a file system.
UpdateCfsSnapshotAttribute: update snapshot.
 * @method string getActionTime() Obtain Operation time
 * @method void setActionTime(string $ActionTime) Set Operation time
 * @method string getActionName() Obtain Operation name.
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
 * @method void setActionName(string $ActionName) Set Operation name.
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
 * @method string getOperator() Obtain Operator uin.
 * @method void setOperator(string $Operator) Set Operator uin.
 * @method integer getResult() Obtain 1- task in progress; 2- task success; 3- task failure.
 * @method void setResult(integer $Result) Set 1- task in progress; 2- task success; 3- task failure.
 */
class SnapshotOperateLog extends AbstractModel
{
    /**
     * @var string Operation type
CreateCfsSnapshot: create a snapshot.
DeleteCfsSnapshot: delete snapshot.
CreateCfsFileSystem: create a file system.
UpdateCfsSnapshotAttribute: update snapshot.
     */
    public $Action;

    /**
     * @var string Operation time
     */
    public $ActionTime;

    /**
     * @var string Operation name.
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
     */
    public $ActionName;

    /**
     * @var string Operator uin.
     */
    public $Operator;

    /**
     * @var integer 1- task in progress; 2- task success; 3- task failure.
     */
    public $Result;

    /**
     * @param string $Action Operation type
CreateCfsSnapshot: create a snapshot.
DeleteCfsSnapshot: delete snapshot.
CreateCfsFileSystem: create a file system.
UpdateCfsSnapshotAttribute: update snapshot.
     * @param string $ActionTime Operation time
     * @param string $ActionName Operation name.
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
     * @param string $Operator Operator uin.
     * @param integer $Result 1- task in progress; 2- task success; 3- task failure.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
