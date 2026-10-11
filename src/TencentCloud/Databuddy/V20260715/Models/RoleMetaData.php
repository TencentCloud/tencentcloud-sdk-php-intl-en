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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role metadata
 *
 * @method string getCreator() Obtain Creator.
 * @method void setCreator(string $Creator) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdater() Obtain Updater
 * @method void setUpdater(string $Updater) Set Updater
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class RoleMetaData extends AbstractModel
{
    /**
     * @var string Creator.
     */
    public $Creator;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Updater
     */
    public $Updater;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param string $Creator Creator.
     * @param string $CreateTime Creation time.
     * @param string $Updater Updater
     * @param string $UpdateTime Update time.
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
