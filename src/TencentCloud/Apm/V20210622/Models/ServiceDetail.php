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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed information about applications.
 *
 * @method string getServiceID() Obtain <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceID(string $ServiceID) Set <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceKey() Obtain <p>Business system ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set <p>Business system ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppID() Obtain <p>User appid</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppID(integer $AppID) Set <p>User appid</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUIN() Obtain <p>main account uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUIN(string $CreateUIN) Set <p>main account uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain <p>Application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set <p>Application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceDescription() Obtain <p>Application description</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDescription(string $ServiceDescription) Set <p>Application description</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain <p>Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set <p>Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain <p>Business system name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Business system name</p>
 * @method boolean getEnableThresholdConfig() Obtain <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) Set <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getErrRateThreshold() Obtain <p>Error rate threshold (%) used to judge the application health status as "red".</p><p>Unit: %</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set <p>Error rate threshold (%) used to judge the application health status as "red".</p><p>Unit: %</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResponseDurationWarningThreshold() Obtain <p>Alert threshold for response time (ms), used to judge application health status as "yellow".</p><p>Unit: ms</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set <p>Alert threshold for response time (ms), used to judge application health status as "yellow".</p><p>Unit: ms</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceID;

    /**
     * @var string <p>Business system ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceKey;

    /**
     * @var integer <p>User appid</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppID;

    /**
     * @var string <p>main account uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUIN;

    /**
     * @var string <p>Application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string <p>Application description</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDescription;

    /**
     * @var string <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var array <p>Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string <p>Business system name</p>
     */
    public $InstanceName;

    /**
     * @var boolean <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>Error rate threshold (%) used to judge the application health status as "red".</p><p>Unit: %</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>Alert threshold for response time (ms), used to judge application health status as "yellow".</p><p>Unit: ms</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @param string $ServiceID <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceKey <p>Business system ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppID <p>User appid</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUIN <p>main account uin</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName <p>Application name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceDescription <p>Application description</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region <p>Region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags <p>Tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName <p>Business system name</p>
     * @param boolean $EnableThresholdConfig <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrRateThreshold <p>Error rate threshold (%) used to judge the application health status as "red".</p><p>Unit: %</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ResponseDurationWarningThreshold <p>Alert threshold for response time (ms), used to judge application health status as "yellow".</p><p>Unit: ms</p>
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CreateUIN",$param) and $param["CreateUIN"] !== null) {
            $this->CreateUIN = $param["CreateUIN"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("EnableThresholdConfig",$param) and $param["EnableThresholdConfig"] !== null) {
            $this->EnableThresholdConfig = $param["EnableThresholdConfig"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }
    }
}
