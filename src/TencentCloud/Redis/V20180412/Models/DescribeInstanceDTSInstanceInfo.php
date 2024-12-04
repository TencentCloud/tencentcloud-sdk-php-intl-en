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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of instances in the DTS task
 *
 * @method integer getRegionId() Obtain Region ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSetId() Obtain Warehouse ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSetId(integer $SetId) Set Warehouse ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getZoneId() Obtain AZ ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getType() Obtain Instance type.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(integer $Type) Set Instance type.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceName() Obtain Instance name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVip() Obtain Instance access address.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVip(string $Vip) Set Instance access address.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Status.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Status.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DescribeInstanceDTSInstanceInfo extends AbstractModel
{
    /**
     * @var integer Region ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RegionId;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Warehouse ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SetId;

    /**
     * @var integer AZ ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer Instance type.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Instance name.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance access address.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Vip;

    /**
     * @var integer Status.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @param integer $RegionId Region ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SetId Warehouse ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ZoneId AZ ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Type Instance type.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceName Instance name.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Vip Instance access address.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Status.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
