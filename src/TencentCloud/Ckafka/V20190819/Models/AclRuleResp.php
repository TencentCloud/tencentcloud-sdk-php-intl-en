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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Results returned by the `AclRuleList` API
 *
 * @method integer getTotalCount() Obtain Total number of data entries
 * @method void setTotalCount(integer $TotalCount) Set Total number of data entries
 * @method array getAclRuleList() Obtain ACL rule list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAclRuleList(array $AclRuleList) Set ACL rule list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AclRuleResp extends AbstractModel
{
    /**
     * @var integer Total number of data entries
     */
    public $TotalCount;

    /**
     * @var array ACL rule list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AclRuleList;

    /**
     * @param integer $TotalCount Total number of data entries
     * @param array $AclRuleList ACL rule list
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

        if (array_key_exists("AclRuleList",$param) and $param["AclRuleList"] !== null) {
            $this->AclRuleList = [];
            foreach ($param["AclRuleList"] as $key => $value){
                $obj = new AclRule();
                $obj->deserialize($value);
                array_push($this->AclRuleList, $obj);
            }
        }
    }
}
