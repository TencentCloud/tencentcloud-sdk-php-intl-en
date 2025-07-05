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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of release list.
 *
 * @method string getReleaseBizId() Obtain Version ID.
 * @method void setReleaseBizId(string $ReleaseBizId) Set Version ID.
 * @method string getOperator() Obtain Releaser.
 * @method void setOperator(string $Operator) Set Releaser.
 * @method string getDesc() Obtain Release description.
 * @method void setDesc(string $Desc) Set Release description.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getStatus() Obtain Release status.
 * @method void setStatus(integer $Status) Set Release status.
 * @method string getStatusDesc() Obtain Release status description.
 * @method void setStatusDesc(string $StatusDesc) Set Release status description.
 * @method string getReason() Obtain Reason for failure.
 * @method void setReason(string $Reason) Set Reason for failure.
 * @method integer getSuccessCount() Obtain Number of successful releases.
 * @method void setSuccessCount(integer $SuccessCount) Set Number of successful releases.
 * @method integer getFailCount() Obtain Number of failed releases.
 * @method void setFailCount(integer $FailCount) Set Number of failed releases.
 */
class ListReleaseItem extends AbstractModel
{
    /**
     * @var string Version ID.
     */
    public $ReleaseBizId;

    /**
     * @var string Releaser.
     */
    public $Operator;

    /**
     * @var string Release description.
     */
    public $Desc;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Release status.
     */
    public $Status;

    /**
     * @var string Release status description.
     */
    public $StatusDesc;

    /**
     * @var string Reason for failure.
     */
    public $Reason;

    /**
     * @var integer Number of successful releases.
     */
    public $SuccessCount;

    /**
     * @var integer Number of failed releases.
     */
    public $FailCount;

    /**
     * @param string $ReleaseBizId Version ID.
     * @param string $Operator Releaser.
     * @param string $Desc Release description.
     * @param string $UpdateTime Update time.
     * @param integer $Status Release status.
     * @param string $StatusDesc Release status description.
     * @param string $Reason Reason for failure.
     * @param integer $SuccessCount Number of successful releases.
     * @param integer $FailCount Number of failed releases.
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
        if (array_key_exists("ReleaseBizId",$param) and $param["ReleaseBizId"] !== null) {
            $this->ReleaseBizId = $param["ReleaseBizId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }
    }
}
