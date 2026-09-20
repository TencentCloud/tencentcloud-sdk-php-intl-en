<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Carousel task information
 *
 * @method string getRoundPlayId() Obtain Carousel playlist identifier.
 * @method void setRoundPlayId(string $RoundPlayId) Set Carousel playlist identifier.
 * @method string getStartTime() Obtain Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method array getRoundPlaylist() Obtain Carousel list.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set Carousel list.
 * @method string getName() Obtain Carousel playbill name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Carousel playbill name. Length limit: 64 characters.
 * @method string getDesc() Obtain Carousel playlist description, with a length limit of 256 characters.
 * @method void setDesc(string $Desc) Set Carousel playlist description, with a length limit of 256 characters.
 * @method string getStatus() Obtain Playback status. Available values:
<li>Enabled: running state;</li>
<li>Disabled: stopped.</li>
Default value: Enabled.
 * @method void setStatus(string $Status) Set Playback status. Available values:
<li>Enabled: running state;</li>
<li>Disabled: stopped.</li>
Default value: Enabled.
 * @method string getPlayBackMode() Obtain Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
 * @method void setPlayBackMode(string $PlayBackMode) Set Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
 * @method string getUrl() Obtain Carousel playback address.
 * @method void setUrl(string $Url) Set Carousel playback address.
 * @method string getCreateTime() Obtain Creation time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Creation time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Update time, format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Update time, format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getExpiredTime() Obtain Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). Playback of the playlist will stop after expiry. "9999-12-31T23:59:59+08:00" means it never expires.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). Playback of the playlist will stop after expiry. "9999-12-31T23:59:59+08:00" means it never expires.
 */
class RoundPlayInfo extends AbstractModel
{
    /**
     * @var string Carousel playlist identifier.
     */
    public $RoundPlayId;

    /**
     * @var string Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var array Carousel list.
     */
    public $RoundPlaylist;

    /**
     * @var string Carousel playbill name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Carousel playlist description, with a length limit of 256 characters.
     */
    public $Desc;

    /**
     * @var string Playback status. Available values:
<li>Enabled: running state;</li>
<li>Disabled: stopped.</li>
Default value: Enabled.
     */
    public $Status;

    /**
     * @var string Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
     */
    public $PlayBackMode;

    /**
     * @var string Carousel playback address.
     */
    public $Url;

    /**
     * @var string Creation time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Update time, format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @var string Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). Playback of the playlist will stop after expiry. "9999-12-31T23:59:59+08:00" means it never expires.
     */
    public $ExpiredTime;

    /**
     * @param string $RoundPlayId Carousel playlist identifier.
     * @param string $StartTime Playback start time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param array $RoundPlaylist Carousel list.
     * @param string $Name Carousel playbill name. Length limit: 64 characters.
     * @param string $Desc Carousel playlist description, with a length limit of 256 characters.
     * @param string $Status Playback status. Available values:
<li>Enabled: running state;</li>
<li>Disabled: stopped.</li>
Default value: Enabled.
     * @param string $PlayBackMode Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
     * @param string $Url Carousel playback address.
     * @param string $CreateTime Creation time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $UpdateTime Update time, format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $ExpiredTime Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). Playback of the playlist will stop after expiry. "9999-12-31T23:59:59+08:00" means it never expires.
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
        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RoundPlaylist",$param) and $param["RoundPlaylist"] !== null) {
            $this->RoundPlaylist = [];
            foreach ($param["RoundPlaylist"] as $key => $value){
                $obj = new RoundPlayListItemInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaylist, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PlayBackMode",$param) and $param["PlayBackMode"] !== null) {
            $this->PlayBackMode = $param["PlayBackMode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
