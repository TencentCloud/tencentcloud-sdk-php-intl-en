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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name, such as `ens-34241f3s`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name, such as `ens-34241f3s`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceState() Obtain Instance status. Valid values:
PENDING: creating
LAUNCH_FAILED: failed to create
RUNNING: running
STOPPED: shut down
STARTING: starting
STOPPING: shutting down
REBOOTING: restarting
SHUTDOWN: to be terminated
TERMINATING: terminating.
 * @method void setInstanceState(string $InstanceState) Set Instance status. Valid values:
PENDING: creating
LAUNCH_FAILED: failed to create
RUNNING: running
STOPPED: shut down
STARTING: starting
STOPPING: shutting down
REBOOTING: restarting
SHUTDOWN: to be terminated
TERMINATING: terminating.
 * @method Image getImage() Obtain Information of the image currently used by the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImage(Image $Image) Set Information of the image currently used by the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SimpleModule getSimpleModule() Obtain Basic information of the current module of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSimpleModule(SimpleModule $SimpleModule) Set Basic information of the current module of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Position getPosition() Obtain Location information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(Position $Position) Set Location information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Internet getInternet() Obtain Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInternet(Internet $Internet) Set Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method InstanceTypeConfig getInstanceTypeConfig() Obtain Configuration information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTypeConfig(InstanceTypeConfig $InstanceTypeConfig) Set Configuration information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagSet() Obtain Instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperation() Obtain Last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperation(string $LatestOperation) Set Last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationState() Obtain Result of the last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperationState(string $LatestOperationState) Set Result of the last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRestrictState() Obtain Instance business status. Valid values:
NORMAL: normal
EXPIRED: expired
PROTECTIVELY_ISOLATED: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRestrictState(string $RestrictState) Set Instance business status. Valid values:
NORMAL: normal
EXPIRED: expired
PROTECTIVELY_ISOLATED: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSystemDiskSize() Obtain System disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDiskSize(integer $SystemDiskSize) Set System disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDataDiskSize() Obtain Data disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataDiskSize(integer $DataDiskSize) Set Data disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUUID() Obtain Instance UUID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUUID(string $UUID) Set Instance UUID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPayMode() Obtain Billing mode.
    0: postpaid.
    1: prepaid.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(integer $PayMode) Set Billing mode.
    0: postpaid.
    1: prepaid.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() Obtain Isolation time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) Set Isolation time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Auto-Renewal flag.
      0: no.
      1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-Renewal flag.
      0: no.
      1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpireState() Obtain Expiration status.
    NORMAL: normal.
    WILL_EXPIRE: about to expire.
    EXPIRED: expired.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireState(string $ExpireState) Set Expiration status.
    NORMAL: normal.
    WILL_EXPIRE: about to expire.
    EXPIRED: expired.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DiskInfo getSystemDisk() Obtain System disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDisk(DiskInfo $SystemDisk) Set System disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDataDisks() Obtain Data disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisks(array $DataDisks) Set Data disk information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNewFlag() Obtain New instance flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNewFlag(integer $NewFlag) Set New instance flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSecurityGroupIds() Obtain Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain VPC attribute
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set VPC attribute
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getISP() Obtain ISP field of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setISP(string $ISP) Set ISP field of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PhysicalPosition getPhysicalPosition() Obtain Physical location information. Note that this field is currently a reserved field and null.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhysicalPosition(PhysicalPosition $PhysicalPosition) Set Physical location information. Note that this field is currently a reserved field and null.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name, such as `ens-34241f3s`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance status. Valid values:
PENDING: creating
LAUNCH_FAILED: failed to create
RUNNING: running
STOPPED: shut down
STARTING: starting
STOPPING: shutting down
REBOOTING: restarting
SHUTDOWN: to be terminated
TERMINATING: terminating.
     */
    public $InstanceState;

    /**
     * @var Image Information of the image currently used by the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Image;

    /**
     * @var SimpleModule Basic information of the current module of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SimpleModule;

    /**
     * @var Position Location information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var Internet Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Internet;

    /**
     * @var InstanceTypeConfig Configuration information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTypeConfig;

    /**
     * @var string Instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var array Instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperation;

    /**
     * @var string Result of the last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperationState;

    /**
     * @var string Instance business status. Valid values:
NORMAL: normal
EXPIRED: expired
PROTECTIVELY_ISOLATED: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RestrictState;

    /**
     * @var integer System disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDiskSize;

    /**
     * @var integer Data disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataDiskSize;

    /**
     * @var string Instance UUID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UUID;

    /**
     * @var integer Billing mode.
    0: postpaid.
    1: prepaid.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string Expiration time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Isolation time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsolatedTime;

    /**
     * @var integer Auto-Renewal flag.
      0: no.
      1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string Expiration status.
    NORMAL: normal.
    WILL_EXPIRE: about to expire.
    EXPIRED: expired.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireState;

    /**
     * @var DiskInfo System disk information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDisk;

    /**
     * @var array Data disk information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisks;

    /**
     * @var integer New instance flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NewFlag;

    /**
     * @var array Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityGroupIds;

    /**
     * @var VirtualPrivateCloud VPC attribute
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualPrivateCloud;

    /**
     * @var string ISP field of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ISP;

    /**
     * @var PhysicalPosition Physical location information. Note that this field is currently a reserved field and null.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhysicalPosition;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name, such as `ens-34241f3s`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceState Instance status. Valid values:
PENDING: creating
LAUNCH_FAILED: failed to create
RUNNING: running
STOPPED: shut down
STARTING: starting
STOPPING: shutting down
REBOOTING: restarting
SHUTDOWN: to be terminated
TERMINATING: terminating.
     * @param Image $Image Information of the image currently used by the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SimpleModule $SimpleModule Basic information of the current module of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Position $Position Location information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Internet $Internet Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param InstanceTypeConfig $InstanceTypeConfig Configuration information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Instance creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagSet Instance tag information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperation Last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationState Result of the last operation on the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RestrictState Instance business status. Valid values:
NORMAL: normal
EXPIRED: expired
PROTECTIVELY_ISOLATED: isolated.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SystemDiskSize System disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DataDiskSize Data disk size in GB.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UUID Instance UUID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PayMode Billing mode.
    0: postpaid.
    1: prepaid.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IsolatedTime Isolation time in the format of `yyyy-mm-dd HH:mm:ss`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Auto-Renewal flag.
      0: no.
      1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireState Expiration status.
    NORMAL: normal.
    WILL_EXPIRE: about to expire.
    EXPIRED: expired.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DiskInfo $SystemDisk System disk information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DataDisks Data disk information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NewFlag New instance flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SecurityGroupIds Security group of the instance, which can be obtained from the `sgId` field in the returned value of the `DescribeSecurityGroups` API.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param VirtualPrivateCloud $VirtualPrivateCloud VPC attribute
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ISP ISP field of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PhysicalPosition $PhysicalPosition Physical location information. Note that this field is currently a reserved field and null.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("SimpleModule",$param) and $param["SimpleModule"] !== null) {
            $this->SimpleModule = new SimpleModule();
            $this->SimpleModule->deserialize($param["SimpleModule"]);
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("Internet",$param) and $param["Internet"] !== null) {
            $this->Internet = new Internet();
            $this->Internet->deserialize($param["Internet"]);
        }

        if (array_key_exists("InstanceTypeConfig",$param) and $param["InstanceTypeConfig"] !== null) {
            $this->InstanceTypeConfig = new InstanceTypeConfig();
            $this->InstanceTypeConfig->deserialize($param["InstanceTypeConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireState",$param) and $param["ExpireState"] !== null) {
            $this->ExpireState = $param["ExpireState"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskInfo();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("NewFlag",$param) and $param["NewFlag"] !== null) {
            $this->NewFlag = $param["NewFlag"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("PhysicalPosition",$param) and $param["PhysicalPosition"] !== null) {
            $this->PhysicalPosition = new PhysicalPosition();
            $this->PhysicalPosition->deserialize($param["PhysicalPosition"]);
        }
    }
}
