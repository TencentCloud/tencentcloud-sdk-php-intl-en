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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExport request structure.
 *
 * @method string getName() Obtain Export identifier name
 * @method void setName(string $Name) Set Export identifier name
 * @method string getStartTime() Obtain Start time (required)
 * @method void setStartTime(string $StartTime) Set Start time (required)
 * @method string getQuery() Obtain Query statement, which is required and can contain up to 4,096 characters.
 * @method void setQuery(string $Query) Set Query statement, which is required and can contain up to 4,096 characters.
 * @method string getEndTime() Obtain End time (required)
 * @method void setEndTime(string $EndTime) Set End time (required)
 * @method integer getID() Obtain Project ID (required)
 * @method void setID(integer $ID) Set Project ID (required)
 * @method array getFields() Obtain Filter field
 * @method void setFields(array $Fields) Set Filter field
 */
class DescribeRumLogExportRequest extends AbstractModel
{
    /**
     * @var string Export identifier name
     */
    public $Name;

    /**
     * @var string Start time (required)
     */
    public $StartTime;

    /**
     * @var string Query statement, which is required and can contain up to 4,096 characters.
     */
    public $Query;

    /**
     * @var string End time (required)
     */
    public $EndTime;

    /**
     * @var integer Project ID (required)
     */
    public $ID;

    /**
     * @var array Filter field
     */
    public $Fields;

    /**
     * @param string $Name Export identifier name
     * @param string $StartTime Start time (required)
     * @param string $Query Query statement, which is required and can contain up to 4,096 characters.
     * @param string $EndTime End time (required)
     * @param integer $ID Project ID (required)
     * @param array $Fields Filter field
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }
    }
}
