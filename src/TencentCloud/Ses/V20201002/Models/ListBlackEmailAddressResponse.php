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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListBlackEmailAddress response structure.
 *
 * @method array getBlackList() Obtain List of blocklisted addresses.
 * @method void setBlackList(array $BlackList) Set List of blocklisted addresses.
 * @method integer getTotalCount() Obtain Total number of blocklisted addresses.
 * @method void setTotalCount(integer $TotalCount) Set Total number of blocklisted addresses.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListBlackEmailAddressResponse extends AbstractModel
{
    /**
     * @var array List of blocklisted addresses.
     */
    public $BlackList;

    /**
     * @var integer Total number of blocklisted addresses.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $BlackList List of blocklisted addresses.
     * @param integer $TotalCount Total number of blocklisted addresses.
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
        if (array_key_exists("BlackList",$param) and $param["BlackList"] !== null) {
            $this->BlackList = [];
            foreach ($param["BlackList"] as $key => $value){
                $obj = new BlackEmailAddress();
                $obj->deserialize($value);
                array_push($this->BlackList, $obj);
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
