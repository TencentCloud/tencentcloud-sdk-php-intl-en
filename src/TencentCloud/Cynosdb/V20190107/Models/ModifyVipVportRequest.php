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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVipVport request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getInstanceGrpId() Obtain Instance group ID
 * @method void setInstanceGrpId(string $InstanceGrpId) Set Instance group ID
 * @method string getVip() Obtain Target IP to be modified
 * @method void setVip(string $Vip) Set Target IP to be modified
 * @method integer getVport() Obtain Target port to be modified
 * @method void setVport(integer $Vport) Set Target port to be modified
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method integer getOldIpReserveHours() Obtain Valid hours of old IPs. If it is set to `0` hours, the IPs will be released immediately.
 * @method void setOldIpReserveHours(integer $OldIpReserveHours) Set Valid hours of old IPs. If it is set to `0` hours, the IPs will be released immediately.
 */
class ModifyVipVportRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Instance group ID
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string Target IP to be modified
     */
    public $Vip;

    /**
     * @var integer Target port to be modified
     */
    public $Vport;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var integer Valid hours of old IPs. If it is set to `0` hours, the IPs will be released immediately.
     */
    public $OldIpReserveHours;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $InstanceGrpId Instance group ID
     * @param string $Vip Target IP to be modified
     * @param integer $Vport Target port to be modified
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param integer $OldIpReserveHours Valid hours of old IPs. If it is set to `0` hours, the IPs will be released immediately.
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
