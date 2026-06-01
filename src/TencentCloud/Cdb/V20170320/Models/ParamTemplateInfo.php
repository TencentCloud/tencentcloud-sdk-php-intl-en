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
 * Parameter template information
 *
 * @method integer getTemplateId() Obtain parameter template ID
 * @method void setTemplateId(integer $TemplateId) Set parameter template ID
 * @method string getName() Obtain Parameter template name
 * @method void setName(string $Name) Set Parameter template name
 * @method string getDescription() Obtain Parameter template description
 * @method void setDescription(string $Description) Set Parameter template description
 * @method string getEngineVersion() Obtain Instance engine version. Values: 5.5, 5.6, 5.7, and 8.0.
 * @method void setEngineVersion(string $EngineVersion) Set Instance engine version. Values: 5.5, 5.6, 5.7, and 8.0.
 * @method string getTemplateType() Obtain Parameter template type. Valid values: HIGH_STABILITY, HIGH_PERFORMANCE.
 * @method void setTemplateType(string $TemplateType) Set Parameter template type. Valid values: HIGH_STABILITY, HIGH_PERFORMANCE.
 * @method string getEngineType() Obtain Parameter template engine, values: InnoDB, RocksDB.
 * @method void setEngineType(string $EngineType) Set Parameter template engine, values: InnoDB, RocksDB.
 */
class ParamTemplateInfo extends AbstractModel
{
    /**
     * @var integer parameter template ID
     */
    public $TemplateId;

    /**
     * @var string Parameter template name
     */
    public $Name;

    /**
     * @var string Parameter template description
     */
    public $Description;

    /**
     * @var string Instance engine version. Values: 5.5, 5.6, 5.7, and 8.0.
     */
    public $EngineVersion;

    /**
     * @var string Parameter template type. Valid values: HIGH_STABILITY, HIGH_PERFORMANCE.
     */
    public $TemplateType;

    /**
     * @var string Parameter template engine, values: InnoDB, RocksDB.
     */
    public $EngineType;

    /**
     * @param integer $TemplateId parameter template ID
     * @param string $Name Parameter template name
     * @param string $Description Parameter template description
     * @param string $EngineVersion Instance engine version. Values: 5.5, 5.6, 5.7, and 8.0.
     * @param string $TemplateType Parameter template type. Valid values: HIGH_STABILITY, HIGH_PERFORMANCE.
     * @param string $EngineType Parameter template engine, values: InnoDB, RocksDB.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
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

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
