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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getTargetInstanceId() Obtain 
 * @method void setTargetInstanceId(string $TargetInstanceId) Set 
 * @method string getTargetInstanceName() Obtain 
 * @method void setTargetInstanceName(string $TargetInstanceName) Set 
 * @method integer getTargetInstanceStatus() Obtain 
 * @method void setTargetInstanceStatus(integer $TargetInstanceStatus) Set 
 * @method string getTargetRegion() Obtain 
 * @method void setTargetRegion(string $TargetRegion) Set 
 * @method integer getRestoreId() Obtain 
 * @method void setRestoreId(integer $RestoreId) Set 
 * @method integer getTargetType() Obtain 
 * @method void setTargetType(integer $TargetType) Set 
 * @method integer getRestoreType() Obtain 
 * @method void setRestoreType(integer $RestoreType) Set 
 * @method string getRestoreTime() Obtain 
 * @method void setRestoreTime(string $RestoreTime) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method string getEndTime() Obtain 
 * @method void setEndTime(string $EndTime) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method integer getFlowId() Obtain 
 * @method void setFlowId(integer $FlowId) Set 
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $TargetInstanceId;

    /**
     * @var string 
     */
    public $TargetInstanceName;

    /**
     * @var integer 
     */
    public $TargetInstanceStatus;

    /**
     * @var string 
     */
    public $TargetRegion;

    /**
     * @var integer 
     */
    public $RestoreId;

    /**
     * @var integer 
     */
    public $TargetType;

    /**
     * @var integer 
     */
    public $RestoreType;

    /**
     * @var string 
     */
    public $RestoreTime;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var string 
     */
    public $EndTime;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $FlowId;

    /**
     * @param string $TargetInstanceId 
     * @param string $TargetInstanceName 
     * @param integer $TargetInstanceStatus 
     * @param string $TargetRegion 
     * @param integer $RestoreId 
     * @param integer $TargetType 
     * @param integer $RestoreType 
     * @param string $RestoreTime 
     * @param string $StartTime 
     * @param string $EndTime 
     * @param integer $Status 
     * @param integer $FlowId 
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
        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("TargetInstanceName",$param) and $param["TargetInstanceName"] !== null) {
            $this->TargetInstanceName = $param["TargetInstanceName"];
        }

        if (array_key_exists("TargetInstanceStatus",$param) and $param["TargetInstanceStatus"] !== null) {
            $this->TargetInstanceStatus = $param["TargetInstanceStatus"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("RestoreId",$param) and $param["RestoreId"] !== null) {
            $this->RestoreId = $param["RestoreId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
