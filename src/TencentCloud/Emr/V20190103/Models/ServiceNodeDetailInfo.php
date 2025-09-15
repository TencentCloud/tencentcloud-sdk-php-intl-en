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
 * Service process information.
 *
 * @method string getIp() Obtain Process node IP
 * @method void setIp(string $Ip) Set Process node IP
 * @method integer getNodeType() Obtain Process type.
 * @method void setNodeType(integer $NodeType) Set Process type.
 * @method string getNodeName() Obtain Process name
 * @method void setNodeName(string $NodeName) Set Process name
 * @method integer getServiceStatus() Obtain Service component status
 * @method void setServiceStatus(integer $ServiceStatus) Set Service component status
 * @method integer getMonitorStatus() Obtain Process monitoring status
 * @method void setMonitorStatus(integer $MonitorStatus) Set Process monitoring status
 * @method integer getStatus() Obtain Service component status
 * @method void setStatus(integer $Status) Set Service component status
 * @method string getPortsInfo() Obtain Process port information
 * @method void setPortsInfo(string $PortsInfo) Set Process port information
 * @method string getLastRestartTime() Obtain Last restart time.
 * @method void setLastRestartTime(string $LastRestartTime) Set Last restart time.
 * @method integer getFlag() Obtain Node type.
 * @method void setFlag(integer $Flag) Set Node type.
 * @method integer getConfGroupId() Obtain Configuration group ID.
 * @method void setConfGroupId(integer $ConfGroupId) Set Configuration group ID.
 * @method string getConfGroupName() Obtain Configuration group name.
 * @method void setConfGroupName(string $ConfGroupName) Set Configuration group name.
 * @method integer getConfStatus() Obtain Whether the node needs to be restarted
 * @method void setConfStatus(integer $ConfStatus) Set Whether the node needs to be restarted
 * @method array getServiceDetectionInfo() Obtain Process detection information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDetectionInfo(array $ServiceDetectionInfo) Set Process detection information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeFlagFilter() Obtain Node type.
 * @method void setNodeFlagFilter(string $NodeFlagFilter) Set Node type.
 * @method HealthStatus getHealthStatus() Obtain Process health status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthStatus(HealthStatus $HealthStatus) Set Process health status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSupportRoleMonitor() Obtain Whether the role supports monitoring.
 * @method void setIsSupportRoleMonitor(boolean $IsSupportRoleMonitor) Set Whether the role supports monitoring.
 * @method array getStopPolicies() Obtain Suspension policy

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStopPolicies(array $StopPolicies) Set Suspension policy

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHAState() Obtain Strong validation of the API in a test environment. This strong validation doesn't exist on the current network, but it does exist in the data returned by the emrcc interface. If it’s not applied, an error will be reported. Omitting it will result in an error.
 * @method void setHAState(string $HAState) Set Strong validation of the API in a test environment. This strong validation doesn't exist on the current network, but it does exist in the data returned by the emrcc interface. If it’s not applied, an error will be reported. Omitting it will result in an error.
 * @method string getNameService() Obtain NameService name.
 * @method void setNameService(string $NameService) Set NameService name.
 * @method boolean getIsFederation() Obtain Whether the federation is supported.
 * @method void setIsFederation(boolean $IsFederation) Set Whether the federation is supported.
 * @method integer getDataNodeMaintenanceState() Obtain Whether the DataNode is in maintenance status.
 * @method void setDataNodeMaintenanceState(integer $DataNodeMaintenanceState) Set Whether the DataNode is in maintenance status.
 */
class ServiceNodeDetailInfo extends AbstractModel
{
    /**
     * @var string Process node IP
     */
    public $Ip;

    /**
     * @var integer Process type.
     */
    public $NodeType;

    /**
     * @var string Process name
     */
    public $NodeName;

    /**
     * @var integer Service component status
     */
    public $ServiceStatus;

    /**
     * @var integer Process monitoring status
     */
    public $MonitorStatus;

    /**
     * @var integer Service component status
     */
    public $Status;

    /**
     * @var string Process port information
     */
    public $PortsInfo;

    /**
     * @var string Last restart time.
     */
    public $LastRestartTime;

    /**
     * @var integer Node type.
     */
    public $Flag;

    /**
     * @var integer Configuration group ID.
     */
    public $ConfGroupId;

    /**
     * @var string Configuration group name.
     */
    public $ConfGroupName;

    /**
     * @var integer Whether the node needs to be restarted
     */
    public $ConfStatus;

    /**
     * @var array Process detection information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDetectionInfo;

    /**
     * @var string Node type.
     */
    public $NodeFlagFilter;

    /**
     * @var HealthStatus Process health status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthStatus;

    /**
     * @var boolean Whether the role supports monitoring.
     */
    public $IsSupportRoleMonitor;

    /**
     * @var array Suspension policy

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StopPolicies;

    /**
     * @var string Strong validation of the API in a test environment. This strong validation doesn't exist on the current network, but it does exist in the data returned by the emrcc interface. If it’s not applied, an error will be reported. Omitting it will result in an error.
     */
    public $HAState;

    /**
     * @var string NameService name.
     */
    public $NameService;

    /**
     * @var boolean Whether the federation is supported.
     */
    public $IsFederation;

    /**
     * @var integer Whether the DataNode is in maintenance status.
     */
    public $DataNodeMaintenanceState;

    /**
     * @param string $Ip Process node IP
     * @param integer $NodeType Process type.
     * @param string $NodeName Process name
     * @param integer $ServiceStatus Service component status
     * @param integer $MonitorStatus Process monitoring status
     * @param integer $Status Service component status
     * @param string $PortsInfo Process port information
     * @param string $LastRestartTime Last restart time.
     * @param integer $Flag Node type.
     * @param integer $ConfGroupId Configuration group ID.
     * @param string $ConfGroupName Configuration group name.
     * @param integer $ConfStatus Whether the node needs to be restarted
     * @param array $ServiceDetectionInfo Process detection information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeFlagFilter Node type.
     * @param HealthStatus $HealthStatus Process health status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSupportRoleMonitor Whether the role supports monitoring.
     * @param array $StopPolicies Suspension policy

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HAState Strong validation of the API in a test environment. This strong validation doesn't exist on the current network, but it does exist in the data returned by the emrcc interface. If it’s not applied, an error will be reported. Omitting it will result in an error.
     * @param string $NameService NameService name.
     * @param boolean $IsFederation Whether the federation is supported.
     * @param integer $DataNodeMaintenanceState Whether the DataNode is in maintenance status.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PortsInfo",$param) and $param["PortsInfo"] !== null) {
            $this->PortsInfo = $param["PortsInfo"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("ConfGroupId",$param) and $param["ConfGroupId"] !== null) {
            $this->ConfGroupId = $param["ConfGroupId"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }

        if (array_key_exists("ConfStatus",$param) and $param["ConfStatus"] !== null) {
            $this->ConfStatus = $param["ConfStatus"];
        }

        if (array_key_exists("ServiceDetectionInfo",$param) and $param["ServiceDetectionInfo"] !== null) {
            $this->ServiceDetectionInfo = [];
            foreach ($param["ServiceDetectionInfo"] as $key => $value){
                $obj = new ServiceProcessFunctionInfo();
                $obj->deserialize($value);
                array_push($this->ServiceDetectionInfo, $obj);
            }
        }

        if (array_key_exists("NodeFlagFilter",$param) and $param["NodeFlagFilter"] !== null) {
            $this->NodeFlagFilter = $param["NodeFlagFilter"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = new HealthStatus();
            $this->HealthStatus->deserialize($param["HealthStatus"]);
        }

        if (array_key_exists("IsSupportRoleMonitor",$param) and $param["IsSupportRoleMonitor"] !== null) {
            $this->IsSupportRoleMonitor = $param["IsSupportRoleMonitor"];
        }

        if (array_key_exists("StopPolicies",$param) and $param["StopPolicies"] !== null) {
            $this->StopPolicies = [];
            foreach ($param["StopPolicies"] as $key => $value){
                $obj = new RestartPolicy();
                $obj->deserialize($value);
                array_push($this->StopPolicies, $obj);
            }
        }

        if (array_key_exists("HAState",$param) and $param["HAState"] !== null) {
            $this->HAState = $param["HAState"];
        }

        if (array_key_exists("NameService",$param) and $param["NameService"] !== null) {
            $this->NameService = $param["NameService"];
        }

        if (array_key_exists("IsFederation",$param) and $param["IsFederation"] !== null) {
            $this->IsFederation = $param["IsFederation"];
        }

        if (array_key_exists("DataNodeMaintenanceState",$param) and $param["DataNodeMaintenanceState"] !== null) {
            $this->DataNodeMaintenanceState = $param["DataNodeMaintenanceState"];
        }
    }
}
