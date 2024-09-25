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
 * DescribeCCRule request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getOffset() Obtain Page number
 * @method void setOffset(integer $Offset) Set Page number
 * @method integer getLimit() Obtain Number of pages
 * @method void setLimit(integer $Limit) Set Number of pages
 * @method string getSort() Obtain Sort parameters
 * @method void setSort(string $Sort) Set Sort parameters
 * @method string getEdition() Obtain clb-waf or sparta-waf
 * @method void setEdition(string $Edition) Set clb-waf or sparta-waf
 * @method string getName() Obtain Filter criteria.
 * @method void setName(string $Name) Set Filter criteria.
 */
class DescribeCCRuleRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Page number
     */
    public $Offset;

    /**
     * @var integer Number of pages
     */
    public $Limit;

    /**
     * @var string Sort parameters
     */
    public $Sort;

    /**
     * @var string clb-waf or sparta-waf
     */
    public $Edition;

    /**
     * @var string Filter criteria.
     */
    public $Name;

    /**
     * @param string $Domain Domain name
     * @param integer $Offset Page number
     * @param integer $Limit Number of pages
     * @param string $Sort Sort parameters
     * @param string $Edition clb-waf or sparta-waf
     * @param string $Name Filter criteria.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
