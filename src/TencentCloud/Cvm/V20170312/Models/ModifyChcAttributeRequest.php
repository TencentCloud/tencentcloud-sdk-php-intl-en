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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyChcAttribute request structure.
 *
 * @method array getChcIds() Obtain CHC host IDs
 * @method void setChcIds(array $ChcIds) Set CHC host IDs
 * @method string getInstanceName() Obtain CHC host name
 * @method void setInstanceName(string $InstanceName) Set CHC host name
 * @method string getDeviceType() Obtain Server type
 * @method void setDeviceType(string $DeviceType) Set Server type
 * @method string getBmcUser() Obtain Valid characters: Letters, numbers, hyphens and underscores
 * @method void setBmcUser(string $BmcUser) Set Valid characters: Letters, numbers, hyphens and underscores
 * @method string getPassword() Obtain The password can contain 8 to 16 characters, including letters, numbers and special symbols (()`~!@#$%^&*-+=_|{}).
 * @method void setPassword(string $Password) Set The password can contain 8 to 16 characters, including letters, numbers and special symbols (()`~!@#$%^&*-+=_|{}).
 * @method array getBmcSecurityGroupIds() Obtain BMC network security group list
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) Set BMC network security group list
 */
class ModifyChcAttributeRequest extends AbstractModel
{
    /**
     * @var array CHC host IDs
     */
    public $ChcIds;

    /**
     * @var string CHC host name
     */
    public $InstanceName;

    /**
     * @var string Server type
     */
    public $DeviceType;

    /**
     * @var string Valid characters: Letters, numbers, hyphens and underscores
     */
    public $BmcUser;

    /**
     * @var string The password can contain 8 to 16 characters, including letters, numbers and special symbols (()`~!@#$%^&*-+=_|{}).
     */
    public $Password;

    /**
     * @var array BMC network security group list
     */
    public $BmcSecurityGroupIds;

    /**
     * @param array $ChcIds CHC host IDs
     * @param string $InstanceName CHC host name
     * @param string $DeviceType Server type
     * @param string $BmcUser Valid characters: Letters, numbers, hyphens and underscores
     * @param string $Password The password can contain 8 to 16 characters, including letters, numbers and special symbols (()`~!@#$%^&*-+=_|{}).
     * @param array $BmcSecurityGroupIds BMC network security group list
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("BmcUser",$param) and $param["BmcUser"] !== null) {
            $this->BmcUser = $param["BmcUser"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("BmcSecurityGroupIds",$param) and $param["BmcSecurityGroupIds"] !== null) {
            $this->BmcSecurityGroupIds = $param["BmcSecurityGroupIds"];
        }
    }
}
