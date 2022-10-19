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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Number of items to be queried
 * @method void setLimit(integer $Limit) Set Number of items to be queried
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 * @method array getChannelIds() Obtain Channel ID.
 * @method void setChannelIds(array $ChannelIds) Set Channel ID.
 * @method integer getChannelState() Obtain Channel status
 * @method void setChannelState(integer $ChannelState) Set Channel status
 */
class DescribeGrafanaChannelsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
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
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @var array Channel ID.
     */
    public $ChannelIds;

    /**
     * @var integer Channel status
     */
    public $ChannelState;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Offset Offset.
     * @param integer $Limit Number of items to be queried
     * @param string $ChannelName Channel name
     * @param array $ChannelIds Channel ID.
     * @param integer $ChannelState Channel status
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
