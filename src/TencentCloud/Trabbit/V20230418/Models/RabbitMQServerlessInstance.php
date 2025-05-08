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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for rabbitmq serverless instance.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceVersion() Obtain Instance version.
 * @method void setInstanceVersion(string $InstanceVersion) Set Instance version.
 * @method integer getStatus() Obtain Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
 * @method void setStatus(integer $Status) Set Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
 * @method integer getMaxTps() Obtain MaxTPS
 * @method void setMaxTps(integer $MaxTps) Set MaxTPS
 * @method integer getMaxBandWidth() Obtain MaxBandwidth
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set MaxBandwidth
 * @method integer getExpireTime() Obtain Expiration time of the cluster.
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time of the cluster.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
 * @method integer getPayMode() Obtain 0: Postpaid, 1: Prepaid
 * @method void setPayMode(integer $PayMode) Set 0: Postpaid, 1: Prepaid
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getSpecName() Obtain Cluster specifications
 * @method void setSpecName(string $SpecName) Set Cluster specifications
 * @method string getExceptionInformation() Obtain Exception information.
 * @method void setExceptionInformation(string $ExceptionInformation) Set Exception information.
 * @method string getPublicAccessEndpoint() Obtain Public network access point.
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set Public network access point.
 * @method array getVpcs() Obtain The virtual private cloud (vpc) network access point.
 * @method void setVpcs(array $Vpcs) Set The virtual private cloud (vpc) network access point.
 * @method integer getClusterStatus() Obtain Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.

 * @method void setClusterStatus(integer $ClusterStatus) Set Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.

 * @method integer getInstanceType() Obtain Specifies the cluster type: 1.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the cluster type: 1.
 * @method integer getCreateTime() Obtain Expiration time
 * @method void setCreateTime(integer $CreateTime) Set Expiration time
 * @method integer getNodeCount() Obtain For compatibility with the managed version, the fixed value is 0.
 * @method void setNodeCount(integer $NodeCount) Set For compatibility with the managed version, the fixed value is 0.
 * @method integer getMaxStorage() Obtain For compatibility with the managed version, the fixed value is 0.
 * @method void setMaxStorage(integer $MaxStorage) Set For compatibility with the managed version, the fixed value is 0.
 * @method integer getIsolatedTime() Obtain Isolation time
 * @method void setIsolatedTime(integer $IsolatedTime) Set Isolation time
 */
class RabbitMQServerlessInstance extends AbstractModel
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
     * @var string Instance version.
     */
    public $InstanceVersion;

    /**
     * @var integer Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
     */
    public $Status;

    /**
     * @var integer MaxTPS
     */
    public $MaxTps;

    /**
     * @var integer MaxBandwidth
     */
    public $MaxBandWidth;

    /**
     * @var integer Expiration time of the cluster.
     */
    public $ExpireTime;

    /**
     * @var integer Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     */
    public $AutoRenewFlag;

    /**
     * @var integer 0: Postpaid, 1: Prepaid
     */
    public $PayMode;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Cluster specifications
     */
    public $SpecName;

    /**
     * @var string Exception information.
     */
    public $ExceptionInformation;

    /**
     * @var string Public network access point.
     */
    public $PublicAccessEndpoint;

    /**
     * @var array The virtual private cloud (vpc) network access point.
     */
    public $Vpcs;

    /**
     * @var integer Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.

     */
    public $ClusterStatus;

    /**
     * @var integer Specifies the cluster type: 1.
     */
    public $InstanceType;

    /**
     * @var integer Expiration time
     */
    public $CreateTime;

    /**
     * @var integer For compatibility with the managed version, the fixed value is 0.
     */
    public $NodeCount;

    /**
     * @var integer For compatibility with the managed version, the fixed value is 0.
     */
    public $MaxStorage;

    /**
     * @var integer Isolation time
     */
    public $IsolatedTime;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceVersion Instance version.
     * @param integer $Status Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.
     * @param integer $MaxTps MaxTPS
     * @param integer $MaxBandWidth MaxBandwidth
     * @param integer $ExpireTime Expiration time of the cluster.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0 indicates the default status (If the default status is not configured, manual renewal is enabled), 1 indicates auto-renewal, and 2 indicates explicitly no auto-renewal (configured by the user).
     * @param integer $PayMode 0: Postpaid, 1: Prepaid
     * @param string $Remark Remarks
     * @param string $SpecName Cluster specifications
     * @param string $ExceptionInformation Exception information.
     * @param string $PublicAccessEndpoint Public network access point.
     * @param array $Vpcs The virtual private cloud (vpc) network access point.
     * @param integer $ClusterStatus Instance status. 0 indicates creating in progress. 1 indicates normal. 2 indicates isolated. 3 indicates terminated. 4 indicates exception. 5 indicates delivery failed.

     * @param integer $InstanceType Specifies the cluster type: 1.
     * @param integer $CreateTime Expiration time
     * @param integer $NodeCount For compatibility with the managed version, the fixed value is 0.
     * @param integer $MaxStorage For compatibility with the managed version, the fixed value is 0.
     * @param integer $IsolatedTime Isolation time
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

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
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

        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new RabbitMQServerlessEndpoint();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }
    }
}
