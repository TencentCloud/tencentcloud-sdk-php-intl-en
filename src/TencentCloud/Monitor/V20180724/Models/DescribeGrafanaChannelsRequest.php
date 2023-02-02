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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGrafanaChannels request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-12345678”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-12345678”.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Number of items to be queried
 * @method void setLimit(integer $Limit) Set Number of items to be queried
 * @method string getChannelName() Obtain Alert channel name, such as “test”.
 * @method void setChannelName(string $ChannelName) Set Alert channel name, such as “test”.
 * @method array getChannelIds() Obtain Alert channel ID, such as “nchannel-abcd1234”.
 * @method void setChannelIds(array $ChannelIds) Set Alert channel ID, such as “nchannel-abcd1234”.
 * @method integer getChannelState() Obtain Alert channel status
 * @method void setChannelState(integer $ChannelState) Set Alert channel status
 */
class DescribeGrafanaChannelsRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-12345678”.
     */
    public $InstanceId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Number of items to be queried
     */
    public $Limit;

    /**
     * @var string Alert channel name, such as “test”.
     */
    public $ChannelName;

    /**
     * @var array Alert channel ID, such as “nchannel-abcd1234”.
     */
    public $ChannelIds;

    /**
     * @var integer Alert channel status
     */
    public $ChannelState;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-12345678”.
     * @param integer $Offset Offset.
     * @param integer $Limit Number of items to be queried
     * @param string $ChannelName Alert channel name, such as “test”.
     * @param array $ChannelIds Alert channel ID, such as “nchannel-abcd1234”.
     * @param integer $ChannelState Alert channel status
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("ChannelState",$param) and $param["ChannelState"] !== null) {
            $this->ChannelState = $param["ChannelState"];
        }
    }
}
