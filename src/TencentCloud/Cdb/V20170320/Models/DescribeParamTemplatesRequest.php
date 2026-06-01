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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates request structure.
 *
 * @method array getEngineVersions() Obtain Engine version. Query all if default. Valid values: 5.5, 5.6, 5.7, 8.0.
 * @method void setEngineVersions(array $EngineVersions) Set Engine version. Query all if default. Valid values: 5.5, 5.6, 5.7, 8.0.
 * @method array getEngineTypes() Obtain Engine type. Query all if default. Valid values: InnoDB, RocksDB. Case-insensitive.
 * @method void setEngineTypes(array $EngineTypes) Set Engine type. Query all if default. Valid values: InnoDB, RocksDB. Case-insensitive.
 * @method array getTemplateNames() Obtain Template name. Query all if default. Support fuzzy matching.
 * @method void setTemplateNames(array $TemplateNames) Set Template name. Query all if default. Support fuzzy matching.
 * @method array getTemplateIds() Obtain Template ID. Query all if default.
 * @method void setTemplateIds(array $TemplateIds) Set Template ID. Query all if default.
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array Engine version. Query all if default. Valid values: 5.5, 5.6, 5.7, 8.0.
     */
    public $EngineVersions;

    /**
     * @var array Engine type. Query all if default. Valid values: InnoDB, RocksDB. Case-insensitive.
     */
    public $EngineTypes;

    /**
     * @var array Template name. Query all if default. Support fuzzy matching.
     */
    public $TemplateNames;

    /**
     * @var array Template ID. Query all if default.
     */
    public $TemplateIds;

    /**
     * @param array $EngineVersions Engine version. Query all if default. Valid values: 5.5, 5.6, 5.7, 8.0.
     * @param array $EngineTypes Engine type. Query all if default. Valid values: InnoDB, RocksDB. Case-insensitive.
     * @param array $TemplateNames Template name. Query all if default. Support fuzzy matching.
     * @param array $TemplateIds Template ID. Query all if default.
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
        if (array_key_exists("EngineVersions",$param) and $param["EngineVersions"] !== null) {
            $this->EngineVersions = $param["EngineVersions"];
        }

        if (array_key_exists("EngineTypes",$param) and $param["EngineTypes"] !== null) {
            $this->EngineTypes = $param["EngineTypes"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }
    }
}
