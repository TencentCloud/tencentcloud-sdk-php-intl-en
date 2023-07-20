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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy instance
 *
 * @method string getInstanceId() Obtain Instance ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceType() Obtain Instance type. Valid values:  `master` (source instance), `ro` (read-only instance), `dr` (disaster recovery instance), `sdr` (disaster recovery instance of small specifications). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Valid values:  `master` (source instance), `ro` (read-only instance), `dr` (disaster recovery instance), `sdr` (disaster recovery instance of small specifications). Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Instance status. Valid values:  `0` (creating), `1` (running), `4` (isolating), `5` (isolated). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Instance status. Valid values:  `0` (creating), `1` (running), `4` (isolating), `5` (isolated). Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Read weight. If it is assigned by the system automatically, the modification will not take effect but represents whether the instance is enabled. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Read weight. If it is assigned by the system automatically, the modification will not take effect but represents whether the instance is enabled. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Instance region Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Instance region Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Instance AZ Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Instance AZ Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProxyInst extends AbstractModel
{
    /**
     * @var string Instance ID Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance name Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer Instance type. Valid values:  `master` (source instance), `ro` (read-only instance), `dr` (disaster recovery instance), `sdr` (disaster recovery instance of small specifications). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var integer Instance status. Valid values:  `0` (creating), `1` (running), `4` (isolating), `5` (isolated). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Read weight. If it is assigned by the system automatically, the modification will not take effect but represents whether the instance is enabled. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Instance region Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Instance AZ Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @param string $InstanceId Instance ID Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceType Instance type. Valid values:  `master` (source instance), `ro` (read-only instance), `dr` (disaster recovery instance), `sdr` (disaster recovery instance of small specifications). Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Instance status. Valid values:  `0` (creating), `1` (running), `4` (isolating), `5` (isolated). Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Read weight. If it is assigned by the system automatically, the modification will not take effect but represents whether the instance is enabled. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Instance region Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Instance AZ Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
