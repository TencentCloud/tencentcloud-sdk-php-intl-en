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
 * GetVendorHardware request structure.
 *
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Page count
 * @method void setPageSize(integer $PageSize) Set Page count
 * @method string getKeyword() Obtain Keyword.
 * @method void setKeyword(string $Keyword) Set Keyword.
 * @method integer getStatus() Obtain Activation status
Empty: All;
1: To be activated.
2: Activated;
 * @method void setStatus(integer $Status) Set Activation status
Empty: All;
1: To be activated.
2: Activated;
 */
class GetVendorHardwareRequest extends AbstractModel
{
    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Page count
     */
    public $PageSize;

    /**
     * @var string Keyword.
     */
    public $Keyword;

    /**
     * @var integer Activation status
Empty: All;
1: To be activated.
2: Activated;
     */
    public $Status;

    /**
     * @param integer $PageNumber Page number
     * @param integer $PageSize Page count
     * @param string $Keyword Keyword.
     * @param integer $Status Activation status
Empty: All;
1: To be activated.
2: Activated;
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
