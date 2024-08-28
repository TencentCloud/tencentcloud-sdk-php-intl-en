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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Fix vulnerability second popup in batch
 *
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportAutoFix() Obtain 0 - the vulnerability cannot be fixed automatically; 1 - the vulnerability can be fixed automatically; 2 - the client has been offline; 3 - the host is not the ultimate edition and can only be fixed manually; 4 - the model does not allow automatic fix; 5 - fixing; 6 - fixed; 7 - under detection; 9 - fix failed; 10 - ignored; 11 - the vulnerability is supported only on Linux, not on Windows; 12 - the vulnerability is supported only on Windows, not on Linux.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) Set 0 - the vulnerability cannot be fixed automatically; 1 - the vulnerability can be fixed automatically; 2 - the client has been offline; 3 - the host is not the ultimate edition and can only be fixed manually; 4 - the model does not allow automatic fix; 5 - fixing; 6 - fixed; 7 - under detection; 9 - fix failed; 10 - ignored; 11 - the vulnerability is supported only on Linux, not on Windows; 12 - the vulnerability is supported only on Windows, not on Linux.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Host InstanceId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Host InstanceId
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulInfoHostInfo extends AbstractModel
{
    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Host IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var array Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var integer 0 - the vulnerability cannot be fixed automatically; 1 - the vulnerability can be fixed automatically; 2 - the client has been offline; 3 - the host is not the ultimate edition and can only be fixed manually; 4 - the model does not allow automatic fix; 5 - fixing; 6 - fixed; 7 - under detection; 9 - fix failed; 10 - ignored; 11 - the vulnerability is supported only on Linux, not on Windows; 12 - the vulnerability is supported only on Windows, not on Linux.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportAutoFix;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var string Host InstanceId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportAutoFix 0 - the vulnerability cannot be fixed automatically; 1 - the vulnerability can be fixed automatically; 2 - the client has been offline; 3 - the host is not the ultimate edition and can only be fixed manually; 4 - the model does not allow automatic fix; 5 - fixing; 6 - fixed; 7 - under detection; 9 - fix failed; 10 - ignored; 11 - the vulnerability is supported only on Linux, not on Windows; 12 - the vulnerability is supported only on Windows, not on Linux.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Host InstanceId
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsSupportAutoFix",$param) and $param["IsSupportAutoFix"] !== null) {
            $this->IsSupportAutoFix = $param["IsSupportAutoFix"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
