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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDLCTable request structure.
 *
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getName() Obtain Data table name
 * @method void setName(string $Name) Set Data table name
 * @method string getCatalog() Obtain Catalog name
 * @method void setCatalog(string $Catalog) Set Catalog name
 * @method string getKeyword() Obtain Keyword
 * @method void setKeyword(string $Keyword) Set Keyword
 * @method string getPattern() Obtain Match rules
 * @method void setPattern(string $Pattern) Set Match rules
 * @method string getType() Obtain Table type
 * @method void setType(string $Type) Set Table type
 */
class DescribeDLCTableRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Data table name
     */
    public $Name;

    /**
     * @var string Catalog name
     */
    public $Catalog;

    /**
     * @var string Keyword
     */
    public $Keyword;

    /**
     * @var string Match rules
     */
    public $Pattern;

    /**
     * @var string Table type
     */
    public $Type;

    /**
     * @param string $DbName Database name
     * @param string $Name Data table name
     * @param string $Catalog Catalog name
     * @param string $Keyword Keyword
     * @param string $Pattern Match rules
     * @param string $Type Table type
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
