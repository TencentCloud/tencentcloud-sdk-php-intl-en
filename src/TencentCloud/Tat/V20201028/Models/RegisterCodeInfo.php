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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Register code info.
 *
 * @method string getRegisterCodeId() Obtain Registration code ID.
 * @method void setRegisterCodeId(string $RegisterCodeId) Set Registration code ID.
 * @method string getDescription() Obtain Describes the registration code.
 * @method void setDescription(string $Description) Set Describes the registration code.
 * @method string getInstanceNamePrefix() Obtain Prefix of the registered instance name.
 * @method void setInstanceNamePrefix(string $InstanceNamePrefix) Set Prefix of the registered instance name.
 * @method integer getRegisterLimit() Obtain The number of instances the registration code allows.
 * @method void setRegisterLimit(integer $RegisterLimit) Set The number of instances the registration code allows.
 * @method string getExpiredTime() Obtain The expiry date of the registration code is in ISO8601 standard representation and uses UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set The expiry date of the registration code is in ISO8601 standard representation and uses UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIpAddressRange() Obtain The registration code limits tat_agent to register only from the public outbound ip described by IpAddressRange.
 * @method void setIpAddressRange(string $IpAddressRange) Set The registration code limits tat_agent to register only from the public outbound ip described by IpAddressRange.
 * @method boolean getEnabled() Obtain Is the registration code available.
 * @method void setEnabled(boolean $Enabled) Set Is the registration code available.
 * @method integer getRegisteredCount() Obtain The number of registered registration codes.
 * @method void setRegisteredCount(integer $RegisteredCount) Set The number of registered registration codes.
 * @method string getCreatedTime() Obtain Registration code creation time, represented as ISO8601 standard and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Registration code creation time, represented as ISO8601 standard and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedTime() Obtain Last update time of the registration code, as ISO8601 standard representation and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedTime(string $UpdatedTime) Set Last update time of the registration code, as ISO8601 standard representation and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegisterCodeInfo extends AbstractModel
{
    /**
     * @var string Registration code ID.
     */
    public $RegisterCodeId;

    /**
     * @var string Describes the registration code.
     */
    public $Description;

    /**
     * @var string Prefix of the registered instance name.
     */
    public $InstanceNamePrefix;

    /**
     * @var integer The number of instances the registration code allows.
     */
    public $RegisterLimit;

    /**
     * @var string The expiry date of the registration code is in ISO8601 standard representation and uses UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpiredTime;

    /**
     * @var string The registration code limits tat_agent to register only from the public outbound ip described by IpAddressRange.
     */
    public $IpAddressRange;

    /**
     * @var boolean Is the registration code available.
     */
    public $Enabled;

    /**
     * @var integer The number of registered registration codes.
     */
    public $RegisteredCount;

    /**
     * @var string Registration code creation time, represented as ISO8601 standard and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Last update time of the registration code, as ISO8601 standard representation and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedTime;

    /**
     * @param string $RegisterCodeId Registration code ID.
     * @param string $Description Describes the registration code.
     * @param string $InstanceNamePrefix Prefix of the registered instance name.
     * @param integer $RegisterLimit The number of instances the registration code allows.
     * @param string $ExpiredTime The expiry date of the registration code is in ISO8601 standard representation and uses UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IpAddressRange The registration code limits tat_agent to register only from the public outbound ip described by IpAddressRange.
     * @param boolean $Enabled Is the registration code available.
     * @param integer $RegisteredCount The number of registered registration codes.
     * @param string $CreatedTime Registration code creation time, represented as ISO8601 standard and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedTime Last update time of the registration code, as ISO8601 standard representation and using UTC time. 
The format is YYYY-MM-DDThh:MM:ssZ.
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
        if (array_key_exists("RegisterCodeId",$param) and $param["RegisterCodeId"] !== null) {
            $this->RegisterCodeId = $param["RegisterCodeId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceNamePrefix",$param) and $param["InstanceNamePrefix"] !== null) {
            $this->InstanceNamePrefix = $param["InstanceNamePrefix"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IpAddressRange",$param) and $param["IpAddressRange"] !== null) {
            $this->IpAddressRange = $param["IpAddressRange"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RegisteredCount",$param) and $param["RegisteredCount"] !== null) {
            $this->RegisteredCount = $param["RegisteredCount"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
