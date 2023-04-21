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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupervisors response structure.
 *
 * @method integer getTotal() Obtain The total number of spectators.
 * @method void setTotal(integer $Total) Set The total number of spectators.
 * @method integer getPage() Obtain The current page number.
 * @method void setPage(integer $Page) Set The current page number.
 * @method integer getLimit() Obtain The number of records on the current page.
 * @method void setLimit(integer $Limit) Set The number of records on the current page.
 * @method array getUserIds() Obtain A list of the spectators.
 * @method void setUserIds(array $UserIds) Set A list of the spectators.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSupervisorsResponse extends AbstractModel
{
    /**
     * @var integer The total number of spectators.
     */
    public $Total;

    /**
     * @var integer The current page number.
     */
    public $Page;

    /**
     * @var integer The number of records on the current page.
     */
    public $Limit;

    /**
     * @var array A list of the spectators.
     */
    public $UserIds;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total The total number of spectators.
     * @param integer $Page The current page number.
     * @param integer $Limit The number of records on the current page.
     * @param array $UserIds A list of the spectators.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
