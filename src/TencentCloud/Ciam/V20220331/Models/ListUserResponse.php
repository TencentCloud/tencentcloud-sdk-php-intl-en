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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUser response structure.
 *
 * @method integer getTotal() Obtain Total number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set Total number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Pageable getPageable() Obtain Pagination object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageable(Pageable $Pageable) Set Pagination object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getContent() Obtain List of users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(array $Content) Set List of users
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListUserResponse extends AbstractModel
{
    /**
     * @var integer Total number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var Pageable Pagination object
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pageable;

    /**
     * @var array List of users
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Pageable $Pageable Pagination object
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Content List of users
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
