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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListApp request structure.
 *
 * @method string getAppType() Obtain Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method void setAppType(string $AppType) Set Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method integer getPageSize() Obtain Number of items per page, integer.
 * @method void setPageSize(integer $PageSize) Set Number of items per page, integer.
 * @method integer getPageNumber() Obtain Page number, integer.
 * @method void setPageNumber(integer $PageNumber) Set Page number, integer.
 * @method string getKeyword() Obtain Keywords: application / modifier.
 * @method void setKeyword(string $Keyword) Set Keywords: application / modifier.
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 */
class ListAppRequest extends AbstractModel
{
    /**
     * @var string Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     */
    public $AppType;

    /**
     * @var integer Number of items per page, integer.
     */
    public $PageSize;

    /**
     * @var integer Page number, integer.
     */
    public $PageNumber;

    /**
     * @var string Keywords: application / modifier.
     */
    public $Keyword;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @param string $AppType Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     * @param integer $PageSize Number of items per page, integer.
     * @param integer $PageNumber Page number, integer.
     * @param string $Keyword Keywords: application / modifier.
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).	
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
