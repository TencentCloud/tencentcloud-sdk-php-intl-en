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
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getAudioVideoType() Obtain 
 * @method void setAudioVideoType(string $AudioVideoType) Set 
 * @method string getItemId() Obtain 
 * @method void setItemId(string $ItemId) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 */
class RoundPlayListItemInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $AudioVideoType;

    /**
     * @var string 
     */
    public $ItemId;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @param string $FileId 
     * @param string $AudioVideoType 
     * @param string $ItemId 
     * @param integer $Definition 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
