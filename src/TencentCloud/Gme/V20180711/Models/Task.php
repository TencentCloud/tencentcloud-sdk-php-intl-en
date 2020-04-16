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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speech detection task list
 *
 * @method string getDataId() Obtain Unique data ID
 * @method void setDataId(string $DataId) Set Unique data ID
 * @method string getUrl() Obtain URL-encoded data file URL, which is a pull address if the detected speech is a stream
 * @method void setUrl(string $Url) Set URL-encoded data file URL, which is a pull address if the detected speech is a stream
 * @method string getRoomId() Obtain GME voice chat room ID, which is entered during speech detection by GME voice chat
 * @method void setRoomId(string $RoomId) Set GME voice chat room ID, which is entered during speech detection by GME voice chat
 * @method string getOpenId() Obtain GME voice chat user ID, which is entered during speech detection by GME voice chat
 * @method void setOpenId(string $OpenId) Set GME voice chat user ID, which is entered during speech detection by GME voice chat
 */
class Task extends AbstractModel
{
    /**
     * @var string Unique data ID
     */
    public $DataId;

    /**
     * @var string URL-encoded data file URL, which is a pull address if the detected speech is a stream
     */
    public $Url;

    /**
     * @var string GME voice chat room ID, which is entered during speech detection by GME voice chat
     */
    public $RoomId;

    /**
     * @var string GME voice chat user ID, which is entered during speech detection by GME voice chat
     */
    public $OpenId;

    /**
     * @param string $DataId Unique data ID
     * @param string $Url URL-encoded data file URL, which is a pull address if the detected speech is a stream
     * @param string $RoomId GME voice chat room ID, which is entered during speech detection by GME voice chat
     * @param string $OpenId GME voice chat user ID, which is entered during speech detection by GME voice chat
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
