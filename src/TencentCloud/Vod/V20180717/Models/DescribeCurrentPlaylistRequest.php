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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurrentPlaylist request structure.
 *
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
 * @method string getRoundPlayId() Obtain The unique identifier of the playlist.
 * @method void setRoundPlayId(string $RoundPlayId) Set The unique identifier of the playlist.
 * @method integer getLimit() Obtain The length of the returned playlist. maximum is 10, default value is 5.
 * @method void setLimit(integer $Limit) Set The length of the returned playlist. maximum is 10, default value is 5.
 */
class DescribeCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
     */
    public $SubAppId;

    /**
     * @var string The unique identifier of the playlist.
     */
    public $RoundPlayId;

    /**
     * @var integer The length of the returned playlist. maximum is 10, default value is 5.
     */
    public $Limit;

    /**
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
     * @param string $RoundPlayId The unique identifier of the playlist.
     * @param integer $Limit The length of the returned playlist. maximum is 10, default value is 5.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
