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
 * Voice detection task list
 *
 * @method string getDataId() Obtain Unique data ID
 * @method void setDataId(string $DataId) Set Unique data ID
 * @method string getUrl() Obtain URL-encoded data file URL, which is a pull address if the detected voice is a stream.
 * @method void setUrl(string $Url) Set URL-encoded data file URL, which is a pull address if the detected voice is a stream.
 * @method string getRoomId() Obtain GME Voice Chat room ID, which is entered during voice analysis by GME Voice Chat.
 * @method void setRoomId(string $RoomId) Set GME Voice Chat room ID, which is entered during voice analysis by GME Voice Chat.
 * @method string getOpenId() Obtain GME Voice Chat user ID, which is entered during voice analysis by GME Voice Chat.
 * @method void setOpenId(string $OpenId) Set GME Voice Chat user ID, which is entered during voice analysis by GME Voice Chat.
 */
class Task extends AbstractModel
{
    /**
     * @var string Unique data ID
     */
    public $DataId;

    /**
     * @var string URL-encoded data file URL, which is a pull address if the detected voice is a stream.
     */
    public $Url;

    /**
     * @var string GME Voice Chat room ID, which is entered during voice analysis by GME Voice Chat.
     */
    public $RoomId;

    /**
     * @var string GME Voice Chat user ID, which is entered during voice analysis by GME Voice Chat.
     */
    public $OpenId;

    /**
     * @param string $DataId Unique data ID
     * @param string $Url URL-encoded data file URL, which is a pull address if the detected voice is a stream.
     * @param string $RoomId GME Voice Chat room ID, which is entered during voice analysis by GME Voice Chat.
     * @param string $OpenId GME Voice Chat user ID, which is entered during voice analysis by GME Voice Chat.
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
