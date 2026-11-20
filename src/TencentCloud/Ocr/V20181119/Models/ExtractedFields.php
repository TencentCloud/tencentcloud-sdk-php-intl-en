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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Flattened extraction result of entry and exit records (recommended, with 2–3 levels directly reaching business fields)
 *
 * @method string getTitle() Obtain <p>Title, such as &quot;Exit and Entry Record Query Result of the National Immigration Administration (Electronic Document)&quot;</p>
 * @method void setTitle(string $Title) Set <p>Title, such as &quot;Exit and Entry Record Query Result of the National Immigration Administration (Electronic Document)&quot;</p>
 * @method string getQueryNo() Obtain <p>Query number</p>
 * @method void setQueryNo(string $QueryNo) Set <p>Query number</p>
 * @method string getQueryDate() Obtain <p>Query date</p>
 * @method void setQueryDate(string $QueryDate) Set <p>Query date</p>
 * @method string getGenerateDate() Obtain <p>Date of issue</p>
 * @method void setGenerateDate(string $GenerateDate) Set <p>Date of issue</p>
 * @method PersonInfo getPersonInfo() Obtain <p>Information of the inquirer</p>
 * @method void setPersonInfo(PersonInfo $PersonInfo) Set <p>Information of the inquirer</p>
 * @method array getRecords() Obtain <p>List of entry and exit records</p>
 * @method void setRecords(array $Records) Set <p>List of entry and exit records</p>
 * @method string getQueryPeriodStart() Obtain <p>Start time of the query range</p>
 * @method void setQueryPeriodStart(string $QueryPeriodStart) Set <p>Start time of the query range</p>
 * @method string getQueryPeriodEnd() Obtain <p>End time of the query range</p>
 * @method void setQueryPeriodEnd(string $QueryPeriodEnd) Set <p>End time of the query range</p>
 */
class ExtractedFields extends AbstractModel
{
    /**
     * @var string <p>Title, such as &quot;Exit and Entry Record Query Result of the National Immigration Administration (Electronic Document)&quot;</p>
     */
    public $Title;

    /**
     * @var string <p>Query number</p>
     */
    public $QueryNo;

    /**
     * @var string <p>Query date</p>
     */
    public $QueryDate;

    /**
     * @var string <p>Date of issue</p>
     */
    public $GenerateDate;

    /**
     * @var PersonInfo <p>Information of the inquirer</p>
     */
    public $PersonInfo;

    /**
     * @var array <p>List of entry and exit records</p>
     */
    public $Records;

    /**
     * @var string <p>Start time of the query range</p>
     */
    public $QueryPeriodStart;

    /**
     * @var string <p>End time of the query range</p>
     */
    public $QueryPeriodEnd;

    /**
     * @param string $Title <p>Title, such as &quot;Exit and Entry Record Query Result of the National Immigration Administration (Electronic Document)&quot;</p>
     * @param string $QueryNo <p>Query number</p>
     * @param string $QueryDate <p>Query date</p>
     * @param string $GenerateDate <p>Date of issue</p>
     * @param PersonInfo $PersonInfo <p>Information of the inquirer</p>
     * @param array $Records <p>List of entry and exit records</p>
     * @param string $QueryPeriodStart <p>Start time of the query range</p>
     * @param string $QueryPeriodEnd <p>End time of the query range</p>
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("QueryNo",$param) and $param["QueryNo"] !== null) {
            $this->QueryNo = $param["QueryNo"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
        }

        if (array_key_exists("GenerateDate",$param) and $param["GenerateDate"] !== null) {
            $this->GenerateDate = $param["GenerateDate"];
        }

        if (array_key_exists("PersonInfo",$param) and $param["PersonInfo"] !== null) {
            $this->PersonInfo = new PersonInfo();
            $this->PersonInfo->deserialize($param["PersonInfo"]);
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new Record();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("QueryPeriodStart",$param) and $param["QueryPeriodStart"] !== null) {
            $this->QueryPeriodStart = $param["QueryPeriodStart"];
        }

        if (array_key_exists("QueryPeriodEnd",$param) and $param["QueryPeriodEnd"] !== null) {
            $this->QueryPeriodEnd = $param["QueryPeriodEnd"];
        }
    }
}
