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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveStreamPushInfoList request structure.
 *
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getAppName() Obtain Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
 * @method void setAppName(string $AppName) Set Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
 * @method integer getPageNum() Obtain Number of pages,
Value range: [1,10000],
Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Number of pages,
Value range: [1,10000],
Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page,
Value range: [1,1000],
Default value: 200.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page,
Value range: [1,1000],
Default value: 200.
 */
class DescribeLiveStreamPushInfoListRequest extends AbstractModel
{
    /**
     * @var string Push domain name.
     */
    public $PushDomain;

    /**
     * @var string Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
     */
    public $AppName;

    /**
     * @var integer Number of pages,
Value range: [1,10000],
Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page,
Value range: [1,1000],
Default value: 200.
     */
    public $PageSize;

    /**
     * @param string $PushDomain Push domain name.
     * @param string $AppName Push path, which is the same as the `AppName` in push and playback addresses and is `live` by default.
     * @param integer $PageNum Number of pages,
Value range: [1,10000],
Default value: 1.
     * @param integer $PageSize Number of entries per page,
Value range: [1,1000],
Default value: 200.
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
        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
