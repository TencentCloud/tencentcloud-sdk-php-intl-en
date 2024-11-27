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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAttackLog request structure.
 *
 * @method string getDomain() Obtain Queried domain: use all for all domains
 * @method void setDomain(string $Domain) Set Queried domain: use all for all domains
 * @method string getStartTime() Obtain Query start time
 * @method void setStartTime(string $StartTime) Set Query start time
 * @method string getEndTime() Obtain Query end time
 * @method void setEndTime(string $EndTime) Set Query end time
 * @method string getContext() Obtain API upgrade. Input an empty string for this field. Use the Page field for page turning.
 * @method void setContext(string $Context) Set API upgrade. Input an empty string for this field. Use the Page field for page turning.
 * @method string getQueryString() Obtain Lucene syntax.
 * @method void setQueryString(string $QueryString) Set Lucene syntax.
 * @method integer getCount() Obtain Number of queries: 10 by default, up to 100
 * @method void setCount(integer $Count) Set Number of queries: 10 by default, up to 100
 * @method string getSort() Obtain desc by default. Value can be set to desc or asc.
 * @method void setSort(string $Sort) Set desc by default. Value can be set to desc or asc.
 * @method integer getPage() Obtain Page number, starting from 0
 * @method void setPage(integer $Page) Set Page number, starting from 0
 */
class SearchAttackLogRequest extends AbstractModel
{
    /**
     * @var string Queried domain: use all for all domains
     */
    public $Domain;

    /**
     * @var string Query start time
     */
    public $StartTime;

    /**
     * @var string Query end time
     */
    public $EndTime;

    /**
     * @var string API upgrade. Input an empty string for this field. Use the Page field for page turning.
     */
    public $Context;

    /**
     * @var string Lucene syntax.
     */
    public $QueryString;

    /**
     * @var integer Number of queries: 10 by default, up to 100
     */
    public $Count;

    /**
     * @var string desc by default. Value can be set to desc or asc.
     */
    public $Sort;

    /**
     * @var integer Page number, starting from 0
     */
    public $Page;

    /**
     * @param string $Domain Queried domain: use all for all domains
     * @param string $StartTime Query start time
     * @param string $EndTime Query end time
     * @param string $Context API upgrade. Input an empty string for this field. Use the Page field for page turning.
     * @param string $QueryString Lucene syntax.
     * @param integer $Count Number of queries: 10 by default, up to 100
     * @param string $Sort desc by default. Value can be set to desc or asc.
     * @param integer $Page Page number, starting from 0
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
