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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates request structure.
 *
 * @method array getEngineVersions() Obtain Engine version. If it is left empty, all parameter templates will be queried.
 * @method void setEngineVersions(array $EngineVersions) Set Engine version. If it is left empty, all parameter templates will be queried.
 * @method array getEngineTypes() Obtain Engine type. If it is left empty, all engine types will be queried.
 * @method void setEngineTypes(array $EngineTypes) Set Engine type. If it is left empty, all engine types will be queried.
 * @method array getTemplateNames() Obtain Template name. If it is left empty, all template names will be queried.
 * @method void setTemplateNames(array $TemplateNames) Set Template name. If it is left empty, all template names will be queried.
 * @method array getTemplateIds() Obtain Template ID. If it is left empty, all template IDs will be queried.
 * @method void setTemplateIds(array $TemplateIds) Set Template ID. If it is left empty, all template IDs will be queried.
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array Engine version. If it is left empty, all parameter templates will be queried.
     */
    public $EngineVersions;

    /**
     * @var array Engine type. If it is left empty, all engine types will be queried.
     */
    public $EngineTypes;

    /**
     * @var array Template name. If it is left empty, all template names will be queried.
     */
    public $TemplateNames;

    /**
     * @var array Template ID. If it is left empty, all template IDs will be queried.
     */
    public $TemplateIds;

    /**
     * @param array $EngineVersions Engine version. If it is left empty, all parameter templates will be queried.
     * @param array $EngineTypes Engine type. If it is left empty, all engine types will be queried.
     * @param array $TemplateNames Template name. If it is left empty, all template names will be queried.
     * @param array $TemplateIds Template ID. If it is left empty, all template IDs will be queried.
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
