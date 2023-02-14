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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAuthoritiesList request structure.
 *
 * @method integer getPageNumber() Obtain The page number, beginning from 1.
 * @method void setPageNumber(integer $PageNumber) Set The page number, beginning from 1.
 * @method integer getPageSize() Obtain The number of records per page.
 * @method void setPageSize(integer $PageSize) Set The number of records per page.
 * @method string getDid() Obtain The DID.
 * @method void setDid(string $Did) Set The DID.
 * @method integer getStatus() Obtain Whether to query certified or uncertified authorities. `1`: Certified; `2`: Uncertified.
 * @method void setStatus(integer $Status) Set Whether to query certified or uncertified authorities. `1`: Certified; `2`: Uncertified.
 */
class GetAuthoritiesListRequest extends AbstractModel
{
    /**
     * @var integer The page number, beginning from 1.
     */
    public $PageNumber;

    /**
     * @var integer The number of records per page.
     */
    public $PageSize;

    /**
     * @var string The DID.
     */
    public $Did;

    /**
     * @var integer Whether to query certified or uncertified authorities. `1`: Certified; `2`: Uncertified.
     */
    public $Status;

    /**
     * @param integer $PageNumber The page number, beginning from 1.
     * @param integer $PageSize The number of records per page.
     * @param string $Did The DID.
     * @param integer $Status Whether to query certified or uncertified authorities. `1`: Certified; `2`: Uncertified.
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

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
