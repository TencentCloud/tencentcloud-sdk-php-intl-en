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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetHardwareList request structure.
 *
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Device quantity on the webpage
 * @method void setPageSize(integer $PageSize) Set Device quantity on the webpage
 * @method string getKeyword() Obtain Keyword.
 * @method void setKeyword(string $Keyword) Set Keyword.
 */
class GetHardwareListRequest extends AbstractModel
{
    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Device quantity on the webpage
     */
    public $PageSize;

    /**
     * @var string Keyword.
     */
    public $Keyword;

    /**
     * @param integer $PageNumber Page number
     * @param integer $PageSize Device quantity on the webpage
     * @param string $Keyword Keyword.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
