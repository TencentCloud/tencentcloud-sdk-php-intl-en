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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of Phrase Filtering
 *
 * @method string getStatus() Obtain Phrase Filtering status. Valid values: `open`, `close`.
 * @method void setStatus(string $Status) Set Phrase Filtering status. Valid values: `open`, `close`.
 * @method array getSceneInfos() Obtain Scenario configuration information, such as status and callback URL.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSceneInfos(array $SceneInfos) Set Scenario configuration information, such as status and callback URL.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class VoiceFilterConf extends AbstractModel
{
    /**
     * @var string Phrase Filtering status. Valid values: `open`, `close`.
     */
    public $Status;

    /**
     * @var array Scenario configuration information, such as status and callback URL.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SceneInfos;

    /**
     * @param string $Status Phrase Filtering status. Valid values: `open`, `close`.
     * @param array $SceneInfos Scenario configuration information, such as status and callback URL.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SceneInfos",$param) and $param["SceneInfos"] !== null) {
            $this->SceneInfos = [];
            foreach ($param["SceneInfos"] as $key => $value){
                $obj = new SceneInfo();
                $obj->deserialize($value);
                array_push($this->SceneInfos, $obj);
            }
        }
    }
}
