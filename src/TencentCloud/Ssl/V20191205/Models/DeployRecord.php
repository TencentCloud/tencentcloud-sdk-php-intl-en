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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed records.
 *
 * @method integer getTotalCount() Obtain Total number.
 * @method void setTotalCount(integer $TotalCount) Set Total number.
 * @method integer getSuccessTotalCount() Obtain Total successes
 * @method void setSuccessTotalCount(integer $SuccessTotalCount) Set Total successes
 * @method integer getFailedTotalCount() Obtain Total failed deployments.
 * @method void setFailedTotalCount(integer $FailedTotalCount) Set Total failed deployments.
 * @method integer getRunningTotalCount() Obtain Deployment in progress total number.
 * @method void setRunningTotalCount(integer $RunningTotalCount) Set Deployment in progress total number.
 * @method integer getType() Obtain Deployment record type 0 specifies deployment, 1 indicates rollback.
 * @method void setType(integer $Type) Set Deployment record type 0 specifies deployment, 1 indicates rollback.
 * @method array getRecordDetailList() Obtain Deployment record detail list.
 * @method void setRecordDetailList(array $RecordDetailList) Set Deployment record detail list.
 * @method integer getStatus() Obtain Hosted resource deployment state: `0` (awaiting deployment), `1` (deployment successful), `2` (deployment failed), `3` (deploying), `4` (rollback successful), `5` (rollback failure).
 * @method void setStatus(integer $Status) Set Hosted resource deployment state: `0` (awaiting deployment), `1` (deployment successful), `2` (deployment failed), `3` (deploying), `4` (rollback successful), `5` (rollback failure).
 * @method string getCreateTime() Obtain Managed resource creation time.
 * @method void setCreateTime(string $CreateTime) Set Managed resource creation time.
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var integer Total number.
     */
    public $TotalCount;

    /**
     * @var integer Total successes
     */
    public $SuccessTotalCount;

    /**
     * @var integer Total failed deployments.
     */
    public $FailedTotalCount;

    /**
     * @var integer Deployment in progress total number.
     */
    public $RunningTotalCount;

    /**
     * @var integer Deployment record type 0 specifies deployment, 1 indicates rollback.
     */
    public $Type;

    /**
     * @var array Deployment record detail list.
     */
    public $RecordDetailList;

    /**
     * @var integer Hosted resource deployment state: `0` (awaiting deployment), `1` (deployment successful), `2` (deployment failed), `3` (deploying), `4` (rollback successful), `5` (rollback failure).
     */
    public $Status;

    /**
     * @var string Managed resource creation time.
     */
    public $CreateTime;

    /**
     * @param integer $TotalCount Total number.
     * @param integer $SuccessTotalCount Total successes
     * @param integer $FailedTotalCount Total failed deployments.
     * @param integer $RunningTotalCount Deployment in progress total number.
     * @param integer $Type Deployment record type 0 specifies deployment, 1 indicates rollback.
     * @param array $RecordDetailList Deployment record detail list.
     * @param integer $Status Hosted resource deployment state: `0` (awaiting deployment), `1` (deployment successful), `2` (deployment failed), `3` (deploying), `4` (rollback successful), `5` (rollback failure).
     * @param string $CreateTime Managed resource creation time.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessTotalCount",$param) and $param["SuccessTotalCount"] !== null) {
            $this->SuccessTotalCount = $param["SuccessTotalCount"];
        }

        if (array_key_exists("FailedTotalCount",$param) and $param["FailedTotalCount"] !== null) {
            $this->FailedTotalCount = $param["FailedTotalCount"];
        }

        if (array_key_exists("RunningTotalCount",$param) and $param["RunningTotalCount"] !== null) {
            $this->RunningTotalCount = $param["RunningTotalCount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RecordDetailList",$param) and $param["RecordDetailList"] !== null) {
            $this->RecordDetailList = [];
            foreach ($param["RecordDetailList"] as $key => $value){
                $obj = new DeployRecordList();
                $obj->deserialize($value);
                array_push($this->RecordDetailList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
