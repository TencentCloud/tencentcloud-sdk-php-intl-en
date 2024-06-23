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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster Basic Information
 *
 * @method string getClusterId() Obtain Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterType() Obtain Cluster Type, EMR/CDW, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterType(string $ClusterType) Set Cluster Type, EMR/CDW, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterName() Obtain Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegionCn() Obtain Region Chinese
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegionCn(string $RegionCn) Set Region Chinese
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegionEn() Obtain Region English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegionEn(string $RegionEn) Set Region English
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegionArea() Obtain RegionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegionArea(string $RegionArea) Set RegionNote: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getUsed() Obtain Whether the Cluster is Used
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUsed(boolean $Used) Set Whether the Cluster is Used
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Cluster StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Cluster StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatusInfo() Obtain Cluster State Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatusInfo(string $StatusInfo) Set Cluster State Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStorageType() Obtain Cluster Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStorageType(string $StorageType) Set Cluster Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getComputeType() Obtain Cluster Computing Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComputeType(string $ComputeType) Set Cluster Computing Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterResource() Obtain Cluster Resource Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterResource(string $ClusterResource) Set Cluster Resource Quantity
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getChargeType() Obtain Cluster Payment Method
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChargeType(string $ChargeType) Set Cluster Payment Method
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Cluster Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Cluster Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExtraConf() Obtain Additional Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtraConf(string $ExtraConf) Set Additional Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRangerUserName() Obtain Ranger Account Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRangerUserName(string $RangerUserName) Set Ranger Account Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCdwUserName() Obtain CDW Account (for display)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCdwUserName(string $CdwUserName) Set CDW Account (for display)
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BaseClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Cluster Type, EMR/CDW, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterType;

    /**
     * @var string Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Region Chinese
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RegionCn;

    /**
     * @var string Region English
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RegionEn;

    /**
     * @var string RegionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RegionArea;

    /**
     * @var boolean Whether the Cluster is Used
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Used;

    /**
     * @var integer Cluster StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Cluster State Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StatusInfo;

    /**
     * @var string Cluster Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StorageType;

    /**
     * @var string Cluster Computing Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ComputeType;

    /**
     * @var string Cluster Resource Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterResource;

    /**
     * @var string Cluster Payment Method
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Cluster Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Additional Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtraConf;

    /**
     * @var string Ranger Account Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RangerUserName;

    /**
     * @var string CDW Account (for display)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CdwUserName;

    /**
     * @param string $ClusterId Cluster ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterType Cluster Type, EMR/CDW, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterName Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RegionCn Region Chinese
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RegionEn Region English
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RegionArea RegionNote: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Used Whether the Cluster is Used
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Cluster StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $StatusInfo Cluster State Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StorageType Cluster Storage Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ComputeType Cluster Computing Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterResource Cluster Resource Quantity
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChargeType Cluster Payment Method
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Cluster Creation Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExtraConf Additional Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RangerUserName Ranger Account Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CdwUserName CDW Account (for display)
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionCn",$param) and $param["RegionCn"] !== null) {
            $this->RegionCn = $param["RegionCn"];
        }

        if (array_key_exists("RegionEn",$param) and $param["RegionEn"] !== null) {
            $this->RegionEn = $param["RegionEn"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = $param["StatusInfo"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("ComputeType",$param) and $param["ComputeType"] !== null) {
            $this->ComputeType = $param["ComputeType"];
        }

        if (array_key_exists("ClusterResource",$param) and $param["ClusterResource"] !== null) {
            $this->ClusterResource = $param["ClusterResource"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExtraConf",$param) and $param["ExtraConf"] !== null) {
            $this->ExtraConf = $param["ExtraConf"];
        }

        if (array_key_exists("RangerUserName",$param) and $param["RangerUserName"] !== null) {
            $this->RangerUserName = $param["RangerUserName"];
        }

        if (array_key_exists("CdwUserName",$param) and $param["CdwUserName"] !== null) {
            $this->CdwUserName = $param["CdwUserName"];
        }
    }
}
