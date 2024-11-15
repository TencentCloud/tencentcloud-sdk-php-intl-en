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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateECMInstances request structure.
 *
 * @method string getClusterID() Obtain Cluster ID. Edge clusters need to enable public network access before adding ECM nodes.
 * @method void setClusterID(string $ClusterID) Set Cluster ID. Edge clusters need to enable public network access before adding ECM nodes.
 * @method string getModuleId() Obtain Edge module ID
 * @method void setModuleId(string $ModuleId) Set Edge module ID
 * @method array getZoneInstanceCountISPSet() Obtain Instance AZ, number of instances and ISP
 * @method void setZoneInstanceCountISPSet(array $ZoneInstanceCountISPSet) Set Instance AZ, number of instances and ISP
 * @method string getPassword() Obtain Password
 * @method void setPassword(string $Password) Set Password
 * @method integer getInternetMaxBandwidthOut() Obtain Public network bandwidth
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network bandwidth
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method ECMEnhancedService getEnhancedService() Obtain Enhanced service (including CWP and Cloud Monitoring)
 * @method void setEnhancedService(ECMEnhancedService $EnhancedService) Set Enhanced service (including CWP and Cloud Monitoring)
 * @method string getUserData() Obtain Custom script
 * @method void setUserData(string $UserData) Set Custom script
 * @method string getExternal() Obtain Instance extension information
 * @method void setExternal(string $External) Set Instance extension information
 * @method array getSecurityGroupIds() Obtain Security group of the instance
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance
 */
class CreateECMInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID. Edge clusters need to enable public network access before adding ECM nodes.
     */
    public $ClusterID;

    /**
     * @var string Edge module ID
     */
    public $ModuleId;

    /**
     * @var array Instance AZ, number of instances and ISP
     */
    public $ZoneInstanceCountISPSet;

    /**
     * @var string Password
     */
    public $Password;

    /**
     * @var integer Public network bandwidth
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var ECMEnhancedService Enhanced service (including CWP and Cloud Monitoring)
     */
    public $EnhancedService;

    /**
     * @var string Custom script
     */
    public $UserData;

    /**
     * @var string Instance extension information
     */
    public $External;

    /**
     * @var array Security group of the instance
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterID Cluster ID. Edge clusters need to enable public network access before adding ECM nodes.
     * @param string $ModuleId Edge module ID
     * @param array $ZoneInstanceCountISPSet Instance AZ, number of instances and ISP
     * @param string $Password Password
     * @param integer $InternetMaxBandwidthOut Public network bandwidth
     * @param string $ImageId Image ID
     * @param string $InstanceName Instance name
     * @param string $HostName Host name
     * @param ECMEnhancedService $EnhancedService Enhanced service (including CWP and Cloud Monitoring)
     * @param string $UserData Custom script
     * @param string $External Instance extension information
     * @param array $SecurityGroupIds Security group of the instance
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ZoneInstanceCountISPSet",$param) and $param["ZoneInstanceCountISPSet"] !== null) {
            $this->ZoneInstanceCountISPSet = [];
            foreach ($param["ZoneInstanceCountISPSet"] as $key => $value){
                $obj = new ECMZoneInstanceCountISP();
                $obj->deserialize($value);
                array_push($this->ZoneInstanceCountISPSet, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new ECMEnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = $param["External"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
