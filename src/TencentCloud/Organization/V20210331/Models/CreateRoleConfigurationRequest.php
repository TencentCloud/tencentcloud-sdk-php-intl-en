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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoleConfiguration request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name, which contains up to 128 characters, including English letters, digits, and hyphens (-).
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name, which contains up to 128 characters, including English letters, digits, and hyphens (-).
 * @method string getDescription() Obtain Permission configuration description, which contains up to 1,024 characters.
 * @method void setDescription(string $Description) Set Permission configuration description, which contains up to 1,024 characters.
 * @method integer getSessionDuration() Obtain Session duration, in seconds. It is the maximum time a CIC user can maintain a session while using permission configurations to access a target account in TCO. Value range: 900 to 43200 (15 minutes to 12 hours). Default: 3600 (1 hour).
 * @method void setSessionDuration(integer $SessionDuration) Set Session duration, in seconds. It is the maximum time a CIC user can maintain a session while using permission configurations to access a target account in TCO. Value range: 900 to 43200 (15 minutes to 12 hours). Default: 3600 (1 hour).
 * @method string getRelayState() Obtain Initial access page. It is the initial page address when a CIC user uses permission configurations to access a target account in TCO. This page must be a Tencent Cloud console page. The default value is empty, representing a redirection to the home page of the Tencent Cloud console.
 * @method void setRelayState(string $RelayState) Set Initial access page. It is the initial page address when a CIC user uses permission configurations to access a target account in TCO. This page must be a Tencent Cloud console page. The default value is empty, representing a redirection to the home page of the Tencent Cloud console.
 */
class CreateRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string Permission configuration name, which contains up to 128 characters, including English letters, digits, and hyphens (-).
     */
    public $RoleConfigurationName;

    /**
     * @var string Permission configuration description, which contains up to 1,024 characters.
     */
    public $Description;

    /**
     * @var integer Session duration, in seconds. It is the maximum time a CIC user can maintain a session while using permission configurations to access a target account in TCO. Value range: 900 to 43200 (15 minutes to 12 hours). Default: 3600 (1 hour).
     */
    public $SessionDuration;

    /**
     * @var string Initial access page. It is the initial page address when a CIC user uses permission configurations to access a target account in TCO. This page must be a Tencent Cloud console page. The default value is empty, representing a redirection to the home page of the Tencent Cloud console.
     */
    public $RelayState;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationName Permission configuration name, which contains up to 128 characters, including English letters, digits, and hyphens (-).
     * @param string $Description Permission configuration description, which contains up to 1,024 characters.
     * @param integer $SessionDuration Session duration, in seconds. It is the maximum time a CIC user can maintain a session while using permission configurations to access a target account in TCO. Value range: 900 to 43200 (15 minutes to 12 hours). Default: 3600 (1 hour).
     * @param string $RelayState Initial access page. It is the initial page address when a CIC user uses permission configurations to access a target account in TCO. This page must be a Tencent Cloud console page. The default value is empty, representing a redirection to the home page of the Tencent Cloud console.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("RelayState",$param) and $param["RelayState"] !== null) {
            $this->RelayState = $param["RelayState"];
        }
    }
}
