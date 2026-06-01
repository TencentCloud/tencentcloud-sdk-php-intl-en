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
 * DescribeDefaultParams request structure.
 *
 * @method string getEngineVersion() Obtain Engine version. Currently supports ["5.1", "5.5", "5.6", "5.7", "8.0"].
Description: Engine version is required.
 * @method void setEngineVersion(string $EngineVersion) Set Engine version. Currently supports ["5.1", "5.5", "5.6", "5.7", "8.0"].
Description: Engine version is required.
 * @method string getTemplateType() Obtain Default parameter template type. Supported values include "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template. Default value: HIGH_STABILITY.
 * @method void setTemplateType(string $TemplateType) Set Default parameter template type. Supported values include "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template. Default value: HIGH_STABILITY.
 * @method string getEngineType() Obtain Parameter template engine, default value: InnoDB, valid values: InnoDB, RocksDB.
 * @method void setEngineType(string $EngineType) Set Parameter template engine, default value: InnoDB, valid values: InnoDB, RocksDB.
 */
class DescribeDefaultParamsRequest extends AbstractModel
{
    /**
     * @var string Engine version. Currently supports ["5.1", "5.5", "5.6", "5.7", "8.0"].
Description: Engine version is required.
     */
    public $EngineVersion;

    /**
     * @var string Default parameter template type. Supported values include "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template. Default value: HIGH_STABILITY.
     */
    public $TemplateType;

    /**
     * @var string Parameter template engine, default value: InnoDB, valid values: InnoDB, RocksDB.
     */
    public $EngineType;

    /**
     * @param string $EngineVersion Engine version. Currently supports ["5.1", "5.5", "5.6", "5.7", "8.0"].
Description: Engine version is required.
     * @param string $TemplateType Default parameter template type. Supported values include "HIGH_STABILITY" - high-stability template, "HIGH_PERFORMANCE" - high-performance template. Default value: HIGH_STABILITY.
     * @param string $EngineType Parameter template engine, default value: InnoDB, valid values: InnoDB, RocksDB.
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
