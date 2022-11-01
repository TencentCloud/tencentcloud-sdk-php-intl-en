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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus service response body
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method integer getInstanceChargeType() Obtain Instance billing mode. Valid values:
<ul>
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
</ul>
 * @method void setInstanceChargeType(integer $InstanceChargeType) Set Instance billing mode. Valid values:
<ul>
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
</ul>
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getDataRetentionTime() Obtain Storage period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataRetentionTime(integer $DataRetentionTime) Set Storage period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceStatus() Obtain Instance status. Valid values:
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
 * @method void setInstanceStatus(integer $InstanceStatus) Set Instance status. Valid values:
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
 * @method string getGrafanaURL() Obtain Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrafanaURL(string $GrafanaURL) Set Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method integer getEnableGrafana() Obtain Whether Grafana is enabled
<li>0: Disabled</li>
<li>1: Enabled</li>
 * @method void setEnableGrafana(integer $EnableGrafana) Set Whether Grafana is enabled
<li>0: Disabled</li>
<li>1: Enabled</li>
 * @method string getIPv4Address() Obtain Instance IPv4 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIPv4Address(string $IPv4Address) Set Instance IPv4 address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagSpecification() Obtain List of tags associated with the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSpecification(array $TagSpecification) Set List of tags associated with the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getChargeStatus() Obtain Billing status
<ul>
<li>1: Normal</li>
<li>2: Expired</li>
<li>3: Terminated</li>
<li>4: Assigning</li>
<li>5: Assignment failed</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeStatus(integer $ChargeStatus) Set Billing status
<ul>
<li>1: Normal</li>
<li>2: Expired</li>
<li>3: Terminated</li>
<li>4: Assigning</li>
<li>5: Assignment failed</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpecName() Obtain Specification name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Specification name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag
<ul>
<li>0: Auto-renewal not enabled</li>
<li>1: Auto-renewal enabled</li>
<li>2: Auto-renewal prohibited</li>
<li>-1: Invalid</ii>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag
<ul>
<li>0: Auto-renewal not enabled</li>
<li>1: Auto-renewal enabled</li>
<li>2: Auto-renewal prohibited</li>
<li>-1: Invalid</ii>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsNearExpire() Obtain Expiring soon
<ul>
<li>0: No</li>
<li>1: Yes</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNearExpire(integer $IsNearExpire) Set Expiring soon
<ul>
<li>0: No</li>
<li>1: Yes</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthToken() Obtain The token required for data writing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthToken(string $AuthToken) Set The token required for data writing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemoteWrite() Obtain Prometheus remote write address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoteWrite(string $RemoteWrite) Set Prometheus remote write address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApiRootPath() Obtain Prometheus HTTP API root address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiRootPath(string $ApiRootPath) Set Prometheus HTTP API root address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProxyAddress() Obtain Proxy address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyAddress(string $ProxyAddress) Set Proxy address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGrafanaStatus() Obtain Grafana status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Restarting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>7: Deleted</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrafanaStatus(integer $GrafanaStatus) Set Grafana status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Restarting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>7: Deleted</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGrafanaIpWhiteList() Obtain Grafana IP allowlist, where IPs are separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrafanaIpWhiteList(string $GrafanaIpWhiteList) Set Grafana IP allowlist, where IPs are separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PrometheusInstanceGrantInfo getGrant() Obtain Instance authorization information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrant(PrometheusInstanceGrantInfo $Grant) Set Instance authorization information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGrafanaInstanceId() Obtain ID of the bound Grafana instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) Set ID of the bound Grafana instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAlertRuleLimit() Obtain The alert rule limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlertRuleLimit(integer $AlertRuleLimit) Set The alert rule limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordingRuleLimit() Obtain The recording rule limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordingRuleLimit(integer $RecordingRuleLimit) Set The recording rule limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMigrationType() Obtain Migration status. 0: Not migrating; 1: Migrating from source instance; 2: Migrating to target instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrationType(integer $MigrationType) Set Migration status. 0: Not migrating; 1: Migrating from source instance; 2: Migrating to target instance.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusInstancesItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var integer Instance billing mode. Valid values:
<ul>
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
</ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Storage period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataRetentionTime;

    /**
     * @var integer Instance status. Valid values:
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
     */
    public $InstanceStatus;

    /**
     * @var string Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrafanaURL;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var integer Whether Grafana is enabled
<li>0: Disabled</li>
<li>1: Enabled</li>
     */
    public $EnableGrafana;

    /**
     * @var string Instance IPv4 address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IPv4Address;

    /**
     * @var array List of tags associated with the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @var string Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var integer Billing status
<ul>
<li>1: Normal</li>
<li>2: Expired</li>
<li>3: Terminated</li>
<li>4: Assigning</li>
<li>5: Assignment failed</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeStatus;

    /**
     * @var string Specification name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var integer Auto-renewal flag
<ul>
<li>0: Auto-renewal not enabled</li>
<li>1: Auto-renewal enabled</li>
<li>2: Auto-renewal prohibited</li>
<li>-1: Invalid</ii>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Expiring soon
<ul>
<li>0: No</li>
<li>1: Yes</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNearExpire;

    /**
     * @var string The token required for data writing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthToken;

    /**
     * @var string Prometheus remote write address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoteWrite;

    /**
     * @var string Prometheus HTTP API root address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiRootPath;

    /**
     * @var string Proxy address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyAddress;

    /**
     * @var integer Grafana status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Restarting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>7: Deleted</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrafanaStatus;

    /**
     * @var string Grafana IP allowlist, where IPs are separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrafanaIpWhiteList;

    /**
     * @var PrometheusInstanceGrantInfo Instance authorization information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Grant;

    /**
     * @var string ID of the bound Grafana instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrafanaInstanceId;

    /**
     * @var integer The alert rule limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlertRuleLimit;

    /**
     * @var integer The recording rule limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordingRuleLimit;

    /**
     * @var integer Migration status. 0: Not migrating; 1: Migrating from source instance; 2: Migrating to target instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrationType;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param integer $InstanceChargeType Instance billing mode. Valid values:
<ul>
<li>2: Monthly subscription</li>
<li>3: Pay-as-you-go</li>
</ul>
     * @param integer $RegionId Region ID
     * @param string $Zone AZ
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param integer $DataRetentionTime Storage period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceStatus Instance status. Valid values:
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Rebooting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>8: Suspending service for overdue payment</li>
<li>9: Service suspended for overdue payment</li>
</ul>
     * @param string $GrafanaURL Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time
     * @param integer $EnableGrafana Whether Grafana is enabled
<li>0: Disabled</li>
<li>1: Enabled</li>
     * @param string $IPv4Address Instance IPv4 address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagSpecification List of tags associated with the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ChargeStatus Billing status
<ul>
<li>1: Normal</li>
<li>2: Expired</li>
<li>3: Terminated</li>
<li>4: Assigning</li>
<li>5: Assignment failed</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SpecName Specification name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal flag
<ul>
<li>0: Auto-renewal not enabled</li>
<li>1: Auto-renewal enabled</li>
<li>2: Auto-renewal prohibited</li>
<li>-1: Invalid</ii>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsNearExpire Expiring soon
<ul>
<li>0: No</li>
<li>1: Yes</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthToken The token required for data writing
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RemoteWrite Prometheus remote write address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApiRootPath Prometheus HTTP API root address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProxyAddress Proxy address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GrafanaStatus Grafana status
<ul>
<li>1: Creating</li>
<li>2: Running</li>
<li>3: Abnormal</li>
<li>4: Restarting</li>
<li>5: Terminating</li>
<li>6: Service suspended</li>
<li>7: Deleted</li>
</ul>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GrafanaIpWhiteList Grafana IP allowlist, where IPs are separated by comma.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PrometheusInstanceGrantInfo $Grant Instance authorization information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GrafanaInstanceId ID of the bound Grafana instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AlertRuleLimit The alert rule limit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordingRuleLimit The recording rule limit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MigrationType Migration status. 0: Not migrating; 1: Migrating from source instance; 2: Migrating to target instance.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("EnableGrafana",$param) and $param["EnableGrafana"] !== null) {
            $this->EnableGrafana = $param["EnableGrafana"];
        }

        if (array_key_exists("IPv4Address",$param) and $param["IPv4Address"] !== null) {
            $this->IPv4Address = $param["IPv4Address"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsNearExpire",$param) and $param["IsNearExpire"] !== null) {
            $this->IsNearExpire = $param["IsNearExpire"];
        }

        if (array_key_exists("AuthToken",$param) and $param["AuthToken"] !== null) {
            $this->AuthToken = $param["AuthToken"];
        }

        if (array_key_exists("RemoteWrite",$param) and $param["RemoteWrite"] !== null) {
            $this->RemoteWrite = $param["RemoteWrite"];
        }

        if (array_key_exists("ApiRootPath",$param) and $param["ApiRootPath"] !== null) {
            $this->ApiRootPath = $param["ApiRootPath"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }

        if (array_key_exists("GrafanaStatus",$param) and $param["GrafanaStatus"] !== null) {
            $this->GrafanaStatus = $param["GrafanaStatus"];
        }

        if (array_key_exists("GrafanaIpWhiteList",$param) and $param["GrafanaIpWhiteList"] !== null) {
            $this->GrafanaIpWhiteList = $param["GrafanaIpWhiteList"];
        }

        if (array_key_exists("Grant",$param) and $param["Grant"] !== null) {
            $this->Grant = new PrometheusInstanceGrantInfo();
            $this->Grant->deserialize($param["Grant"]);
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }

        if (array_key_exists("AlertRuleLimit",$param) and $param["AlertRuleLimit"] !== null) {
            $this->AlertRuleLimit = $param["AlertRuleLimit"];
        }

        if (array_key_exists("RecordingRuleLimit",$param) and $param["RecordingRuleLimit"] !== null) {
            $this->RecordingRuleLimit = $param["RecordingRuleLimit"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }
    }
}
