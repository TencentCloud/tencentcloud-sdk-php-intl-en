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
 * 
 *
 * @method string getRoundPlayId() Obtain 
 * @method void setRoundPlayId(string $RoundPlayId) Set 
 * @method string getStartTime() Obtain 
 * @method void setStartTime(string $StartTime) Set 
 * @method array getRoundPlaylist() Obtain 
 * @method void setRoundPlaylist(array $RoundPlaylist) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDesc() Obtain 
 * @method void setDesc(string $Desc) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getPlayBackMode() Obtain 
 * @method void setPlayBackMode(string $PlayBackMode) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method string getExpiredTime() Obtain 
 * @method void setExpiredTime(string $ExpiredTime) Set 
 */
class RoundPlayInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $RoundPlayId;

    /**
     * @var string 
     */
    public $StartTime;

    /**
     * @var array 
     */
    public $RoundPlaylist;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Desc;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $PlayBackMode;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $ExpiredTime;

    /**
     * @param string $RoundPlayId 
     * @param string $StartTime 
     * @param array $RoundPlaylist 
     * @param string $Name 
     * @param string $Desc 
     * @param string $Status 
     * @param string $PlayBackMode 
     * @param string $Url 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param string $ExpiredTime 
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
