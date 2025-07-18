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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccountInAccountGroup response structure.
 *
 * @method array getAccountList() Obtain List of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccountList(array $AccountList) Set List of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAccountGroupId() Obtain Account group ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListAccountInAccountGroupResponse extends AbstractModel
{
    /**
     * @var array List of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccountList;

    /**
     * @var integer Total number of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string Account group ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccountGroupId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $AccountList List of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of accounts returned for the query.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AccountGroupId Account group ID.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AccountList",$param) and $param["AccountList"] !== null) {
            $this->AccountList = [];
            foreach ($param["AccountList"] as $key => $value){
                $obj = new AppAccountInfo();
                $obj->deserialize($value);
                array_push($this->AccountList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
