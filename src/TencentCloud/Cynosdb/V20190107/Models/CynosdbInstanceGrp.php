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
 * Instance group information
 *
 * @method integer getAppId() Obtain appId
 * @method void setAppId(integer $AppId) Set appId
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method string getDeletedTime() Obtain Deletion time
 * @method void setDeletedTime(string $DeletedTime) Set Deletion time
 * @method string getInstanceGrpId() Obtain Instance group ID
 * @method void setInstanceGrpId(string $InstanceGrpId) Set Instance group ID
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getType() Obtain Instance group type. ha: HA group; ro: RO group
 * @method void setType(string $Type) Set Instance group type. ha: HA group; ro: RO group
 * @method string getUpdatedTime() Obtain Update time
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time
 * @method string getVip() Obtain Private IP
 * @method void setVip(string $Vip) Set Private IP
 * @method integer getVport() Obtain Private port
 * @method void setVport(integer $Vport) Set Private port
 * @method string getWanDomain() Obtain Public domain name
 * @method void setWanDomain(string $WanDomain) Set Public domain name
 * @method string getWanIP() Obtain Public IP
 * @method void setWanIP(string $WanIP) Set Public IP
 * @method integer getWanPort() Obtain Public port
 * @method void setWanPort(integer $WanPort) Set Public port
 * @method string getWanStatus() Obtain Public network status
 * @method void setWanStatus(string $WanStatus) Set Public network status
 * @method array getInstanceSet() Obtain Information of instances contained in instance group
 * @method void setInstanceSet(array $InstanceSet) Set Information of instances contained in instance group
 */
class CynosdbInstanceGrp extends AbstractModel
{
    /**
     * @var integer appId
     */
    public $AppId;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var string Deletion time
     */
    public $DeletedTime;

    /**
     * @var string Instance group ID
     */
    public $InstanceGrpId;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Instance group type. ha: HA group; ro: RO group
     */
    public $Type;

    /**
     * @var string Update time
     */
    public $UpdatedTime;

    /**
     * @var string Private IP
     */
    public $Vip;

    /**
     * @var integer Private port
     */
    public $Vport;

    /**
     * @var string Public domain name
     */
    public $WanDomain;

    /**
     * @var string Public IP
     */
    public $WanIP;

    /**
     * @var integer Public port
     */
    public $WanPort;

    /**
     * @var string Public network status
     */
    public $WanStatus;

    /**
     * @var array Information of instances contained in instance group
     */
    public $InstanceSet;

    /**
     * @param integer $AppId appId
     * @param string $ClusterId Cluster ID
     * @param string $CreatedTime Creation time
     * @param string $DeletedTime Deletion time
     * @param string $InstanceGrpId Instance group ID
     * @param string $Status Status
     * @param string $Type Instance group type. ha: HA group; ro: RO group
     * @param string $UpdatedTime Update time
     * @param string $Vip Private IP
     * @param integer $Vport Private port
     * @param string $WanDomain Public domain name
     * @param string $WanIP Public IP
     * @param integer $WanPort Public port
     * @param string $WanStatus Public network status
     * @param array $InstanceSet Information of instances contained in instance group
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DeletedTime",$param) and $param["DeletedTime"] !== null) {
            $this->DeletedTime = $param["DeletedTime"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new CynosdbInstance();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }
    }
}
