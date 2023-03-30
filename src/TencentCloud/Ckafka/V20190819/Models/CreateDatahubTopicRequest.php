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
 * CreateDatahubTopic request structure.
 *
 * @method string getName() Obtain Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method void setName(string $Name) Set Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method integer getPartitionNum() Obtain Number of partitions, which should be greater than 0.
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions, which should be greater than 0.
 * @method integer getRetentionMs() Obtain Message retention period in milliseconds. The current minimum value is 60,000 ms.
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in milliseconds. The current minimum value is 60,000 ms.
 * @method string getNote() Obtain Topic remarks, which are a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method void setNote(string $Note) Set Topic remarks, which are a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 */
class CreateDatahubTopicRequest extends AbstractModel
{
    /**
     * @var string Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     */
    public $Name;

    /**
     * @var integer Number of partitions, which should be greater than 0.
     */
    public $PartitionNum;

    /**
     * @var integer Message retention period in milliseconds. The current minimum value is 60,000 ms.
     */
    public $RetentionMs;

    /**
     * @var string Topic remarks, which are a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     */
    public $Note;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @param string $Name Topic name, which is a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     * @param integer $PartitionNum Number of partitions, which should be greater than 0.
     * @param integer $RetentionMs Message retention period in milliseconds. The current minimum value is 60,000 ms.
     * @param string $Note Topic remarks, which are a string of up to 128 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     * @param array $Tags Tag list
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
