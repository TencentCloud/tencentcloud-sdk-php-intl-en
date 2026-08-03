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
 * CreateDatahubTopic request structure.
 *
 * @method string getName() Obtain <p>Name is a string of no more than 128 characters, must start with "AppId-", and the remaining part can contain letters, digits, and hyphens (-). It can be queried through the API DescribeAppInfo.</p>
 * @method void setName(string $Name) Set <p>Name is a string of no more than 128 characters, must start with "AppId-", and the remaining part can contain letters, digits, and hyphens (-). It can be queried through the API DescribeAppInfo.</p>
 * @method integer getPartitionNum() Obtain <p>Number of partitions, maximum value is 500, larger than 0</p>
 * @method void setPartitionNum(integer $PartitionNum) Set <p>Number of partitions, maximum value is 500, larger than 0</p>
 * @method integer getRetentionMs() Obtain <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
 * @method void setRetentionMs(integer $RetentionMs) Set <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
 * @method string getNote() Obtain <p>Topic remark is a string of no more than 64 characters, which can contain letters, digits, and hyphens (-).</p>
 * @method void setNote(string $Note) Set <p>Topic remark is a string of no more than 64 characters, which can contain letters, digits, and hyphens (-).</p>
 * @method array getTags() Obtain <p>Tag list</p>
 * @method void setTags(array $Tags) Set <p>Tag list</p>
 */
class CreateDatahubTopicRequest extends AbstractModel
{
    /**
     * @var string <p>Name is a string of no more than 128 characters, must start with "AppId-", and the remaining part can contain letters, digits, and hyphens (-). It can be queried through the API DescribeAppInfo.</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of partitions, maximum value is 500, larger than 0</p>
     */
    public $PartitionNum;

    /**
     * @var integer <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
     */
    public $RetentionMs;

    /**
     * @var string <p>Topic remark is a string of no more than 64 characters, which can contain letters, digits, and hyphens (-).</p>
     */
    public $Note;

    /**
     * @var array <p>Tag list</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>Name is a string of no more than 128 characters, must start with "AppId-", and the remaining part can contain letters, digits, and hyphens (-). It can be queried through the API DescribeAppInfo.</p>
     * @param integer $PartitionNum <p>Number of partitions, maximum value is 500, larger than 0</p>
     * @param integer $RetentionMs <p>Message retention period in milliseconds. Current min value is 60000 ms.</p>
     * @param string $Note <p>Topic remark is a string of no more than 64 characters, which can contain letters, digits, and hyphens (-).</p>
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

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
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
