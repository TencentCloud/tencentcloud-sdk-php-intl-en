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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVLPlans request structure.
 *
 * @method string getName() Obtain <p>Plan name, exact match</p>
 * @method void setName(string $Name) Set <p>Plan name, exact match</p>
 * @method integer getPageNumber() Obtain <p>Page number. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default: 20. Maximum: 200.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default: 20. Maximum: 200.</p>
 */
class ListVLPlansRequest extends AbstractModel
{
    /**
     * @var string <p>Plan name, exact match</p>
     */
    public $Name;

    /**
     * @var integer <p>Page number. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default: 20. Maximum: 200.</p>
     */
    public $PageSize;

    /**
     * @param string $Name <p>Plan name, exact match</p>
     * @param integer $PageNumber <p>Page number. Default value: 1.</p>
     * @param integer $PageSize <p>Number of items per page. Default: 20. Maximum: 200.</p>
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
