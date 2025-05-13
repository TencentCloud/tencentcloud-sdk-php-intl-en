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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFabricBlock request structure.
 *
 * @method string getClusterId() Obtain Cluster ID, which can be obtained from the blockchain cluster details or in the list.
 * @method void setClusterId(string $ClusterId) Set Cluster ID, which can be obtained from the blockchain cluster details or in the list.
 * @method string getChannelId() Obtain Channel ID, which can be obtained from the channel list or channel detail.
 * @method void setChannelId(string $ChannelId) Set Channel ID, which can be obtained from the channel list or channel detail.
 * @method integer getBlockHeight() Obtain Block height, starting from 0.
 * @method void setBlockHeight(integer $BlockHeight) Set Block height, starting from 0.
 */
class DescribeFabricBlockRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, which can be obtained from the blockchain cluster details or in the list.
     */
    public $ClusterId;

    /**
     * @var string Channel ID, which can be obtained from the channel list or channel detail.
     */
    public $ChannelId;

    /**
     * @var integer Block height, starting from 0.
     */
    public $BlockHeight;

    /**
     * @param string $ClusterId Cluster ID, which can be obtained from the blockchain cluster details or in the list.
     * @param string $ChannelId Channel ID, which can be obtained from the channel list or channel detail.
     * @param integer $BlockHeight Block height, starting from 0.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }
    }
}
