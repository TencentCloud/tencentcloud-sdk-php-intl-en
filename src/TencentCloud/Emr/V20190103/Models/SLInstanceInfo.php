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
 * Serverless HBase instance information
 *
 * @method string getClusterId() Obtain Instance string ID.
 * @method void setClusterId(string $ClusterId) Set Instance string ID.
 * @method integer getId() Obtain Instance numeric ID
 * @method void setId(integer $Id) Set Instance numeric ID
 * @method string getStatusDesc() Obtain Status description.
 * @method void setStatusDesc(string $StatusDesc) Set Status description.
 * @method string getHealthStatus() Obtain Health status.
 * @method void setHealthStatus(string $HealthStatus) Set Health status.
 * @method string getClusterName() Obtain Instance name
 * @method void setClusterName(string $ClusterName) Set Instance name
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method integer getZoneId() Obtain Primary AZ ID.
 * @method void setZoneId(integer $ZoneId) Set Primary AZ ID.
 * @method string getZone() Obtain Primary AZ.
 * @method void setZone(string $Zone) Set Primary AZ.
 * @method integer getAppId() Obtain User APP ID.
 * @method void setAppId(integer $AppId) Set User APP ID.
 * @method integer getVpcId() Obtain Primary AZ VPC ID.
 * @method void setVpcId(integer $VpcId) Set Primary AZ VPC ID.
 * @method integer getSubnetId() Obtain Primary AZ subnet ID.
 * @method void setSubnetId(integer $SubnetId) Set Primary AZ subnet ID.
 * @method integer getStatus() Obtain Status code
 * @method void setStatus(integer $Status) Set Status code
 * @method string getAddTime() Obtain Creation time.
 * @method void setAddTime(string $AddTime) Set Creation time.
 * @method integer getPayMode() Obtain Cluster billing type. 0 indicates pay-as-you-go. 1 indicates monthly subscription.
 * @method void setPayMode(integer $PayMode) Set Cluster billing type. 0 indicates pay-as-you-go. 1 indicates monthly subscription.
 * @method array getZoneSettings() Obtain Multi-AZ information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneSettings(array $ZoneSettings) Set Multi-AZ information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Instance tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Instance tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: notify before expiration but do not auto-renew; 1: notify before expiration and auto-renew; and 2: do not notify before expiration and do not auto-renew. If the business does not support renewal, the value is set to 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: notify before expiration but do not auto-renew; 1: notify before expiration and auto-renew; and 2: do not notify before expiration and do not auto-renew. If the business does not support renewal, the value is set to 0.
 * @method string getIsolateTime() Obtain Isolation time. For instances that are not isolated, the API returns 0000-00-00 00:00:00.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time. For instances that are not isolated, the API returns 0000-00-00 00:00:00.
 * @method string getExpireTime() Obtain Expiration time. For post-paid instances, the API returns 0000-00-00 00:00:00.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time. For post-paid instances, the API returns 0000-00-00 00:00:00.
 */
class SLInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance string ID.
     */
    public $ClusterId;

    /**
     * @var integer Instance numeric ID
     */
    public $Id;

    /**
     * @var string Status description.
     */
    public $StatusDesc;

    /**
     * @var string Health status.
     */
    public $HealthStatus;

    /**
     * @var string Instance name
     */
    public $ClusterName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var integer Primary AZ ID.
     */
    public $ZoneId;

    /**
     * @var string Primary AZ.
     */
    public $Zone;

    /**
     * @var integer User APP ID.
     */
    public $AppId;

    /**
     * @var integer Primary AZ VPC ID.
     */
    public $VpcId;

    /**
     * @var integer Primary AZ subnet ID.
     */
    public $SubnetId;

    /**
     * @var integer Status code
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $AddTime;

    /**
     * @var integer Cluster billing type. 0 indicates pay-as-you-go. 1 indicates monthly subscription.
     */
    public $PayMode;

    /**
     * @var array Multi-AZ information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneSettings;

    /**
     * @var array Instance tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Auto-renewal flag. 0: notify before expiration but do not auto-renew; 1: notify before expiration and auto-renew; and 2: do not notify before expiration and do not auto-renew. If the business does not support renewal, the value is set to 0.
     */
    public $AutoRenewFlag;

    /**
     * @var string Isolation time. For instances that are not isolated, the API returns 0000-00-00 00:00:00.
     */
    public $IsolateTime;

    /**
     * @var string Expiration time. For post-paid instances, the API returns 0000-00-00 00:00:00.
     */
    public $ExpireTime;

    /**
     * @param string $ClusterId Instance string ID.
     * @param integer $Id Instance numeric ID
     * @param string $StatusDesc Status description.
     * @param string $HealthStatus Health status.
     * @param string $ClusterName Instance name
     * @param integer $RegionId Region ID
     * @param integer $ZoneId Primary AZ ID.
     * @param string $Zone Primary AZ.
     * @param integer $AppId User APP ID.
     * @param integer $VpcId Primary AZ VPC ID.
     * @param integer $SubnetId Primary AZ subnet ID.
     * @param integer $Status Status code
     * @param string $AddTime Creation time.
     * @param integer $PayMode Cluster billing type. 0 indicates pay-as-you-go. 1 indicates monthly subscription.
     * @param array $ZoneSettings Multi-AZ information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Instance tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: notify before expiration but do not auto-renew; 1: notify before expiration and auto-renew; and 2: do not notify before expiration and do not auto-renew. If the business does not support renewal, the value is set to 0.
     * @param string $IsolateTime Isolation time. For instances that are not isolated, the API returns 0000-00-00 00:00:00.
     * @param string $ExpireTime Expiration time. For post-paid instances, the API returns 0000-00-00 00:00:00.
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
