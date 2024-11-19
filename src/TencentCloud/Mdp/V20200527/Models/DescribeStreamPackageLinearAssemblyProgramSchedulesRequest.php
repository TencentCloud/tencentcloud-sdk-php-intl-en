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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageLinearAssemblyProgramSchedules request structure.
 *
 * @method string getChannelId() Obtain Query all Programs under a Channel.
 * @method void setChannelId(string $ChannelId) Set Query all Programs under a Channel.
 * @method integer getTimeWindow() Obtain Window duration information, in seconds.
 * @method void setTimeWindow(integer $TimeWindow) Set Window duration information, in seconds.
 * @method integer getPageNum() Obtain Paging query page number, the value range is [1, 1000].
 * @method void setPageNum(integer $PageNum) Set Paging query page number, the value range is [1, 1000].
 * @method integer getPageSize() Obtain Paging query the size of each page, the value range is [1, 1000].
 * @method void setPageSize(integer $PageSize) Set Paging query the size of each page, the value range is [1, 1000].
 */
class DescribeStreamPackageLinearAssemblyProgramSchedulesRequest extends AbstractModel
{
    /**
     * @var string Query all Programs under a Channel.
     */
    public $ChannelId;

    /**
     * @var integer Window duration information, in seconds.
     */
    public $TimeWindow;

    /**
     * @var integer Paging query page number, the value range is [1, 1000].
     */
    public $PageNum;

    /**
     * @var integer Paging query the size of each page, the value range is [1, 1000].
     */
    public $PageSize;

    /**
     * @param string $ChannelId Query all Programs under a Channel.
     * @param integer $TimeWindow Window duration information, in seconds.
     * @param integer $PageNum Paging query page number, the value range is [1, 1000].
     * @param integer $PageSize Paging query the size of each page, the value range is [1, 1000].
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("TimeWindow",$param) and $param["TimeWindow"] !== null) {
            $this->TimeWindow = $param["TimeWindow"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
