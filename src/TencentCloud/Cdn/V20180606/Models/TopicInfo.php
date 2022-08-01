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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS topic information
 *
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method integer getEnabled() Obtain Whether to enable publishing
 * @method void setEnabled(integer $Enabled) Set Whether to enable publishing
 * @method string getCreateTime() Obtain Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getChannel() Obtain Either `cdn` or `ecdn`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setChannel(string $Channel) Set Either `cdn` or `ecdn`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDeleted() Obtain Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDeleted(string $Deleted) Set Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var integer Whether to enable publishing
     */
    public $Enabled;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Either `cdn` or `ecdn`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Channel;

    /**
     * @var string Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Deleted;

    /**
     * @param string $TopicId Topic ID
     * @param string $TopicName Topic name
     * @param integer $Enabled Whether to enable publishing
     * @param string $CreateTime Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Channel Either `cdn` or `ecdn`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Deleted Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
