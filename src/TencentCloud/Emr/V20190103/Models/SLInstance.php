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
 * Serverless Instance
 *
 * @method string getInstanceId() Obtain EMR Instance Id
 * @method void setInstanceId(string $InstanceId) Set EMR Instance Id
 * @method integer getClusterId() Obtain EMR Numeric Instance Id
 * @method void setClusterId(integer $ClusterId) Set EMR Numeric Instance Id
 * @method string getInstanceName() Obtain Instance Name
 * @method void setInstanceName(string $InstanceName) Set Instance Name
 * @method integer getRegionId() Obtain Region id
 * @method void setRegionId(integer $RegionId) Set Region id
 * @method string getZone() Obtain Zone Name
 * @method void setZone(string $Zone) Set Zone Name
 * @method integer getPayMode() Obtain Pay Mode
 * @method void setPayMode(integer $PayMode) Set Pay Mode
 * @method string getDiskType() Obtain Disk Type
 * @method void setDiskType(string $DiskType) Set Disk Type
 * @method integer getDiskSize() Obtain Disk Size
 * @method void setDiskSize(integer $DiskSize) Set Disk Size
 * @method string getNodeType() Obtain Node Type
 * @method void setNodeType(string $NodeType) Set Node Type
 * @method integer getNodeNum() Obtain Node Number
 * @method void setNodeNum(integer $NodeNum) Set Node Number
 * @method string getExpireTime() Obtain Expire Time
 * @method void setExpireTime(string $ExpireTime) Set Expire Time
 * @method string getIsolateTime() Obtain Isolate Time
 * @method void setIsolateTime(string $IsolateTime) Set Isolate Time
 * @method string getCreateTime() Obtain Create Time
 * @method void setCreateTime(string $CreateTime) Set Create Time
 * @method integer getAutoRenewFlag() Obtain Auto Renew Flag
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto Renew Flag
 * @method integer getStatus() Obtain EMR Numeric Instance Status
 * @method void setStatus(integer $Status) Set EMR Numeric Instance Status
 * @method array getZoneSettings() Obtain Zone Setting
 * @method void setZoneSettings(array $ZoneSettings) Set Zone Setting
 * @method array getTags() Obtain Bound Tags
 * @method void setTags(array $Tags) Set Bound Tags
 * @method string getDeployRole() Obtain Deploy Role
 * @method void setDeployRole(string $DeployRole) Set Deploy Role
 */
class SLInstance extends AbstractModel
{
    /**
     * @var string EMR Instance Id
     */
    public $InstanceId;

    /**
     * @var integer EMR Numeric Instance Id
     */
    public $ClusterId;

    /**
     * @var string Instance Name
     */
    public $InstanceName;

    /**
     * @var integer Region id
     */
    public $RegionId;

    /**
     * @var string Zone Name
     */
    public $Zone;

    /**
     * @var integer Pay Mode
     */
    public $PayMode;

    /**
     * @var string Disk Type
     */
    public $DiskType;

    /**
     * @var integer Disk Size
     */
    public $DiskSize;

    /**
     * @var string Node Type
     */
    public $NodeType;

    /**
     * @var integer Node Number
     */
    public $NodeNum;

    /**
     * @var string Expire Time
     */
    public $ExpireTime;

    /**
     * @var string Isolate Time
     */
    public $IsolateTime;

    /**
     * @var string Create Time
     */
    public $CreateTime;

    /**
     * @var integer Auto Renew Flag
     */
    public $AutoRenewFlag;

    /**
     * @var integer EMR Numeric Instance Status
     */
    public $Status;

    /**
     * @var array Zone Setting
     */
    public $ZoneSettings;

    /**
     * @var array Bound Tags
     */
    public $Tags;

    /**
     * @var string Deploy Role
     */
    public $DeployRole;

    /**
     * @param string $InstanceId EMR Instance Id
     * @param integer $ClusterId EMR Numeric Instance Id
     * @param string $InstanceName Instance Name
     * @param integer $RegionId Region id
     * @param string $Zone Zone Name
     * @param integer $PayMode Pay Mode
     * @param string $DiskType Disk Type
     * @param integer $DiskSize Disk Size
     * @param string $NodeType Node Type
     * @param integer $NodeNum Node Number
     * @param string $ExpireTime Expire Time
     * @param string $IsolateTime Isolate Time
     * @param string $CreateTime Create Time
     * @param integer $AutoRenewFlag Auto Renew Flag
     * @param integer $Status EMR Numeric Instance Status
     * @param array $ZoneSettings Zone Setting
     * @param array $Tags Bound Tags
     * @param string $DeployRole Deploy Role
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeployRole",$param) and $param["DeployRole"] !== null) {
            $this->DeployRole = $param["DeployRole"];
        }
    }
}
