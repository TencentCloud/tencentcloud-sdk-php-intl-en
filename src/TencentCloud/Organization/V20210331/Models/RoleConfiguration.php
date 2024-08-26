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
 * CIC permission configuration.
 *
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name.
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name.
 * @method string getDescription() Obtain Permission configuration description.
 * @method void setDescription(string $Description) Set Permission configuration description.
 * @method integer getSessionDuration() Obtain Session duration. It indicates the maximum session duration when CIC users use the access configuration to access member accounts.
Unit: seconds.
 * @method void setSessionDuration(integer $SessionDuration) Set Session duration. It indicates the maximum session duration when CIC users use the access configuration to access member accounts.
Unit: seconds.
 * @method string getRelayState() Obtain Initial access page. It indicates the initial access page URL when CIC users use the access configuration to access member accounts.
 * @method void setRelayState(string $RelayState) Set Initial access page. It indicates the initial access page URL when CIC users use the access configuration to access member accounts.
 * @method string getCreateTime() Obtain Creation time of the permission configuration.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the permission configuration.
 * @method string getUpdateTime() Obtain Update time of the permission configuration.
 * @method void setUpdateTime(string $UpdateTime) Set Update time of the permission configuration.
 * @method boolean getIsSelected() Obtain If the input parameter FilterTargets is provided, check whether the member account has been configured with permissions. If configured, return true; otherwise, return false.
 * @method void setIsSelected(boolean $IsSelected) Set If the input parameter FilterTargets is provided, check whether the member account has been configured with permissions. If configured, return true; otherwise, return false.
 */
class RoleConfiguration extends AbstractModel
{
    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Permission configuration name.
     */
    public $RoleConfigurationName;

    /**
     * @var string Permission configuration description.
     */
    public $Description;

    /**
     * @var integer Session duration. It indicates the maximum session duration when CIC users use the access configuration to access member accounts.
Unit: seconds.
     */
    public $SessionDuration;

    /**
     * @var string Initial access page. It indicates the initial access page URL when CIC users use the access configuration to access member accounts.
     */
    public $RelayState;

    /**
     * @var string Creation time of the permission configuration.
     */
    public $CreateTime;

    /**
     * @var string Update time of the permission configuration.
     */
    public $UpdateTime;

    /**
     * @var boolean If the input parameter FilterTargets is provided, check whether the member account has been configured with permissions. If configured, return true; otherwise, return false.
     */
    public $IsSelected;

    /**
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RoleConfigurationName Permission configuration name.
     * @param string $Description Permission configuration description.
     * @param integer $SessionDuration Session duration. It indicates the maximum session duration when CIC users use the access configuration to access member accounts.
Unit: seconds.
     * @param string $RelayState Initial access page. It indicates the initial access page URL when CIC users use the access configuration to access member accounts.
     * @param string $CreateTime Creation time of the permission configuration.
     * @param string $UpdateTime Update time of the permission configuration.
     * @param boolean $IsSelected If the input parameter FilterTargets is provided, check whether the member account has been configured with permissions. If configured, return true; otherwise, return false.
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
        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }
    }
}
