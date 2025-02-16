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
 * CreateRoundPlay request structure.
 *
 * @method string getStartTime() Obtain The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method void setStartTime(string $StartTime) Set The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
 * @method array getRoundPlaylist() Obtain The program list.
<Li>Array length limit: 100.</li>.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set The program list.
<Li>Array length limit: 100.</li>.
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
 * @method string getName() Obtain The playlist name (not longer than 64 characters).
 * @method void setName(string $Name) Set The playlist name (not longer than 64 characters).
 * @method string getDesc() Obtain The playlist description, length limit: 256 characters.
 * @method void setDesc(string $Desc) Set The playlist description, length limit: 256 characters.
 * @method string getPlayBackMode() Obtain Play mode, optional values:.
<Li>Loop: loop the playlist;</li>.
<Li>Linear: single play, stop playback after the single play finishes.</li>.
Default value: loop.
 * @method void setPlayBackMode(string $PlayBackMode) Set Play mode, optional values:.
<Li>Loop: loop the playlist;</li>.
<Li>Linear: single play, stop playback after the single play finishes.</li>.
Default value: loop.
 * @method string getRoundPlayId() Obtain Playlist unique identifier id, with a length limit of 64 characters, only allowing uppercase and lowercase english letters (a-za-z), digits (0-9) and hyphens (-). if there is a playlist with the same roundplayid, return the error invalidparametervalue.roundplayalreadyexists. the default value is empty, which means it is system-assigned.
 * @method void setRoundPlayId(string $RoundPlayId) Set Playlist unique identifier id, with a length limit of 64 characters, only allowing uppercase and lowercase english letters (a-za-z), digits (0-9) and hyphens (-). if there is a playlist with the same roundplayid, return the error invalidparametervalue.roundplayalreadyexists. the default value is empty, which means it is system-assigned.
 * @method string getExpiredTime() Obtain Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playlist will stop playing after expiration. "9999-12-31t23:59:59+08:00" means it does not expire. default value: 9999-12-31t23:59:59+08:00.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playlist will stop playing after expiration. "9999-12-31t23:59:59+08:00" means it does not expire. default value: 9999-12-31t23:59:59+08:00.
 */
class CreateRoundPlayRequest extends AbstractModel
{
    /**
     * @var string The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     */
    public $StartTime;

    /**
     * @var array The program list.
<Li>Array length limit: 100.</li>.
     */
    public $RoundPlaylist;

    /**
     * @var integer <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     */
    public $SubAppId;

    /**
     * @var string The playlist name (not longer than 64 characters).
     */
    public $Name;

    /**
     * @var string The playlist description, length limit: 256 characters.
     */
    public $Desc;

    /**
     * @var string Play mode, optional values:.
<Li>Loop: loop the playlist;</li>.
<Li>Linear: single play, stop playback after the single play finishes.</li>.
Default value: loop.
     */
    public $PlayBackMode;

    /**
     * @var string Playlist unique identifier id, with a length limit of 64 characters, only allowing uppercase and lowercase english letters (a-za-z), digits (0-9) and hyphens (-). if there is a playlist with the same roundplayid, return the error invalidparametervalue.roundplayalreadyexists. the default value is empty, which means it is system-assigned.
     */
    public $RoundPlayId;

    /**
     * @var string Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playlist will stop playing after expiration. "9999-12-31t23:59:59+08:00" means it does not expire. default value: 9999-12-31t23:59:59+08:00.
     */
    public $ExpiredTime;

    /**
     * @param string $StartTime The playback start time, in [iso 8601 date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format).
     * @param array $RoundPlaylist The program list.
<Li>Array length limit: 100.</li>.
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id. starting from december 25, 2023, if you want to access resources in the vod application (whether it is the default application or a newly created application), you must enter the application id in this field.</b>.
     * @param string $Name The playlist name (not longer than 64 characters).
     * @param string $Desc The playlist description, length limit: 256 characters.
     * @param string $PlayBackMode Play mode, optional values:.
<Li>Loop: loop the playlist;</li>.
<Li>Linear: single play, stop playback after the single play finishes.</li>.
Default value: loop.
     * @param string $RoundPlayId Playlist unique identifier id, with a length limit of 64 characters, only allowing uppercase and lowercase english letters (a-za-z), digits (0-9) and hyphens (-). if there is a playlist with the same roundplayid, return the error invalidparametervalue.roundplayalreadyexists. the default value is empty, which means it is system-assigned.
     * @param string $ExpiredTime Expiration time, in iso 8601 format. for details, see [iso date format](https://www.tencentcloud.com/document/product/266/11732?has_map=2#iso-date-format). the playlist will stop playing after expiration. "9999-12-31t23:59:59+08:00" means it does not expire. default value: 9999-12-31t23:59:59+08:00.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("PlayBackMode",$param) and $param["PlayBackMode"] !== null) {
            $this->PlayBackMode = $param["PlayBackMode"];
        }

        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
