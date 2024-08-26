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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster operation description
 *
 * @method string getName() Obtain Operation name, such as create_instance, and scaleout_instance
 * @method void setName(string $Name) Set Operation name, such as create_instance, and scaleout_instance
 * @method string getResult() Obtain Operation result. Success indicates success; Fail indicates failure.
 * @method void setResult(string $Result) Set Operation result. Success indicates success; Fail indicates failure.
 * @method string getDesc() Obtain Operation name description, such as create, and modify the cluster name
 * @method void setDesc(string $Desc) Set Operation name description, such as create, and modify the cluster name
 * @method string getLevel() Obtain Operation level, such as Critical, Normal
 * @method void setLevel(string $Level) Set Operation level, such as Critical, Normal
 * @method string getLevelDesc() Obtain Operation level description, such as high risk, and normal
 * @method void setLevelDesc(string $LevelDesc) Set Operation level description, such as high risk, and normal
 * @method string getStartTime() Obtain Operation start time
 * @method void setStartTime(string $StartTime) Set Operation start time
 * @method string getEndTime() Obtain Operation end time
 * @method void setEndTime(string $EndTime) Set Operation end time
 * @method string getResultDesc() Obtain Operation result description, such as Success and Fail.
 * @method void setResultDesc(string $ResultDesc) Set Operation result description, such as Success and Fail.
 * @method string getOperateUin() Obtain Operation user ID
 * @method void setOperateUin(string $OperateUin) Set Operation user ID
 * @method integer getJobId() Obtain The jobid corresponding to the operation
 * @method void setJobId(integer $JobId) Set The jobid corresponding to the operation
 * @method string getOperationDetail() Obtain Operation details
 * @method void setOperationDetail(string $OperationDetail) Set Operation details
 */
class InstanceOperation extends AbstractModel
{
    /**
     * @var string Operation name, such as create_instance, and scaleout_instance
     */
    public $Name;

    /**
     * @var string Operation result. Success indicates success; Fail indicates failure.
     */
    public $Result;

    /**
     * @var string Operation name description, such as create, and modify the cluster name
     */
    public $Desc;

    /**
     * @var string Operation level, such as Critical, Normal
     */
    public $Level;

    /**
     * @var string Operation level description, such as high risk, and normal
     */
    public $LevelDesc;

    /**
     * @var string Operation start time
     */
    public $StartTime;

    /**
     * @var string Operation end time
     */
    public $EndTime;

    /**
     * @var string Operation result description, such as Success and Fail.
     */
    public $ResultDesc;

    /**
     * @var string Operation user ID
     */
    public $OperateUin;

    /**
     * @var integer The jobid corresponding to the operation
     */
    public $JobId;

    /**
     * @var string Operation details
     */
    public $OperationDetail;

    /**
     * @param string $Name Operation name, such as create_instance, and scaleout_instance
     * @param string $Result Operation result. Success indicates success; Fail indicates failure.
     * @param string $Desc Operation name description, such as create, and modify the cluster name
     * @param string $Level Operation level, such as Critical, Normal
     * @param string $LevelDesc Operation level description, such as high risk, and normal
     * @param string $StartTime Operation start time
     * @param string $EndTime Operation end time
     * @param string $ResultDesc Operation result description, such as Success and Fail.
     * @param string $OperateUin Operation user ID
     * @param integer $JobId The jobid corresponding to the operation
     * @param string $OperationDetail Operation details
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelDesc",$param) and $param["LevelDesc"] !== null) {
            $this->LevelDesc = $param["LevelDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ResultDesc",$param) and $param["ResultDesc"] !== null) {
            $this->ResultDesc = $param["ResultDesc"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("OperationDetail",$param) and $param["OperationDetail"] !== null) {
            $this->OperationDetail = $param["OperationDetail"];
        }
    }
}
