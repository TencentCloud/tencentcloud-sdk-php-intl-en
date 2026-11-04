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
 * Spatial information
 *
 * @method string getSpaceId() Obtain <p>Space id</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space id</p>
 * @method string getName() Obtain <p>Space name</p>
 * @method void setName(string $Name) Set <p>Space name</p>
 * @method string getDescription() Obtain <p>Space description.</p>
 * @method void setDescription(string $Description) Set <p>Space description.</p>
 * @method array getPermissionIdList() Obtain <p>Space permissions</p>
 * @method void setPermissionIdList(array $PermissionIdList) Set <p>Space permissions</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p><p>Parameter format: timestamp in seconds</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p><p>Parameter format: timestamp in seconds</p>
 * @method string getUpdateTime() Obtain <p>Update time</p><p>Parameter format: timestamp</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time</p><p>Parameter format: timestamp</p>
 */
class Space extends AbstractModel
{
    /**
     * @var string <p>Space id</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Space name</p>
     */
    public $Name;

    /**
     * @var string <p>Space description.</p>
     */
    public $Description;

    /**
     * @var array <p>Space permissions</p>
     */
    public $PermissionIdList;

    /**
     * @var string <p>Creation time.</p><p>Parameter format: timestamp in seconds</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time</p><p>Parameter format: timestamp</p>
     */
    public $UpdateTime;

    /**
     * @param string $SpaceId <p>Space id</p>
     * @param string $Name <p>Space name</p>
     * @param string $Description <p>Space description.</p>
     * @param array $PermissionIdList <p>Space permissions</p>
     * @param string $CreateTime <p>Creation time.</p><p>Parameter format: timestamp in seconds</p>
     * @param string $UpdateTime <p>Update time</p><p>Parameter format: timestamp</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PermissionIdList",$param) and $param["PermissionIdList"] !== null) {
            $this->PermissionIdList = $param["PermissionIdList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
