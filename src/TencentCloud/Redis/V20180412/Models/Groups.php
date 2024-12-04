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
 * Replication group info
 *
 * @method integer getAppId() Obtain User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method void setAppId(integer $AppId) Set User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
 * @method integer getRegionId() Obtain Region ID.
- 1: Guangzhou.
- 4: Shanghai.
- 5: Hong Kong (China).
- 7: Shanghai Finance.
- 8: Beijing.
- 9: Singapore.
- 11: Shenzhen Finance.
- 15: Western United States (Silicon Valley).
- 16: Chengdu.
- 17: Germany.
- 18: South Korea.
- 19: Chongqing.
- 21: India.
- 22: Eastern United States (Virginia).
- 23: Thailand.
- 25: Japan.
 * @method void setRegionId(integer $RegionId) Set Region ID.
- 1: Guangzhou.
- 4: Shanghai.
- 5: Hong Kong (China).
- 7: Shanghai Finance.
- 8: Beijing.
- 9: Singapore.
- 11: Shenzhen Finance.
- 15: Western United States (Silicon Valley).
- 16: Chengdu.
- 17: Germany.
- 18: South Korea.
- 19: Chongqing.
- 21: India.
- 22: Eastern United States (Virginia).
- 23: Thailand.
- 25: Japan.
 * @method string getGroupId() Obtain Replication group ID in the format of "crs-rpl-deind****"
 * @method void setGroupId(string $GroupId) Set Replication group ID in the format of "crs-rpl-deind****"
 * @method string getGroupName() Obtain Replication group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Replication group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status of replication group
- `37`: Associating replication group
- `38`: Reconnecting to replication group
- `51`: Disassociating replication group
- `52`: Switching with master instance in replication group
- `53`: Modifying the roles
 * @method void setStatus(integer $Status) Set Status of replication group
- `37`: Associating replication group
- `38`: Reconnecting to replication group
- `51`: Disassociating replication group
- `52`: Switching with master instance in replication group
- `53`: Modifying the roles
 * @method integer getInstanceCount() Obtain Number of replication groups
 * @method void setInstanceCount(integer $InstanceCount) Set Number of replication groups
 * @method array getInstances() Obtain Instance information in replication groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstances(array $Instances) Set Instance information in replication groups
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Groups extends AbstractModel
{
    /**
     * @var integer User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
     */
    public $AppId;

    /**
     * @var integer Region ID.
- 1: Guangzhou.
- 4: Shanghai.
- 5: Hong Kong (China).
- 7: Shanghai Finance.
- 8: Beijing.
- 9: Singapore.
- 11: Shenzhen Finance.
- 15: Western United States (Silicon Valley).
- 16: Chengdu.
- 17: Germany.
- 18: South Korea.
- 19: Chongqing.
- 21: India.
- 22: Eastern United States (Virginia).
- 23: Thailand.
- 25: Japan.
     */
    public $RegionId;

    /**
     * @var string Replication group ID in the format of "crs-rpl-deind****"
     */
    public $GroupId;

    /**
     * @var string Replication group name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var integer Status of replication group
- `37`: Associating replication group
- `38`: Reconnecting to replication group
- `51`: Disassociating replication group
- `52`: Switching with master instance in replication group
- `53`: Modifying the roles
     */
    public $Status;

    /**
     * @var integer Number of replication groups
     */
    public $InstanceCount;

    /**
     * @var array Instance information in replication groups
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Instances;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param integer $AppId User APPID, which is the unique application ID that matches an account. Some Tencent Cloud products use this APPID.
     * @param integer $RegionId Region ID.
- 1: Guangzhou.
- 4: Shanghai.
- 5: Hong Kong (China).
- 7: Shanghai Finance.
- 8: Beijing.
- 9: Singapore.
- 11: Shenzhen Finance.
- 15: Western United States (Silicon Valley).
- 16: Chengdu.
- 17: Germany.
- 18: South Korea.
- 19: Chongqing.
- 21: India.
- 22: Eastern United States (Virginia).
- 23: Thailand.
- 25: Japan.
     * @param string $GroupId Replication group ID in the format of "crs-rpl-deind****"
     * @param string $GroupName Replication group name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status of replication group
- `37`: Associating replication group
- `38`: Reconnecting to replication group
- `51`: Disassociating replication group
- `52`: Switching with master instance in replication group
- `53`: Modifying the roles
     * @param integer $InstanceCount Number of replication groups
     * @param array $Instances Instance information in replication groups
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instances();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
