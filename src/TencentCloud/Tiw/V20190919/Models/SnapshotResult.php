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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the whiteboard snapshot task.
 *
 * @method string getErrorCode() Obtain Task execution error code.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setErrorCode(string $ErrorCode) Set Task execution error code.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Task execution error message.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Task execution error message.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain Number of generated snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Number of generated snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method array getSnapshots() Obtain List of URLs of the snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setSnapshots(array $Snapshots) Set List of URLs of the snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
 */
class SnapshotResult extends AbstractModel
{
    /**
     * @var string Task execution error code.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $ErrorCode;

    /**
     * @var string Task execution error message.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var integer Number of generated snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var array List of URLs of the snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Snapshots;

    /**
     * @param string $ErrorCode Task execution error code.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Task execution error message.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $Total Number of generated snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param array $Snapshots List of URLs of the snapshot images.
Note: This parameter may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = $param["Snapshots"];
        }
    }
}
