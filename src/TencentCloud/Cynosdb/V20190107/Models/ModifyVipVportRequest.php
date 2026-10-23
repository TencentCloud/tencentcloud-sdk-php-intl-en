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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVipVport request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getInstanceGrpId() Obtain Instance Group ID
 * @method void setInstanceGrpId(string $InstanceGrpId) Set Instance Group ID
 * @method string getInstanceGroupId() Obtain Instance Group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance Group ID
 * @method string getVip() Obtain Destination ip that needs to be modified
 * @method void setVip(string $Vip) Set Destination ip that needs to be modified
 * @method integer getVport() Obtain Destination port that needs to be modified
 * @method void setVport(integer $Vport) Set Destination port that needs to be modified
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method integer getOldIpReserveHours() Obtain Retention time of the old ip before recycling. Unit: hour. 0 means reclaim immediately.
 * @method void setOldIpReserveHours(integer $OldIpReserveHours) Set Retention time of the old ip before recycling. Unit: hour. 0 means reclaim immediately.
 */
class ModifyVipVportRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Instance Group ID
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string Instance Group ID
     */
    public $InstanceGroupId;

    /**
     * @var string Destination ip that needs to be modified
     */
    public $Vip;

    /**
     * @var integer Destination port that needs to be modified
     */
    public $Vport;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var integer Retention time of the old ip before recycling. Unit: hour. 0 means reclaim immediately.
     */
    public $OldIpReserveHours;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $InstanceGrpId Instance Group ID
     * @param string $InstanceGroupId Instance Group ID
     * @param string $Vip Destination ip that needs to be modified
     * @param integer $Vport Destination port that needs to be modified
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param integer $OldIpReserveHours Retention time of the old ip before recycling. Unit: hour. 0 means reclaim immediately.
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

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("OldIpReserveHours",$param) and $param["OldIpReserveHours"] !== null) {
            $this->OldIpReserveHours = $param["OldIpReserveHours"];
        }
    }
}
