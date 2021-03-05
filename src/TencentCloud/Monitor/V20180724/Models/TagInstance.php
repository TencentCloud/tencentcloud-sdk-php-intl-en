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
 * Instance tag information of the alarm policy
 *
 * @method string getKey() Obtain Tag key
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Tag key
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Tag value
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Tag value
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getInstanceSum() Obtain Number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceSum(integer $InstanceSum) Set Number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getServiceType() Obtain Service type, for example, CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setServiceType(string $ServiceType) Set Service type, for example, CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRegionId() Obtain Region ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegionId(string $RegionId) Set Region ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBindingStatus() Obtain Binding status. 2: bound; 1: binding
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBindingStatus(integer $BindingStatus) Set Binding status. 2: bound; 1: binding
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTagStatus() Obtain Tag status. 2: existent; 1: nonexistent
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagStatus(integer $TagStatus) Set Tag status. 2: existent; 1: nonexistent
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class TagInstance extends AbstractModel
{
    /**
     * @var string Tag key
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string Tag value
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var integer Number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceSum;

    /**
     * @var string Service type, for example, CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServiceType;

    /**
     * @var string Region ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Binding status. 2: bound; 1: binding
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BindingStatus;

    /**
     * @var integer Tag status. 2: existent; 1: nonexistent
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagStatus;

    /**
     * @param string $Key Tag key
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Value Tag value
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $InstanceSum Number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ServiceType Service type, for example, CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RegionId Region ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $BindingStatus Binding status. 2: bound; 1: binding
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TagStatus Tag status. 2: existent; 1: nonexistent
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("BindingStatus",$param) and $param["BindingStatus"] !== null) {
            $this->BindingStatus = $param["BindingStatus"];
        }

        if (array_key_exists("TagStatus",$param) and $param["TagStatus"] !== null) {
            $this->TagStatus = $param["TagStatus"];
        }
    }
}
