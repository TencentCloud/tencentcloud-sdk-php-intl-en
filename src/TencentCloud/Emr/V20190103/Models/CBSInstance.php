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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CBS instance information.
 *
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method string getDiskUsage() Obtain Cloud disk type.
 * @method void setDiskUsage(string $DiskUsage) Set Cloud disk type.
 * @method string getDiskName() Obtain Cloud disk name.
 * @method void setDiskName(string $DiskName) Set Cloud disk name.
 * @method integer getDiskSize() Obtain Cloud disk size.
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size.
 * @method string getDiskType() Obtain Cloud disk media type.
 * @method void setDiskType(string $DiskType) Set Cloud disk media type.
 * @method boolean getDeleteWithInstance() Obtain Whether to delete it with the instance.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set Whether to delete it with the instance.
 * @method string getDiskChargeType() Obtain Cloud disk billing mode.
 * @method void setDiskChargeType(string $DiskChargeType) Set Cloud disk billing mode.
 * @method string getDiskState() Obtain Cloud disk running status.
 * @method void setDiskState(string $DiskState) Set Cloud disk running status.
 * @method string getRenewFlag() Obtain Whether to perform auto-renewal.
 * @method void setRenewFlag(string $RenewFlag) Set Whether to perform auto-renewal.
 * @method string getDeadlineTime() Obtain Expiration time.
 * @method void setDeadlineTime(string $DeadlineTime) Set Expiration time.
 * @method boolean getAttached() Obtain Whether the cloud disk is mounted on the CVM.
 * @method void setAttached(boolean $Attached) Set Whether the cloud disk is mounted on the CVM.
 * @method integer getDifferDaysOfDeadline() Obtain Days remaining until disk expiration.
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) Set Days remaining until disk expiration.
 * @method array getInstanceIdList() Obtain ID of the CVM instance to which this cloud disk is currently mounted.
 * @method void setInstanceIdList(array $InstanceIdList) Set ID of the CVM instance to which this cloud disk is currently mounted.
 * @method string getInstanceId() Obtain ID of the CVM to which the cloud disk is mounted.
 * @method void setInstanceId(string $InstanceId) Set ID of the CVM to which the cloud disk is mounted.
 * @method boolean getShareable() Obtain Whether the cloud disk is a shared cloud disk.
 * @method void setShareable(boolean $Shareable) Set Whether the cloud disk is a shared cloud disk.
 * @method string getEmrResourceId() Obtain EMR node ID.
 * @method void setEmrResourceId(string $EmrResourceId) Set EMR node ID.
 * @method string getUnderwriteExpiredTime() Obtain Committed use expiration time.
 * @method void setUnderwriteExpiredTime(string $UnderwriteExpiredTime) Set Committed use expiration time.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method integer getThroughputPerformance() Obtain Cloud disk additional performance value. Unit: MB/s.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Cloud disk additional performance value. Unit: MB/s.
 */
class CBSInstance extends AbstractModel
{
    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var string Cloud disk type.
     */
    public $DiskUsage;

    /**
     * @var string Cloud disk name.
     */
    public $DiskName;

    /**
     * @var integer Cloud disk size.
     */
    public $DiskSize;

    /**
     * @var string Cloud disk media type.
     */
    public $DiskType;

    /**
     * @var boolean Whether to delete it with the instance.
     */
    public $DeleteWithInstance;

    /**
     * @var string Cloud disk billing mode.
     */
    public $DiskChargeType;

    /**
     * @var string Cloud disk running status.
     */
    public $DiskState;

    /**
     * @var string Whether to perform auto-renewal.
     */
    public $RenewFlag;

    /**
     * @var string Expiration time.
     */
    public $DeadlineTime;

    /**
     * @var boolean Whether the cloud disk is mounted on the CVM.
     */
    public $Attached;

    /**
     * @var integer Days remaining until disk expiration.
     */
    public $DifferDaysOfDeadline;

    /**
     * @var array ID of the CVM instance to which this cloud disk is currently mounted.
     */
    public $InstanceIdList;

    /**
     * @var string ID of the CVM to which the cloud disk is mounted.
     */
    public $InstanceId;

    /**
     * @var boolean Whether the cloud disk is a shared cloud disk.
     */
    public $Shareable;

    /**
     * @var string EMR node ID.
     */
    public $EmrResourceId;

    /**
     * @var string Committed use expiration time.
     */
    public $UnderwriteExpiredTime;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var integer Cloud disk additional performance value. Unit: MB/s.
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskId Cloud disk ID.
     * @param string $DiskUsage Cloud disk type.
     * @param string $DiskName Cloud disk name.
     * @param integer $DiskSize Cloud disk size.
     * @param string $DiskType Cloud disk media type.
     * @param boolean $DeleteWithInstance Whether to delete it with the instance.
     * @param string $DiskChargeType Cloud disk billing mode.
     * @param string $DiskState Cloud disk running status.
     * @param string $RenewFlag Whether to perform auto-renewal.
     * @param string $DeadlineTime Expiration time.
     * @param boolean $Attached Whether the cloud disk is mounted on the CVM.
     * @param integer $DifferDaysOfDeadline Days remaining until disk expiration.
     * @param array $InstanceIdList ID of the CVM instance to which this cloud disk is currently mounted.
     * @param string $InstanceId ID of the CVM to which the cloud disk is mounted.
     * @param boolean $Shareable Whether the cloud disk is a shared cloud disk.
     * @param string $EmrResourceId EMR node ID.
     * @param string $UnderwriteExpiredTime Committed use expiration time.
     * @param array $Tags Tag.
     * @param integer $ThroughputPerformance Cloud disk additional performance value. Unit: MB/s.
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

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("UnderwriteExpiredTime",$param) and $param["UnderwriteExpiredTime"] !== null) {
            $this->UnderwriteExpiredTime = $param["UnderwriteExpiredTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
