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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getRoundPlayId() Obtain 
 * @method void setRoundPlayId(string $RoundPlayId) Set 
 * @method string getOperation() Obtain 
 * @method void setOperation(string $Operation) Set 
 * @method string getItemId() Obtain 
 * @method void setItemId(string $ItemId) Set 
 * @method integer getSegmentIndex() Obtain 
 * @method void setSegmentIndex(integer $SegmentIndex) Set 
 * @method array getRoundPlaylist() Obtain 
 * @method void setRoundPlaylist(array $RoundPlaylist) Set 
 */
class HandleCurrentPlaylistRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $RoundPlayId;

    /**
     * @var string 
     */
    public $Operation;

    /**
     * @var string 
     */
    public $ItemId;

    /**
     * @var integer 
     */
    public $SegmentIndex;

    /**
     * @var array 
     */
    public $RoundPlaylist;

    /**
     * @param integer $SubAppId 
     * @param string $RoundPlayId 
     * @param string $Operation 
     * @param string $ItemId 
     * @param integer $SegmentIndex 
     * @param array $RoundPlaylist 
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
