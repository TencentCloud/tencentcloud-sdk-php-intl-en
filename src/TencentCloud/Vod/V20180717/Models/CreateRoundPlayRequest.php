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
 * CreateRoundPlay request structure.
 *
 * @method string getStartTime() Obtain Playback start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Playback start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method array getRoundPlaylist() Obtain Carousel list.
<li>Array length limit: 100.</li>
 * @method void setRoundPlaylist(array $RoundPlaylist) Set Carousel list.
<li>Array length limit: 100.</li>
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method string getName() Obtain Carousel playbill name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Carousel playbill name. Length limit: 64 characters.
 * @method string getDesc() Obtain Carousel playlist description, with a length limit of 256 characters.
 * @method void setDesc(string $Desc) Set Carousel playlist description, with a length limit of 256 characters.
 * @method string getPlayBackMode() Obtain Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
 * @method void setPlayBackMode(string $PlayBackMode) Set Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
 * @method string getRoundPlayId() Obtain Unique identification ID of the playlist. Length limit: 64 characters. Only allow uppercase and lowercase letters (a-zA-Z), digits (0-9), and hyphens (-). If a playlist with the same RoundPlayId exists, the InvalidParameterValue.RoundPlayAlreadyExists error is returned. The default value is empty, which means it is assigned by the system.
 * @method void setRoundPlayId(string $RoundPlayId) Set Unique identification ID of the playlist. Length limit: 64 characters. Only allow uppercase and lowercase letters (a-zA-Z), digits (0-9), and hyphens (-). If a playlist with the same RoundPlayId exists, the InvalidParameterValue.RoundPlayAlreadyExists error is returned. The default value is empty, which means it is assigned by the system.
 * @method string getExpiredTime() Obtain Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). The playlist will stop playback after expiry. "9999-12-31T23:59:59+08:00" means never expire. Default value: 9999-12-31T23:59:59+08:00.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). The playlist will stop playback after expiry. "9999-12-31T23:59:59+08:00" means never expire. Default value: 9999-12-31T23:59:59+08:00.
 */
class CreateRoundPlayRequest extends AbstractModel
{
    /**
     * @var string Playback start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var array Carousel list.
<li>Array length limit: 100.</li>
     */
    public $RoundPlaylist;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var string Carousel playbill name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Carousel playlist description, with a length limit of 256 characters.
     */
    public $Desc;

    /**
     * @var string Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
     */
    public $PlayBackMode;

    /**
     * @var string Unique identification ID of the playlist. Length limit: 64 characters. Only allow uppercase and lowercase letters (a-zA-Z), digits (0-9), and hyphens (-). If a playlist with the same RoundPlayId exists, the InvalidParameterValue.RoundPlayAlreadyExists error is returned. The default value is empty, which means it is assigned by the system.
     */
    public $RoundPlayId;

    /**
     * @var string Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). The playlist will stop playback after expiry. "9999-12-31T23:59:59+08:00" means never expire. Default value: 9999-12-31T23:59:59+08:00.
     */
    public $ExpiredTime;

    /**
     * @param string $StartTime Playback start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param array $RoundPlaylist Carousel list.
<li>Array length limit: 100.</li>
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     * @param string $Name Carousel playbill name. Length limit: 64 characters.
     * @param string $Desc Carousel playlist description, with a length limit of 256 characters.
     * @param string $PlayBackMode Playback mode. Optional values:
<li>Loop: loop playback playlist;</li>
<li>Linear: single play, stop playback after playlist finishes.</li>
Default value: Loop.
     * @param string $RoundPlayId Unique identification ID of the playlist. Length limit: 64 characters. Only allow uppercase and lowercase letters (a-zA-Z), digits (0-9), and hyphens (-). If a playlist with the same RoundPlayId exists, the InvalidParameterValue.RoundPlayAlreadyExists error is returned. The default value is empty, which means it is assigned by the system.
     * @param string $ExpiredTime Expiration time in ISO 8601 format. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52). The playlist will stop playback after expiry. "9999-12-31T23:59:59+08:00" means never expire. Default value: 9999-12-31T23:59:59+08:00.
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
