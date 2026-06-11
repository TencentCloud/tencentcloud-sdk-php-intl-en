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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric collection configuration.
 *
 * @method string getGroupId() Obtain Machine group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupId(string $GroupId) Set Machine group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConfigs() Obtain Basic monitoring collection configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigs(array $Configs) Set Basic monitoring collection configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaseMetricCollectConfig extends AbstractModel
{
    /**
     * @var string Machine group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupId;

    /**
     * @var array Basic monitoring collection configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Configs;

    /**
     * @param string $GroupId Machine group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Configs Basic monitoring collection configuration information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new MetricCollectConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
