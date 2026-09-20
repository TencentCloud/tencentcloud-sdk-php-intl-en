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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method string getRoundPlayId() Obtain Carousel playlist unique identifier.
 * @method void setRoundPlayId(string $RoundPlayId) Set Carousel playlist unique identifier.
 * @method string getOperation() Obtain Operation type. Valid values: <li>Insert: insert a program into the current playback list. The inserted program remains valid in subsequent carousel processes.</li> <li>InsertTemporary: temporarily insert a program into the current playback list. Temporarily inserted programs are only effective during this carousel process.</li><li>Delete: delete a program from the playback list. Cannot delete currently playing programs.</li>
 * @method void setOperation(string $Operation) Set Operation type. Valid values: <li>Insert: insert a program into the current playback list. The inserted program remains valid in subsequent carousel processes.</li> <li>InsertTemporary: temporarily insert a program into the current playback list. Temporarily inserted programs are only effective during this carousel process.</li><li>Delete: delete a program from the playback list. Cannot delete currently playing programs.</li>
 * @method string getItemId() Obtain Playlist program ID. <li>When Operation is Insert, this field is required, indicating that the inserted program list is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If not filled in, the program is inserted at the latest insertion point. If this field is filled in and SegmentIndex is also filled in, the program is inserted behind the SegmentIndex fragment of the program corresponding to ItemId. Otherwise, it is inserted after this program.</li> <li>When Operation is Delete, this field is required, indicating deletion of this program. Currently playing programs cannot be deleted.</li>
 * @method void setItemId(string $ItemId) Set Playlist program ID. <li>When Operation is Insert, this field is required, indicating that the inserted program list is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If not filled in, the program is inserted at the latest insertion point. If this field is filled in and SegmentIndex is also filled in, the program is inserted behind the SegmentIndex fragment of the program corresponding to ItemId. Otherwise, it is inserted after this program.</li> <li>When Operation is Delete, this field is required, indicating deletion of this program. Currently playing programs cannot be deleted.</li>
 * @method integer getSegmentIndex() Obtain Index number of the M3U8 file segment. The SegmentIndex of the first segment in an M3U8 file is 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
 * @method void setSegmentIndex(integer $SegmentIndex) Set Index number of the M3U8 file segment. The SegmentIndex of the first segment in an M3U8 file is 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
 * @method array getRoundPlaylist() Obtain Program list. Required when Operation is Insert, InsertTemporary, or Delete. Indicates the program list to operate. The maximum list length is 10.
 * @method void setRoundPlaylist(array $RoundPlaylist) Set Program list. Required when Operation is Insert, InsertTemporary, or Delete. Indicates the program list to operate. The maximum list length is 10.
 */
class HandleCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Carousel playlist unique identifier.
     */
    public $RoundPlayId;

    /**
     * @var string Operation type. Valid values: <li>Insert: insert a program into the current playback list. The inserted program remains valid in subsequent carousel processes.</li> <li>InsertTemporary: temporarily insert a program into the current playback list. Temporarily inserted programs are only effective during this carousel process.</li><li>Delete: delete a program from the playback list. Cannot delete currently playing programs.</li>
     */
    public $Operation;

    /**
     * @var string Playlist program ID. <li>When Operation is Insert, this field is required, indicating that the inserted program list is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If not filled in, the program is inserted at the latest insertion point. If this field is filled in and SegmentIndex is also filled in, the program is inserted behind the SegmentIndex fragment of the program corresponding to ItemId. Otherwise, it is inserted after this program.</li> <li>When Operation is Delete, this field is required, indicating deletion of this program. Currently playing programs cannot be deleted.</li>
     */
    public $ItemId;

    /**
     * @var integer Index number of the M3U8 file segment. The SegmentIndex of the first segment in an M3U8 file is 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
     */
    public $SegmentIndex;

    /**
     * @var array Program list. Required when Operation is Insert, InsertTemporary, or Delete. Indicates the program list to operate. The maximum list length is 10.
     */
    public $RoundPlaylist;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     * @param string $RoundPlayId Carousel playlist unique identifier.
     * @param string $Operation Operation type. Valid values: <li>Insert: insert a program into the current playback list. The inserted program remains valid in subsequent carousel processes.</li> <li>InsertTemporary: temporarily insert a program into the current playback list. Temporarily inserted programs are only effective during this carousel process.</li><li>Delete: delete a program from the playback list. Cannot delete currently playing programs.</li>
     * @param string $ItemId Playlist program ID. <li>When Operation is Insert, this field is required, indicating that the inserted program list is located after this program.</li> <li>When Operation is InsertTemporary, this field is optional. If not filled in, the program is inserted at the latest insertion point. If this field is filled in and SegmentIndex is also filled in, the program is inserted behind the SegmentIndex fragment of the program corresponding to ItemId. Otherwise, it is inserted after this program.</li> <li>When Operation is Delete, this field is required, indicating deletion of this program. Currently playing programs cannot be deleted.</li>
     * @param integer $SegmentIndex Index number of the M3U8 file segment. The SegmentIndex of the first segment in an M3U8 file is 0. This parameter is valid when Operation is InsertTemporary and ItemId has a value.
     * @param array $RoundPlaylist Program list. Required when Operation is Insert, InsertTemporary, or Delete. Indicates the program list to operate. The maximum list length is 10.
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
