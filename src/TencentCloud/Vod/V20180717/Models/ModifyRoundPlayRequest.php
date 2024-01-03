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
 * ModifyRoundPlay request structure.
 *
 * @method string getRoundPlayId() Obtain The playlist ID, which is unique.
 * @method void setRoundPlayId(string $RoundPlayId) Set The playlist ID, which is unique.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getStartTime() Obtain The playback start time, in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setStartTime(string $StartTime) Set The playback start time, in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method array getRoundPlaylist() Obtain The files on the list.
<li>Array length limit: 100.</li>
 * @method void setRoundPlaylist(array $RoundPlaylist) Set The files on the list.
<li>Array length limit: 100.</li>
 * @method string getName() Obtain The playlist name (not longer than 64 characters).
 * @method void setName(string $Name) Set The playlist name (not longer than 64 characters).
 * @method string getDesc() Obtain The playlist description (not longer than 256 characters).
 * @method void setDesc(string $Desc) Set The playlist description (not longer than 256 characters).
 * @method string getStatus() Obtain Playback status, optional values: 
<li>Disabled: End playback, and the carousel task cannot be started again after the end. </li>

 * @method void setStatus(string $Status) Set Playback status, optional values: 
<li>Disabled: End playback, and the carousel task cannot be started again after the end. </li>

 * @method string getPlayBackMode() Obtain Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
 * @method void setPlayBackMode(string $PlayBackMode) Set Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
 */
class ModifyRoundPlayRequest extends AbstractModel
{
    /**
     * @var string The playlist ID, which is unique.
     */
    public $RoundPlayId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string The playback start time, in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $StartTime;

    /**
     * @var array The files on the list.
<li>Array length limit: 100.</li>
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
<li>Disabled: End playback, and the carousel task cannot be started again after the end. </li>

     */
    public $Status;

    /**
     * @var string Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
     */
    public $PlayBackMode;

    /**
     * @param string $RoundPlayId The playlist ID, which is unique.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $StartTime The playback start time, in [ISO 8601 date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param array $RoundPlaylist The files on the list.
<li>Array length limit: 100.</li>
     * @param string $Name The playlist name (not longer than 64 characters).
     * @param string $Desc The playlist description (not longer than 256 characters).
     * @param string $Status Playback status, optional values: 
<li>Disabled: End playback, and the carousel task cannot be started again after the end. </li>

     * @param string $PlayBackMode Play mode, optional values:
<li>Loop: Play the playlist in a loop;</li>
<li>Linear: Play once, stop playing after the playlist is played. </li>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
    }
}
