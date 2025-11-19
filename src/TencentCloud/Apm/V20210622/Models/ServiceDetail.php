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
 * @method string getServiceID() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceID(string $ServiceID) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceKey() Obtain Business system ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Business system ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppID() Obtain User appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppID(integer $AppID) Set User appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUIN() Obtain Host account UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUIN(string $CreateUIN) Set Host account UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceDescription() Obtain Application description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDescription(string $ServiceDescription) Set Application description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Business system name.
 * @method void setInstanceName(string $InstanceName) Set Business system name.
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceID;

    /**
     * @var string Business system ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceKey;

    /**
     * @var integer User appid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppID;

    /**
     * @var string Host account UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUIN;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string Application description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDescription;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var array Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Business system name.
     */
    public $InstanceName;

    /**
     * @param string $ServiceID Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceKey Business system ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppID User appid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUIN Host account UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceDescription Application description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Business system name.
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
    }
}
