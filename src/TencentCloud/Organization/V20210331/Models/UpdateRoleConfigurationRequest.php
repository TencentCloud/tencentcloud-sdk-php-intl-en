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
 * UpdateRoleConfiguration request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getNewDescription() Obtain Description of new access configuration, which contains up to 1024 characters.
 * @method void setNewDescription(string $NewDescription) Set Description of new access configuration, which contains up to 1024 characters.
 * @method integer getNewSessionDuration() Obtain New session duration. It indicates the maximum session duration when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. Unit: seconds. Value range: 900-43,200 (15 minutes to 12 hours).
 * @method void setNewSessionDuration(integer $NewSessionDuration) Set New session duration. It indicates the maximum session duration when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. Unit: seconds. Value range: 900-43,200 (15 minutes to 12 hours).
 * @method string getNewRelayState() Obtain New initial access page. It indicates the initial access page URL when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. This page must be the Tencent Cloud console page.
 * @method void setNewRelayState(string $NewRelayState) Set New initial access page. It indicates the initial access page URL when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. This page must be the Tencent Cloud console page.
 */
class UpdateRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Description of new access configuration, which contains up to 1024 characters.
     */
    public $NewDescription;

    /**
     * @var integer New session duration. It indicates the maximum session duration when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. Unit: seconds. Value range: 900-43,200 (15 minutes to 12 hours).
     */
    public $NewSessionDuration;

    /**
     * @var string New initial access page. It indicates the initial access page URL when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. This page must be the Tencent Cloud console page.
     */
    public $NewRelayState;

    /**
     * @param string $ZoneId Space ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $NewDescription Description of new access configuration, which contains up to 1024 characters.
     * @param integer $NewSessionDuration New session duration. It indicates the maximum session duration when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. Unit: seconds. Value range: 900-43,200 (15 minutes to 12 hours).
     * @param string $NewRelayState New initial access page. It indicates the initial access page URL when CIC users use the access configuration to access the target account of the Tencent Cloud Organization. This page must be the Tencent Cloud console page.
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

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }

        if (array_key_exists("NewSessionDuration",$param) and $param["NewSessionDuration"] !== null) {
            $this->NewSessionDuration = $param["NewSessionDuration"];
        }

        if (array_key_exists("NewRelayState",$param) and $param["NewRelayState"] !== null) {
            $this->NewRelayState = $param["NewRelayState"];
        }
    }
}