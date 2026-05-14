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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic package information
 *
 * @method string getResourceId() Obtain Unique resource ID of the data transfer plan
 * @method void setResourceId(string $ResourceId) Set Unique resource ID of the data transfer plan
 * @method integer getAppId() Obtain User AppId belonging to the data transfer plan
 * @method void setAppId(integer $AppId) Set User AppId belonging to the data transfer plan
 * @method string getPackageType() Obtain Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method void setPackageType(string $PackageType) Set Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
 * @method integer getStatus() Obtain Traffic packet status. 0: Inactive, 1: Within validity period, 2: Expired.
 * @method void setStatus(integer $Status) Set Traffic packet status. 0: Inactive, 1: Within validity period, 2: Expired.
 * @method integer getCreateTime() Obtain Purchase time, Unix timestamp format, unit: second
 * @method void setCreateTime(integer $CreateTime) Set Purchase time, Unix timestamp format, unit: second
 * @method integer getActiveTime() Obtain Effective time, Unix Timestamp Format, unit: second
 * @method void setActiveTime(integer $ActiveTime) Set Effective time, Unix Timestamp Format, unit: second
 * @method integer getExpireTime() Obtain Expiration time, Unix Timestamp Format, unit: second
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time, Unix Timestamp Format, unit: second
 * @method array getDeviceList() Obtain Device ID list bound to the data transfer plan
 * @method void setDeviceList(array $DeviceList) Set Device ID list bound to the data transfer plan
 * @method integer getCapacitySize() Obtain Total traffic plan capacity (unit: MB)
 * @method void setCapacitySize(integer $CapacitySize) Set Total traffic plan capacity (unit: MB)
 * @method integer getCapacityRemain() Obtain Remaining data transfer plan, unit: MB
 * @method void setCapacityRemain(integer $CapacityRemain) Set Remaining data transfer plan, unit: MB
 * @method boolean getRenewFlag() Obtain Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
 * @method void setRenewFlag(boolean $RenewFlag) Set Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
 * @method integer getModifyStatus() Obtain Resource package change status: 0: No change; 1: Changing; 2: Changed or renewed
 * @method void setModifyStatus(integer $ModifyStatus) Set Resource package change status: 0: No change; 1: Changing; 2: Changed or renewed
 * @method boolean getTruncFlag() Obtain Traffic truncation flag. true to enable traffic truncation, false to disable traffic truncation.
 * @method void setTruncFlag(boolean $TruncFlag) Set Traffic truncation flag. true to enable traffic truncation, false to disable traffic truncation.
 * @method integer getCapacityRemainPrecise() Obtain Precise remaining data transfer plan, unit: MB
 * @method void setCapacityRemainPrecise(integer $CapacityRemainPrecise) Set Precise remaining data transfer plan, unit: MB
 */
class FlowPackageInfo extends AbstractModel
{
    /**
     * @var string Unique resource ID of the data transfer plan
     */
    public $ResourceId;

    /**
     * @var integer User AppId belonging to the data transfer plan
     */
    public $AppId;

    /**
     * @var string Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     */
    public $PackageType;

    /**
     * @var integer Traffic packet status. 0: Inactive, 1: Within validity period, 2: Expired.
     */
    public $Status;

    /**
     * @var integer Purchase time, Unix timestamp format, unit: second
     */
    public $CreateTime;

    /**
     * @var integer Effective time, Unix Timestamp Format, unit: second
     */
    public $ActiveTime;

    /**
     * @var integer Expiration time, Unix Timestamp Format, unit: second
     */
    public $ExpireTime;

    /**
     * @var array Device ID list bound to the data transfer plan
     */
    public $DeviceList;

    /**
     * @var integer Total traffic plan capacity (unit: MB)
     */
    public $CapacitySize;

    /**
     * @var integer Remaining data transfer plan, unit: MB
     */
    public $CapacityRemain;

    /**
     * @var boolean Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
     */
    public $RenewFlag;

    /**
     * @var integer Resource package change status: 0: No change; 1: Changing; 2: Changed or renewed
     */
    public $ModifyStatus;

    /**
     * @var boolean Traffic truncation flag. true to enable traffic truncation, false to disable traffic truncation.
     */
    public $TruncFlag;

    /**
     * @var integer Precise remaining data transfer plan, unit: MB
     */
    public $CapacityRemainPrecise;

    /**
     * @param string $ResourceId Unique resource ID of the data transfer plan
     * @param integer $AppId User AppId belonging to the data transfer plan
     * @param string $PackageType Traffic package specification type. Values are as follows:
DEVICE_1_FLOW_20G,DEVICE_2_FLOW_50G,
DEVICE_3_FLOW_100G,
DEVICE_5_FLOW_500G represents traffic packages of 20G, 50G, 100G, and 500G gear selection.
Gear selection also impacts the bandwidth cap of the data transfer plan.
20G: Bind up to 1 device.
50G: Bind up to 2 devices.
100G: Bind up to 3 devices.
500G: Bind up to 5 devices.
     * @param integer $Status Traffic packet status. 0: Inactive, 1: Within validity period, 2: Expired.
     * @param integer $CreateTime Purchase time, Unix timestamp format, unit: second
     * @param integer $ActiveTime Effective time, Unix Timestamp Format, unit: second
     * @param integer $ExpireTime Expiration time, Unix Timestamp Format, unit: second
     * @param array $DeviceList Device ID list bound to the data transfer plan
     * @param integer $CapacitySize Total traffic plan capacity (unit: MB)
     * @param integer $CapacityRemain Remaining data transfer plan, unit: MB
     * @param boolean $RenewFlag Auto-renewal flag. true represents auto-renewal, false represents no auto-renewal.
     * @param integer $ModifyStatus Resource package change status: 0: No change; 1: Changing; 2: Changed or renewed
     * @param boolean $TruncFlag Traffic truncation flag. true to enable traffic truncation, false to disable traffic truncation.
     * @param integer $CapacityRemainPrecise Precise remaining data transfer plan, unit: MB
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }

        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("CapacityRemain",$param) and $param["CapacityRemain"] !== null) {
            $this->CapacityRemain = $param["CapacityRemain"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ModifyStatus",$param) and $param["ModifyStatus"] !== null) {
            $this->ModifyStatus = $param["ModifyStatus"];
        }

        if (array_key_exists("TruncFlag",$param) and $param["TruncFlag"] !== null) {
            $this->TruncFlag = $param["TruncFlag"];
        }

        if (array_key_exists("CapacityRemainPrecise",$param) and $param["CapacityRemainPrecise"] !== null) {
            $this->CapacityRemainPrecise = $param["CapacityRemainPrecise"];
        }
    }
}
