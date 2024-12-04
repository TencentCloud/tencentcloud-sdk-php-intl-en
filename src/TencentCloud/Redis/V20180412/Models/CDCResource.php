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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the dedicated Redis cluster.
 *
 * @method integer getAppId() Obtain App ID of a user.
 * @method void setAppId(integer $AppId) Set App ID of a user.
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method integer getZoneId() Obtain AZ ID.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
 * @method string getRedisClusterId() Obtain ID of the dedicated Redis cluster.
 * @method void setRedisClusterId(string $RedisClusterId) Set ID of the dedicated Redis cluster.
 * @method integer getPayMode() Obtain Billing mode. 1: monthly subscription; 0: pay-as-you-go.
 * @method void setPayMode(integer $PayMode) Set Billing mode. 1: monthly subscription; 0: pay-as-you-go.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getAutoRenewFlag() Obtain Automatic renewal flag. 0: default status (manual renewal); 1: automatic renewal; 2: no automatic renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Automatic renewal flag. 0: default status (manual renewal); 1: automatic renewal; 2: no automatic renewal.
 * @method string getClusterName() Obtain Dedicated cluster name.
 * @method void setClusterName(string $ClusterName) Set Dedicated cluster name.
 * @method string getStartTime() Obtain Instance creation time
 * @method void setStartTime(string $StartTime) Set Instance creation time
 * @method string getEndTime() Obtain Instance expiration time.
 * @method void setEndTime(string $EndTime) Set Instance expiration time.
 * @method integer getStatus() Obtain Cluster status. 1: in process; 2: running; 3: isolated.
 * @method void setStatus(integer $Status) Set Cluster status. 1: in process; 2: running; 3: isolated.
 * @method array getBaseBundles() Obtain Basic control resource package.
 * @method void setBaseBundles(array $BaseBundles) Set Basic control resource package.
 * @method array getResourceBundles() Obtain Resource package list.
 * @method void setResourceBundles(array $ResourceBundles) Set Resource package list.
 * @method string getDedicatedClusterId() Obtain Local dedicated cluster ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Local dedicated cluster ID.
 */
class CDCResource extends AbstractModel
{
    /**
     * @var integer App ID of a user.
     */
    public $AppId;

    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var integer AZ ID.
     */
    public $ZoneId;

    /**
     * @var string ID of the dedicated Redis cluster.
     */
    public $RedisClusterId;

    /**
     * @var integer Billing mode. 1: monthly subscription; 0: pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Automatic renewal flag. 0: default status (manual renewal); 1: automatic renewal; 2: no automatic renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var string Dedicated cluster name.
     */
    public $ClusterName;

    /**
     * @var string Instance creation time
     */
    public $StartTime;

    /**
     * @var string Instance expiration time.
     */
    public $EndTime;

    /**
     * @var integer Cluster status. 1: in process; 2: running; 3: isolated.
     */
    public $Status;

    /**
     * @var array Basic control resource package.
     */
    public $BaseBundles;

    /**
     * @var array Resource package list.
     */
    public $ResourceBundles;

    /**
     * @var string Local dedicated cluster ID.
     */
    public $DedicatedClusterId;

    /**
     * @param integer $AppId App ID of a user.
     * @param integer $RegionId Region ID.
     * @param integer $ZoneId AZ ID.
     * @param string $RedisClusterId ID of the dedicated Redis cluster.
     * @param integer $PayMode Billing mode. 1: monthly subscription; 0: pay-as-you-go.
     * @param integer $ProjectId Project ID.
     * @param integer $AutoRenewFlag Automatic renewal flag. 0: default status (manual renewal); 1: automatic renewal; 2: no automatic renewal.
     * @param string $ClusterName Dedicated cluster name.
     * @param string $StartTime Instance creation time
     * @param string $EndTime Instance expiration time.
     * @param integer $Status Cluster status. 1: in process; 2: running; 3: isolated.
     * @param array $BaseBundles Basic control resource package.
     * @param array $ResourceBundles Resource package list.
     * @param string $DedicatedClusterId Local dedicated cluster ID.
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

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BaseBundles",$param) and $param["BaseBundles"] !== null) {
            $this->BaseBundles = [];
            foreach ($param["BaseBundles"] as $key => $value){
                $obj = new ResourceBundle();
                $obj->deserialize($value);
                array_push($this->BaseBundles, $obj);
            }
        }

        if (array_key_exists("ResourceBundles",$param) and $param["ResourceBundles"] !== null) {
            $this->ResourceBundles = [];
            foreach ($param["ResourceBundles"] as $key => $value){
                $obj = new ResourceBundle();
                $obj->deserialize($value);
                array_push($this->ResourceBundles, $obj);
            }
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
