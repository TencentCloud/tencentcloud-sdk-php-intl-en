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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of instances in the DTS task
 *
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getSetId() Obtain Repository ID.
 * @method void setSetId(integer $SetId) Set Repository ID.
 * @method integer getZoneId() Obtain AZ ID.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
 * @method integer getType() Obtain Instance type.
 * @method void setType(integer $Type) Set Instance type.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getVip() Obtain Instance access address.
 * @method void setVip(string $Vip) Set Instance access address.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 */
class DescribeInstanceDTSInstanceInfo extends AbstractModel
{
    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Repository ID.
     */
    public $SetId;

    /**
     * @var integer AZ ID.
     */
    public $ZoneId;

    /**
     * @var integer Instance type.
     */
    public $Type;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance access address.
     */
    public $Vip;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @param integer $RegionId Region ID.
     * @param string $InstanceId Instance ID.
     * @param integer $SetId Repository ID.
     * @param integer $ZoneId AZ ID.
     * @param integer $Type Instance type.
     * @param string $InstanceName Instance name.
     * @param string $Vip Instance access address.
     * @param integer $Status Status.
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
