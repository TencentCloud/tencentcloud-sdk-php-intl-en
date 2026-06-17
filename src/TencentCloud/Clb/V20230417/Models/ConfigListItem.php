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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * configuration content
 *
 * @method string getConfigId() Obtain Configuration ID
 * @method void setConfigId(string $ConfigId) Set Configuration ID
 * @method string getConfigType() Obtain Configuration type
 * @method void setConfigType(string $ConfigType) Set Configuration type
 * @method string getConfigName() Obtain Configuration name
 * @method void setConfigName(string $ConfigName) Set Configuration name
 * @method string getConfigContent() Obtain Configuration content
 * @method void setConfigContent(string $ConfigContent) Set Configuration content
 * @method string getCreateTimestamp() Obtain Configuration creation time
 * @method void setCreateTimestamp(string $CreateTimestamp) Set Configuration creation time
 * @method string getUpdateTimestamp() Obtain Configuration modification time
 * @method void setUpdateTimestamp(string $UpdateTimestamp) Set Configuration modification time
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 */
class ConfigListItem extends AbstractModel
{
    /**
     * @var string Configuration ID
     */
    public $ConfigId;

    /**
     * @var string Configuration type
     */
    public $ConfigType;

    /**
     * @var string Configuration name
     */
    public $ConfigName;

    /**
     * @var string Configuration content
     */
    public $ConfigContent;

    /**
     * @var string Configuration creation time
     */
    public $CreateTimestamp;

    /**
     * @var string Configuration modification time
     */
    public $UpdateTimestamp;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @param string $ConfigId Configuration ID
     * @param string $ConfigType Configuration type
     * @param string $ConfigName Configuration name
     * @param string $ConfigContent Configuration content
     * @param string $CreateTimestamp Configuration creation time
     * @param string $UpdateTimestamp Configuration modification time
     * @param array $Tag Tag.
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("UpdateTimestamp",$param) and $param["UpdateTimestamp"] !== null) {
            $this->UpdateTimestamp = $param["UpdateTimestamp"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }
    }
}
