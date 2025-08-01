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
 * DataHub topic list
 *
 * @method integer getTotalCount() Obtain Total count
 * @method void setTotalCount(integer $TotalCount) Set Total count
 * @method array getTopicList() Obtain Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeDatahubTopicsResp extends AbstractModel
{
    /**
     * @var integer Total count
     */
    public $TotalCount;

    /**
     * @var array Topic list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @param integer $TotalCount Total count
     * @param array $TopicList Topic list
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

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new DatahubTopicDTO();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }
    }
}
