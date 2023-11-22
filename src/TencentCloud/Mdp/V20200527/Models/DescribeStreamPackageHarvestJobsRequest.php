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
 * DescribeStreamPackageHarvestJobs request structure.
 *
 * @method string getChannelName() Obtain The bound channel name. If not passed, all channels will be queried by default.
 * @method void setChannelName(string $ChannelName) Set The bound channel name. If not passed, all channels will be queried by default.
 * @method integer getPageNum() Obtain Page number.
 * @method void setPageNum(integer $PageNum) Set Page number.
 * @method integer getPageSize() Obtain PageSize.
 * @method void setPageSize(integer $PageSize) Set PageSize.
 */
class DescribeStreamPackageHarvestJobsRequest extends AbstractModel
{
    /**
     * @var string The bound channel name. If not passed, all channels will be queried by default.
     */
    public $ChannelName;

    /**
     * @var integer Page number.
     */
    public $PageNum;

    /**
     * @var integer PageSize.
     */
    public $PageSize;

    /**
     * @param string $ChannelName The bound channel name. If not passed, all channels will be queried by default.
     * @param integer $PageNum Page number.
     * @param integer $PageSize PageSize.
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
