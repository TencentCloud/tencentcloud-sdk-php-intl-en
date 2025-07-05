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
 * Returned topic details entity
 *
 * @method array getTopicList() Obtain List of returned topic details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set List of returned topic details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of all eligible topic details
 * @method void setTotalCount(integer $TotalCount) Set Number of all eligible topic details
 */
class TopicDetailResponse extends AbstractModel
{
    /**
     * @var array List of returned topic details
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @var integer Number of all eligible topic details
     */
    public $TotalCount;

    /**
     * @param array $TopicList List of returned topic details
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of all eligible topic details
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
        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new TopicDetail();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
