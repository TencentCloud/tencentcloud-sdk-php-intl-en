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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog response structure.
 *
 * @method integer getTotal() Obtain Total number of logs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total number of logs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getLimit() Obtain Number of entries per page.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPage() Obtain Page number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPage(integer $Page) Set Page number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getResults() Obtain Log searching results
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setResults(array $Results) Set Log searching results
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var integer Total number of logs
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var integer Number of entries per page.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Limit;

    /**
     * @var integer Page number
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Page;

    /**
     * @var array Log searching results
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Results;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of logs
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Limit Number of entries per page.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Page Page number
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Results Log searching results
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new SearchLogResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
