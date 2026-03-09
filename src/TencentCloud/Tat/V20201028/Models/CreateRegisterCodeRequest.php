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
 * CreateRegisterCode request structure.
 *
 * @method string getDescription() Obtain Describes the registration code. maximum length is 128 characters.
 * @method void setDescription(string $Description) Set Describes the registration code. maximum length is 128 characters.
 * @method string getInstanceNamePrefix() Obtain Prefix of the registered instance name. maximum length is 32 characters.
 * @method void setInstanceNamePrefix(string $InstanceNamePrefix) Set Prefix of the registered instance name. maximum length is 32 characters.
 * @method integer getRegisterLimit() Obtain Number of instances allowed by the registration code. default value is 10, minimum value is 1, maximum value is 10000.
 * @method void setRegisterLimit(integer $RegisterLimit) Set Number of instances allowed by the registration code. default value is 10, minimum value is 1, maximum value is 10000.
 * @method integer getEffectiveTime() Obtain The validity time of the registration code is measured in hours. default value is 4.

-If the input value is less than or equal to 99999, the time is deemed valid in hours.
-If the input value is more than 99999, it is set to permanently valid.
 * @method void setEffectiveTime(integer $EffectiveTime) Set The validity time of the registration code is measured in hours. default value is 4.

-If the input value is less than or equal to 99999, the time is deemed valid in hours.
-If the input value is more than 99999, it is set to permanently valid.
 * @method string getIpAddressRange() Obtain Restrict the registration code to register only from the public outbound ip described by IpAddressRange.

Empty by default, meaning no restrictions.

The value should be in standard IPv4 or CIDRv4 format, such as 192.168.1.1 or 192.168.0.0/16.
 * @method void setIpAddressRange(string $IpAddressRange) Set Restrict the registration code to register only from the public outbound ip described by IpAddressRange.

Empty by default, meaning no restrictions.

The value should be in standard IPv4 or CIDRv4 format, such as 192.168.1.1 or 192.168.0.0/16.
 */
class CreateRegisterCodeRequest extends AbstractModel
{
    /**
     * @var string Describes the registration code. maximum length is 128 characters.
     */
    public $Description;

    /**
     * @var string Prefix of the registered instance name. maximum length is 32 characters.
     */
    public $InstanceNamePrefix;

    /**
     * @var integer Number of instances allowed by the registration code. default value is 10, minimum value is 1, maximum value is 10000.
     */
    public $RegisterLimit;

    /**
     * @var integer The validity time of the registration code is measured in hours. default value is 4.

-If the input value is less than or equal to 99999, the time is deemed valid in hours.
-If the input value is more than 99999, it is set to permanently valid.
     */
    public $EffectiveTime;

    /**
     * @var string Restrict the registration code to register only from the public outbound ip described by IpAddressRange.

Empty by default, meaning no restrictions.

The value should be in standard IPv4 or CIDRv4 format, such as 192.168.1.1 or 192.168.0.0/16.
     */
    public $IpAddressRange;

    /**
     * @param string $Description Describes the registration code. maximum length is 128 characters.
     * @param string $InstanceNamePrefix Prefix of the registered instance name. maximum length is 32 characters.
     * @param integer $RegisterLimit Number of instances allowed by the registration code. default value is 10, minimum value is 1, maximum value is 10000.
     * @param integer $EffectiveTime The validity time of the registration code is measured in hours. default value is 4.

-If the input value is less than or equal to 99999, the time is deemed valid in hours.
-If the input value is more than 99999, it is set to permanently valid.
     * @param string $IpAddressRange Restrict the registration code to register only from the public outbound ip described by IpAddressRange.

Empty by default, meaning no restrictions.

The value should be in standard IPv4 or CIDRv4 format, such as 192.168.1.1 or 192.168.0.0/16.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceNamePrefix",$param) and $param["InstanceNamePrefix"] !== null) {
            $this->InstanceNamePrefix = $param["InstanceNamePrefix"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("IpAddressRange",$param) and $param["IpAddressRange"] !== null) {
            $this->IpAddressRange = $param["IpAddressRange"];
        }
    }
}
