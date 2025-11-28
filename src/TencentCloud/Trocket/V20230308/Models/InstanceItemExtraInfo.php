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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unified list display for 4.x clusters and 5.0 clusters shows the 4.x special data carrying interface.
 *
 * @method boolean getIsVip() Obtain Whether it is a vip.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether it is a vip.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVipInstanceStatus() Obtain Specifies the dedicated cluster status of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipInstanceStatus(integer $VipInstanceStatus) Set Specifies the dedicated cluster status of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxBandWidth() Obtain Specifies the peak bandwidth of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Specifies the peak bandwidth of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpecName() Obtain Exclusive cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Exclusive cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNodeCount() Obtain Specifies the quantity of exclusive cluster nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeCount(integer $NodeCount) Set Specifies the quantity of exclusive cluster nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStorage() Obtain Specifies the maximum storage of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStorage(integer $MaxStorage) Set Specifies the maximum storage of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRetention() Obtain Specifies the maximum retention time of the dedicated cluster. the unit is hour.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRetention(integer $MaxRetention) Set Specifies the maximum retention time of the dedicated cluster. the unit is hour.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinRetention() Obtain Special project cluster maximum retention time, unit: hr.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinRetention(integer $MinRetention) Set Special project cluster maximum retention time, unit: hr.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceStatus() Obtain Status of 4.0 shared cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStatus(integer $InstanceStatus) Set Status of 4.0 shared cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsFrozen() Obtain Whether it is frozen.
 * @method void setIsFrozen(boolean $IsFrozen) Set Whether it is frozen.
 */
class InstanceItemExtraInfo extends AbstractModel
{
    /**
     * @var boolean Whether it is a vip.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsVip;

    /**
     * @var integer Specifies the dedicated cluster status of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VipInstanceStatus;

    /**
     * @var integer Specifies the peak bandwidth of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxBandWidth;

    /**
     * @var string Exclusive cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var integer Specifies the quantity of exclusive cluster nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeCount;

    /**
     * @var integer Specifies the maximum storage of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStorage;

    /**
     * @var integer Specifies the maximum retention time of the dedicated cluster. the unit is hour.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRetention;

    /**
     * @var integer Special project cluster maximum retention time, unit: hr.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinRetention;

    /**
     * @var integer Status of 4.0 shared cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var boolean Whether it is frozen.
     */
    public $IsFrozen;

    /**
     * @param boolean $IsVip Whether it is a vip.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VipInstanceStatus Specifies the dedicated cluster status of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxBandWidth Specifies the peak bandwidth of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SpecName Exclusive cluster specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NodeCount Specifies the quantity of exclusive cluster nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStorage Specifies the maximum storage of the dedicated cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRetention Specifies the maximum retention time of the dedicated cluster. the unit is hour.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinRetention Special project cluster maximum retention time, unit: hr.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceStatus Status of 4.0 shared cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsFrozen Whether it is frozen.
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
        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("VipInstanceStatus",$param) and $param["VipInstanceStatus"] !== null) {
            $this->VipInstanceStatus = $param["VipInstanceStatus"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("MinRetention",$param) and $param["MinRetention"] !== null) {
            $this->MinRetention = $param["MinRetention"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IsFrozen",$param) and $param["IsFrozen"] !== null) {
            $this->IsFrozen = $param["IsFrozen"];
        }
    }
}
