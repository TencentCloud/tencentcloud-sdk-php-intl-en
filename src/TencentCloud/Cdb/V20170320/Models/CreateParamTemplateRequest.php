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
 * CreateParamTemplate request structure.
 *
 * @method string getName() Obtain Parameter template name.
 * @method void setName(string $Name) Set Parameter template name.
 * @method string getDescription() Obtain Parameter template description.
 * @method void setDescription(string $Description) Set Parameter template description.
 * @method string getEngineVersion() Obtain MySQL version number.
 * @method void setEngineVersion(string $EngineVersion) Set MySQL version number.
 * @method integer getTemplateId() Obtain Source parameter template ID.
 * @method void setTemplateId(integer $TemplateId) Set Source parameter template ID.
 * @method array getParamList() Obtain List of parameters.
 * @method void setParamList(array $ParamList) Set List of parameters.
 * @method string getTemplateType() Obtain Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
 * @method void setTemplateType(string $TemplateType) Set Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
 * @method string getEngineType() Obtain Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 * @method void setEngineType(string $EngineType) Set Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string Parameter template name.
     */
    public $Name;

    /**
     * @var string Parameter template description.
     */
    public $Description;

    /**
     * @var string MySQL version number.
     */
    public $EngineVersion;

    /**
     * @var integer Source parameter template ID.
     */
    public $TemplateId;

    /**
     * @var array List of parameters.
     */
    public $ParamList;

    /**
     * @var string Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
     */
    public $TemplateType;

    /**
     * @var string Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
     */
    public $EngineType;

    /**
     * @param string $Name Parameter template name.
     * @param string $Description Parameter template description.
     * @param string $EngineVersion MySQL version number.
     * @param integer $TemplateId Source parameter template ID.
     * @param array $ParamList List of parameters.
     * @param string $TemplateType Type of the default parameter template. Valid values: `HIGH_STABILITY` (high-stability template), `HIGH_PERFORMANCE` (high-performance template).
     * @param string $EngineType Instance engine type. Valid values: `InnoDB` (default), `RocksDB`.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
