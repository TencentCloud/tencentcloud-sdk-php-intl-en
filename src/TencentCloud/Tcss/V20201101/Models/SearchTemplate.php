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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quick search template
 *
 * @method string getName() Obtain Search name
 * @method void setName(string $Name) Set Search name
 * @method string getLogType() Obtain Search index type
 * @method void setLogType(string $LogType) Set Search index type
 * @method string getCondition() Obtain Search statement
 * @method void setCondition(string $Condition) Set Search statement
 * @method string getTimeRange() Obtain Time range
 * @method void setTimeRange(string $TimeRange) Set Time range
 * @method string getQuery() Obtain Converted search statement content
 * @method void setQuery(string $Query) Set Converted search statement content
 * @method string getFlag() Obtain Search method. Valid values: `standard` (search in the search box); `simple` (search by filter).
 * @method void setFlag(string $Flag) Set Search method. Valid values: `standard` (search in the search box); `simple` (search by filter).
 * @method string getDisplayData() Obtain Displayed data
 * @method void setDisplayData(string $DisplayData) Set Displayed data
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 */
class SearchTemplate extends AbstractModel
{
    /**
     * @var string Search name
     */
    public $Name;

    /**
     * @var string Search index type
     */
    public $LogType;

    /**
     * @var string Search statement
     */
    public $Condition;

    /**
     * @var string Time range
     */
    public $TimeRange;

    /**
     * @var string Converted search statement content
     */
    public $Query;

    /**
     * @var string Search method. Valid values: `standard` (search in the search box); `simple` (search by filter).
     */
    public $Flag;

    /**
     * @var string Displayed data
     */
    public $DisplayData;

    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @param string $Name Search name
     * @param string $LogType Search index type
     * @param string $Condition Search statement
     * @param string $TimeRange Time range
     * @param string $Query Converted search statement content
     * @param string $Flag Search method. Valid values: `standard` (search in the search box); `simple` (search by filter).
     * @param string $DisplayData Displayed data
     * @param integer $Id Rule ID
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("DisplayData",$param) and $param["DisplayData"] !== null) {
            $this->DisplayData = $param["DisplayData"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
