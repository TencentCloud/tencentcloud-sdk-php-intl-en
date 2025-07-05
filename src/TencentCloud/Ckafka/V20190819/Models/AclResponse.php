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
 * Set of returned ACL results
 *
 * @method integer getTotalCount() Obtain Number of eligible data entries
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible data entries
 * @method array getAclList() Obtain ACL list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAclList(array $AclList) Set ACL list
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AclResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible data entries
     */
    public $TotalCount;

    /**
     * @var array ACL list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AclList;

    /**
     * @param integer $TotalCount Number of eligible data entries
     * @param array $AclList ACL list
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = [];
            foreach ($param["AclList"] as $key => $value){
                $obj = new Acl();
                $obj->deserialize($value);
                array_push($this->AclList, $obj);
            }
        }
    }
}
