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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogDeliveryKafkaSetting response structure.
 *
 * @method string getInstanceID() Obtain Message queue instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Message queue instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Message queue instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Message queue instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLogTypeList() Obtain List of log types
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogTypeList(array $LogTypeList) Set List of log types
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionID() Obtain Region ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRegionID(string $RegionID) Set Region ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecLogDeliveryKafkaSettingResponse extends AbstractModel
{
    /**
     * @var string Message queue instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var string Message queue instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Domain
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var array List of log types
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogTypeList;

    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Region ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RegionID;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceID Message queue instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Message queue instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LogTypeList List of log types
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionID Region ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LogTypeList",$param) and $param["LogTypeList"] !== null) {
            $this->LogTypeList = [];
            foreach ($param["LogTypeList"] as $key => $value){
                $obj = new SecLogDeliveryKafkaSettingInfo();
                $obj->deserialize($value);
                array_push($this->LogTypeList, $obj);
            }
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
