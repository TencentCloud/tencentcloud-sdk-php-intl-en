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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scenario details.
 *
 * @method string getSceneId() Obtain Scene ID.
 * @method void setSceneId(string $SceneId) Set Scene ID.
 * @method string getSceneName() Obtain Scenario name.
 * @method void setSceneName(string $SceneName) Set Scenario name.
 * @method string getCreatedBy() Obtain Scene creator.

- TAT: public scenario.
 * @method void setCreatedBy(string $CreatedBy) Set Scene creator.

- TAT: public scenario.
 * @method string getCreatedTime() Obtain Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method string getUpdatedTime() Obtain Update time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time. the format is YYYY-MM-DDThh:MM:ssZ.
 */
class Scene extends AbstractModel
{
    /**
     * @var string Scene ID.
     */
    public $SceneId;

    /**
     * @var string Scenario name.
     */
    public $SceneName;

    /**
     * @var string Scene creator.

- TAT: public scenario.
     */
    public $CreatedBy;

    /**
     * @var string Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $CreatedTime;

    /**
     * @var string Update time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $UpdatedTime;

    /**
     * @param string $SceneId Scene ID.
     * @param string $SceneName Scenario name.
     * @param string $CreatedBy Scene creator.

- TAT: public scenario.
     * @param string $CreatedTime Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     * @param string $UpdatedTime Update time. the format is YYYY-MM-DDThh:MM:ssZ.
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

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
