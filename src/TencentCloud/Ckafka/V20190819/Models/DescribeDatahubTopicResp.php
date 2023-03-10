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
 * DataHub topic details
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method integer getPartitionNum() Obtain The number of partitions
 * @method void setPartitionNum(integer $PartitionNum) Set The number of partitions
 * @method integer getRetentionMs() Obtain Expiration time
 * @method void setRetentionMs(integer $RetentionMs) Set Expiration time
 * @method string getNote() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getPassword() Obtain Password
 * @method void setPassword(string $Password) Set Password
 * @method integer getStatus() Obtain Status (`1`: In use; `2`: Deleting)
 * @method void setStatus(integer $Status) Set Status (`1`: In use; `2`: Deleting)
 * @method string getAddress() Obtain Service routing address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Service routing address
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeDatahubTopicResp extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var integer The number of partitions
     */
    public $PartitionNum;

    /**
     * @var integer Expiration time
     */
    public $RetentionMs;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Password
     */
    public $Password;

    /**
     * @var integer Status (`1`: In use; `2`: Deleting)
     */
    public $Status;

    /**
     * @var string Service routing address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @param string $Name Name
     * @param string $TopicName Topic name
     * @param string $TopicId Topic ID
     * @param integer $PartitionNum The number of partitions
     * @param integer $RetentionMs Expiration time
     * @param string $Note Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username
     * @param string $Password Password
     * @param integer $Status Status (`1`: In use; `2`: Deleting)
     * @param string $Address Service routing address
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
