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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RabbitMQ exclusive instance information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceVersion() Obtain Instance version
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceVersion(string $InstanceVersion) Set Instance version
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
 * @method integer getNodeCount() Obtain Number of nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes
 * @method string getConfigDisplay() Obtain Instance specification name
 * @method void setConfigDisplay(string $ConfigDisplay) Set Instance specification name
 * @method integer getMaxTps() Obtain Peak TPS
 * @method void setMaxTps(integer $MaxTps) Set Peak TPS
 * @method integer getMaxBandWidth() Obtain Peak bandwidth in Mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Peak bandwidth in Mbps
 * @method integer getMaxStorage() Obtain Storage capacity in GB
 * @method void setMaxStorage(integer $MaxStorage) Set Storage capacity in GB
 * @method integer getExpireTime() Obtain Instance expiration time in milliseconds
 * @method void setExpireTime(integer $ExpireTime) Set Instance expiration time in milliseconds
 * @method integer getAutoRenewFlag() Obtain Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
 * @method integer getPayMode() Obtain Payment mode. `0`: Postpaid; `1`: Prepaid.
 * @method void setPayMode(integer $PayMode) Set Payment mode. `0`: Postpaid; `1`: Prepaid.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSpecName() Obtain Instance specification ID
 * @method void setSpecName(string $SpecName) Set Instance specification ID
 * @method string getExceptionInformation() Obtain Cluster exception
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionInformation(string $ExceptionInformation) Set Cluster exception
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
 * @method void setClusterStatus(integer $ClusterStatus) Set Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance version
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceVersion;

    /**
     * @var integer Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
     */
    public $Status;

    /**
     * @var integer Number of nodes
     */
    public $NodeCount;

    /**
     * @var string Instance specification name
     */
    public $ConfigDisplay;

    /**
     * @var integer Peak TPS
     */
    public $MaxTps;

    /**
     * @var integer Peak bandwidth in Mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer Storage capacity in GB
     */
    public $MaxStorage;

    /**
     * @var integer Instance expiration time in milliseconds
     */
    public $ExpireTime;

    /**
     * @var integer Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
     */
    public $AutoRenewFlag;

    /**
     * @var integer Payment mode. `0`: Postpaid; `1`: Prepaid.
     */
    public $PayMode;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Remark;

    /**
     * @var string Instance specification ID
     */
    public $SpecName;

    /**
     * @var string Cluster exception
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionInformation;

    /**
     * @var integer Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
     */
    public $ClusterStatus;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceVersion Instance version
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
     * @param integer $NodeCount Number of nodes
     * @param string $ConfigDisplay Instance specification name
     * @param integer $MaxTps Peak TPS
     * @param integer $MaxBandWidth Peak bandwidth in Mbps
     * @param integer $MaxStorage Storage capacity in GB
     * @param integer $ExpireTime Instance expiration time in milliseconds
     * @param integer $AutoRenewFlag Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
     * @param integer $PayMode Payment mode. `0`: Postpaid; `1`: Prepaid.
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SpecName Instance specification ID
     * @param string $ExceptionInformation Cluster exception
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
