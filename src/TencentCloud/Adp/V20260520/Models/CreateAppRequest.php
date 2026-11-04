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
 * CreateApp request structure.
 *
 * @method string getSpaceId() Obtain <p>Space ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p>
 * @method integer getAppMode() Obtain <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
 * @method void setAppMode(integer $AppMode) Set <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
 * @method string getAvatar() Obtain <p>App avatar</p>
 * @method void setAvatar(string $Avatar) Set <p>App avatar</p>
 * @method string getDescription() Obtain <p>Application description.</p>
 * @method void setDescription(string $Description) Set <p>Application description.</p>
 * @method string getName() Obtain <p>Application name.</p>
 * @method void setName(string $Name) Set <p>Application name.</p>
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string <p>Space ID</p>
     */
    public $SpaceId;

    /**
     * @var integer <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
     */
    public $AppMode;

    /**
     * @var string <p>App avatar</p>
     */
    public $Avatar;

    /**
     * @var string <p>Application description.</p>
     */
    public $Description;

    /**
     * @var string <p>Application name.</p>
     */
    public $Name;

    /**
     * @param string $SpaceId <p>Space ID</p>
     * @param integer $AppMode <p>Application mode. Enumeration values: 1: Standard mode, 2: Agent mode, 3: Single workflow mode, 4: ClawAgent mode</p>
     * @param string $Avatar <p>App avatar</p>
     * @param string $Description <p>Application description.</p>
     * @param string $Name <p>Application name.</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
