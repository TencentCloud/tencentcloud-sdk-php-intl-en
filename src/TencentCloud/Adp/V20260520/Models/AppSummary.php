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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application abstract - Application information returned by the list query
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method integer getAppMode() Obtain <p>Application mode. Enumeration values: 1: standard mode, 2: Agent mode, 3: single workflow mode, 4: ClawAgent mode</p>
 * @method void setAppMode(integer $AppMode) Set <p>Application mode. Enumeration values: 1: standard mode, 2: Agent mode, 3: single workflow mode, 4: ClawAgent mode</p>
 * @method string getAvatar() Obtain <p>Application avatar</p>
 * @method void setAvatar(string $Avatar) Set <p>Application avatar</p>
 * @method string getName() Obtain <p>Application name.</p>
 * @method void setName(string $Name) Set <p>Application name.</p>
 * @method AppOperation getOperationInfo() Obtain <p>Operation information</p>
 * @method void setOperationInfo(AppOperation $OperationInfo) Set <p>Operation information</p>
 * @method AppStatusInfo getStatus() Obtain <p>Status information</p>
 * @method void setStatus(AppStatusInfo $Status) Set <p>Status information</p>
 * @method AppSubStatusInfo getSubStatus() Obtain <p>Sub-status information</p>
 * @method void setSubStatus(AppSubStatusInfo $SubStatus) Set <p>Sub-status information</p>
 * @method array getPermissionIdList() Obtain <p>Resource operation permissions</p>
 * @method void setPermissionIdList(array $PermissionIdList) Set <p>Resource operation permissions</p>
 * @method string getDescription() Obtain <p>Application description information</p>
 * @method void setDescription(string $Description) Set <p>Application description information</p>
 */
class AppSummary extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var integer <p>Application mode. Enumeration values: 1: standard mode, 2: Agent mode, 3: single workflow mode, 4: ClawAgent mode</p>
     */
    public $AppMode;

    /**
     * @var string <p>Application avatar</p>
     */
    public $Avatar;

    /**
     * @var string <p>Application name.</p>
     */
    public $Name;

    /**
     * @var AppOperation <p>Operation information</p>
     */
    public $OperationInfo;

    /**
     * @var AppStatusInfo <p>Status information</p>
     */
    public $Status;

    /**
     * @var AppSubStatusInfo <p>Sub-status information</p>
     */
    public $SubStatus;

    /**
     * @var array <p>Resource operation permissions</p>
     */
    public $PermissionIdList;

    /**
     * @var string <p>Application description information</p>
     */
    public $Description;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param integer $AppMode <p>Application mode. Enumeration values: 1: standard mode, 2: Agent mode, 3: single workflow mode, 4: ClawAgent mode</p>
     * @param string $Avatar <p>Application avatar</p>
     * @param string $Name <p>Application name.</p>
     * @param AppOperation $OperationInfo <p>Operation information</p>
     * @param AppStatusInfo $Status <p>Status information</p>
     * @param AppSubStatusInfo $SubStatus <p>Sub-status information</p>
     * @param array $PermissionIdList <p>Resource operation permissions</p>
     * @param string $Description <p>Application description information</p>
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

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OperationInfo",$param) and $param["OperationInfo"] !== null) {
            $this->OperationInfo = new AppOperation();
            $this->OperationInfo->deserialize($param["OperationInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AppStatusInfo();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new AppSubStatusInfo();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }

        if (array_key_exists("PermissionIdList",$param) and $param["PermissionIdList"] !== null) {
            $this->PermissionIdList = $param["PermissionIdList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
