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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalNum() 获取Number of entities
Note: This field may return null, indicating that no valid value was found.
 * @method void setTotalNum(integer $TotalNum) 设置Number of entities
Note: This field may return null, indicating that no valid value was found.
 * @method array getList() 获取Entity list
Note: This field may return null, indicating that no valid value was found.
 * @method void setList(array $List) 设置Entity list
Note: This field may return null, indicating that no valid value was found.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *ListEntitiesForPolicy response structure.
 */
class ListEntitiesForPolicyResponse extends AbstractModel
{
    /**
     * @var integer Number of entities
Note: This field may return null, indicating that no valid value was found.
     */
    public $TotalNum;

    /**
     * @var array Entity list
Note: This field may return null, indicating that no valid value was found.
     */
    public $List;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalNum Number of entities
Note: This field may return null, indicating that no valid value was found.
     * @param array $List Entity list
Note: This field may return null, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new AttachEntityOfPolicy();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
