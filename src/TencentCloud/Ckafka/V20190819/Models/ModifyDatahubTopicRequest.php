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
 * ModifyDatahubTopic request structure.
 *
 * @method string getName() Obtain <p>Elastic topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/86863?from_cn_redirect=1">DescribeDatahubTopics</a></p>
 * @method void setName(string $Name) Set <p>Elastic topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/86863?from_cn_redirect=1">DescribeDatahubTopics</a></p>
 * @method integer getRetentionMs() Obtain <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
 * @method void setRetentionMs(integer $RetentionMs) Set <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
 * @method string getNote() Obtain <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p>
 * @method void setNote(string $Note) Set <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p>
 * @method array getTags() Obtain <p>Tag list</p>
 * @method void setTags(array $Tags) Set <p>Tag list</p>
 */
class ModifyDatahubTopicRequest extends AbstractModel
{
    /**
     * @var string <p>Elastic topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/86863?from_cn_redirect=1">DescribeDatahubTopics</a></p>
     */
    public $Name;

    /**
     * @var integer <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
     */
    public $RetentionMs;

    /**
     * @var string <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p>
     */
    public $Note;

    /**
     * @var array <p>Tag list</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>Elastic topic name</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/86863?from_cn_redirect=1">DescribeDatahubTopics</a></p>
     * @param integer $RetentionMs <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
     * @param string $Note <p>Topic remark</p><p>Input parameter limit: no more than 64 characters</p>
     * @param array $Tags <p>Tag list</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
