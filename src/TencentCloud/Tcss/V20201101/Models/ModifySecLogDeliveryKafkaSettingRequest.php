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
 * ModifySecLogDeliveryKafkaSetting request structure.
 *
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getUser() Obtain Username
 * @method void setUser(string $User) Set Username
 * @method string getPassword() Obtain Password
 * @method void setPassword(string $Password) Set Password
 * @method array getLogTypeList() Obtain List of log types
 * @method void setLogTypeList(array $LogTypeList) Set List of log types
 * @method integer getAccessType() Obtain Access type
 * @method void setAccessType(integer $AccessType) Set Access type
 * @method string getKafkaVersion() Obtain Kafka version number
 * @method void setKafkaVersion(string $KafkaVersion) Set Kafka version number
 * @method string getRegionID() Obtain Region ID
 * @method void setRegionID(string $RegionID) Set Region ID
 */
class ModifySecLogDeliveryKafkaSettingRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Username
     */
    public $User;

    /**
     * @var string Password
     */
    public $Password;

    /**
     * @var array List of log types
     */
    public $LogTypeList;

    /**
     * @var integer Access type
     */
    public $AccessType;

    /**
     * @var string Kafka version number
     */
    public $KafkaVersion;

    /**
     * @var string Region ID
     */
    public $RegionID;

    /**
     * @param string $InstanceID Instance ID
     * @param string $InstanceName Instance name
     * @param string $Domain Domain
     * @param string $User Username
     * @param string $Password Password
     * @param array $LogTypeList List of log types
     * @param integer $AccessType Access type
     * @param string $KafkaVersion Kafka version number
     * @param string $RegionID Region ID
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("LogTypeList",$param) and $param["LogTypeList"] !== null) {
            $this->LogTypeList = [];
            foreach ($param["LogTypeList"] as $key => $value){
                $obj = new SecLogDeliveryKafkaSettingInfo();
                $obj->deserialize($value);
                array_push($this->LogTypeList, $obj);
            }
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }
    }
}
