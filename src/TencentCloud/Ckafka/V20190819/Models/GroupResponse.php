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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `DescribeGroup` response
 *
 * @method integer getTotalCount() Obtain Count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getGroupList() Obtain GroupList
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupList(array $GroupList) Set GroupList
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getGroupCountQuota() Obtain Consumer group quota
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupCountQuota(integer $GroupCountQuota) Set Consumer group quota
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GroupResponse extends AbstractModel
{
    /**
     * @var integer Count
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array GroupList
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupList;

    /**
     * @var integer Consumer group quota
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupCountQuota;

    /**
     * @param integer $TotalCount Count
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $GroupList GroupList
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $GroupCountQuota Consumer group quota
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("GroupList",$param) and $param["GroupList"] !== null) {
            $this->GroupList = [];
            foreach ($param["GroupList"] as $key => $value){
                $obj = new DescribeGroup();
                $obj->deserialize($value);
                array_push($this->GroupList, $obj);
            }
        }

        if (array_key_exists("GroupCountQuota",$param) and $param["GroupCountQuota"] !== null) {
            $this->GroupCountQuota = $param["GroupCountQuota"];
        }
    }
}
