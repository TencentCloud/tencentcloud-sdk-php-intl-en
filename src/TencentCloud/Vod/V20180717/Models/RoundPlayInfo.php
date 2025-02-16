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
 * The information of a playlist.
 *
 * @method string getRoundPlayId() Obtain The playlist ID.
 * @method void setRoundPlayId(string $RoundPlayId) Set The playlist ID.
 * @method string getStartTime() Obtain The playback start time, in [ISO 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method void setStartTime(string $StartTime) Set The playback start time, in [ISO 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method array getRoundPlaylist() Obtain The files on the list.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set The files on the list.
 * @method string getName() Obtain The playlist name (not longer than 64 characters).
 * @method void setName(string $Name) Set The playlist name (not longer than 64 characters).
 * @method string getDesc() Obtain The playlist description (not longer than 256 characters).
 * @method void setDesc(string $Desc) Set The playlist description (not longer than 256 characters).
 * @method string getStatus() Obtain Playback status, optional values:
<li>Enabled: startup status;</li>
<li>Disabled: stop status. </li>
Default value: Enabled.
 * @method void setStatus(string $Status) Set Playback status, optional values:
<li>Enabled: startup status;</li>
<li>Disabled: stop status. </li>
Default value: Enabled.
 * @method string getPlayBackMode() Obtain Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
Default value: Loop.
 * @method void setPlayBackMode(string $PlayBackMode) Set Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
Default value: Loop.
 * @method string getUrl() Obtain Carousel playback address.
 * @method void setUrl(string $Url) Set Carousel playback address.
 * @method string getCreateTime() Obtain Creation time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method void setCreateTime(string $CreateTime) Set Creation time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method string getUpdateTime() Obtain Update time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method void setUpdateTime(string $UpdateTime) Set Update time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method string getExpiredTime() Obtain Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playback of the playlist will stop after expiration. "9999-12-31t23:59:59+08:00" means never expire.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playback of the playlist will stop after expiration. "9999-12-31t23:59:59+08:00" means never expire.
 */
class RoundPlayInfo extends AbstractModel
{
    /**
     * @var string The playlist ID.
     */
    public $RoundPlayId;

    /**
     * @var string The playback start time, in [ISO 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     */
    public $StartTime;

    /**
     * @var array The files on the list.
     */
    public $RoundPlaylist;

    /**
     * @var string The playlist name (not longer than 64 characters).
     */
    public $Name;

    /**
     * @var string The playlist description (not longer than 256 characters).
     */
    public $Desc;

    /**
     * @var string Playback status, optional values:
<li>Enabled: startup status;</li>
<li>Disabled: stop status. </li>
Default value: Enabled.
     */
    public $Status;

    /**
     * @var string Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
Default value: Loop.
     */
    public $PlayBackMode;

    /**
     * @var string Carousel playback address.
     */
    public $Url;

    /**
     * @var string Creation time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     */
    public $CreateTime;

    /**
     * @var string Update time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     */
    public $UpdateTime;

    /**
     * @var string Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playback of the playlist will stop after expiration. "9999-12-31t23:59:59+08:00" means never expire.
     */
    public $ExpiredTime;

    /**
     * @param string $RoundPlayId The playlist ID.
     * @param string $StartTime The playback start time, in [ISO 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     * @param array $RoundPlaylist The files on the list.
     * @param string $Name The playlist name (not longer than 64 characters).
     * @param string $Desc The playlist description (not longer than 256 characters).
     * @param string $Status Playback status, optional values:
<li>Enabled: startup status;</li>
<li>Disabled: stop status. </li>
Default value: Enabled.
     * @param string $PlayBackMode Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
Default value: Loop.
     * @param string $Url Carousel playback address.
     * @param string $CreateTime Creation time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     * @param string $UpdateTime Update time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     * @param string $ExpiredTime Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playback of the playlist will stop after expiration. "9999-12-31t23:59:59+08:00" means never expire.
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
