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
 * Application metadata - basic identification and description information
 *
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method integer getAppMode() Obtain Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode
 * @method void setAppMode(integer $AppMode) Set Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode
 * @method string getAvatar() Obtain App avatar
 * @method void setAvatar(string $Avatar) Set App avatar
 * @method string getCreateTime() Obtain Creation time (Unix timestamp in seconds).
 * @method void setCreateTime(string $CreateTime) Set Creation time (Unix timestamp in seconds).
 * @method string getDescription() Obtain Application description
 * @method void setDescription(string $Description) Set Application description
 * @method string getName() Obtain Superapp name
 * @method void setName(string $Name) Set Superapp name
 * @method string getSpaceId() Obtain Space ID.
 * @method void setSpaceId(string $SpaceId) Set Space ID.
 * @method string getUpdateTime() Obtain Update time (Unix timestamp in seconds).
 * @method void setUpdateTime(string $UpdateTime) Set Update time (Unix timestamp in seconds).
 */
class AppMetadata extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var integer Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode
     */
    public $AppMode;

    /**
     * @var string App avatar
     */
    public $Avatar;

    /**
     * @var string Creation time (Unix timestamp in seconds).
     */
    public $CreateTime;

    /**
     * @var string Application description
     */
    public $Description;

    /**
     * @var string Superapp name
     */
    public $Name;

    /**
     * @var string Space ID.
     */
    public $SpaceId;

    /**
     * @var string Update time (Unix timestamp in seconds).
     */
    public $UpdateTime;

    /**
     * @param string $AppId Application ID
     * @param integer $AppMode Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode
     * @param string $Avatar App avatar
     * @param string $CreateTime Creation time (Unix timestamp in seconds).
     * @param string $Description Application description
     * @param string $Name Superapp name
     * @param string $SpaceId Space ID.
     * @param string $UpdateTime Update time (Unix timestamp in seconds).
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
