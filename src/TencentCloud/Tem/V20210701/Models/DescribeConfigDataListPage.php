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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the list of configurations
 *
 * @method array getRecords() Obtain Record
 * @method void setRecords(array $Records) Set Record
 * @method string getContinueToken() Obtain Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setContinueToken(string $ContinueToken) Set Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRemainingCount() Obtain Remaining number
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemainingCount(integer $RemainingCount) Set Remaining number
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DescribeConfigDataListPage extends AbstractModel
{
    /**
     * @var array Record
     */
    public $Records;

    /**
     * @var string Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ContinueToken;

    /**
     * @var integer Remaining number
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RemainingCount;

    /**
     * @param array $Records Record
     * @param string $ContinueToken Paging cursor
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RemainingCount Remaining number
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new ConfigData();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }

        if (array_key_exists("RemainingCount",$param) and $param["RemainingCount"] !== null) {
            $this->RemainingCount = $param["RemainingCount"];
        }
    }
}
