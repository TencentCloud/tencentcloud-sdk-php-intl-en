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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCustomizedConfig request structure.
 *
 * @method string getConfigName() Obtain Configuration name
 * @method void setConfigName(string $ConfigName) Set Configuration name
 * @method string getConfigType() Obtain Configuration type. valid values: ["CLB", "SERVER", "LOCATION"], respectively indicating CLB configuration, SERVER configuration, and LOCATION configuration.
 * @method void setConfigType(string $ConfigType) Set Configuration type. valid values: ["CLB", "SERVER", "LOCATION"], respectively indicating CLB configuration, SERVER configuration, and LOCATION configuration.
 * @method string getConfigContent() Obtain Specifies the configuration content.
 * @method void setConfigContent(string $ConfigContent) Set Specifies the configuration content.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class AddCustomizedConfigRequest extends AbstractModel
{
    /**
     * @var string Configuration name
     */
    public $ConfigName;

    /**
     * @var string Configuration type. valid values: ["CLB", "SERVER", "LOCATION"], respectively indicating CLB configuration, SERVER configuration, and LOCATION configuration.
     */
    public $ConfigType;

    /**
     * @var string Specifies the configuration content.
     */
    public $ConfigContent;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $ConfigName Configuration name
     * @param string $ConfigType Configuration type. valid values: ["CLB", "SERVER", "LOCATION"], respectively indicating CLB configuration, SERVER configuration, and LOCATION configuration.
     * @param string $ConfigContent Specifies the configuration content.
     * @param array $Tags Tag.
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
