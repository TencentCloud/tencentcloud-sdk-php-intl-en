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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scene information
 *
 * @method string getSceneId() Obtain Scene ID
 * @method void setSceneId(string $SceneId) Set Scene ID
 * @method string getDisplayName() Obtain Display name of the scene
 * @method void setDisplayName(string $DisplayName) Set Display name of the scene
 * @method string getDescription() Obtain Scene description
 * @method void setDescription(string $Description) Set Scene description
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string Scene ID
     */
    public $SceneId;

    /**
     * @var string Display name of the scene
     */
    public $DisplayName;

    /**
     * @var string Scene description
     */
    public $Description;

    /**
     * @param string $SceneId Scene ID
     * @param string $DisplayName Display name of the scene
     * @param string $Description Scene description
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
