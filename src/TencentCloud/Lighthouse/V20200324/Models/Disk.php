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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk information
 *
 * @method string getDiskId() Obtain Disk ID
 * @method void setDiskId(string $DiskId) Set Disk ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getDiskName() Obtain Disk name
 * @method void setDiskName(string $DiskName) Set Disk name
 * @method string getDiskUsage() Obtain Disk type
 * @method void setDiskUsage(string $DiskUsage) Set Disk type
 * @method string getDiskType() Obtain Disk media type
 * @method void setDiskType(string $DiskType) Set Disk media type
 * @method string getDiskChargeType() Obtain Disk payment type
 * @method void setDiskChargeType(string $DiskChargeType) Set Disk payment type
 * @method integer getDiskSize() Obtain Disk size
 * @method void setDiskSize(integer $DiskSize) Set Disk size
 * @method string getRenewFlag() Obtain Renewal flag
 * @method void setRenewFlag(string $RenewFlag) Set Renewal flag
 * @method string getDiskState() Obtain Disk status
 * @method void setDiskState(string $DiskState) Set Disk status
 * @method boolean getAttached() Obtain Whether the disk is attached to an instance
 * @method void setAttached(boolean $Attached) Set Whether the disk is attached to an instance
 * @method boolean getDeleteWithInstance() Obtain Whether to release the disk along with the instance
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether to release the disk along with the instance
 * @method string getLatestOperation() Obtain Last operation
 * @method void setLatestOperation(string $LatestOperation) Set Last operation
 * @method string getLatestOperationState() Obtain Last operation status
 * @method void setLatestOperationState(string $LatestOperationState) Set Last operation status
 * @method string getLatestOperationRequestId() Obtain Last request ID
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) Set Last request ID
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method string getExpiredTime() Obtain Expiration date
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration date
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() Obtain Isolation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) Set Isolation time
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Disk extends AbstractModel
{
    /**
     * @var string Disk ID
     */
    public $DiskId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Disk name
     */
    public $DiskName;

    /**
     * @var string Disk type
     */
    public $DiskUsage;

    /**
     * @var string Disk media type
     */
    public $DiskType;

    /**
     * @var string Disk payment type
     */
    public $DiskChargeType;

    /**
     * @var integer Disk size
     */
    public $DiskSize;

    /**
     * @var string Renewal flag
     */
    public $RenewFlag;

    /**
     * @var string Disk status
     */
    public $DiskState;

    /**
     * @var boolean Whether the disk is attached to an instance
     */
    public $Attached;

    /**
     * @var boolean Whether to release the disk along with the instance
     */
    public $DeleteWithInstance;

    /**
     * @var string Last operation
     */
    public $LatestOperation;

    /**
     * @var string Last operation status
     */
    public $LatestOperationState;

    /**
     * @var string Last request ID
     */
    public $LatestOperationRequestId;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var string Expiration date
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiredTime;

    /**
     * @var string Isolation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedTime;

    /**
     * @param string $DiskId Disk ID
     * @param string $InstanceId Instance ID
     * @param string $Zone Availability zone
     * @param string $DiskName Disk name
     * @param string $DiskUsage Disk type
     * @param string $DiskType Disk media type
     * @param string $DiskChargeType Disk payment type
     * @param integer $DiskSize Disk size
     * @param string $RenewFlag Renewal flag
     * @param string $DiskState Disk status
     * @param boolean $Attached Whether the disk is attached to an instance
     * @param boolean $DeleteWithInstance Whether to release the disk along with the instance
     * @param string $LatestOperation Last operation
     * @param string $LatestOperationState Last operation status
     * @param string $LatestOperationRequestId Last request ID
     * @param string $CreatedTime Creation time
     * @param string $ExpiredTime Expiration date
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedTime Isolation time
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }
    }
}
