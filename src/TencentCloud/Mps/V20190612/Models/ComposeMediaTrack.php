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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The track information of a video editing/compositing task.
 *
 * @method string getType() Obtain Track type. Valid values: <ul><li>Video: video track. It can consist of the following elements:</li><ul><li>Video elements</li><li>Image elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Audio: audio track. It can consist of the following elements:</li><ul><li>Audio elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Title: text track. It can consist of the following elements:</li><ul><li>Subtitle elements</li></ul></ul>
 * @method void setType(string $Type) Set Track type. Valid values: <ul><li>Video: video track. It can consist of the following elements:</li><ul><li>Video elements</li><li>Image elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Audio: audio track. It can consist of the following elements:</li><ul><li>Audio elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Title: text track. It can consist of the following elements:</li><ul><li>Subtitle elements</li></ul></ul>
 * @method array getItems() Obtain The elements of a track.
 * @method void setItems(array $Items) Set The elements of a track.
 */
class ComposeMediaTrack extends AbstractModel
{
    /**
     * @var string Track type. Valid values: <ul><li>Video: video track. It can consist of the following elements:</li><ul><li>Video elements</li><li>Image elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Audio: audio track. It can consist of the following elements:</li><ul><li>Audio elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Title: text track. It can consist of the following elements:</li><ul><li>Subtitle elements</li></ul></ul>
     */
    public $Type;

    /**
     * @var array The elements of a track.
     */
    public $Items;

    /**
     * @param string $Type Track type. Valid values: <ul><li>Video: video track. It can consist of the following elements:</li><ul><li>Video elements</li><li>Image elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Audio: audio track. It can consist of the following elements:</li><ul><li>Audio elements</li><li>Transition elements</li><li>Empty elements</li></ul><li>Title: text track. It can consist of the following elements:</li><ul><li>Subtitle elements</li></ul></ul>
     * @param array $Items The elements of a track.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ComposeMediaItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
