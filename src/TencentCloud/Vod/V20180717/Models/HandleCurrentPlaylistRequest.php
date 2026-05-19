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
 * HandleCurrentPlaylist request structure.
 *
 * @method integer getSubAppId() Obtain <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
 * @method void setSubAppId(integer $SubAppId) Set <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
 * @method string getRoundPlayId() Obtain The unique identifier of the playlist.
 * @method void setRoundPlayId(string $RoundPlayId) Set The unique identifier of the playlist.
 * @method string getOperation() Obtain Operation type. Valid values: <li>Insert: Insert a program into the current playlist. The inserted program remains valid in subsequent loop banner processes.</li> <li>InsertTemporary: Temporarily insert a program into the current playlist. Temporarily inserted programs are only effective during this loop banner process.</li><li>Delete: Delete a program from the playback list. Cannot delete currently playing programs.</li>
 * @method void setOperation(string $Operation) Set Operation type. Valid values: <li>Insert: Insert a program into the current playlist. The inserted program remains valid in subsequent loop banner processes.</li> <li>InsertTemporary: Temporarily insert a program into the current playlist. Temporarily inserted programs are only effective during this loop banner process.</li><li>Delete: Delete a program from the playback list. Cannot delete currently playing programs.</li>
 * @method string getItemId() Obtain Playlist program ID. <li>When Operation is Insert, this field is required, indicating the program list to be inserted is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If left blank, the program will be inserted at the latest insertion point. If this field is filled and SegmentIndex is also provided, the program will be inserted behind the fragment corresponding to SegmentIndex of the program specified by ItemId; otherwise, it will be inserted after the program.</li> <li>When Operation is Delete, this field is required, indicating the program to be deleted. Cannot delete currently playing programs.</li>
 * @method void setItemId(string $ItemId) Set Playlist program ID. <li>When Operation is Insert, this field is required, indicating the program list to be inserted is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If left blank, the program will be inserted at the latest insertion point. If this field is filled and SegmentIndex is also provided, the program will be inserted behind the fragment corresponding to SegmentIndex of the program specified by ItemId; otherwise, it will be inserted after the program.</li> <li>When Operation is Delete, this field is required, indicating the program to be deleted. Cannot delete currently playing programs.</li>
 * @method integer getSegmentIndex() Obtain Segment index of the M3U8 file shard. The first shard of the M3U8 file has a SegmentIndex of 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
 * @method void setSegmentIndex(integer $SegmentIndex) Set Segment index of the M3U8 file shard. The first shard of the M3U8 file has a SegmentIndex of 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
 * @method array getRoundPlaylist() Obtain Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
 */
class HandleCurrentPlaylistRequest extends AbstractModel
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
     * @var string Operation type. Valid values: <li>Insert: Insert a program into the current playlist. The inserted program remains valid in subsequent loop banner processes.</li> <li>InsertTemporary: Temporarily insert a program into the current playlist. Temporarily inserted programs are only effective during this loop banner process.</li><li>Delete: Delete a program from the playback list. Cannot delete currently playing programs.</li>
     */
    public $Operation;

    /**
     * @var string Playlist program ID. <li>When Operation is Insert, this field is required, indicating the program list to be inserted is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If left blank, the program will be inserted at the latest insertion point. If this field is filled and SegmentIndex is also provided, the program will be inserted behind the fragment corresponding to SegmentIndex of the program specified by ItemId; otherwise, it will be inserted after the program.</li> <li>When Operation is Delete, this field is required, indicating the program to be deleted. Cannot delete currently playing programs.</li>
     */
    public $ItemId;

    /**
     * @var integer Segment index of the M3U8 file shard. The first shard of the M3U8 file has a SegmentIndex of 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
     */
    public $SegmentIndex;

    /**
     * @var array Program list. required when operation is insert, inserttemporary, delete, indicating the list of programs to be operated on. the list length can be up to a maximum of 10.
     */
    public $RoundPlaylist;

    /**
     * @param integer $SubAppId <B>VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) id.</b>.
     * @param string $RoundPlayId The unique identifier of the playlist.
     * @param string $Operation Operation type. Valid values: <li>Insert: Insert a program into the current playlist. The inserted program remains valid in subsequent loop banner processes.</li> <li>InsertTemporary: Temporarily insert a program into the current playlist. Temporarily inserted programs are only effective during this loop banner process.</li><li>Delete: Delete a program from the playback list. Cannot delete currently playing programs.</li>
     * @param string $ItemId Playlist program ID. <li>When Operation is Insert, this field is required, indicating the program list to be inserted is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If left blank, the program will be inserted at the latest insertion point. If this field is filled and SegmentIndex is also provided, the program will be inserted behind the fragment corresponding to SegmentIndex of the program specified by ItemId; otherwise, it will be inserted after the program.</li> <li>When Operation is Delete, this field is required, indicating the program to be deleted. Cannot delete currently playing programs.</li>
     * @param integer $SegmentIndex Segment index of the M3U8 file shard. The first shard of the M3U8 file has a SegmentIndex of 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
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

        if (array_key_exists("SegmentIndex",$param) and $param["SegmentIndex"] !== null) {
            $this->SegmentIndex = $param["SegmentIndex"];
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
