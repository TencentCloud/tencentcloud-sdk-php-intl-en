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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrgMemberAccountBalance request structure.
 *
 * @method integer getPageNumber() Obtain <p>Page number</p><p>Default value: 1</p><p>Value ranges from 1</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number</p><p>Default value: 1</p><p>Value ranges from 1</p>
 * @method integer getPageSize() Obtain <p>Page size</p><p>Value ranges from 1 to 10</p><p>Default value: 10</p>
 * @method void setPageSize(integer $PageSize) Set <p>Page size</p><p>Value ranges from 1 to 10</p><p>Default value: 10</p>
 * @method array getMemberUins() Obtain <p>Member uin list</p><p>Input parameter limit: Elements must be pure digits and the number of elements cannot be greater than 10</p><p>Return the account balance information of all members within the organization when empty, and return the account balance information of specified members when not empty</p>
 * @method void setMemberUins(array $MemberUins) Set <p>Member uin list</p><p>Input parameter limit: Elements must be pure digits and the number of elements cannot be greater than 10</p><p>Return the account balance information of all members within the organization when empty, and return the account balance information of specified members when not empty</p>
 */
class DescribeOrgMemberAccountBalanceRequest extends AbstractModel
{
    /**
     * @var integer <p>Page number</p><p>Default value: 1</p><p>Value ranges from 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Page size</p><p>Value ranges from 1 to 10</p><p>Default value: 10</p>
     */
    public $PageSize;

    /**
     * @var array <p>Member uin list</p><p>Input parameter limit: Elements must be pure digits and the number of elements cannot be greater than 10</p><p>Return the account balance information of all members within the organization when empty, and return the account balance information of specified members when not empty</p>
     */
    public $MemberUins;

    /**
     * @param integer $PageNumber <p>Page number</p><p>Default value: 1</p><p>Value ranges from 1</p>
     * @param integer $PageSize <p>Page size</p><p>Value ranges from 1 to 10</p><p>Default value: 10</p>
     * @param array $MemberUins <p>Member uin list</p><p>Input parameter limit: Elements must be pure digits and the number of elements cannot be greater than 10</p><p>Return the account balance information of all members within the organization when empty, and return the account balance information of specified members when not empty</p>
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

        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }
    }
}
