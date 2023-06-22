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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogUserHostStats response structure.
 *
 * @method integer getTotalCount() Obtain Total number of source addresses.
 * @method void setTotalCount(integer $TotalCount) Set Total number of source addresses.
 * @method array getItems() Obtain Detailed list of the proportion of slow logs from each source address.
 * @method void setItems(array $Items) Set Detailed list of the proportion of slow logs from each source address.
 * @method array getUserNameItems() Obtain Detailed list of the percentages of slow logs from different source usernames
 * @method void setUserNameItems(array $UserNameItems) Set Detailed list of the percentages of slow logs from different source usernames
 * @method integer getUserTotalCount() Obtain The number of source users
 * @method void setUserTotalCount(integer $UserTotalCount) Set The number of source users
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSlowLogUserHostStatsResponse extends AbstractModel
{
    /**
     * @var integer Total number of source addresses.
     */
    public $TotalCount;

    /**
     * @var array Detailed list of the proportion of slow logs from each source address.
     */
    public $Items;

    /**
     * @var array Detailed list of the percentages of slow logs from different source usernames
     */
    public $UserNameItems;

    /**
     * @var integer The number of source users
     */
    public $UserTotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of source addresses.
     * @param array $Items Detailed list of the proportion of slow logs from each source address.
     * @param array $UserNameItems Detailed list of the percentages of slow logs from different source usernames
     * @param integer $UserTotalCount The number of source users
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SlowLogHost();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("UserNameItems",$param) and $param["UserNameItems"] !== null) {
            $this->UserNameItems = [];
            foreach ($param["UserNameItems"] as $key => $value){
                $obj = new SlowLogUser();
                $obj->deserialize($value);
                array_push($this->UserNameItems, $obj);
            }
        }

        if (array_key_exists("UserTotalCount",$param) and $param["UserTotalCount"] !== null) {
            $this->UserTotalCount = $param["UserTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
