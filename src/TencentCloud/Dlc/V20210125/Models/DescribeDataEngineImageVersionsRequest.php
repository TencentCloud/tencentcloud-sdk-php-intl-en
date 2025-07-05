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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataEngineImageVersions request structure.
 *
 * @method string getEngineType() Obtain Types of engines: SQL, SparkBatch, StandardSpark, and StandardPresto
 * @method void setEngineType(string $EngineType) Set Types of engines: SQL, SparkBatch, StandardSpark, and StandardPresto
 * @method string getSort() Obtain 
 * @method void setSort(string $Sort) Set 
 * @method boolean getAsc() Obtain 
 * @method void setAsc(boolean $Asc) Set 
 */
class DescribeDataEngineImageVersionsRequest extends AbstractModel
{
    /**
     * @var string Types of engines: SQL, SparkBatch, StandardSpark, and StandardPresto
     */
    public $EngineType;

    /**
     * @var string 
     */
    public $Sort;

    /**
     * @var boolean 
     */
    public $Asc;

    /**
     * @param string $EngineType Types of engines: SQL, SparkBatch, StandardSpark, and StandardPresto
     * @param string $Sort 
     * @param boolean $Asc 
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
