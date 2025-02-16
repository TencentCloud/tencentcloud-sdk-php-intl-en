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
 * HandleCurrentPlaylist request structure.
 *
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574) id.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574) id.</b>.
 * @method string getRoundPlayId() Obtain The unique identifier of the playlist.
 * @method void setRoundPlayId(string $RoundPlayId) Set The unique identifier of the playlist.
 * @method string getOperation() Obtain Operation type, available options:<li>insert: insert program into the current playlist.</li> <li>inserttemporary: temporarily insert program into the current playlist. can only be inserted after the currently playing program. temporarily inserted programs are only effective during this carousel process.</li><li>delete: delete program from the playlist. cannot delete currently playing programs.</li>.
 * @method void setOperation(string $Operation) Set Operation type, available options:<li>insert: insert program into the current playlist.</li> <li>inserttemporary: temporarily insert program into the current playlist. can only be inserted after the currently playing program. temporarily inserted programs are only effective during this carousel process.</li><li>delete: delete program from the playlist. cannot delete currently playing programs.</li>.
 * @method string getItemId() Obtain Playlist program id. required when operation is insert, indicating the program list will be inserted after this program. the insertion position must be after the currently playing program.
 * @method void setItemId(string $ItemId) Set Playlist program id. required when operation is insert, indicating the program list will be inserted after this program. the insertion position must be after the currently playing program.
 * @method array getRoundPlaylist() Obtain Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
 */
class HandleCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574) id.</b>.
     */
    public $SubAppId;

    /**
     * @var string The unique identifier of the playlist.
     */
    public $RoundPlayId;

    /**
     * @var string Operation type, available options:<li>insert: insert program into the current playlist.</li> <li>inserttemporary: temporarily insert program into the current playlist. can only be inserted after the currently playing program. temporarily inserted programs are only effective during this carousel process.</li><li>delete: delete program from the playlist. cannot delete currently playing programs.</li>.
     */
    public $Operation;

    /**
     * @var string Playlist program id. required when operation is insert, indicating the program list will be inserted after this program. the insertion position must be after the currently playing program.
     */
    public $ItemId;

    /**
     * @var array Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
     */
    public $RoundPlaylist;

    /**
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574) id.</b>.
     * @param string $RoundPlayId The unique identifier of the playlist.
     * @param string $Operation Operation type, available options:<li>insert: insert program into the current playlist.</li> <li>inserttemporary: temporarily insert program into the current playlist. can only be inserted after the currently playing program. temporarily inserted programs are only effective during this carousel process.</li><li>delete: delete program from the playlist. cannot delete currently playing programs.</li>.
     * @param string $ItemId Playlist program id. required when operation is insert, indicating the program list will be inserted after this program. the insertion position must be after the currently playing program.
     * @param array $RoundPlaylist Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("RoundPlaylist",$param) and $param["RoundPlaylist"] !== null) {
            $this->RoundPlaylist = [];
            foreach ($param["RoundPlaylist"] as $key => $value){
                $obj = new RoundPlayListItemInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaylist, $obj);
            }
        }
    }
}
