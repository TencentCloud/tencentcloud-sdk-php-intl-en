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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnterpriseSecurityGroupRule response structure.
 *
 * @method string getPageNo() Obtain Page number of the current page displayed for query by page number.
 * @method void setPageNo(string $PageNo) Set Page number of the current page displayed for query by page number.
 * @method string getPageSize() Obtain Maximum number of entries per page displayed for query by page number.
 * @method void setPageSize(string $PageSize) Set Maximum number of entries per page displayed for query by page number.
 * @method array getRules() Obtain Access control rule list
 * @method void setRules(array $Rules) Set Access control rule list
 * @method string getTotalCount() Obtain Total number of access control rules
 * @method void setTotalCount(string $TotalCount) Set Total number of access control rules
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEnterpriseSecurityGroupRuleResponse extends AbstractModel
{
    /**
     * @var string Page number of the current page displayed for query by page number.
     */
    public $PageNo;

    /**
     * @var string Maximum number of entries per page displayed for query by page number.
     */
    public $PageSize;

    /**
     * @var array Access control rule list
     */
    public $Rules;

    /**
     * @var string Total number of access control rules
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PageNo Page number of the current page displayed for query by page number.
     * @param string $PageSize Maximum number of entries per page displayed for query by page number.
     * @param array $Rules Access control rule list
     * @param string $TotalCount Total number of access control rules
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new SecurityGroupRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
